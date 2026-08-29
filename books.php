<?php
// books.php - Book Summaries Page
require_once __DIR__ . '/functions.php';

$custom_page_title = 'ప్రపంచ ప్రసిద్ధ పుస్తకాల తెలుగు సారాంశాలు | KK LifeWise';
$custom_page_desc = 'అంతర్జాతీయంగా అత్యధికంగా అమ్ముడైన బెస్ట్ సెల్లర్ పుస్తకాల ముఖ్య పాఠాలు సరళమైన తెలుగులో.';

include __DIR__ . '/header.php';
?>

<div class="bg-hero-pattern py-5 border-bottom border-stone-200">
  <div class="container py-lg-3">
    <div class="max-w-3xl">
      <div class="badge badge-pill badge-gold mb-2">
        <i class="bi bi-book-half text-warning"></i> బెస్ట్ సెల్లర్స్ లైబ్రరీ
      </div>
      <h1 class="hero-heading font-serif-telugu fw-bold text-stone-900 mb-3" style="font-size: 2.8rem;">
        పుస్తక సారాంశాలు (Book Summaries)
      </h1>
      <p class="text-stone-600 fs-5 mb-0" style="line-height: 1.6;">
        వందలాది పేజీల పుస్తకాలను చదవడానికి సమయం లేదా? ప్రపంచ ప్రఖ్యాత పుస్తకాలలోని అత్యంత శక్తివంతమైన 4-5 సూత్రాలను 5 నిమిషాల్లో సులభమైన తెలుగులో తెలుసుకోండి.
      </p>
    </div>
  </div>
</div>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-4">
      <?php foreach ($books as $book): ?>
        <div class="col-lg-4 col-md-6">
          <div class="lw-card p-4">
            
            <div class="row g-3 align-items-center mb-3">
              <div class="col-4">
                <div class="book-card-visual">
                  <img src="<?php echo htmlspecialchars($book['cover'] ?? ($book['cover_image'] ?? '')); ?>" alt="<?php echo htmlspecialchars($book['title']); ?>">
                </div>
              </div>
              <div class="col-8">
                <span class="badge bg-warning bg-opacity-20 text-warning-emphasis rounded-pill small mb-1"><?php echo htmlspecialchars($book['category_name'] ?? $book['category']); ?></span>
                <h5 class="fw-bold text-stone-900 mb-1 fs-6"><?php echo htmlspecialchars($book['title']); ?></h5>
                <p class="text-stone-500 small mb-2">రచయిత: <?php echo htmlspecialchars($book['author']); ?></p>
                <div class="text-warning small">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <span class="text-muted ms-1 small">(<?php echo $book['rating']; ?>)</span>
                </div>
              </div>
            </div>

            <p class="text-stone-600 small flex-grow-1 mb-3" style="line-height: 1.5;">
              <?php echo htmlspecialchars($book['summary'] ?? ($book['description'] ?? '')); ?>
            </p>

            <div class="d-flex align-items-center justify-content-between pt-3 border-top border-stone-100">
              <button type="button" class="btn btn-sm btn-outline-warning rounded-pill open-book-modal-btn" data-id="<?php echo $book['id']; ?>">
                <i class="bi bi-journal-text"></i> క్విక్ సారాంశం
              </button>
              <a href="/book-detail.php?slug=<?php echo $book['slug']; ?>" class="btn btn-sm btn-gold">
                పూర్తి సారాంశం <i class="bi bi-arrow-right"></i>
              </a>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
