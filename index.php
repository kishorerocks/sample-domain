<?php
// index.php - KK LifeWise Homepage
$page_title = 'KK LifeWise - ఆలోచన మార్చు • జీవితం మార్చు | Telugu Personal Growth';
$page_description = 'KK LifeWise - Telugu Motivation, Financial Freedom, Career Skills, Inspiring Stories, Book Summaries and Free PDF Resources.';
$active_page = 'home';

require_once __DIR__ . '/header.php';
$latest_articles = array_slice($articles, 0, 3);
$featured_video = $videos[0]; // Sri Krishna 6 Vijaya Rahasyalu (QXhd_yW2VEE)
$featured_books = array_slice($books, 0, 3);
$featured_stories = array_slice($stories, 0, 2);
$featured_pdfs = array_slice($pdfs, 0, 3);
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-16">
    <!-- ================= 1. HERO SECTION ================= -->
    <section class="text-center relative py-12 md:py-16 rounded-3xl overflow-hidden glass-panel border border-white/10 shadow-2xl">
        <div class="absolute inset-0 bg-gradient-to-b from-surface-container-highest/40 via-surface-container/60 to-surface-container-lowest/90 pointer-events-none"></div>
        <div class="relative z-10 flex flex-col items-center px-4">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container/15 border border-primary/30 text-primary text-xs font-semibold uppercase tracking-wider mb-4">
                <span class="material-symbols-outlined text-sm">sparkles</span>
                తెలుగు వ్యక్తిత్వ వికాస వేదిక
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-primary mb-3 font-sans tracking-tight drop-shadow-md">
                KK LifeWise
            </h1>

            <p class="text-xl sm:text-2xl md:text-3xl text-on-surface-variant font-semibold mb-8 max-w-2xl leading-snug">
                ఆలోచన మార్చు • జీవితం మార్చు
            </p>

            <div class="flex flex-col sm:flex-row gap-3.5 w-full sm:w-auto max-w-md justify-center">
                <a href="<?= base_url('motivation.php') ?>" class="btn-gold py-3.5 px-7 rounded-xl text-center text-decoration-none text-sm sm:text-base font-bold shadow-lg">
                    వ్యాసాలు చదవండి
                </a>
                <a href="<?= base_url('assessment.php') ?>" class="btn-outline-gold py-3.5 px-7 rounded-xl text-center text-decoration-none text-sm sm:text-base font-bold">
                    జీవన విశ్లేషణ
                </a>
                <a href="<?= base_url('videos.php') ?>" class="bg-surface-container-high hover:bg-surface-container-highest text-on-surface hover:text-primary border border-white/10 py-3.5 px-7 rounded-xl text-center text-decoration-none text-sm sm:text-base font-bold transition-all">
                    వీడియోలు
                </a>
            </div>
        </div>
    </section>

    <!-- ================= 2. DAILY WISDOM CARD ("నేటి ఆలోచన") ================= -->
    <section class="relative">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl sm:text-2xl font-bold text-primary flex items-center gap-2">
                <span class="material-symbols-outlined text-tertiary">wb_sunny</span>
                నేటి ఆలోచన (Daily Wisdom)
            </h2>
            <button type="button" id="refresh-daily-quote" class="text-xs text-primary hover:underline flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">refresh</span>
                మరో ఆలోచన
            </button>
        </div>

        <div class="bg-surface-container rounded-2xl p-6 sm:p-8 relative overflow-hidden border border-white/10 shadow-xl gold-glow">
            <div class="absolute -top-6 -right-6 text-9xl text-primary opacity-5 font-serif select-none pointer-events-none">“</div>
            <div class="relative z-10">
                <p id="hero-quote-text" class="text-lg sm:text-2xl text-on-surface font-medium leading-relaxed mb-6">
                    "<?= htmlspecialchars($daily_quote['quote']) ?>"
                </p>
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 pt-4 border-t border-white/5">
                    <div>
                        <span class="block text-primary font-bold text-xs tracking-widest uppercase font-sans">AFFIRMATION (ఆత్మోపదేశం)</span>
                        <span id="hero-affirm-text" class="text-on-surface-variant text-sm sm:text-base mt-1 block">
                            <?= htmlspecialchars($daily_quote['affirmation']) ?>
                        </span>
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button" class="share-quote-btn text-on-surface-variant hover:text-primary transition-colors bg-surface-container-high p-3 rounded-full border border-white/5 hover:border-primary/30 flex items-center justify-center">
                            <span class="material-symbols-outlined text-xl">share</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 3. LATEST CONTENT & TRENDING ARTICLES ================= -->
    <section>
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-on-surface font-sans">తాజా వ్యాసాలు (Latest Content)</h2>
                <p class="text-xs sm:text-sm text-on-surface-variant">జీవితాన్ని ఉన్నతంగా మార్చే తాజా మార్గదర్శకాలు</p>
            </div>
            <a href="<?= base_url('motivation.php') ?>" class="text-xs sm:text-sm font-bold text-primary hover:underline flex items-center gap-1">
                అన్నీ చూడండి <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($latest_articles as $art): ?>
                <article class="bg-surface-container rounded-2xl overflow-hidden border border-white/10 shadow-lg gold-glow flex flex-col">
                    <div class="relative h-48 overflow-hidden">
                        <img src="<?= htmlspecialchars($art['image']) ?>" alt="<?= htmlspecialchars($art['title']) ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                        <div class="absolute top-3 left-3 bg-surface-container-lowest/90 backdrop-blur-md px-2.5 py-1 rounded-lg text-xs font-bold text-primary font-sans border border-white/10">
                            <?= htmlspecialchars($art['category_name']) ?>
                        </div>
                        <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-md px-2 py-0.5 rounded text-[11px] text-white">
                            <?= htmlspecialchars($art['read_time']) ?>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-bold text-on-surface hover:text-primary transition-colors mb-2 line-clamp-2">
                                <a href="<?= base_url('article.php?slug=' . $art['slug']) ?>" class="text-decoration-none text-on-surface hover:text-primary">
                                    <?= htmlspecialchars($art['title']) ?>
                                </a>
                            </h3>
                            <p class="text-sm text-on-surface-variant line-clamp-3 mb-4 leading-relaxed">
                                <?= htmlspecialchars($art['excerpt']) ?>
                            </p>
                        </div>
                        <div class="pt-4 border-t border-white/5 flex items-center justify-between">
                            <span class="text-xs text-on-surface-variant font-sans"><?= htmlspecialchars($art['date']) ?></span>
                            <a href="<?= base_url('article.php?slug=' . $art['slug']) ?>" class="text-xs font-bold text-primary hover:underline flex items-center gap-1">
                                చదవండి <span class="material-symbols-outlined text-xs">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 4. FEATURED YOUTUBE SHOWCASE ================= -->
    <section class="bg-gradient-to-r from-surface-container-high to-surface-container rounded-3xl p-6 sm:p-10 border border-red-500/20 shadow-2xl relative overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-6 space-y-4">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-red-600/20 text-red-400 border border-red-500/30 text-xs font-bold font-sans uppercase">
                    <span class="material-symbols-outlined text-sm">smart_display</span>
                    Featured Video • KK Motivation Telugu
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-on-surface leading-snug">
                    <?= htmlspecialchars($featured_video['title']) ?>
                </h2>
                <p class="text-sm sm:text-base text-on-surface-variant leading-relaxed">
                    <?= htmlspecialchars($featured_video['summary']) ?>
                </p>

                <div class="space-y-2 pt-2">
                    <?php foreach (array_slice($featured_video['key_takeaways'], 0, 3) as $point): ?>
                        <div class="flex items-start gap-2 text-xs sm:text-sm text-on-surface-variant">
                            <span class="material-symbols-outlined text-primary text-base shrink-0">check_circle</span>
                            <span><?= htmlspecialchars($point) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="flex flex-wrap items-center gap-4 pt-4">
                    <a href="<?= htmlspecialchars($featured_video['url']) ?>" target="_blank" rel="noopener noreferrer" class="btn-gold px-6 py-3 rounded-xl font-bold text-sm flex items-center gap-2 shadow-lg">
                        <span class="material-symbols-outlined text-lg">play_arrow</span>
                        యూట్యూబ్‌లో చూడండి
                    </a>
                    <a href="<?= base_url('videos.php') ?>" class="btn-outline-gold px-5 py-3 rounded-xl font-bold text-sm">
                        మరిన్ని వీడియోలు
                    </a>
                </div>
            </div>

            <div class="lg:col-span-6">
                <div class="aspect-video w-full rounded-2xl overflow-hidden border border-white/10 shadow-2xl bg-black">
                    <iframe class="w-full h-full" src="https://www.youtube-nocookie.com/embed/<?= htmlspecialchars($featured_video['youtube_id']) ?>?rel=0" title="<?= htmlspecialchars($featured_video['title']) ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 5. MOTIVATION, MONEY & CAREER PILLARS ================= -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Motivation Pillar -->
        <div class="bg-surface-container rounded-2xl p-6 border border-amber-500/20 shadow-lg gold-glow flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 rounded-xl bg-amber-500/15 border border-amber-500/30 flex items-center justify-center text-amber-400 mb-4">
                    <span class="material-symbols-outlined text-2xl">bolt</span>
                </div>
                <h3 class="text-xl font-bold text-on-surface mb-2">Motivation (ప్రేరణ)</h3>
                <p class="text-sm text-on-surface-variant leading-relaxed mb-4">
                    ఆలోచనా విధానాన్ని (Mindset) మార్చుకోండి. బద్ధకాన్ని, ఓవర్‌థింకింగ్‌ను అధిగమించి లక్ష్యాల వైపు అడుగులు వేయండి.
                </p>
            </div>
            <a href="<?= base_url('motivation.php') ?>" class="text-sm font-bold text-amber-400 hover:underline flex items-center gap-1">
                వ్యాసాలు చూడండి <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <!-- Money Pillar -->
        <div class="bg-surface-container rounded-2xl p-6 border border-emerald-500/20 shadow-lg gold-glow flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 rounded-xl bg-emerald-500/15 border border-emerald-500/30 flex items-center justify-center text-emerald-400 mb-4">
                    <span class="material-symbols-outlined text-2xl">payments</span>
                </div>
                <h3 class="text-xl font-bold text-on-surface mb-2">Money (ఆర్థిక వివేకం)</h3>
                <p class="text-sm text-on-surface-variant leading-relaxed mb-4">
                    డబ్బును కేవలం సంపాదించడం మాత్రమే కాదు; 50-30-20 బడ్జెట్, SIP, ఇన్వెస్ట్‌మెంట్‌లతో సంపదను సృష్టించడం నేర్చుకోండి.
                </p>
            </div>
            <a href="<?= base_url('money.php') ?>" class="text-sm font-bold text-emerald-400 hover:underline flex items-center gap-1">
                ఆర్థిక పాఠాలు <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <!-- Career Pillar -->
        <div class="bg-surface-container rounded-2xl p-6 border border-blue-500/20 shadow-lg gold-glow flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 rounded-xl bg-blue-500/15 border border-blue-500/30 flex items-center justify-center text-blue-400 mb-4">
                    <span class="material-symbols-outlined text-2xl">work</span>
                </div>
                <h3 class="text-xl font-bold text-on-surface mb-2">Career (కెరీర్ & స్కిల్స్)</h3>
                <p class="text-sm text-on-surface-variant leading-relaxed mb-4">
                    హై-ఇన్‌కమ్ స్కిల్స్, ఇంటర్వ్యూలలో విజయం, కమ్యూనికేషన్ పవర్ మరియు నాయకత్వ లక్షణాలను అలవర్చుకోండి.
                </p>
            </div>
            <a href="<?= base_url('career.php') ?>" class="text-sm font-bold text-blue-400 hover:underline flex items-center gap-1">
                కెరీర్ గైడెన్స్ <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>
    </section>

    <!-- ================= 6. TELUGU STORIES SHOWCASE ================= -->
    <section>
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-on-surface font-sans">స్ఫూర్తి కథలు (Inspiring Stories)</h2>
                <p class="text-xs sm:text-sm text-on-surface-variant">జీవిత సత్యాలను తెలిపే నీతి మరియు ప్రేరణాత్మక కథనాలు</p>
            </div>
            <a href="<?= base_url('stories.php') ?>" class="text-xs sm:text-sm font-bold text-primary hover:underline flex items-center gap-1">
                అన్ని కథలు <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($featured_stories as $st): ?>
                <div class="bg-surface-container rounded-2xl p-6 border border-white/10 shadow-lg gold-glow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-1 rounded-full bg-yellow-500/20 text-yellow-300 text-xs font-bold">
                                <?= count($st['episodes']) ?> Episodes
                            </span>
                            <span class="text-xs text-on-surface-variant"><?= htmlspecialchars($st['read_time']) ?></span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-on-surface mb-2">
                            <a href="<?= base_url('story-detail.php?slug=' . $st['slug']) ?>" class="text-on-surface hover:text-primary text-decoration-none">
                                <?= htmlspecialchars($st['title']) ?>
                            </a>
                        </h3>
                        <p class="text-sm text-on-surface-variant italic mb-4">
                            "<?= htmlspecialchars($st['moral']) ?>"
                        </p>
                    </div>
                    <div class="pt-4 border-t border-white/5 flex items-center justify-between">
                        <span class="text-xs text-on-surface-variant"><?= htmlspecialchars($st['author']) ?></span>
                        <a href="<?= base_url('story-detail.php?slug=' . $st['slug']) ?>" class="btn-outline-gold px-4 py-1.5 rounded-lg text-xs font-bold">
                            కథ చదవండి
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 7. BOOKS SUMMARIES SHOWCASE ================= -->
    <section>
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-xl sm:text-2xl font-bold text-on-surface font-sans">పుస్తకాల సారాంశం (Book Summaries)</h2>
                <p class="text-xs sm:text-sm text-on-surface-variant">ప్రపంచ ప్రసిద్ధ గ్రంథాల ముఖ్య సూత్రాలు తెలుగులో</p>
            </div>
            <a href="<?= base_url('books.php') ?>" class="text-xs sm:text-sm font-bold text-primary hover:underline flex items-center gap-1">
                మరిన్ని పుస్తకాలు <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($featured_books as $bk): ?>
                <div class="bg-surface-container rounded-2xl p-6 border border-white/10 shadow-lg gold-glow flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-0.5 rounded bg-indigo-500/20 text-indigo-300 text-xs font-semibold">
                                <?= htmlspecialchars($bk['category_name']) ?>
                            </span>
                            <span class="text-xs text-amber-400 flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm fill">star</span> <?= $bk['rating'] ?>
                            </span>
                        </div>
                        <h3 class="text-base sm:text-lg font-bold text-on-surface mb-1">
                            <a href="<?= base_url('book-detail.php?slug=' . $bk['slug']) ?>" class="text-on-surface hover:text-primary text-decoration-none">
                                <?= htmlspecialchars($bk['title']) ?>
                            </a>
                        </h3>
                        <p class="text-xs text-primary mb-3"><?= htmlspecialchars($bk['author']) ?></p>
                        <p class="text-xs text-on-surface-variant line-clamp-3 leading-relaxed mb-4">
                            <?= htmlspecialchars($bk['tagline']) ?>
                        </p>
                    </div>
                    <div class="pt-4 border-t border-white/5 flex items-center justify-between">
                        <span class="text-[11px] text-on-surface-variant"><?= htmlspecialchars($bk['read_time']) ?></span>
                        <a href="<?= base_url('book-detail.php?slug=' . $bk['slug']) ?>" class="text-xs font-bold text-primary hover:underline">
                            సారాంశం చూడండి →
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 8. FREE PDF RESOURCES ================= -->
    <section class="bg-surface-container-high/60 rounded-3xl p-6 sm:p-10 border border-white/10 shadow-xl">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8">
            <div>
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-purple-500/20 text-purple-300 text-xs font-bold uppercase mb-2">
                    <span class="material-symbols-outlined text-sm">download</span>
                    Free Telugu E-Books & Workbooks
                </div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-on-surface font-sans">ఉచిత పి.డి.ఎఫ్ వనరులు (Free PDFs)</h2>
            </div>
            <a href="<?= base_url('pdfs.php') ?>" class="btn-gold px-5 py-2.5 rounded-xl text-xs sm:text-sm font-bold">
                అన్ని డౌన్‌లోడ్స్ చూడండి
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($featured_pdfs as $pdf): ?>
                <div class="bg-surface-container rounded-2xl p-5 border border-white/5 hover:border-purple-500/40 transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs text-on-surface-variant mb-2">
                            <span><?= htmlspecialchars($pdf['file_size']) ?> • <?= htmlspecialchars($pdf['format']) ?></span>
                            <span class="text-purple-400 font-semibold"><?= htmlspecialchars($pdf['downloads']) ?></span>
                        </div>
                        <h3 class="text-base font-bold text-on-surface mb-2">
                            <a href="<?= base_url('pdf-detail.php?slug=' . $pdf['slug']) ?>" class="text-on-surface hover:text-primary text-decoration-none">
                                <?= htmlspecialchars($pdf['title']) ?>
                            </a>
                        </h3>
                        <p class="text-xs text-on-surface-variant line-clamp-2 mb-4">
                            <?= htmlspecialchars($pdf['description']) ?>
                        </p>
                    </div>
                    <a href="<?= base_url('pdf-detail.php?slug=' . $pdf['slug']) ?>" class="w-full py-2.5 rounded-xl bg-surface-container-highest hover:bg-purple-600/30 text-purple-300 hover:text-purple-100 border border-purple-500/30 text-xs font-bold text-center flex items-center justify-center gap-1.5 transition-all text-decoration-none">
                        <span class="material-symbols-outlined text-base">download</span>
                        ఉచితంగా పొందండి
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 9. LIFE ASSESSMENT PROMO ("జీవన విశ్లేషణ") ================= -->
    <section class="bg-gradient-to-br from-primary-container/20 via-surface-container to-surface-container-lowest rounded-3xl p-8 sm:p-12 border border-primary/40 shadow-2xl text-center relative overflow-hidden">
        <div class="max-w-2xl mx-auto space-y-5 relative z-10">
            <div class="w-16 h-16 rounded-2xl bg-primary-container/30 border border-primary/50 text-primary flex items-center justify-center mx-auto shadow-[0_0_20px_rgba(212,175,55,0.3)]">
                <span class="material-symbols-outlined text-3xl">psychology</span>
            </div>

            <h2 class="text-2xl sm:text-4xl font-extrabold text-primary font-sans">
                జీవన విశ్లేషణ (Life Assessment Test)
            </h2>

            <p class="text-sm sm:text-base text-on-surface-variant leading-relaxed">
                మీ మైండ్‌సెట్, ఆర్థిక క్రమశిక్షణ, కెరీర్ ఎదుగుదల మరియు అలవాట్లను కేవలం 2 నిమిషాల్లో విశ్లేషించుకోండి. మీ స్థాయిని తెలుసుకుని సరైన ప్రణాళికను రూపొందించుకోండి.
            </p>

            <div class="pt-2">
                <a href="<?= base_url('assessment.php') ?>" class="btn-gold py-4 px-8 rounded-xl font-bold text-base shadow-xl inline-flex items-center gap-2">
                    <span class="material-symbols-outlined">analytics</span>
                    ఇప్పుడే విశ్లేషణ ప్రారంభించండి (Start Assessment)
                </a>
            </div>
        </div>
    </section>

    <!-- ================= 10. INSTAGRAM & COMMUNITY CTA ================= -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Instagram Card -->
        <div class="bg-surface-container rounded-3xl p-8 border border-pink-500/20 shadow-xl flex flex-col justify-between">
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl bg-pink-600/20 border border-pink-500/30 text-pink-400 flex items-center justify-center">
                        <span class="material-symbols-outlined text-2xl">photo_camera</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-on-surface font-sans">Instagram Hub</h3>
                        <p class="text-xs text-pink-400 font-semibold">@kkmotivationhub</p>
                    </div>
                </div>
                <p class="text-sm text-on-surface-variant leading-relaxed">
                    రోజూ మోటివేషనల్ రీల్స్, శక్తివంతమైన కొటేషన్లు మరియు ఆలోచనాత్మక సూత్రాలను పొందడానికి ఇన్‌స్టాగ్రామ్‌లో KK LifeWise కమ్యూనిటీలో చేరండి.
                </p>
            </div>
            <div class="pt-6">
                <a href="https://www.instagram.com/kkmotivationhub/" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-pink-600 to-purple-600 hover:from-pink-500 hover:to-purple-500 text-white font-bold text-sm text-center flex items-center justify-center gap-2 shadow-lg transition-all text-decoration-none">
                    <span class="material-symbols-outlined">group_add</span>
                    Follow @kkmotivationhub on Instagram
                </a>
            </div>
        </div>

        <!-- Community & YouTube Card -->
        <div class="bg-surface-container rounded-3xl p-8 border border-red-500/20 shadow-xl flex flex-col justify-between">
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl bg-red-600/20 border border-red-500/30 text-red-400 flex items-center justify-center">
                        <span class="material-symbols-outlined text-2xl">smart_display</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-on-surface font-sans">YouTube Community</h3>
                        <p class="text-xs text-red-400 font-semibold">@KKMotivationTelugu</p>
                    </div>
                </div>
                <p class="text-sm text-on-surface-variant leading-relaxed">
                    వారానికి 2 కొత్త వీడియోలు: భగవద్గీత పాఠాలు, సంపద సృష్టి సూత్రాలు, మరియు స్ఫూర్తి కథనాల కోసం మన ఛానెల్‌ని సబ్‌స్క్రైబ్ చేసుకోండి.
                </p>
            </div>
            <div class="pt-6">
                <a href="https://www.youtube.com/@KKMotivationTelugu?sub_confirmation=1" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-red-600 to-red-700 hover:from-red-500 hover:to-red-600 text-white font-bold text-sm text-center flex items-center justify-center gap-2 shadow-lg transition-all text-decoration-none">
                    <span class="material-symbols-outlined">subscriptions</span>
                    Subscribe @KKMotivationTelugu
                </a>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
