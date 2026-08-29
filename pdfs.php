<?php
// pdfs.php - Free Downloadable PDF Guides Page
require_once __DIR__ . '/functions.php';

$custom_page_title = 'ఉచిత PDF గైడ్స్ & వర్క్‌బుక్స్ | KK LifeWise';
$custom_page_desc = 'జీవిత లక్ష్యాలు, శ్రీకృష్ణుని విజయ రహస్యాలు మరియు మనీ మేనేజ్‌మెంట్ ఉచిత తెలుగు PDF వర్క్‌బుక్స్.';

include __DIR__ . '/header.php';
?>

<div class="bg-hero-pattern py-5 border-bottom border-stone-200">
  <div class="container py-lg-3">
    <div class="max-w-3xl">
      <div class="badge badge-pill badge-gold mb-2">
        <i class="bi bi-file-earmark-pdf-fill text-warning"></i> ఉచిత వనరులు
      </div>
      <h1 class="hero-heading font-serif-telugu fw-bold text-stone-900 mb-3" style="font-size: 2.8rem;">
        ఉచిత PDF గైడ్స్ (Free PDFs)
      </h1>
      <p class="text-stone-600 fs-5 mb-0" style="line-height: 1.6;">
        మీ దైనందిన జీవితంలో ఆచరించడానికి అవసరమైన స్టడీ ప్లానర్స్, డైలీ చెక్‌లిస్ట్‌లు మరియు ప్రాక్టికల్ వర్క్‌షీట్స్ ఉచితంగా డౌన్‌లోడ్ చేసుకోండి.
      </p>
    </div>
  </div>
</div>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-4">
      <?php foreach ($pdfs as $pdf): ?>
        <div class="col-lg-6">
          <div class="lw-card p-4">
            <div class="row g-4 align-items-center">
              <div class="col-sm-4 text-center">
                <img src="<?php echo htmlspecialchars($pdf['cover']); ?>" class="img-fluid rounded-3 shadow-sm" alt="<?php echo htmlspecialchars($pdf['title']); ?>">
              </div>
              <div class="col-sm-8 d-flex flex-column">
                <div class="d-flex justify-content-between align-items-start mb-2">
                  <span class="badge bg-warning text-dark"><?php echo htmlspecialchars($pdf['category']); ?></span>
                  <span class="small text-muted"><?php echo $pdf['pages']; ?> • <?php echo $pdf['file_size']; ?></span>
                </div>
                <h5 class="fw-bold text-stone-900 mb-2"><?php echo htmlspecialchars($pdf['title']); ?></h5>
                <p class="text-stone-600 small mb-3 flex-grow-1"><?php echo htmlspecialchars($pdf['description']); ?></p>
                <div class="d-flex gap-2 mt-auto">
                  <a href="/pdf-detail.php?id=<?php echo $pdf['id']; ?>" class="btn btn-sm btn-gold">
                    <i class="bi bi-download"></i> డౌన్‌లోడ్
                  </a>
                  <a href="/pdf-detail.php?id=<?php echo $pdf['id']; ?>" class="btn btn-sm btn-outline-dark">
                    వివరాలు
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
