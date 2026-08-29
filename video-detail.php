<?php
// video-detail.php - Dedicated Video Watch & Insights Page for KK LifeWise
require_once __DIR__ . '/functions.php';

$slug = $_GET['slug'] ?? '';
$video = get_video_by_slug($slug);

if (!$video) {
    $video = $videos[0];
}

$page_title = $video['title'] . ' - KK LifeWise';
$page_description = $video['summary'];
$active_page = 'videos';

require_once __DIR__ . '/header.php';
?>

<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-8">
    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-xs text-on-surface-variant font-sans">
        <a href="<?= base_url('index.php') ?>" class="hover:text-primary">Home</a>
        <span>/</span>
        <a href="<?= base_url('videos.php') ?>" class="hover:text-primary">Videos</a>
        <span>/</span>
        <span class="text-primary truncate"><?= htmlspecialchars($video['title']) ?></span>
    </nav>

    <article class="bg-surface-container rounded-3xl p-6 sm:p-10 border border-white/10 shadow-2xl space-y-8">
        <!-- Video Header -->
        <div class="space-y-3">
            <span class="px-3 py-1 rounded-full bg-red-500/20 text-red-300 text-xs font-semibold uppercase font-sans">
                <?= htmlspecialchars($video['category_name']) ?>
            </span>
            <h1 class="text-2xl sm:text-4xl font-extrabold text-on-surface font-sans leading-tight">
                <?= htmlspecialchars($video['title']) ?>
            </h1>
            <div class="flex items-center gap-4 text-xs text-on-surface-variant font-sans">
                <span>ఛానెల్: <strong class="text-on-surface"><?= htmlspecialchars($video['channel']) ?></strong></span>
                <span>•</span>
                <span>వ్యవధి: <?= htmlspecialchars($video['duration']) ?></span>
                <span>•</span>
                <span><?= htmlspecialchars($video['views']) ?></span>
            </div>
        </div>

        <!-- Video Embed -->
        <div class="aspect-video w-full rounded-2xl overflow-hidden border border-white/10 shadow-2xl bg-black">
            <iframe class="w-full h-full" src="https://www.youtube-nocookie.com/embed/<?= htmlspecialchars($video['youtube_id']) ?>?rel=0&autoplay=1" title="<?= htmlspecialchars($video['title']) ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <!-- Video Summary & Insights -->
        <div class="space-y-6">
            <h2 class="text-xl sm:text-2xl font-bold text-primary pb-2 border-b border-white/10">
                వీడియో సారాంశం (Summary & Insights)
            </h2>
            <p class="text-base text-on-surface leading-relaxed">
                <?= htmlspecialchars($video['summary']) ?>
            </p>

            <h3 class="text-lg font-bold text-on-surface pt-2">ముఖ్యమైన విషయాలు (Key Lessons):</h3>
            <div class="space-y-3">
                <?php foreach ($video['key_takeaways'] as $index => $point): ?>
                    <div class="p-4 rounded-xl bg-surface-container-high/70 border border-white/5 flex items-start gap-3">
                        <span class="material-symbols-outlined text-red-400 text-xl shrink-0 mt-0.5">check_circle</span>
                        <p class="text-sm sm:text-base text-on-surface leading-relaxed">
                            <?= htmlspecialchars($point) ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Official YouTube CTA -->
        <div class="p-6 rounded-2xl bg-gradient-to-r from-red-950/40 to-surface-container border border-red-500/30 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-red-600/20 text-red-500 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-3xl">smart_display</span>
                </div>
                <div>
                    <h4 class="text-base font-bold text-on-surface font-sans">KK Motivation Telugu</h4>
                    <p class="text-xs text-on-surface-variant">యూట్యూబ్‌లో మరిన్ని వీడియోల కోసం సబ్‌స్క్రైబ్ చేయండి</p>
                </div>
            </div>
            <a href="https://www.youtube.com/@KKMotivationTelugu?sub_confirmation=1" target="_blank" rel="noopener noreferrer" class="btn-gold px-6 py-2.5 rounded-xl text-xs font-bold shrink-0">
                Subscribe on YouTube
            </a>
        </div>

        <!-- Footer Navigation -->
        <div class="pt-6 border-t border-white/10 flex items-center justify-between">
            <a href="<?= base_url('videos.php') ?>" class="btn-outline-gold px-5 py-2 rounded-xl text-xs font-bold">
                ← అన్ని వీడియోలు
            </a>
            <button type="button" class="btn-gold px-5 py-2 rounded-xl text-xs font-bold share-quote-btn">
                షేర్ చేయండి
            </button>
        </div>
    </article>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
