<?php
// motivation.php - KK LifeWise Motivation Hub
$page_title = 'Motivation (ప్రేరణ) - KK LifeWise | ఆలోచన మార్చు • జీవితం మార్చు';
$page_description = 'Telugu Motivation articles, mindset shifts, daily affirmations, overcoming failure and goal setting wisdom.';
$active_page = 'motivation';

require_once __DIR__ . '/header.php';
$motivation_articles = get_articles('motivation');
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-12">
    <!-- Header Banner -->
    <div class="relative py-12 px-6 sm:px-10 rounded-3xl overflow-hidden glass-panel border border-amber-500/20 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/20 text-amber-300 text-xs font-bold uppercase mb-3">
            <span class="material-symbols-outlined text-sm">bolt</span>
            Mindset & Willpower
        </div>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-primary font-sans mb-3">
            Motivation (ప్రేరణ)
        </h1>
        <p class="text-base sm:text-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
            మీ ఆలోచనా సరళిని మార్చేందుకు, అంతర్గత శక్తిని మేల్కొలిపేందుకు మరియు లక్ష్యాల వైపు నిరంతరం నడిపించే స్ఫూర్తిదాయక పాఠాలు.
        </p>
    </div>

    <!-- Motivational Affirmation of the Day -->
    <div class="bg-surface-container rounded-2xl p-6 sm:p-8 border border-white/10 shadow-lg gold-glow flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2">
            <span class="text-xs font-bold text-primary tracking-widest uppercase font-sans">నేటి ప్రేరణ వాక్యం</span>
            <p class="text-lg sm:text-xl font-medium text-on-surface">
                "ఓటమి నిన్ను ఆపలేదు; నీలోని సందేహం మాత్రమే నిన్ను ఆపగలదు. ధైర్యంగా ముందుకు సాగు!"
            </p>
        </div>
        <button type="button" class="btn-gold px-6 py-3 rounded-xl font-bold text-xs sm:text-sm shrink-0 flex items-center gap-2 share-quote-btn">
            <span class="material-symbols-outlined text-base">share</span>
            షేర్ చేయండి
        </button>
    </div>

    <!-- Motivation Articles Grid -->
    <section>
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl sm:text-2xl font-bold text-on-surface font-sans">ప్రేరణాత్మక వ్యాసాలు (Articles)</h2>
            <span class="text-xs text-on-surface-variant"><?= count($motivation_articles) ?> వ్యాసాలు లభ్యంలో ఉన్నాయి</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($motivation_articles as $art): ?>
                <article class="bg-surface-container rounded-2xl overflow-hidden border border-white/10 shadow-lg gold-glow flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden">
                            <img src="<?= htmlspecialchars($art['image']) ?>" alt="<?= htmlspecialchars($art['title']) ?>" class="w-full h-full object-cover" loading="lazy">
                            <div class="absolute bottom-3 right-3 bg-black/70 backdrop-blur-md px-2 py-0.5 rounded text-[11px] text-white">
                                <?= htmlspecialchars($art['read_time']) ?>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-on-surface mb-2 line-clamp-2">
                                <a href="<?= base_url('article.php?slug=' . $art['slug']) ?>" class="text-on-surface hover:text-primary text-decoration-none">
                                    <?= htmlspecialchars($art['title']) ?>
                                </a>
                            </h3>
                            <p class="text-sm text-on-surface-variant line-clamp-3 mb-4 leading-relaxed">
                                <?= htmlspecialchars($art['excerpt']) ?>
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-2 border-t border-white/5 flex items-center justify-between">
                        <span class="text-xs text-on-surface-variant"><?= htmlspecialchars($art['date']) ?></span>
                        <a href="<?= base_url('article.php?slug=' . $art['slug']) ?>" class="btn-outline-gold px-4 py-1.5 rounded-lg text-xs font-bold">
                            పూర్తిగా చదవండి
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Key Motivation Principles in Telugu -->
    <section class="bg-surface-container-high/60 rounded-3xl p-6 sm:p-10 border border-white/10">
        <h2 class="text-xl sm:text-2xl font-bold text-primary font-sans mb-6">నిత్యం గుర్తుంచుకోవాల్సిన 4 సూత్రాలు</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-5 rounded-2xl bg-surface-container border border-white/5">
                <div class="text-2xl font-bold text-amber-400 mb-2 font-sans">01</div>
                <h3 class="text-base font-bold text-on-surface mb-1">చిన్న అడుగుల శక్తి</h3>
                <p class="text-xs text-on-surface-variant leading-relaxed">పెద్ద మార్పు ఒక్కరోజులో రాదు; ప్రతిరోజూ చేసే చిన్న పని పెద్ద ఫలితాన్ని ఇస్తుంది.</p>
            </div>
            <div class="p-5 rounded-2xl bg-surface-container border border-white/5">
                <div class="text-2xl font-bold text-amber-400 mb-2 font-sans">02</div>
                <h3 class="text-base font-bold text-on-surface mb-1">ఓటమి భయం వీడండి</h3>
                <p class="text-xs text-on-surface-variant leading-relaxed">ఓటమి అనేది ముగింపు కాదు; అది ఒక మంచి అనుభవం మాత్రమే.</p>
            </div>
            <div class="p-5 rounded-2xl bg-surface-container border border-white/5">
                <div class="text-2xl font-bold text-amber-400 mb-2 font-sans">03</div>
                <h3 class="text-base font-bold text-on-surface mb-1">క్రమశిక్షణే నిజమైన స్నేహితుడు</h3>
                <p class="text-xs text-on-surface-variant leading-relaxed">మూడ్ బాగోలేకపోయినా అనుకున్న పనిని పూర్తి చేయడమే క్రమశిక్షణ.</p>
            </div>
            <div class="p-5 rounded-2xl bg-surface-container border border-white/5">
                <div class="text-2xl font-bold text-amber-400 mb-2 font-sans">04</div>
                <h3 class="text-base font-bold text-on-surface mb-1">సానుకూల సహవాసం</h3>
                <p class="text-xs text-on-surface-variant leading-relaxed">ఎల్లప్పుడూ మిమ్మల్ని ప్రోత్సహించే వ్యక్తులతో సమయం గడపండి.</p>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
