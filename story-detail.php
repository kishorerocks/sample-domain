<?php
// story-detail.php - Full Story & Episode Viewer for KK LifeWise
require_once __DIR__ . '/functions.php';

$slug = $_GET['slug'] ?? '';
$story = get_story_by_slug($slug);

if (!$story) {
    // Fallback to first story if not found
    $story = $stories[0];
}

$current_episode_slug = $_GET['episode'] ?? $story['episodes'][0]['episode'];
$current_episode = null;
foreach ($story['episodes'] as $ep) {
    if ($ep['episode'] === $current_episode_slug) {
        $current_episode = $ep;
        break;
    }
}
if (!$current_episode) {
    $current_episode = $story['episodes'][0];
}

$page_title = $story['title'] . ' - KK LifeWise';
$page_description = $story['moral'];
$active_page = 'stories';

require_once __DIR__ . '/header.php';
?>

<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-8">
    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-xs text-on-surface-variant font-sans">
        <a href="<?= base_url('index.php') ?>" class="hover:text-primary">Home</a>
        <span>/</span>
        <a href="<?= base_url('stories.php') ?>" class="hover:text-primary">Stories</a>
        <span>/</span>
        <span class="text-primary truncate"><?= htmlspecialchars($story['title']) ?></span>
    </nav>

    <!-- Story Card -->
    <article class="bg-surface-container rounded-3xl p-6 sm:p-10 border border-white/10 shadow-2xl space-y-8">
        <div class="space-y-4 text-center">
            <span class="px-3 py-1 rounded-full bg-yellow-500/20 text-yellow-300 text-xs font-bold uppercase font-sans">
                Inspiring Story Series
            </span>
            <h1 class="text-2xl sm:text-4xl font-extrabold text-on-surface font-sans leading-tight">
                <?= htmlspecialchars($story['title']) ?>
            </h1>
            <div class="flex items-center justify-center gap-4 text-xs text-on-surface-variant font-sans">
                <span>రచయిత: <?= htmlspecialchars($story['author']) ?></span>
                <span>•</span>
                <span>సమయం: <?= htmlspecialchars($story['read_time']) ?></span>
            </div>
        </div>

        <!-- Featured Image -->
        <div class="rounded-2xl overflow-hidden h-64 sm:h-80 w-full">
            <img src="<?= htmlspecialchars($story['image']) ?>" alt="<?= htmlspecialchars($story['title']) ?>" class="w-full h-full object-cover">
        </div>

        <!-- Episode Switcher Tabs -->
        <div class="p-2 bg-surface-container-lowest rounded-2xl flex items-center gap-2 overflow-x-auto">
            <?php foreach ($story['episodes'] as $index => $ep): ?>
                <a href="<?= base_url('story-detail.php?slug=' . $story['slug'] . '&episode=' . $ep['episode']) ?>" class="flex-1 min-w-[140px] text-center py-2.5 px-4 rounded-xl text-xs font-bold transition-all text-decoration-none <?= ($ep['episode'] === $current_episode['episode']) ? 'btn-gold shadow-md' : 'text-on-surface-variant hover:text-primary bg-surface-container-high' ?>">
                    ఎపిసోడ్ <?= $index + 1 ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Current Episode Content -->
        <div class="prose prose-invert max-w-none text-base sm:text-lg text-on-surface leading-relaxed space-y-6">
            <h2 class="text-xl sm:text-2xl font-bold text-primary pb-3 border-b border-white/10">
                <?= htmlspecialchars($current_episode['title']) ?>
            </h2>
            <div class="leading-relaxed">
                <?= $current_episode['content'] ?>
            </div>
        </div>

        <!-- Moral Box -->
        <div class="p-6 rounded-2xl bg-surface-container-high/80 border-l-4 border-primary shadow-md">
            <h3 class="text-xs font-bold text-primary uppercase tracking-widest font-sans mb-1">కథ యొక్క పరమార్థం (Moral of the Story)</h3>
            <p class="text-base text-on-surface font-medium leading-relaxed">
                "<?= htmlspecialchars($story['moral']) ?>"
            </p>
        </div>

        <!-- Social Share & Navigation -->
        <div class="pt-6 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <a href="<?= base_url('stories.php') ?>" class="btn-outline-gold px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-1.5">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
                అన్ని కథలు
            </a>

            <button type="button" class="btn-gold px-6 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 share-quote-btn">
                <span class="material-symbols-outlined text-base">share</span>
                మిత్రులతో పంచుకోండి
            </button>
        </div>
    </article>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
