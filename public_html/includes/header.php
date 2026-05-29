<?php
/**
 * header.php — site chrome up to <body>; called by every public page.
 * Each page sets $page = ['title' => ..., 'description' => ..., ...] before include.
 */
require_once __DIR__ . '/schema-org.php';
require_once __DIR__ . '/analytics.php';
@track_pageview();

$title       = $page['title']       ?? brand() . ' — Premium Air Charter Africa & Beyond';
$description = $page['description'] ?? 'HabeshAir is a premium air charter brokerage coordinating VIP, cargo, humanitarian, and emergency flights across Africa, the Middle East, and beyond. Quotes within 60 minutes.';
$canonical   = $page['canonical']   ?? url($_SERVER['REQUEST_URI'] ?? '/');
$ogImage     = $page['og_image']    ?? url('/assets/images/og-default.jpg');
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<script>document.documentElement.classList.add('js');</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#0a1628">
<title><?= e($title) ?></title>
<meta name="description" content="<?= e($description) ?>">
<link rel="canonical" href="<?= e($canonical) ?>">

<meta property="og:type" content="website">
<meta property="og:title" content="<?= e($title) ?>">
<meta property="og:description" content="<?= e($description) ?>">
<meta property="og:url" content="<?= e($canonical) ?>">
<meta property="og:image" content="<?= e($ogImage) ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="<?= e(brand()) ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($title) ?>">
<meta name="twitter:description" content="<?= e($description) ?>">
<meta name="twitter:image" content="<?= e($ogImage) ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap">
<link rel="stylesheet" href="/assets/css/style.css?v=<?= e(@filemtime(__DIR__ . '/../assets/css/style.css') ?: 1) ?>">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32.png">
<link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
<link rel="alternate icon" href="/favicon.ico">

<?php render_schema_org(); ?>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header" id="top">
  <div class="container header-row">
    <a href="/" class="brand" aria-label="<?= e(brand()) ?> home">
      <span class="brand-mark" aria-hidden="true">
        <svg viewBox="0 0 32 32" width="36" height="36" fill="none">
          <circle cx="16" cy="16" r="11.5" stroke="currentColor" stroke-width=".9" opacity=".5"/>
          <path d="M16 4 Q17.7 14.3 28 16 Q17.7 17.7 16 28 Q14.3 17.7 4 16 Q14.3 14.3 16 4 Z" fill="currentColor"/>
          <circle cx="24.8" cy="7.2" r="1.7" fill="currentColor"/>
        </svg>
      </span>
      <span class="brand-name">Habesh<span class="brand-accent">Air</span></span>
    </a>

    <button class="nav-toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span></span><span></span><span></span>
    </button>

    <nav id="primary-nav" class="primary-nav" aria-label="Primary">
      <ul>
        <li><a href="/services.php"<?= active_nav('services') ?>>Services</a></li>
        <li><a href="/how-it-works.php"<?= active_nav('how') ?>>How it works</a></li>
        <li><a href="/about.php"<?= active_nav('about') ?>>About</a></li>
        <li><a href="/faq.php"<?= active_nav('faq') ?>>FAQ</a></li>
        <li><a href="/contact.php"<?= active_nav('contact') ?>>Contact</a></li>
      </ul>
      <a href="/request.php" class="btn btn-gold nav-cta">Request a Charter</a>
    </nav>
  </div>
</header>

<main id="main">
