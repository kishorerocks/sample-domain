<?php
// search.php - Global Search Page & JSON API for KK LifeWise
require_once __DIR__ . '/functions.php';

$query = $_GET['q'] ?? '';
$format = $_GET['format'] ?? 'html';

$results = search_all_content($query);

if ($format === 'json') {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($results, JSON_UNESCAPED_UNICODE);
    exit;
}

$page_title = 'Search Results for "' . htmlspecialchars($query) . '" - KK LifeWise';
$page_description = 'Search results for ' . htmlspecialchars($query) . ' on KK LifeWise.';
$active_page = 'search';

require_once __DIR__ . '/header.php';
?>

<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-8">
    <div class="p-8 rounded-3xl bg-surface-container border border-white/10 shadow-xl space-y-4">
        <h1 class="text-2xl sm:text-3xl font-extrabold text-primary font-sans">
            శోధన ఫలితాలు (Search Results)
        </h1>
        
        <form action="<?= base_url('search.php') ?>" method="GET" class="flex gap-2">
            <input type="text" name="q" value="<?= htmlspecialchars($query) ?>" placeholder="వ్యాసాలు, పుస్తకాలు, కథలు..." class="flex-1 bg-surface-container-high border border-white/15 rounded-xl py-3 px-4 text-on-surface text-sm focus:border-primary focus:outline-none">
            <button type="submit" class="btn-gold px-6 py-3 rounded-xl font-bold text-sm flex items-center gap-1">
                <span class="material-symbols-outlined text-base">search</span>
                వెతకండి
            </button>
        </form>

        <?php if (!empty($query)): ?>
            <p class="text-xs text-on-surface-variant">
                "<strong><?= htmlspecialchars($query) ?></strong>" కి సంబంధించి <strong><?= count($results) ?></strong> ఫలితాలు లభించాయి.
            </p>
        <?php endif; ?>
    </div>

    <div class="space-y-4">
        <?php if (empty($results)): ?>
            <div class="p-12 text-center rounded-3xl bg-surface-container border border-white/5 space-y-3">
                <span class="material-symbols-outlined text-5xl text-primary/40">search_off</span>
                <h3 class="text-lg font-bold text-on-surface">ఎలాంటి ఫలితాలు లభించలేదు</h3>
                <p class="text-xs text-on-surface-variant max-w-sm mx-auto">
                    దయచేసి వేరే కీవర్డ్‌తో ప్రయత్నించండి (ఉదా: శ్రీకృష్ణుడు, డబ్బు, మైండ్‌సెట్, కెరీర్)...
                </p>
            </div>
        <?php else: ?>
            <?php foreach ($results as $item): ?>
                <a href="<?= htmlspecialchars($item['url']) ?>" class="block p-5 rounded-2xl bg-surface-container border border-white/5 hover:border-primary/40 transition-all text-decoration-none gold-glow group">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-2.5 py-0.5 rounded text-xs font-bold <?= $item['badge_color'] ?>">
                            <?= htmlspecialchars($item['type_label']) ?>
                        </span>
                        <span class="text-xs text-on-surface-variant font-sans"><?= htmlspecialchars($item['category']) ?></span>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold text-on-surface group-hover:text-primary transition-colors mb-1">
                        <?= htmlspecialchars($item['title']) ?>
                    </h3>
                    <p class="text-xs sm:text-sm text-on-surface-variant line-clamp-2">
                        <?= htmlspecialchars($item['excerpt']) ?>
                    </p>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
