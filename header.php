<?php
// header.php - Main Website Header & Navigation Component
require_once __DIR__ . '/functions.php';

$page_title = isset($custom_page_title) ? $custom_page_title . ' | ' . SITE_NAME : SITE_NAME . ' - ' . SITE_TAGLINE;
$page_desc = isset($custom_page_desc) ? $custom_page_desc : SITE_DESCRIPTION;
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="te" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta name="keywords" content="Telugu Motivation, KK LifeWise, KK Motivation Telugu, Personal Development Telugu, Book Summaries Telugu, Telugu Success Stories, Money Tips Telugu">
  <meta name="author" content="KK LifeWise">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo SITE_URL; ?>">
  <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/general/og-banner.jpg">

  <!-- Google Fonts: Plus Jakarta Sans + Noto Sans Telugu + Suranna -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Telugu:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Suranna&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap Icons 1.11.3 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Custom Core Design System & Responsive Stylesheets -->
  <link rel="stylesheet" href="/style.css?v=2.0">
  <link rel="stylesheet" href="/responsive.css?v=2.0">
</head>
<body class="d-flex flex-column h-100 font-telugu">

  <!-- Top Announcement Bar -->
  <div class="bg-dark text-white py-1 px-3 border-bottom border-stone-800" style="font-size: 0.8rem;">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center gap-2">
        <span class="badge bg-warning text-dark fw-bold px-2 py-0.5 rounded-pill">తాజా అప్‌డేట్</span>
        <span class="d-none d-md-inline text-stone-300">శ్రీకృష్ణుని 6 విజయ రహస్యాలు వీడియో ఇప్పుడు అందుబాటులో ఉంది!</span>
        <span class="d-inline d-md-none text-stone-300">శ్రీకృష్ణుని విజయ రహస్యాలు</span>
      </div>
      <div class="d-flex align-items-center gap-3">
        <a href="<?php echo YOUTUBE_CHANNEL_URL; ?>" target="_blank" rel="noopener" class="text-stone-300 text-decoration-none hover-warning d-flex align-items-center gap-1">
          <i class="bi bi-youtube text-danger"></i> <span class="d-none d-sm-inline">500K+ సబ్స్క్రైబర్స్</span>
        </a>
        <a href="<?php echo INSTAGRAM_PROFILE_URL; ?>" target="_blank" rel="noopener" class="text-stone-300 text-decoration-none hover-warning d-flex align-items-center gap-1">
          <i class="bi bi-instagram text-warning"></i> <span class="d-none d-sm-inline">Instagram</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Primary Site Header & Navigation Bar -->
  <?php include __DIR__ . '/navbar.php'; ?>

  <!-- Main Content Wrapper -->
  <main class="flex-shrink-0">
