<?php
// books.php - KK LifeWise Book Summaries & Guides
$page_title = 'Books (పుస్తకాల సారాంశం) - KK LifeWise | ఆలోచన మార్చు • జీవితం మార్చు';
$page_description = 'Telugu summaries of world famous personal development and finance books: Atomic Habits, Psychology of Money, Think and Grow Rich and Bhagavad Gita.';
$active_page = 'books';

require_once __DIR__ . '/header.php';
$all_books = get_books();
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-12">
    <!-- Header Banner -->
    <div class="relative py-12 px-6 sm:px-10 rounded-3xl overflow-hidden glass-panel border border-indigo-500/20 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-300 text-xs font-bold uppercase mb-3">
            <span class="material-symbols-outlined text-sm">menu_book</span>
            Life-Changing Book Summaries in Telugu
        </div>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-primary font-sans mb-3">
            Books (పుస్తకాల సారాంశం)
        </h1>
        <p class="text-base sm:text-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
            ప్రపంచ ప్రఖ్యాత రచయితల అద్భుతమైన గ్రంథాలలోని కీలక సూత్రాలను సులభమైన తెలుగులో చదవండి మరియు మీ జీవితంలో అమలు చేయండి.
        </p>
    </div>

    <!-- Books Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($all_books as $bk): ?>
            <div class="bg-surface-container rounded-3xl p-6 sm:p-8 border border-white/10 shadow-xl gold-glow flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-300 text-xs font-semibold">
                            <?= htmlspecialchars($bk['category_name']) ?>
                        </span>
                        <div class="flex items-center gap-1 text-amber-400 text-xs font-bold font-sans">
                            <span class="material-symbols-outlined text-base fill">star</span>
                            <?= $bk['rating'] ?> (5.0)
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-6 items-start">
                        <img src="<?= htmlspecialchars($bk['cover']) ?>" alt="<?= htmlspecialchars($bk['title']) ?>" class="w-full sm:w-36 h-48 object-cover rounded-xl shadow-md border border-white/10 shrink-0">
                        <div class="space-y-2">
                            <h2 class="text-xl font-bold text-on-surface hover:text-primary transition-colors">
                                <a href="<?= base_url('book-detail.php?slug=' . $bk['slug']) ?>" class="text-on-surface hover:text-primary text-decoration-none">
                                    <?= htmlspecialchars($bk['title']) ?>
                                </a>
                            </h2>
                            <p class="text-xs text-primary font-semibold"><?= htmlspecialchars($bk['author']) ?></p>
                            <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed line-clamp-3">
                                <?= htmlspecialchars($bk['tagline']) ?>
                            </p>
                            <div class="flex items-center gap-3 text-[11px] text-on-surface-variant pt-2 font-sans">
                                <span><?= htmlspecialchars($bk['pages']) ?></span>
                                <span>•</span>
                                <span><?= htmlspecialchars($bk['read_time']) ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-6 mt-4 border-t border-white/5 flex items-center justify-between gap-4">
                    <a href="<?= base_url('book-detail.php?slug=' . $bk['slug']) ?>" class="btn-gold flex-1 py-2.5 rounded-xl text-xs font-bold text-center text-decoration-none">
                        పూర్తి సారాంశం చదవండి
                    </a>
                    <a href="<?= base_url('book-detail.php?slug=' . $bk['slug']) ?>" class="btn-outline-gold p-2.5 rounded-xl text-xs font-bold flex items-center justify-center" title="ముఖ్య సూత్రాలు">
                        <span class="material-symbols-outlined text-base">format_list_bulleted</span>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
