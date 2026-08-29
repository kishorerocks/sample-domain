<?php
// navbar.php - Navigation Drawer, Mobile Bottom Bar & Global Modals
?>

<!-- ================= Navigation Drawer (Mobile Offcanvas) ================= -->
<div id="drawer-backdrop" class="fixed inset-0 bg-black/70 backdrop-blur-sm z-50 hidden opacity-0 transition-opacity duration-300"></div>

<aside id="side-drawer" class="fixed top-0 left-0 h-full w-80 max-w-[85vw] bg-surface-container border-r border-white/10 shadow-2xl z-50 -translate-x-full transition-transform duration-300 ease-in-out flex flex-col overflow-y-auto">
    <!-- Drawer Header -->
    <div class="p-5 border-b border-white/10 flex items-center justify-between bg-surface-container-high/60">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 rounded-lg bg-primary-container/20 border border-primary/40 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined text-lg">auto_awesome</span>
            </div>
            <div>
                <h2 class="text-lg font-bold text-primary font-sans leading-tight">KK LifeWise</h2>
                <p class="text-[10px] text-on-surface-variant">ఆలోచన మార్చు • జీవితం మార్చు</p>
            </div>
        </div>
        <button id="drawer-close-btn" type="button" aria-label="Close Menu" class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-highest transition-colors">
            <span class="material-symbols-outlined text-2xl">close</span>
        </button>
    </div>

    <!-- Drawer Navigation Links -->
    <div class="p-4 space-y-1.5 flex-1">
        <div class="px-3 py-1.5 text-[11px] font-bold text-on-surface-variant uppercase tracking-wider font-sans">
            ముఖ్య విభాగాలు (Navigation)
        </div>

        <a href="<?= base_url('index.php') ?>" class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl transition-all <?= ($active_page === 'home') ? 'bg-primary-container text-on-primary-container font-bold shadow-md' : 'text-on-surface hover:bg-surface-container-high hover:text-primary' ?>">
            <span class="material-symbols-outlined text-xl">home</span>
            <span class="text-sm font-medium font-sans">Home (హోమ్)</span>
        </a>

        <a href="<?= base_url('motivation.php') ?>" class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl transition-all <?= ($active_page === 'motivation') ? 'bg-primary-container text-on-primary-container font-bold shadow-md' : 'text-on-surface hover:bg-surface-container-high hover:text-primary' ?>">
            <span class="material-symbols-outlined text-xl text-amber-400">bolt</span>
            <span class="text-sm font-medium font-sans">Motivation (ప్రేరణ)</span>
        </a>

        <a href="<?= base_url('money.php') ?>" class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl transition-all <?= ($active_page === 'money') ? 'bg-primary-container text-on-primary-container font-bold shadow-md' : 'text-on-surface hover:bg-surface-container-high hover:text-primary' ?>">
            <span class="material-symbols-outlined text-xl text-emerald-400">payments</span>
            <span class="text-sm font-medium font-sans">Money (డబ్బు & సంపద)</span>
        </a>

        <a href="<?= base_url('career.php') ?>" class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl transition-all <?= ($active_page === 'career') ? 'bg-primary-container text-on-primary-container font-bold shadow-md' : 'text-on-surface hover:bg-surface-container-high hover:text-primary' ?>">
            <span class="material-symbols-outlined text-xl text-blue-400">work</span>
            <span class="text-sm font-medium font-sans">Career (కెరీర్ & స్కిల్స్)</span>
        </a>

        <a href="<?= base_url('stories.php') ?>" class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl transition-all <?= ($active_page === 'stories') ? 'bg-primary-container text-on-primary-container font-bold shadow-md' : 'text-on-surface hover:bg-surface-container-high hover:text-primary' ?>">
            <span class="material-symbols-outlined text-xl text-yellow-400">auto_stories</span>
            <span class="text-sm font-medium font-sans">Stories (స్ఫూర్తి కథలు)</span>
        </a>

        <a href="<?= base_url('books.php') ?>" class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl transition-all <?= ($active_page === 'books') ? 'bg-primary-container text-on-primary-container font-bold shadow-md' : 'text-on-surface hover:bg-surface-container-high hover:text-primary' ?>">
            <span class="material-symbols-outlined text-xl text-indigo-400">menu_book</span>
            <span class="text-sm font-medium font-sans">Books (పుస్తక సంగ్రహాలు)</span>
        </a>

        <a href="<?= base_url('videos.php') ?>" class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl transition-all <?= ($active_page === 'videos') ? 'bg-primary-container text-on-primary-container font-bold shadow-md' : 'text-on-surface hover:bg-surface-container-high hover:text-primary' ?>">
            <span class="material-symbols-outlined text-xl text-red-400">play_circle</span>
            <span class="text-sm font-medium font-sans">Videos (వీడియోలు)</span>
        </a>

        <a href="<?= base_url('pdfs.php') ?>" class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl transition-all <?= ($active_page === 'pdfs') ? 'bg-primary-container text-on-primary-container font-bold shadow-md' : 'text-on-surface hover:bg-surface-container-high hover:text-primary' ?>">
            <span class="material-symbols-outlined text-xl text-purple-400">picture_as_pdf</span>
            <span class="text-sm font-medium font-sans">Free PDFs (ఉచిత ఈ-బుక్స్)</span>
        </a>

        <div class="pt-2 border-t border-white/5 my-2"></div>
        <div class="px-3 py-1.5 text-[11px] font-bold text-on-surface-variant uppercase tracking-wider font-sans">
            వ్యక్తిగత విశ్లేషణ & సమాచారం
        </div>

        <a href="<?= base_url('assessment.php') ?>" class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl transition-all <?= ($active_page === 'assessment') ? 'bg-primary-container text-on-primary-container font-bold shadow-md' : 'text-on-surface hover:bg-surface-container-high hover:text-primary' ?>">
            <span class="material-symbols-outlined text-xl text-teal-400">psychology</span>
            <span class="text-sm font-medium font-sans">జీవన విశ్లేషణ (Assessment)</span>
        </a>

        <a href="<?= base_url('about.php') ?>" class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl transition-all <?= ($active_page === 'about') ? 'bg-primary-container text-on-primary-container font-bold shadow-md' : 'text-on-surface hover:bg-surface-container-high hover:text-primary' ?>">
            <span class="material-symbols-outlined text-xl">info</span>
            <span class="text-sm font-medium font-sans">About Us (మా గురించి)</span>
        </a>

        <a href="<?= base_url('contact.php') ?>" class="flex items-center gap-3.5 px-3 py-2.5 rounded-xl transition-all <?= ($active_page === 'contact') ? 'bg-primary-container text-on-primary-container font-bold shadow-md' : 'text-on-surface hover:bg-surface-container-high hover:text-primary' ?>">
            <span class="material-symbols-outlined text-xl">mail</span>
            <span class="text-sm font-medium font-sans">Contact Us (సంప్రదించండి)</span>
        </a>
    </div>

    <!-- Drawer Footer Social Links -->
    <div class="p-4 bg-surface-container-lowest border-t border-white/10">
        <div class="text-xs text-on-surface-variant mb-3 font-semibold text-center">Follow KK LifeWise</div>
        <div class="grid grid-cols-2 gap-2">
            <a href="https://www.youtube.com/@KKMotivationTelugu" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 p-2 rounded-lg bg-red-600/10 border border-red-500/20 text-red-400 hover:bg-red-600/20 text-xs font-bold transition-all">
                <span class="material-symbols-outlined text-base">smart_display</span>
                YouTube
            </a>
            <a href="https://www.instagram.com/kkmotivationhub/" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 p-2 rounded-lg bg-pink-600/10 border border-pink-500/20 text-pink-400 hover:bg-pink-600/20 text-xs font-bold transition-all">
                <span class="material-symbols-outlined text-base">photo_camera</span>
                Instagram
            </a>
        </div>
    </div>
</aside>

<!-- ================= Mobile Bottom Navigation Bar ================= -->
<nav id="bottom-navbar" class="fixed bottom-0 left-0 w-full z-40 bg-surface-container-low/95 backdrop-blur-lg border-t border-white/10 shadow-[0_-4px_20px_rgba(0,0,0,0.5)] flex justify-around items-center h-16 px-2 md:hidden">
    <a href="<?= base_url('index.php') ?>" class="flex flex-col items-center justify-center flex-1 py-1 <?= ($active_page === 'home') ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary' ?> transition-transform active:scale-90">
        <span class="material-symbols-outlined text-2xl <?= ($active_page === 'home') ? 'fill' : '' ?>">home</span>
        <span class="text-[10px] mt-0.5 font-sans tracking-wide">Home</span>
    </a>

    <a href="<?= base_url('videos.php') ?>" class="flex flex-col items-center justify-center flex-1 py-1 <?= ($active_page === 'videos') ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary' ?> transition-transform active:scale-90">
        <span class="material-symbols-outlined text-2xl <?= ($active_page === 'videos') ? 'fill' : '' ?>">smart_display</span>
        <span class="text-[10px] mt-0.5 font-sans tracking-wide">Videos</span>
    </a>

    <a href="<?= base_url('books.php') ?>" class="flex flex-col items-center justify-center flex-1 py-1 <?= ($active_page === 'books') ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary' ?> transition-transform active:scale-90">
        <span class="material-symbols-outlined text-2xl <?= ($active_page === 'books') ? 'fill' : '' ?>">library_books</span>
        <span class="text-[10px] mt-0.5 font-sans tracking-wide">Books</span>
    </a>

    <a href="<?= base_url('stories.php') ?>" class="flex flex-col items-center justify-center flex-1 py-1 <?= ($active_page === 'stories') ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary' ?> transition-transform active:scale-90">
        <span class="material-symbols-outlined text-2xl <?= ($active_page === 'stories') ? 'fill' : '' ?>">history_edu</span>
        <span class="text-[10px] mt-0.5 font-sans tracking-wide">Stories</span>
    </a>

    <a href="<?= base_url('assessment.php') ?>" class="flex flex-col items-center justify-center flex-1 py-1 <?= ($active_page === 'assessment') ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary' ?> transition-transform active:scale-90">
        <span class="material-symbols-outlined text-2xl <?= ($active_page === 'assessment') ? 'fill' : '' ?>">psychology</span>
        <span class="text-[10px] mt-0.5 font-sans tracking-wide">Growth</span>
    </a>
</nav>

<!-- ================= Global Search Modal ================= -->
<div id="search-modal" class="fixed inset-0 bg-black/80 backdrop-blur-md z-50 hidden flex items-start justify-center pt-16 px-4">
    <div class="bg-surface-container border border-white/15 w-full max-w-2xl rounded-2xl shadow-2xl overflow-hidden animate-in fade-in zoom-in duration-200">
        <!-- Search Input Header -->
        <div class="p-4 border-b border-white/10 flex items-center gap-3 bg-surface-container-high/60">
            <span class="material-symbols-outlined text-2xl text-primary">search</span>
            <input type="text" id="global-search-input" placeholder="వ్యాసాలు, వీడియోలు, పుస్తకాలు, కథలు వెతకండి..." class="w-full bg-transparent border-none text-on-surface text-base focus:ring-0 focus:outline-none placeholder:text-on-surface-variant">
            <button id="search-close-btn" type="button" class="p-1 rounded-lg text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
        </div>

        <!-- Quick Filter Tags -->
        <div class="px-4 py-2 bg-surface-container-lowest flex items-center gap-2 overflow-x-auto text-xs">
            <span class="text-on-surface-variant whitespace-nowrap">ఫిల్టర్:</span>
            <button class="search-filter-pill px-2.5 py-1 rounded-full bg-primary-container/20 text-primary border border-primary/30" data-filter="all">అన్నీ (All)</button>
            <button class="search-filter-pill px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface-variant hover:text-primary" data-filter="Article">Articles</button>
            <button class="search-filter-pill px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface-variant hover:text-primary" data-filter="Video">Videos</button>
            <button class="search-filter-pill px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface-variant hover:text-primary" data-filter="Book">Books</button>
            <button class="search-filter-pill px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface-variant hover:text-primary" data-filter="Story">Stories</button>
            <button class="search-filter-pill px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface-variant hover:text-primary" data-filter="PDF">Free PDFs</button>
        </div>

        <!-- Search Results List -->
        <div id="search-results-box" class="p-4 max-h-[60vh] overflow-y-auto space-y-2">
            <p class="text-sm text-center text-on-surface-variant py-8">
                శోధించడానికి కీవర్డ్ నమోదు చేయండి (ఉదా: శ్రీకృష్ణుడు, డబ్బు, పుస్తకాలు, లక్ష్యం)...
            </p>
        </div>
    </div>
</div>

<!-- ================= Daily Wisdom / Quote Modal ================= -->
<div id="quote-modal" class="fixed inset-0 bg-black/80 backdrop-blur-md z-50 hidden flex items-center justify-center p-4">
    <div class="bg-surface-container border border-primary/30 w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden relative p-6 sm:p-8">
        <button id="quote-modal-close" type="button" class="absolute top-4 right-4 text-on-surface-variant hover:text-primary transition-colors">
            <span class="material-symbols-outlined text-2xl">close</span>
        </button>

        <div class="flex items-center gap-2 text-tertiary mb-4">
            <span class="material-symbols-outlined text-2xl">wb_sunny</span>
            <h3 class="text-sm font-bold tracking-widest uppercase font-sans">నేటి ఆలోచన • Daily Wisdom</h3>
        </div>

        <div class="relative mb-6">
            <span class="text-6xl font-serif text-primary/10 absolute -top-4 -left-2 select-none">“</span>
            <p id="modal-quote-text" class="text-lg sm:text-xl text-on-surface font-medium leading-relaxed relative z-10 pl-4 border-l-2 border-primary">
                <?= htmlspecialchars($daily_quote['quote']) ?>
            </p>
        </div>

        <div class="bg-surface-container-high/60 rounded-xl p-4 mb-6 border border-white/5">
            <div class="text-[11px] font-bold tracking-widest text-primary uppercase font-sans mb-1">AFFIRMATION (ఆత్మోపదేశం)</div>
            <p id="modal-affirmation-text" class="text-sm text-on-surface-variant">
                <?= htmlspecialchars($daily_quote['affirmation']) ?>
            </p>
        </div>

        <div class="flex flex-wrap items-center justify-between gap-3 pt-2">
            <button id="modal-next-quote-btn" type="button" class="btn-outline-gold px-4 py-2 rounded-lg text-xs font-bold font-sans flex items-center gap-1.5">
                <span class="material-symbols-outlined text-base">refresh</span>
                మరో ఆలోచన పొందండి
            </button>

            <div class="flex items-center gap-2">
                <button id="modal-copy-quote-btn" type="button" class="p-2 rounded-lg bg-surface-container-high text-on-surface hover:text-primary border border-white/5 text-xs font-sans flex items-center gap-1">
                    <span class="material-symbols-outlined text-base">content_copy</span>
                    <span>కాపీ</span>
                </button>
                <button id="modal-share-quote-btn" type="button" class="btn-gold px-4 py-2 rounded-lg text-xs font-bold font-sans flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-base">share</span>
                    <span>షేర్ చేయండి</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ================= Global Toast Notification ================= -->
<div id="toast-box" class="fixed bottom-20 md:bottom-8 right-4 z-50 translate-y-20 opacity-0 pointer-events-none transition-all duration-300">
    <div class="bg-surface-container-high border border-primary/40 text-on-surface px-4 py-3 rounded-xl shadow-2xl flex items-center gap-3">
        <span class="material-symbols-outlined text-primary text-xl" id="toast-icon">check_circle</span>
        <span class="text-sm font-medium" id="toast-message">సందేశం కాపీ చేయబడింది!</span>
    </div>
</div>
