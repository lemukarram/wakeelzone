<?php
/**
 * WakeelZone — Contact Form Handler
 * No database needed. Uses PHP mail().
 * Returns JSON for AJAX submissions.
 */
require_once 'config.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

$clean = fn(string $v): string => htmlspecialchars(strip_tags(trim($v)), ENT_QUOTES, 'UTF-8');

$name    = $clean($_POST['name']    ?? '');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone   = $clean($_POST['phone']   ?? '');
$subject = $clean($_POST['subject'] ?? '');
$service = $clean($_POST['service'] ?? '');
$message = $clean($_POST['message'] ?? '');

// Validate
$errors = [];
if (strlen($name) < 2)    $errors[] = 'Please enter a valid name.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email.';
if (strlen($phone) < 7)   $errors[] = 'Please enter a valid phone number.';
if (strlen($subject) < 3) $errors[] = 'Please enter a subject.';
if (strlen($message) < 10) $errors[] = 'Please describe your issue in more detail.';

if ($errors) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// Build email body
$ref  = 'WZ-' . date('YmdHis');
$body = "WakeelZone Contact Form Submission\n"
      . str_repeat('-', 48) . "\n\n"
      . "Name:       {$name}\n"
      . "Email:      {$email}\n"
      . "Phone:      {$phone}\n"
      . "Service:    " . ($service ?: 'Not specified') . "\n"
      . "Subject:    {$subject}\n"
      . "Ref:        {$ref}\n\n"
      . "Message:\n{$message}\n\n"
      . str_repeat('-', 48) . "\n"
      . "Received:   " . date('d M Y H:i:s') . " UTC\n"
      . "IP:         " . ($_SERVER['REMOTE_ADDR'] ?? 'n/a') . "\n";

$headers = implode("\r\n", [
    'From: WakeelZone <no-reply@wakeelzone.com>',
    "Reply-To: {$name} <{$email}>",
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . PHP_VERSION,
]);

$subj = '=?UTF-8?B?' . base64_encode("[WakeelZone] {$subject}") . '?=';
$sent = @mail(CONTACT_EMAIL, $subj, $body, $headers);

// Auto-reply
if ($sent) {
    $ar_body = "Dear {$name},\n\n"
             . "Thank you for contacting WakeelZone.\n\n"
             . "We have received your inquiry and will respond within 2 hours.\n\n"
             . "For immediate legal help, call our 24/7 helpline:\n"
             . HELPLINE_NUMBER . "\n\n"
             . "Reference: {$ref}\n\n"
             . "WakeelZone Team\n"
             . SITE_URL . "\n";
    $ar_subj = '=?UTF-8?B?' . base64_encode('Your WakeelZone inquiry has been received') . '?=';
    $ar_hdrs = implode("\r\n", [
        'From: WakeelZone <' . CONTACT_EMAIL . '>',
        'Reply-To: ' . CONTACT_EMAIL,
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
    ]);
    @mail($email, $ar_subj, $ar_body, $ar_hdrs);
}

echo json_encode($sent
    ? ['success' => true,  'message' => 'Message sent! We\'ll be in touch within 2 hours. For urgent help call ' . HELPLINE_NUMBER . '.']
    : ['success' => false, 'message' => 'Could not send message. Please call ' . HELPLINE_NUMBER . ' directly.']
);
