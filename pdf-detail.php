<?php
// pdf-detail.php - Free Downloadable PDF Resource
require_once __DIR__ . '/functions.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$pdf = $slug ? get_pdf_by_slug($slug) : ($id ? get_pdf_by_id($id) : null);

if (!$pdf) {
    $pdf = $pdfs[0] ?? [
        'id' => 1,
        'slug' => 'telugu-goal-setting-workbook-2025',
        'title' => 'శ్రీకృష్ణుని 6 విజయ రహస్యాలు - స్టడీ గైడ్ & యాక్షన్ ప్లానర్',
        'category' => 'productivity',
        'category_name' => 'గైడ్ & వర్క్‌బుక్',
        'pages_count' => '12 Pages',
        'file_size' => '2.4 MB',
        'description' => 'భగవద్గీతలోని 6 ప్రధాన సూత్రాలను మీ దైనందిన జీవితంలో ఆచరించడానికి అవసరమైన ప్రాక్టికల్ డైలీ చెక్‌లిస్ట్ మరియు జర్నలింగ్ వర్క్‌షీట్.',
        'thumbnail' => 'https://images.unsplash.com/photo-1544717305-2782549b5136?w=600&auto=format&fit=crop&q=80',
        'download_url' => '#'
    ];
}

$pdf_cover = $pdf['thumbnail'] ?? ($pdf['cover'] ?? '');
$pdf_pages = $pdf['pages_count'] ?? ($pdf['pages'] ?? '');

$custom_page_title = $pdf['title'] . ' | KK LifeWise Free PDFs';
$custom_page_desc = $pdf['description'];

include __DIR__ . '/header.php';
?>

<div class="bg-stone-100 py-4 border-bottom border-stone-200">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a href="/index.php" class="text-decoration-none text-stone-600">హోమ్</a></li>
        <li class="breadcrumb-item"><a href="/pdfs.php" class="text-decoration-none text-stone-600">Free PDFs</a></li>
        <li class="breadcrumb-item active text-stone-900 text-truncate" style="max-width: 300px;" aria-current="page"><?php echo htmlspecialchars($pdf['title']); ?></li>
      </ol>
    </nav>
  </div>
</div>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-5 align-items-center justify-content-center">
      <div class="col-md-4 text-center">
        <div class="p-3 bg-stone-50 rounded-4 border shadow-lg mx-auto" style="max-width: 300px;">
          <img src="<?php echo htmlspecialchars($pdf_cover); ?>" class="img-fluid rounded-3 mb-3" alt="<?php echo htmlspecialchars($pdf['title']); ?>">
          <div class="badge bg-danger px-3 py-1 rounded-pill small mb-2">
            <i class="bi bi-file-earmark-pdf-fill"></i> PDF డాక్యుమెంట్
          </div>
          <div class="text-stone-500 small">
            <span><?php echo $pdf_pages; ?></span> • <span><?php echo $pdf['file_size']; ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-7">
        <span class="badge bg-warning text-dark px-3 py-1.5 rounded-pill fw-bold mb-2">ఉచిత డౌన్‌లోడ్</span>
        <h1 class="font-serif-telugu fw-bold text-stone-900 mb-3" style="font-size: 2.3rem;">
          <?php echo htmlspecialchars($pdf['title']); ?>
        </h1>
        <p class="fs-5 text-stone-700 mb-4" style="line-height: 1.6;">
          <?php echo htmlspecialchars($pdf['description']); ?>
        </p>

        <div class="p-4 rounded-4 bg-stone-50 border mb-4">
          <h6 class="fw-bold text-stone-900 mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>ఈ గైడ్‌లో ఏమి లభిస్తుంది?</h6>
          <ul class="list-unstyled mb-0 text-stone-700 small d-flex flex-column gap-2">
            <li><i class="bi bi-arrow-right-short text-warning"></i> దశలవారీగా అమలు చేయగల రోజువారీ చెక్‌లిస్ట్</li>
            <li><i class="bi bi-arrow-right-short text-warning"></i> ఆచరణాత్మక జర్నలింగ్ ప్రశ్నలు</li>
            <li><i class="bi bi-arrow-right-short text-warning"></i> హై-రిజల్యూషన్ ప్రింట్ చేయదగిన లేఅవుట్</li>
          </ul>
        </div>

        <div class="d-flex flex-wrap gap-3">
          <a href="<?php echo htmlspecialchars($pdf['download_url'] ?? '#'); ?>" download class="btn btn-gold btn-lg" onclick="showToast('PDF డౌన్‌లోడ్ ప్రారంభమైంది!');">
            <i class="bi bi-download"></i> ఉచితంగా డౌన్‌లోడ్ చేసుకోండి (PDF)
          </a>
          <a href="/pdfs.php" class="btn btn-outline-dark btn-lg">
            అన్ని PDFs
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
