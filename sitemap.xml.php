<?php
/**
 * WakeelZone — XML Sitemap Generator
 * Outputs a valid sitemap.xml — link to this from .htaccess or rename to sitemap.php
 * and configure cPanel to serve as sitemap.xml via rewrite
 */
header('Content-Type: application/xml; charset=utf-8');
require_once 'config.php';
require_once 'includes/data.php';

$base = rtrim(SITE_URL, '/');
$today = date('Y-m-d');

$urls = [];

// Core pages
$core_pages = [
    ['loc' => '',                           'priority' => '1.0',  'changefreq' => 'weekly'],
    ['loc' => '/about.php',                 'priority' => '0.8',  'changefreq' => 'monthly'],
    ['loc' => '/services.php',              'priority' => '0.9',  'changefreq' => 'weekly'],
    ['loc' => '/how-we-work.php',           'priority' => '0.7',  'changefreq' => 'monthly'],
    ['loc' => '/all-lawyers.php',           'priority' => '0.9',  'changefreq' => 'weekly'],
    ['loc' => '/high-court-lawyers.php',    'priority' => '0.9',  'changefreq' => 'weekly'],
    ['loc' => '/supreme-court-lawyers.php', 'priority' => '0.9',  'changefreq' => 'weekly'],
    ['loc' => '/female-lawyers.php',        'priority' => '0.8',  'changefreq' => 'weekly'],
    ['loc' => '/special-leave-petition.php','priority' => '0.8',  'changefreq' => 'monthly'],
    ['loc' => '/child-protection-lawyer.php','priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/blog.php',                  'priority' => '0.7',  'changefreq' => 'weekly'],
    ['loc' => '/faq.php',                   'priority' => '0.7',  'changefreq' => 'monthly'],
    ['loc' => '/contact.php',               'priority' => '0.6',  'changefreq' => 'monthly'],
    ['loc' => '/lawyer-registration.php',   'priority' => '0.8',  'changefreq' => 'monthly'],
    ['loc' => '/privacy-policy.php',        'priority' => '0.3',  'changefreq' => 'yearly'],
    ['loc' => '/terms.php',                 'priority' => '0.3',  'changefreq' => 'yearly'],
    ['loc' => '/lawyer-terms.php',          'priority' => '0.3',  'changefreq' => 'yearly'],
    ['loc' => '/sitemap.php',               'priority' => '0.3',  'changefreq' => 'monthly'],
];

foreach ($core_pages as $page) {
    $urls[] = [
        'loc'        => $base . $page['loc'],
        'lastmod'    => $today,
        'changefreq' => $page['changefreq'],
        'priority'   => $page['priority'],
    ];
}

// Service pages
foreach ($services as $s) {
    $urls[] = [
        'loc'        => $base . '/service.php?slug=' . urlencode($s['slug']),
        'lastmod'    => $today,
        'changefreq' => 'monthly',
        'priority'   => '0.8',
    ];
}

// Blog posts
$blog_slugs = [
    'how-to-register-fir-pakistan',
    'khula-vs-talaq-pakistan',
    'property-title-verification-pakistan',
    'peca-2016-pakistan-cyber-crime-guide',
    'secp-company-registration-pakistan',
    'overseas-pakistani-property-guide',
];
foreach ($blog_slugs as $slug) {
    $urls[] = [
        'loc'        => $base . '/blog-post.php?slug=' . urlencode($slug),
        'lastmod'    => $today,
        'changefreq' => 'monthly',
        'priority'   => '0.6',
    ];
}

// City pages
$city_slugs = ['karachi','lahore','islamabad','rawalpindi','peshawar','quetta','faisalabad','multan'];
foreach ($city_slugs as $slug) {
    $urls[] = [
        'loc'        => $base . '/advocate-lawyer-' . $slug . '.php',
        'lastmod'    => $today,
        'changefreq' => 'weekly',
        'priority'   => '0.85',
    ];
}

// High Court city pages
$hc_slugs = ['lahore','sindh','islamabad','peshawar','balochistan'];
foreach ($hc_slugs as $slug) {
    $urls[] = [
        'loc'        => $base . '/high-court-lawyer-' . $slug . '.php',
        'lastmod'    => $today,
        'changefreq' => 'weekly',
        'priority'   => '0.85',
    ];
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($urls as $url) {
    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($url['loc']) . "</loc>\n";
    echo "    <lastmod>{$url['lastmod']}</lastmod>\n";
    echo "    <changefreq>{$url['changefreq']}</changefreq>\n";
    echo "    <priority>{$url['priority']}</priority>\n";
    echo "  </url>\n";
}

echo '</urlset>';
?>
