<?php
// Determine current page for active nav state
$current_file = basename($_SERVER['PHP_SELF']);
$page_title   = isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME . ' — ' . SITE_TAGLINE;
$page_desc    = isset($pageDesc) ? $pageDesc : "Pakistan's premier anonymous legal consultation platform. Talk to verified lawyers 24/7 without revealing your identity.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- SEO -->
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta name="keywords" content="lawyer Pakistan, online legal consultation Pakistan, anonymous legal advice, wakeel online, legal help Pakistan">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo SITE_URL . '/' . $current_file; ?>">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:url"         content="<?php echo SITE_URL; ?>">
  <meta property="og:title"       content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta property="og:site_name"   content="<?php echo SITE_NAME; ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_desc); ?>">

  <!-- Favicon (inline SVG-based) -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='8' fill='%231B3A6B'/%3E%3Ctext x='50%25' y='55%25' dominant-baseline='middle' text-anchor='middle' font-size='18' fill='%23C9A84C' font-family='serif' font-weight='bold'%3EW%3C/text%3E%3C/svg%3E">

  <!-- Google Fonts — Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Phosphor Icons -->
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1" defer></script>

  <!-- Tailwind CSS Play CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      corePlugins: { preflight: false },
      theme: { extend: { fontFamily: { sans: ['Poppins', 'sans-serif'] } } }
    }
  </script>

  <!-- CSS Variables (theme control) -->
  <link rel="stylesheet" href="<?php echo ($current_file === 'index.php' || !isset($_SERVER['PATH_INFO'])) ? '' : ''; ?>assets/css/variables.css">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Preload hint -->
  <link rel="preload" href="assets/css/style.css" as="style">
</head>
<body>
