<?php
// pdfs.php - KK LifeWise Free PDF Downloads Hub
$page_title = 'Free PDFs (ఉచిత ఈ-బుక్స్) - KK LifeWise | ఆలోచన మార్చు • జీవితం మార్చు';
$page_description = 'Download free Telugu workbooks, goal setting guides, habit trackers, and financial planning PDFs.';
$active_page = 'pdfs';

require_once __DIR__ . '/header.php';
$all_pdfs = get_pdfs();
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-12">
    <!-- Header Banner -->
    <div class="relative py-12 px-6 sm:px-10 rounded-3xl overflow-hidden glass-panel border border-purple-500/20 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-500/20 text-purple-300 text-xs font-bold uppercase mb-3">
            <span class="material-symbols-outlined text-sm">picture_as_pdf</span>
            Free Printable & Digital Resources
        </div>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-primary font-sans mb-3">
            Free PDFs (ఉచిత ఈ-బుక్స్ & వర్క్‌బుక్స్)
        </h1>
        <p class="text-base sm:text-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
            మీ లక్ష్యాలను సాధించడానికి, అలవాట్లను మార్చుకోవడానికి మరియు సంపదను నిర్మించడానికి రూపొందించిన ఉచిత వర్క్‌బుక్స్.
        </p>
    </div>

    <!-- PDFs Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($all_pdfs as $pdf): ?>
            <div class="bg-surface-container rounded-3xl p-6 sm:p-8 border border-white/10 shadow-xl gold-glow flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="px-3 py-1 rounded-full bg-purple-500/20 text-purple-300 text-xs font-semibold">
                            <?= htmlspecialchars($pdf['category_name']) ?>
                        </span>
                        <span class="text-xs text-purple-400 font-bold font-sans">
                            <?= htmlspecialchars($pdf['downloads']) ?>
                        </span>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-6 items-start">
                        <img src="<?= htmlspecialchars($pdf['thumbnail']) ?>" alt="<?= htmlspecialchars($pdf['title']) ?>" class="w-full sm:w-36 h-48 object-cover rounded-xl shadow-md border border-white/10 shrink-0">
                        <div class="space-y-2">
                            <h2 class="text-xl font-bold text-on-surface hover:text-primary transition-colors">
                                <a href="<?= base_url('pdf-detail.php?slug=' . $pdf['slug']) ?>" class="text-on-surface hover:text-primary text-decoration-none">
                                    <?= htmlspecialchars($pdf['title']) ?>
                                </a>
                            </h2>
                            <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                                <?= htmlspecialchars($pdf['description']) ?>
                            </p>
                            
                            <div class="space-y-1 pt-2">
                                <?php foreach ($pdf['features'] as $feat): ?>
                                    <div class="flex items-center gap-1.5 text-xs text-on-surface-variant">
                                        <span class="material-symbols-outlined text-purple-400 text-sm">check_circle</span>
                                        <span><?= htmlspecialchars($feat) ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-6 mt-4 border-t border-white/5 flex items-center justify-between gap-4">
                    <span class="text-xs text-on-surface-variant font-sans"><?= htmlspecialchars($pdf['file_size']) ?> • <?= htmlspecialchars($pdf['pages_count']) ?></span>
                    <a href="<?= base_url('pdf-detail.php?slug=' . $pdf['slug']) ?>" class="btn-gold px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-1.5 text-decoration-none">
                        <span class="material-symbols-outlined text-base">download</span>
                        డౌన్‌లోడ్ పేజీ
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>
