<?php
// pdf-detail.php - Free PDF Preview & Download Page for KK LifeWise
require_once __DIR__ . '/functions.php';

$slug = $_GET['slug'] ?? '';
$pdf = get_pdf_by_slug($slug);

if (!$pdf) {
    $pdf = $pdfs[0];
}

$page_title = $pdf['title'] . ' (Free Download) - KK LifeWise';
$page_description = $pdf['description'];
$active_page = 'pdfs';

require_once __DIR__ . '/header.php';
?>

<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-8">
    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-xs text-on-surface-variant font-sans">
        <a href="<?= base_url('index.php') ?>" class="hover:text-primary">Home</a>
        <span>/</span>
        <a href="<?= base_url('pdfs.php') ?>" class="hover:text-primary">Free PDFs</a>
        <span>/</span>
        <span class="text-primary truncate"><?= htmlspecialchars($pdf['title']) ?></span>
    </nav>

    <article class="bg-surface-container rounded-3xl p-6 sm:p-10 border border-white/10 shadow-2xl space-y-8">
        <div class="flex flex-col md:flex-row gap-8 items-start pb-8 border-b border-white/10">
            <img src="<?= htmlspecialchars($pdf['thumbnail']) ?>" alt="<?= htmlspecialchars($pdf['title']) ?>" class="w-full md:w-56 h-72 object-cover rounded-2xl shadow-xl border border-white/10 shrink-0">
            
            <div class="space-y-4">
                <span class="px-3 py-1 rounded-full bg-purple-500/20 text-purple-300 text-xs font-semibold uppercase font-sans">
                    <?= htmlspecialchars($pdf['category_name']) ?>
                </span>

                <h1 class="text-2xl sm:text-3xl font-extrabold text-on-surface font-sans leading-tight">
                    <?= htmlspecialchars($pdf['title']) ?>
                </h1>

                <p class="text-sm sm:text-base text-on-surface-variant leading-relaxed">
                    <?= htmlspecialchars($pdf['description']) ?>
                </p>

                <div class="flex flex-wrap items-center gap-3 pt-2 text-xs text-on-surface-variant font-sans">
                    <span class="p-2 rounded-lg bg-surface-container-high border border-white/5">సైజు: <?= htmlspecialchars($pdf['file_size']) ?></span>
                    <span class="p-2 rounded-lg bg-surface-container-high border border-white/5">పేజీలు: <?= htmlspecialchars($pdf['pages_count']) ?></span>
                    <span class="p-2 rounded-lg bg-purple-950/40 text-purple-300 border border-purple-500/20"><?= htmlspecialchars($pdf['downloads']) ?></span>
                </div>
            </div>
        </div>

        <!-- Highlights & Download Section -->
        <div class="space-y-6">
            <h2 class="text-xl sm:text-2xl font-bold text-primary pb-2 border-b border-white/10">
                ఈ PDF లో ఏముంది? (Features & Contents)
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <?php foreach ($pdf['features'] as $feat): ?>
                    <div class="p-4 rounded-xl bg-surface-container-high/70 border border-white/5 flex items-center gap-3">
                        <span class="material-symbols-outlined text-purple-400 text-xl">verified</span>
                        <span class="text-sm text-on-surface font-medium"><?= htmlspecialchars($feat) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Instant Download Box -->
            <div class="p-8 rounded-2xl bg-gradient-to-br from-purple-950/40 via-surface-container to-surface-container-lowest border border-purple-500/30 text-center space-y-4 shadow-xl">
                <span class="material-symbols-outlined text-4xl text-purple-400">cloud_download</span>
                <h3 class="text-lg sm:text-xl font-bold text-on-surface">ఉచితంగా ఇప్పుడే డౌన్‌లోడ్ చేసుకోండి</h3>
                <p class="text-xs sm:text-sm text-on-surface-variant max-w-md mx-auto">
                    ఎలాంటి రిజిస్ట్రేషన్ అవసరం లేదు. వెంటనే మీ మొబైల్ లేదా కంప్యూటర్‌లో సేవ్ చేసుకోండి.
                </p>

                <div class="pt-2">
                    <button type="button" id="start-download-btn" class="btn-gold px-8 py-3.5 rounded-xl font-bold text-sm inline-flex items-center gap-2 shadow-lg">
                        <span class="material-symbols-outlined">download</span>
                        డౌన్‌లోడ్ చేయండి (Free PDF Download)
                    </button>
                </div>
            </div>
        </div>

        <!-- Footer Actions -->
        <div class="pt-6 border-t border-white/10 flex items-center justify-between">
            <a href="<?= base_url('pdfs.php') ?>" class="btn-outline-gold px-5 py-2 rounded-xl text-xs font-bold">
                ← అన్ని ఉచిత PDFs
            </a>
            <button type="button" class="btn-gold px-5 py-2 rounded-xl text-xs font-bold share-quote-btn">
                షేర్ చేయండి
            </button>
        </div>
    </article>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dlBtn = document.getElementById('start-download-btn');
    if (dlBtn) {
        dlBtn.addEventListener('click', function() {
            dlBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> డౌన్‌లోడ్ అవుతోంది...';
            setTimeout(() => {
                dlBtn.innerHTML = '<span class="material-symbols-outlined">check</span> డౌన్‌లోడ్ విజయవంతమైంది!';
                if (typeof showToast === 'function') {
                    showToast('PDF విజయవంతంగా డౌన్‌లోడ్ అయ్యింది!');
                }
            }, 1200);
        });
    }
});
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
