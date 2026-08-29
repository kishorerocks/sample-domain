<?php
// header.php - Reusable Header Component for KK LifeWise
require_once __DIR__ . '/functions.php';

// Set default page variables if not provided
if (!isset($page_title)) {
    $page_title = 'KK LifeWise - ఆలోచన మార్చు • జీవితం మార్చు';
}
if (!isset($page_description)) {
    $page_description = 'KK LifeWise - Complete Telugu Personal Growth, Motivation, Financial Wisdom, Career Skills, Inspiring Stories & Life Lessons Platform.';
}
if (!isset($active_page)) {
    $active_page = 'home';
}
$daily_quote = getDailyQuote($quotes);
?>
<!DOCTYPE html>
<html lang="te" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="KK LifeWise">
    <meta name="theme-color" content="#131313">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Noto+Sans+Telugu:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Material Symbols Outlined -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS (Lightweight Grid & Utilities) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-grid.min.css" rel="stylesheet">

    <!-- Tailwind CSS with custom theme -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "surface": "#131313",
              "surface-dim": "#131313",
              "surface-container-lowest": "#0e0e0e",
              "surface-container-low": "#1b1c1c",
              "surface-container": "#1f2020",
              "surface-container-high": "#2a2a2a",
              "surface-container-highest": "#353535",
              "on-surface": "#e4e2e1",
              "on-surface-variant": "#d0c5af",
              "outline": "#99907c",
              "primary": "#f2ca50",
              "primary-container": "#d4af37",
              "on-primary-container": "#3c2f00",
              "tertiary": "#ffc640",
              "background": "#131313",
              "on-background": "#e4e2e1"
            },
            fontFamily: {
              telugu: ["Noto Sans Telugu", "sans-serif"],
              sans: ["Inter", "Noto Sans Telugu", "sans-serif"]
            }
          }
        }
      }
    </script>

    <style>
        /* Base typography and smooth rendering */
        body {
            background-color: #131313;
            color: #e4e2e1;
            font-family: 'Noto Sans Telugu', 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        /* Glassmorphism & Accent Styles */
        .glass-panel {
            background: rgba(31, 32, 32, 0.7);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .gold-glow {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .gold-glow:hover {
            box-shadow: 0 0 25px rgba(212, 175, 55, 0.22);
            border-color: rgba(212, 175, 55, 0.45);
            transform: translateY(-3px);
        }

        .btn-gold {
            background: linear-gradient(135deg, #f2ca50 0%, #d4af37 100%);
            color: #1c1800;
            font-weight: 700;
            transition: all 0.25s ease;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }
        .btn-gold:hover {
            background: linear-gradient(135deg, #ffe088 0%, #e9c349 100%);
            transform: scale(1.03);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.45);
            color: #1c1800;
        }
        .btn-gold:active {
            transform: scale(0.97);
        }

        .btn-outline-gold {
            border: 1.5px solid #d4af37;
            color: #f2ca50;
            transition: all 0.25s ease;
            background: transparent;
        }
        .btn-outline-gold:hover {
            background: rgba(212, 175, 55, 0.15);
            border-color: #f2ca50;
            color: #ffe088;
            transform: translateY(-2px);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1;
        }

        /* Scrollbar styles */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #131313;
        }
        ::-webkit-scrollbar-thumb {
            background: #2a2a2a;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #d4af37;
        }

        /* Toast notification animation */
        #toast-box {
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), opacity 0.3s ease;
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-telugu min-h-screen pb-24 md:pb-0 flex flex-col">

<!-- Top App Bar (Sticky Header) -->
<header id="main-header" class="sticky top-0 z-40 bg-surface/90 backdrop-blur-md border-b border-white/10 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <!-- Left: Hamburger Toggle & Logo -->
        <div class="flex items-center gap-3">
            <button id="drawer-toggle" type="button" aria-label="Open Menu" class="p-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-2xl">menu</span>
            </button>

            <a href="<?= base_url('index.php') ?>" class="flex items-center gap-2 text-decoration-none group">
                <div class="w-8 h-8 rounded-lg bg-primary-container/20 border border-primary/40 flex items-center justify-center text-primary group-hover:scale-105 transition-transform shadow-[0_0_10px_rgba(212,175,55,0.2)]">
                    <span class="material-symbols-outlined text-xl">auto_awesome</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-xl sm:text-2xl font-bold tracking-tight text-primary font-sans">KK LifeWise</span>
                    <span class="text-[9px] text-on-surface-variant tracking-wider uppercase -mt-1 hidden sm:block">ఆలోచన మార్చు • జీవితం మార్చు</span>
                </div>
            </a>
        </div>

        <!-- Desktop Quick Links (Top Level) -->
        <div class="hidden lg:flex items-center space-x-1 font-sans text-sm font-medium">
            <a href="<?= base_url('index.php') ?>" class="px-3 py-2 rounded-lg transition-colors <?= ($active_page === 'home') ? 'bg-primary-container/15 text-primary font-bold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high' ?>">హోమ్ (Home)</a>
            <a href="<?= base_url('motivation.php') ?>" class="px-3 py-2 rounded-lg transition-colors <?= ($active_page === 'motivation') ? 'bg-primary-container/15 text-primary font-bold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high' ?>">Motivation</a>
            <a href="<?= base_url('money.php') ?>" class="px-3 py-2 rounded-lg transition-colors <?= ($active_page === 'money') ? 'bg-primary-container/15 text-primary font-bold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high' ?>">Money</a>
            <a href="<?= base_url('career.php') ?>" class="px-3 py-2 rounded-lg transition-colors <?= ($active_page === 'career') ? 'bg-primary-container/15 text-primary font-bold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high' ?>">Career</a>
            <a href="<?= base_url('stories.php') ?>" class="px-3 py-2 rounded-lg transition-colors <?= ($active_page === 'stories') ? 'bg-primary-container/15 text-primary font-bold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high' ?>">Stories</a>
            <a href="<?= base_url('books.php') ?>" class="px-3 py-2 rounded-lg transition-colors <?= ($active_page === 'books') ? 'bg-primary-container/15 text-primary font-bold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high' ?>">Books</a>
            <a href="<?= base_url('videos.php') ?>" class="px-3 py-2 rounded-lg transition-colors <?= ($active_page === 'videos') ? 'bg-primary-container/15 text-primary font-bold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high' ?>">Videos</a>
            <a href="<?= base_url('pdfs.php') ?>" class="px-3 py-2 rounded-lg transition-colors <?= ($active_page === 'pdfs') ? 'bg-primary-container/15 text-primary font-bold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high' ?>">Free PDFs</a>
            <a href="<?= base_url('about.php') ?>" class="px-3 py-2 rounded-lg transition-colors <?= ($active_page === 'about') ? 'bg-primary-container/15 text-primary font-bold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high' ?>">About</a>
            <a href="<?= base_url('contact.php') ?>" class="px-3 py-2 rounded-lg transition-colors <?= ($active_page === 'contact') ? 'bg-primary-container/15 text-primary font-bold' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high' ?>">Contact</a>
        </div>

        <!-- Right: Actions (Search, Daily Quote, YouTube, Instagram) -->
        <div class="flex items-center gap-1.5 sm:gap-2">
            <!-- Search Button -->
            <button id="search-open-btn" type="button" aria-label="Search" class="p-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-all">
                <span class="material-symbols-outlined text-2xl">search</span>
            </button>

            <!-- Daily Quote Modal Trigger -->
            <button id="daily-quote-btn" type="button" title="నేటి ఆలోచన (Daily Quote)" class="p-2 rounded-lg text-tertiary hover:text-primary hover:bg-surface-container-high transition-all flex items-center gap-1">
                <span class="material-symbols-outlined text-2xl">wb_sunny</span>
                <span class="hidden xl:inline text-xs font-semibold text-primary">నేటి ఆలోచన</span>
            </button>

            <!-- YouTube CTA Link -->
            <a href="https://www.youtube.com/@KKMotivationTelugu" target="_blank" rel="noopener noreferrer" title="YouTube Channel @KKMotivationTelugu" class="p-2 rounded-lg text-red-400 hover:text-red-300 hover:bg-red-500/10 transition-all flex items-center gap-1">
                <span class="material-symbols-outlined text-2xl">smart_display</span>
            </a>

            <!-- Instagram CTA Link -->
            <a href="https://www.instagram.com/kkmotivationhub/" target="_blank" rel="noopener noreferrer" title="Instagram @kkmotivationhub" class="p-2 rounded-lg text-pink-400 hover:text-pink-300 hover:bg-pink-500/10 transition-all flex items-center gap-1">
                <span class="material-symbols-outlined text-2xl">photo_camera</span>
            </a>

            <!-- Assessment Quick Button (Desktop) -->
            <a href="<?= base_url('assessment.php') ?>" class="hidden md:inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg btn-outline-gold text-xs font-bold font-sans">
                <span class="material-symbols-outlined text-base">psychology</span>
                జీవన విశ్లేషణ
            </a>
        </div>
    </div>
</header>

<?php require_once __DIR__ . '/navbar.php'; ?>
