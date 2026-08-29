<?php
// money.php - Money & Wealth Creation Category Page
require_once __DIR__ . '/functions.php';

$custom_page_title = 'మనీ & సంపద సృష్టి | KK LifeWise Finance';
$custom_page_desc = 'డబ్బును నిర్వహించడం, ఇన్వెస్ట్ చేయడం మరియు ఆర్థిక స్వేచ్ఛ సాధించడానికి తెలుగు ఫైనాన్షియల్ గైడ్స్.';

$money_articles = array_filter($articles, function($a) {
    return $a['category'] === 'money';
});

include __DIR__ . '/header.php';
?>

<div class="bg-hero-pattern py-5 border-bottom border-stone-200">
  <div class="container py-lg-3">
    <div class="max-w-3xl">
      <div class="badge badge-pill badge-gold mb-2">
        <i class="bi bi-coin text-warning"></i> ఆర్థిక వివేకం & సంపద
      </div>
      <h1 class="hero-heading font-serif-telugu fw-bold text-stone-900 mb-3" style="font-size: 2.8rem;">
        మనీ & సంపద (Money & Wealth)
      </h1>
      <p class="text-stone-600 fs-5 mb-0" style="line-height: 1.6;">
        డబ్బును కేవలం సంపాదించడం మాత్రమే కాదు; సంపాదించిన ప్రతి రూపాయిని మీ కోసం పనిచేయించేలా మార్చే సులభమైన ఫైనాన్షియల్ పాఠాలు.
      </p>
    </div>
  </div>
</div>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-4">
      <?php foreach ($money_articles as $art): ?>
        <div class="col-lg-4 col-md-6">
          <div class="lw-card">
            <div class="card-img-wrap">
              <img src="<?php echo htmlspecialchars($art['image']); ?>" alt="<?php echo htmlspecialchars($art['title']); ?>">
              <span class="position-absolute top-0 start-0 m-3 badge bg-stone-900 bg-opacity-90 text-warning px-2.5 py-1 rounded-pill small">
                <?php echo htmlspecialchars($art['category_name']); ?>
              </span>
            </div>
            <div class="p-4 d-flex flex-column flex-grow-1">
              <div class="d-flex align-items-center gap-2 text-stone-400 small mb-2">
                <i class="bi bi-clock"></i> <span><?php echo htmlspecialchars($art['read_time']); ?></span>
              </div>
              <h4 class="fs-5 fw-bold text-stone-900 mb-2">
                <a href="/article.php?slug=<?php echo $art['slug']; ?>" class="text-decoration-none text-stone-900 hover-warning">
                  <?php echo htmlspecialchars($art['title']); ?>
                </a>
              </h4>
              <p class="text-stone-600 small flex-grow-1 mb-4"><?php echo htmlspecialchars($art['excerpt']); ?></p>
              <div class="d-flex align-items-center justify-content-between pt-3 border-top border-stone-100 mt-auto">
                <button type="button" class="btn btn-sm btn-outline-warning rounded-pill open-article-modal-btn" data-id="<?php echo $art['id']; ?>">
                  <i class="bi bi-eye"></i> క్విక్ వ్యూ
                </button>
                <a href="/article.php?slug=<?php echo $art['slug']; ?>" class="btn btn-sm btn-gold">
                  చదవండి <i class="bi bi-arrow-right"></i>
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
