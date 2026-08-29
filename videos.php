<?php
// videos.php - KK LifeWise Telugu Video Library
$page_title = 'Videos (వీడియోలు) - KK LifeWise | ఆలోచన మార్చు • జీవితం మార్చు';
$page_description = 'Official YouTube Videos from KK Motivation Telugu. Sri Krishna 6 Vijaya Rahasyalu, Bhagavad Gita lessons and wealth wisdom.';
$active_page = 'videos';

require_once __DIR__ . '/header.php';
$all_videos = get_videos();
$featured_video = $videos[0];
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-12">
    <!-- Header Banner -->
    <div class="relative py-12 px-6 sm:px-10 rounded-3xl overflow-hidden glass-panel border border-red-500/20 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-500/20 text-red-300 text-xs font-bold uppercase mb-3">
            <span class="material-symbols-outlined text-sm">smart_display</span>
            KK Motivation Telugu Official Videos
        </div>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-primary font-sans mb-3">
            Videos (వీడియోలు)
        </h1>
        <p class="text-base sm:text-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
            జీవితాన్ని మలుపు తిప్పే శక్తివంతమైన దృశ్యరూప పాఠాలు. భగవద్గీత రహస్యాలు, విజయ సూత్రాలు మరియు మార్నింగ్ మోటివేషన్.
        </p>
    </div>

    <!-- Featured Video Player Hero -->
    <section class="bg-surface-container rounded-3xl p-6 sm:p-10 border border-red-500/30 shadow-2xl space-y-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-red-500 animate-pulse"></span>
                <span class="text-xs font-bold text-red-400 uppercase tracking-wider font-sans">ప్రత్యేక వీడియో (FEATURED SHOWCASE)</span>
            </div>
            <a href="https://www.youtube.com/@KKMotivationTelugu?sub_confirmation=1" target="_blank" rel="noopener noreferrer" class="text-xs font-bold text-red-400 hover:text-red-300 flex items-center gap-1">
                <span class="material-symbols-outlined text-base">subscriptions</span> సబ్‌స్క్రైబ్ చేయండి
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7">
                <div class="aspect-video w-full rounded-2xl overflow-hidden border border-white/10 shadow-2xl bg-black">
                    <iframe class="w-full h-full" src="https://www.youtube-nocookie.com/embed/<?= htmlspecialchars($featured_video['youtube_id']) ?>?rel=0" title="<?= htmlspecialchars($featured_video['title']) ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>

            <div class="lg:col-span-5 space-y-4">
                <h2 class="text-xl sm:text-2xl font-extrabold text-on-surface leading-tight">
                    <?= htmlspecialchars($featured_video['title']) ?>
                </h2>
                <p class="text-sm text-on-surface-variant leading-relaxed">
                    <?= htmlspecialchars($featured_video['summary']) ?>
                </p>

                <div class="space-y-1.5 pt-2">
                    <span class="text-xs font-bold text-primary uppercase block">ముఖ్య అంశాలు:</span>
                    <?php foreach ($featured_video['key_takeaways'] as $point): ?>
                        <div class="flex items-start gap-2 text-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-primary text-sm shrink-0">check</span>
                            <span><?= htmlspecialchars($point) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pt-4 flex items-center gap-3">
                    <a href="<?= htmlspecialchars($featured_video['url']) ?>" target="_blank" rel="noopener noreferrer" class="btn-gold px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-1.5 shadow-md">
                        <span class="material-symbols-outlined text-base">smart_display</span>
                        YouTube లో చూడండి
                    </a>
                    <a href="<?= base_url('video-detail.php?slug=' . $featured_video['slug']) ?>" class="btn-outline-gold px-4 py-2.5 rounded-xl text-xs font-bold">
                        వివరాలు
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Library Grid -->
    <section>
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl sm:text-2xl font-bold text-on-surface font-sans">అన్ని వీడియోలు (Video Library)</h2>
            <span class="text-xs text-on-surface-variant"><?= count($all_videos) ?> వీడియోలు</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($all_videos as $vid): ?>
                <div class="bg-surface-container rounded-2xl overflow-hidden border border-white/10 shadow-lg gold-glow flex flex-col justify-between">
                    <div>
                        <div class="relative h-48 overflow-hidden group">
                            <img src="<?= htmlspecialchars($vid['thumbnail']) ?>" alt="<?= htmlspecialchars($vid['title']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <div class="w-12 h-12 rounded-full bg-red-600/90 text-white flex items-center justify-center shadow-lg">
                                    <span class="material-symbols-outlined text-2xl fill">play_arrow</span>
                                </div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-black/80 backdrop-blur-md px-2 py-0.5 rounded text-[11px] text-white font-sans">
                                <?= htmlspecialchars($vid['duration']) ?>
                            </div>
                        </div>

                        <div class="p-5">
                            <span class="text-xs text-red-400 font-semibold mb-1 block"><?= htmlspecialchars($vid['category_name']) ?></span>
                            <h3 class="text-base font-bold text-on-surface mb-2 line-clamp-2 hover:text-primary transition-colors">
                                <a href="<?= base_url('video-detail.php?slug=' . $vid['slug']) ?>" class="text-on-surface hover:text-primary text-decoration-none">
                                    <?= htmlspecialchars($vid['title']) ?>
                                </a>
                            </h3>
                            <p class="text-xs text-on-surface-variant line-clamp-2 leading-relaxed">
                                <?= htmlspecialchars($vid['summary']) ?>
                            </p>
                        </div>
                    </div>

                    <div class="px-5 pb-5 pt-2 border-t border-white/5 flex items-center justify-between">
                        <span class="text-[11px] text-on-surface-variant font-sans"><?= htmlspecialchars($vid['views']) ?></span>
                        <a href="<?= base_url('video-detail.php?slug=' . $vid['slug']) ?>" class="btn-outline-gold px-3 py-1.5 rounded-lg text-xs font-bold">
                            చూడండి & చదవండి
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
