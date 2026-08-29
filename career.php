<?php
// career.php - KK LifeWise Career & High Income Skills
$page_title = 'Career (కెరీర్ గైడెన్స్) - KK LifeWise | ఆలోచన మార్చు • జీవితం మార్చు';
$page_description = 'Telugu Career growth tips, high income skills, job interview strategies, resume tips, and professional advancement.';
$active_page = 'career';

require_once __DIR__ . '/header.php';
$career_articles = get_articles('career');
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-12">
    <!-- Header Banner -->
    <div class="relative py-12 px-6 sm:px-10 rounded-3xl overflow-hidden glass-panel border border-blue-500/20 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/20 text-blue-300 text-xs font-bold uppercase mb-3">
            <span class="material-symbols-outlined text-sm">work</span>
            High Income Skills & Professional Success
        </div>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-primary font-sans mb-3">
            Career (కెరీర్ & నైపుణ్యాలు)
        </h1>
        <p class="text-base sm:text-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
            ఉద్యోగంలో వేగవంతమైన ఎదుగుదల, అధిక జీతం ఇచ్చే నైపుణ్యాలు, ఇంటర్వ్యూలలో విజయం సాధించే ప్రయోగాత్మక మార్గదర్శకాలు.
        </p>
    </div>

    <!-- Career Framework Highlights -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="p-6 rounded-2xl bg-surface-container border border-blue-500/20 shadow-lg gold-glow">
            <div class="w-10 h-10 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center mb-3">
                <span class="material-symbols-outlined text-2xl">record_voice_over</span>
            </div>
            <h3 class="text-lg font-bold text-on-surface mb-2">కమ్యూనికేషన్ పవర్</h3>
            <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                మీ ఆలోచనలను స్పష్టంగా వ్యక్తపరచడం, ఇంగ్లీష్ మాట్లాడటంలో సంకోచాన్ని పోగొట్టుకోవడం మరియు క్లయింట్ మేనేజ్‌మెంట్.
            </p>
        </div>

        <div class="p-6 rounded-2xl bg-surface-container border border-purple-500/20 shadow-lg gold-glow">
            <div class="w-10 h-10 rounded-xl bg-purple-500/20 text-purple-400 flex items-center justify-center mb-3">
                <span class="material-symbols-outlined text-2xl">neurology</span>
            </div>
            <h3 class="text-lg font-bold text-on-surface mb-2">AI & డిజిటల్ స్కిల్స్</h3>
            <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                ChatGPT, ఆటోమేషన్, ప్రాంప్ట్ ఇంజనీరింగ్ మరియు డేటా అనలిటిక్స్ సాధనాలను మీ రోజువారీ పనిలో సమర్థవంతంగా వాడటం.
            </p>
        </div>

        <div class="p-6 rounded-2xl bg-surface-container border border-emerald-500/20 shadow-lg gold-glow">
            <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center mb-3">
                <span class="material-symbols-outlined text-2xl">badge</span>
            </div>
            <h3 class="text-lg font-bold text-on-surface mb-2">లింక్డ్‌ఇన్ బ్రాండింగ్</h3>
            <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                మీ పర్సనల్ బ్రాండ్‌ను నిర్మించుకుని ఉద్యోగాలు వెతుక్కోకుండా రిక్రూటర్లే మిమ్మల్ని సంప్రదించేలా చేయడం.
            </p>
        </div>
    </div>

    <!-- Career Articles -->
    <section>
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl sm:text-2xl font-bold text-on-surface font-sans">కెరీర్ వ్యాసాలు (Career Articles)</h2>
            <span class="text-xs text-on-surface-variant"><?= count($career_articles) ?> వ్యాసాలు</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($career_articles as $art): ?>
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
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
