<?php
// videos.php - Video Hub Page
require_once __DIR__ . '/functions.php';

$custom_page_title = 'వీడియో హబ్ - KK Motivation Telugu | KK LifeWise';
$custom_page_desc = 'శ్రీకృష్ణుని విజయ రహస్యాలు మరియు జీవితాన్ని మార్చే KK Motivation Telugu ప్రత్యేక వీడియోలు.';

include __DIR__ . '/header.php';
?>

<div class="bg-dark-mesh text-white py-5 border-bottom border-stone-800">
  <div class="container py-lg-3">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3">
      <div class="max-w-2xl">
        <div class="badge badge-pill badge-dark mb-2">
          <i class="bi bi-youtube text-danger"></i> వీడియో లైబ్రరీ
        </div>
        <h1 class="hero-heading font-serif-telugu fw-bold text-white mb-3" style="font-size: 2.8rem;">
          KK Motivation Telugu - వీడియోలు
        </h1>
        <p class="text-stone-300 fs-5 mb-0" style="line-height: 1.6;">
          500,000+ సబ్స్క్రైబర్స్ విశ్వసించే తెలుగు మోటివేషన్ & లైఫ్ లెసన్స్ వీడియోలు.
        </p>
      </div>

      <div>
        <a href="<?php echo YOUTUBE_CHANNEL_URL; ?>" target="_blank" rel="noopener" class="btn btn-danger rounded-pill px-4 py-2 fw-bold d-inline-flex align-items-center gap-2">
          <i class="bi bi-youtube"></i> అధికారిక ఛానెల్ సబ్‌స్క్రైబ్
        </a>
      </div>
    </div>
  </div>
</div>

<section class="py-5 bg-dark text-white">
  <div class="container">
    
    <!-- Featured Hero Video -->
    <div class="row g-4 align-items-center mb-5 p-4 rounded-4 bg-stone-900 border border-stone-800 shadow-lg">
      <div class="col-lg-7">
        <div class="video-thumbnail-container shadow">
          <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?w=1000&auto=format&fit=crop&q=80" class="w-100 h-100 object-fit-cover" alt="శ్రీకృష్ణుని 6 విజయ రహస్యాలు">
          <button type="button" class="play-overlay-btn" onclick="openVideoModal('QXhd_yW2VEE', 'శ్రీకృష్ణుని 6 విజయ రహస్యాలు | తెలిస్తే జీవితం మారుతుంది!')">
            <i class="bi bi-play-fill"></i>
          </button>
          <span class="video-duration-badge">14:20</span>
        </div>
      </div>
      <div class="col-lg-5">
        <span class="badge bg-danger px-3 py-1 rounded-pill small mb-2">🔥 ఫీచర్డ్ వీడియో</span>
        <h3 class="fw-bold text-white mb-3 fs-4 font-telugu">శ్రీకృష్ణుని 6 విజయ రహస్యాలు | తెలిస్తే జీవితం మారుతుంది!</h3>
        <p class="text-stone-300 small mb-4" style="line-height: 1.6;">
          భగవద్గీత మరియు మహాభారతం నుండి శ్రీకృష్ణుడు అందించిన 6 అద్భుతమైన జీవిత సూత్రాలు. వీటిని జీవితంలో ఆచరిస్తే ఎలాంటి సంక్షోభాలనైనా దాటి విజేతగా నిలవవచ్చు.
        </p>
        <div class="d-flex gap-3">
          <button type="button" class="btn btn-gold flex-grow-1" onclick="openVideoModal('QXhd_yW2VEE', 'శ్రీకృష్ణుని 6 విజయ రహస్యాలు | తెలిస్తే జీవితం మారుతుంది!')">
            <i class="bi bi-play-circle"></i> ఇప్పుడే చూడండి
          </button>
          <a href="/video-detail.php?id=1" class="btn btn-outline-light">
            వివరాలు
          </a>
        </div>
      </div>
    </div>

    <!-- Video Grid -->
    <div class="row g-4">
      <?php foreach ($videos as $vid): ?>
        <div class="col-lg-4 col-md-6">
          <div class="lw-card-dark p-3 h-100 d-flex flex-column">
            <div class="video-thumbnail-container mb-3">
              <img src="<?php echo htmlspecialchars($vid['thumbnail']); ?>" alt="<?php echo htmlspecialchars($vid['title']); ?>">
              <button type="button" class="play-overlay-btn" onclick="openVideoModal('<?php echo $vid['youtube_id']; ?>', '<?php echo addslashes($vid['title']); ?>')">
                <i class="bi bi-play-fill"></i>
              </button>
              <span class="video-duration-badge"><?php echo htmlspecialchars($vid['duration']); ?></span>
            </div>
            <h5 class="fw-bold text-white fs-6 mb-2 flex-grow-1"><?php echo htmlspecialchars($vid['title']); ?></h5>
            <div class="d-flex align-items-center justify-content-between text-stone-400 small pt-2 border-top border-stone-800 mt-auto">
              <span><i class="bi bi-eye"></i> <?php echo htmlspecialchars($vid['views']); ?></span>
              <a href="/video-detail.php?id=<?php echo $vid['id']; ?>" class="text-warning text-decoration-none small">
                పూర్తి పేజీ <i class="bi bi-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
