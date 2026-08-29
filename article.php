<?php
// article.php - Full Article View for KK LifeWise
require_once __DIR__ . '/functions.php';

$slug = $_GET['slug'] ?? '';
$article = get_article_by_slug($slug);

if (!$article) {
    // Fallback to first article
    $article = $articles[0];
}

$page_title = $article['title'] . ' - KK LifeWise';
$page_description = $article['excerpt'];
$active_page = $article['category'];

require_once __DIR__ . '/header.php';
?>

<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-8">
    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-xs text-on-surface-variant font-sans">
        <a href="<?= base_url('index.php') ?>" class="hover:text-primary">Home</a>
        <span>/</span>
        <a href="<?= base_url($article['category'] . '.php') ?>" class="hover:text-primary capitalize"><?= htmlspecialchars($article['category_name']) ?></a>
        <span>/</span>
        <span class="text-primary truncate"><?= htmlspecialchars($article['title']) ?></span>
    </nav>

    <!-- Article Card -->
    <article class="bg-surface-container rounded-3xl p-6 sm:p-10 border border-white/10 shadow-2xl space-y-8">
        <header class="space-y-4">
            <span class="px-3 py-1 rounded-full bg-primary-container/20 text-primary text-xs font-semibold uppercase font-sans">
                <?= htmlspecialchars($article['category_name']) ?>
            </span>

            <h1 class="text-2xl sm:text-4xl font-extrabold text-on-surface font-sans leading-tight">
                <?= htmlspecialchars($article['title']) ?>
            </h1>

            <div class="flex flex-wrap items-center gap-4 text-xs text-on-surface-variant font-sans pt-2 border-t border-white/5">
                <span>రచయిత: <strong class="text-on-surface"><?= htmlspecialchars($article['author']) ?></strong></span>
                <span>•</span>
                <span>తేదీ: <?= htmlspecialchars($article['date']) ?></span>
                <span>•</span>
                <span>సమయం: <?= htmlspecialchars($article['read_time']) ?></span>
            </div>
        </header>

        <!-- Featured Image or Video -->
        <?php if (!empty($article['youtube_id'])): ?>
            <div class="aspect-video w-full rounded-2xl overflow-hidden border border-white/10 shadow-2xl bg-black">
                <iframe class="w-full h-full" src="https://www.youtube-nocookie.com/embed/<?= htmlspecialchars($article['youtube_id']) ?>?rel=0" title="<?= htmlspecialchars($article['title']) ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        <?php else: ?>
            <div class="rounded-2xl overflow-hidden h-72 sm:h-96 w-full">
                <img src="<?= htmlspecialchars($article['image']) ?>" alt="<?= htmlspecialchars($article['title']) ?>" class="w-full h-full object-cover">
            </div>
        <?php endif; ?>

        <!-- Excerpt Highlight -->
        <div class="p-5 rounded-2xl bg-surface-container-high/80 border-l-4 border-primary text-base sm:text-lg font-medium text-on-surface leading-relaxed">
            <?= htmlspecialchars($article['excerpt']) ?>
        </div>

        <!-- Article Content -->
        <div class="prose prose-invert max-w-none text-base sm:text-lg text-on-surface leading-relaxed space-y-6">
            <?= $article['content'] ?>
        </div>

        <!-- Tags -->
        <?php if (!empty($article['tags'])): ?>
            <div class="pt-6 border-t border-white/10 flex flex-wrap items-center gap-2">
                <span class="text-xs text-on-surface-variant font-sans">ట్యాగ్‌లు (Tags):</span>
                <?php foreach ($article['tags'] as $tag): ?>
                    <span class="px-3 py-1 rounded-full bg-surface-container-high text-xs text-primary border border-white/5 font-sans">
                        #<?= htmlspecialchars($tag) ?>
                    </span>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Footer Actions -->
        <div class="pt-6 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <a href="<?= base_url($article['category'] . '.php') ?>" class="btn-outline-gold px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-1.5">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
                మరిన్ని వ్యాసాలు
            </a>

            <button type="button" class="btn-gold px-6 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 share-quote-btn">
                <span class="material-symbols-outlined text-base">share</span>
                మిత్రులతో పంచుకోండి
            </button>
        </div>
    </article>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
