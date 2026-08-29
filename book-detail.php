<?php
// book-detail.php - Detailed Book Summary View for KK LifeWise
require_once __DIR__ . '/functions.php';

$slug = $_GET['slug'] ?? '';
$book = get_book_by_slug($slug);

if (!$book) {
    $book = $books[0];
}

$page_title = $book['title'] . ' (సారాంశం) - KK LifeWise';
$page_description = $book['summary'];
$active_page = 'books';

require_once __DIR__ . '/header.php';
?>

<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-8">
    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-xs text-on-surface-variant font-sans">
        <a href="<?= base_url('index.php') ?>" class="hover:text-primary">Home</a>
        <span>/</span>
        <a href="<?= base_url('books.php') ?>" class="hover:text-primary">Books</a>
        <span>/</span>
        <span class="text-primary truncate"><?= htmlspecialchars($book['title']) ?></span>
    </nav>

    <!-- Book Summary Card -->
    <article class="bg-surface-container rounded-3xl p-6 sm:p-10 border border-white/10 shadow-2xl space-y-8">
        <div class="flex flex-col md:flex-row gap-8 items-start pb-8 border-b border-white/10">
            <img src="<?= htmlspecialchars($book['cover']) ?>" alt="<?= htmlspecialchars($book['title']) ?>" class="w-full md:w-52 h-72 object-cover rounded-2xl shadow-xl border border-white/10 shrink-0">
            
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-300 text-xs font-semibold">
                        <?= htmlspecialchars($book['category_name']) ?>
                    </span>
                    <span class="text-xs text-amber-400 font-bold flex items-center gap-1 font-sans">
                        <span class="material-symbols-outlined text-sm fill">star</span> <?= $book['rating'] ?>
                    </span>
                </div>

                <h1 class="text-2xl sm:text-4xl font-extrabold text-on-surface font-sans leading-tight">
                    <?= htmlspecialchars($book['title']) ?>
                </h1>

                <p class="text-sm font-semibold text-primary">రచయిత: <?= htmlspecialchars($book['author']) ?></p>
                <p class="text-sm sm:text-base text-on-surface-variant leading-relaxed">
                    <?= htmlspecialchars($book['tagline']) ?>
                </p>

                <div class="flex flex-wrap items-center gap-4 pt-2 text-xs text-on-surface-variant font-sans">
                    <span class="p-2 rounded-lg bg-surface-container-high border border-white/5"><?= htmlspecialchars($book['pages']) ?></span>
                    <span class="p-2 rounded-lg bg-surface-container-high border border-white/5"><?= htmlspecialchars($book['read_time']) ?></span>
                </div>
            </div>
        </div>

        <!-- Book Overview & Key Points -->
        <div class="space-y-6">
            <h2 class="text-xl sm:text-2xl font-bold text-primary pb-2 border-b border-white/10">
                పుస్తకం యొక్క ముఖ్య సారాంశం (Book Overview)
            </h2>
            <p class="text-base text-on-surface leading-relaxed">
                <?= htmlspecialchars($book['summary']) ?>
            </p>

            <h3 class="text-lg font-bold text-on-surface pt-4">ఈ పుస్తకం నుండి నేర్చుకోవాల్సిన 4 కీలక పాఠాలు:</h3>
            <div class="space-y-3">
                <?php foreach ($book['key_points'] as $index => $point): ?>
                    <div class="p-4 rounded-xl bg-surface-container-high/70 border border-white/5 flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-primary/20 text-primary flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">
                            <?= $index + 1 ?>
                        </div>
                        <p class="text-sm sm:text-base text-on-surface leading-relaxed">
                            <?= htmlspecialchars($point) ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Footer Actions -->
        <div class="pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <a href="<?= base_url('books.php') ?>" class="btn-outline-gold px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-1.5">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
                అన్ని పుస్తకాలు
            </a>

            <button type="button" class="btn-gold px-6 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 share-quote-btn">
                <span class="material-symbols-outlined text-base">share</span>
                మిత్రులతో పంచుకోండి
            </button>
        </div>
    </article>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
