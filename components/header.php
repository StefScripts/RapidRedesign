<?php
// Defaults for SEO if page doesn't define them
if (!isset($pageTitle)) { $pageTitle = "Rapid Redesign | 7–14 Day Website Upgrades"; }
if (!isset($pageDescription)) {
  $pageDescription = "We upgrade outdated websites into fast, modern, SEO-safe lead machines in just 7–14 days. Keep your content, improve your design, and pay $0 until launch.";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Basic Meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="robots" content="index, follow">
  <meta name="theme-color" content="#2e73ff">

  <!-- Open Graph / Social -->
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://rapidredesign.co<?php echo $_SERVER['REQUEST_URI']; ?>">
  <meta property="og:image" content="https://rapidredesign.co/images/og-image.jpg">
  <meta property="og:site_name" content="Rapid Redesign">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="twitter:image" content="https://rapidredesign.co/images/og-image.jpg">

  <title><?php echo htmlspecialchars($pageTitle); ?></title>

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <!-- Fonts (Inter) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="/css/global.css">
  <link rel="stylesheet" href="/css/components.css">
  <link rel="stylesheet" href="/css/pages.css">

  <!-- Analytics placeholder -->
  <!-- <script defer src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXX-X"></script> -->
  <!-- <script> ... </script> -->
</head>

<body>
  <?php include(__DIR__ . '/navigation.php'); ?>
  <main id="main" tabindex="-1">
