<?php
// video-detail.php - Single Video Player & Details
require_once __DIR__ . '/functions.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$video = get_video_by_id($id);

if (!$video) {
    $video = $videos[0];
}

$custom_page_title = $video['title'] . ' | KK LifeWise Videos';
$custom_page_desc = $video['description'] ?? 'KK Motivation Telugu ప్రత్యేక వీడియో.';

include __DIR__ . '/header.php';
?>

<div class="bg-dark text-white py-4 border-bottom border-stone-800">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a href="/index.php" class="text-decoration-none text-stone-400">హోమ్</a></li>
        <li class="breadcrumb-item"><a href="/videos.php" class="text-decoration-none text-stone-400">వీడియోలు</a></li>
        <li class="breadcrumb-item active text-warning text-truncate" style="max-width: 300px;" aria-current="page"><?php echo htmlspecialchars($video['title']); ?></li>
      </ol>
    </nav>
  </div>
</div>

<section class="py-5 bg-dark-mesh text-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        
        <!-- Video Player -->
        <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-lg border border-stone-800 mb-4">
          <iframe src="https://www.youtube.com/embed/<?php echo $video['youtube_id']; ?>?autoplay=1" title="<?php echo htmlspecialchars($video['title']); ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <!-- Video Info -->
        <div class="p-4 rounded-4 bg-stone-900 border border-stone-800 mb-5">
          <span class="badge bg-danger px-3 py-1 rounded-pill small mb-2"><?php echo htmlspecialchars($video['category'] ?? 'Motivation'); ?></span>
          <h1 class="fw-bold text-white mb-3 fs-3 font-telugu"><?php echo htmlspecialchars($video['title']); ?></h1>
          
          <div class="d-flex flex-wrap align-items-center justify-content-between text-stone-400 small pb-3 border-bottom border-stone-800 gap-2 mb-3">
            <div class="d-flex align-items-center gap-3">
              <span><i class="bi bi-clock"></i> <?php echo htmlspecialchars($video['duration']); ?></span>
              <span><i class="bi bi-eye"></i> <?php echo htmlspecialchars($video['views']); ?> వీక్షణలు</span>
            </div>
            <div class="d-flex gap-2">
              <a href="https://www.youtube.com/watch?v=<?php echo $video['youtube_id']; ?>" target="_blank" rel="noopener" class="btn btn-sm btn-danger rounded-pill">
                <i class="bi bi-youtube"></i> YouTube లో తెరవండి
              </a>
              <button type="button" class="btn btn-sm btn-success rounded-pill" onclick="window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent('<?php echo addslashes($video['title']); ?> - ' + window.location.href), '_blank')">
                <i class="bi bi-whatsapp"></i> షేర్
              </button>
            </div>
          </div>

          <p class="text-stone-300 mb-0 font-telugu" style="line-height: 1.7;">
            <?php echo htmlspecialchars($video['description'] ?? 'KK Motivation Telugu రూపొందించిన ఈ వీడియో ద్వారా మీ ఆలోచనలను సానుకూలంగా మార్చుకోండి.'); ?>
          </p>
        </div>

        <!-- Other Recommended Videos -->
        <h4 class="fw-bold text-white mb-4">మరిన్ని స్ఫూర్తిదాయక వీడియోలు</h4>
        <div class="row g-4">
          <?php foreach ($videos as $v): if ($v['id'] == $video['id']) continue; ?>
            <div class="col-md-4">
              <div class="lw-card-dark p-3 h-100">
                <div class="video-thumbnail-container mb-3">
                  <img src="<?php echo htmlspecialchars($v['thumbnail']); ?>" alt="<?php echo htmlspecialchars($v['title']); ?>">
                  <a href="/video-detail.php?id=<?php echo $v['id']; ?>" class="play-overlay-btn text-decoration-none">
                    <i class="bi bi-play-fill"></i>
                  </a>
                  <span class="video-duration-badge"><?php echo htmlspecialchars($v['duration']); ?></span>
                </div>
                <h6 class="fw-bold text-white mb-2">
                  <a href="/video-detail.php?id=<?php echo $v['id']; ?>" class="text-decoration-none text-white hover-warning">
                    <?php echo htmlspecialchars($v['title']); ?>
                  </a>
                </h6>
                <small class="text-stone-400"><i class="bi bi-eye"></i> <?php echo htmlspecialchars($v['views']); ?></small>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
