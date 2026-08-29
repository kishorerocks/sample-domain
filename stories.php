<?php
// stories.php - Motivational Stories Category Page
require_once __DIR__ . '/functions.php';

$custom_page_title = 'ప్రేరణాత్మక కథలు & జీవిత పాఠాలు | KK LifeWise';
$custom_page_desc = 'మనసును తాకే గొప్ప ప్రేరణ కథలు, నీతి సూత్రాలు మరియు విజయ ప్రయాణాలు.';

include __DIR__ . '/header.php';
?>

<div class="bg-hero-pattern py-5 border-bottom border-stone-200">
  <div class="container py-lg-3">
    <div class="max-w-3xl">
      <div class="badge badge-pill badge-gold mb-2">
        <i class="bi bi-journal-richtext text-warning"></i> ప్రేరణాత్మక కథలు
      </div>
      <h1 class="hero-heading font-serif-telugu fw-bold text-stone-900 mb-3" style="font-size: 2.8rem;">
        ప్రేరణ కథలు (Inspiring Stories)
      </h1>
      <p class="text-stone-600 fs-5 mb-0" style="line-height: 1.6;">
        ఒక్క చిన్న కథ మన జీవిత దృక్పథాన్ని మార్చగలదు. మనసును హత్తుకునే గొప్ప ఆలోచనలను రేకెత్తించే నీతి కథలు.
      </p>
    </div>
  </div>
</div>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-4">
      <?php foreach ($stories as $story): ?>
        <div class="col-lg-4 col-md-6">
          <div class="lw-card">
            <div class="card-img-wrap">
              <img src="<?php echo htmlspecialchars($story['image']); ?>" alt="<?php echo htmlspecialchars($story['title']); ?>">
              <span class="position-absolute top-0 start-0 m-3 badge bg-stone-900 bg-opacity-90 text-warning px-2.5 py-1 rounded-pill small">
                కథ
              </span>
            </div>
            <div class="p-4 d-flex flex-column flex-grow-1">
              <h4 class="fs-5 fw-bold text-stone-900 mb-2">
                <a href="/story-detail.php?slug=<?php echo $story['slug']; ?>" class="text-decoration-none text-stone-900 hover-warning">
                  <?php echo htmlspecialchars($story['title']); ?>
                </a>
              </h4>
              <p class="text-stone-600 small flex-grow-1 mb-3"><?php echo htmlspecialchars($story['summary'] ?? ($story['moral'] ?? '')); ?></p>
              <?php if (!empty($story['moral'])): ?>
                <div class="p-2.5 rounded-3 bg-warning bg-opacity-10 text-warning-emphasis small fw-semibold mb-3 border border-warning border-opacity-20">
                  <i class="bi bi-gem me-1"></i> నీతి: <?php echo htmlspecialchars($story['moral']); ?>
                </div>
              <?php endif; ?>
              <div class="pt-3 border-top border-stone-100 mt-auto text-end">
                <a href="/story-detail.php?slug=<?php echo $story['slug']; ?>" class="btn btn-sm btn-gold">
                  పూర్తి కథ చదవండి <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
