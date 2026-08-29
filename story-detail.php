<?php
// story-detail.php - Single Motivational Story Detail & Story Episodes
require_once __DIR__ . '/functions.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$current_episode = isset($_GET['episode']) ? trim($_GET['episode']) : '';

$story = $slug ? get_story_by_slug($slug) : ($id ? get_story_by_id($id) : null);

if (!$story) {
    $story = $stories[0] ?? [
        'id' => 1,
        'slug' => 'the-bamboo-tree-patience',
        'title' => 'చైనీస్ వెదురు చెట్టు కథ | సహనం మరియు సంకల్పం',
        'summary' => '4 సంవత్సరాల పాటు భూమి కింద ఏ మార్పు లేకుండా కనిపించినా, 5వ సంవత్సరంలో 80 అడుగులు ఎదిగే వెదురు కథ.',
        'author' => 'KK LifeWise Team',
        'image' => 'https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?w=800&auto=format&fit=crop&q=80',
        'moral' => 'కఠిన పరిశ్రమకు ఫలితం వెంటనే కనిపించకపోయినా సహనంతో ఉంటే అద్భుతమైన విజయం లభిస్తుంది.',
        'episodes' => []
    ];
}

$custom_page_title = $story['title'] . ' | KK LifeWise Stories';
$custom_page_desc = $story['summary'] ?? ($story['moral'] ?? '');

include __DIR__ . '/header.php';
?>

<div class="bg-stone-100 py-4 border-bottom border-stone-200">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a href="/index.php" class="text-decoration-none text-stone-600">హోమ్</a></li>
        <li class="breadcrumb-item"><a href="/stories.php" class="text-decoration-none text-stone-600">కథలు</a></li>
        <li class="breadcrumb-item active text-stone-900 text-truncate" style="max-width: 300px;" aria-current="page"><?php echo htmlspecialchars($story['title']); ?></li>
      </ol>
    </nav>
  </div>
</div>

<article class="py-5 bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        
        <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">ప్రేరణాత్మక కథ</span>
        <h1 class="font-serif-telugu fw-bold text-stone-900 mb-3" style="font-size: 2.3rem;">
          <?php echo htmlspecialchars($story['title']); ?>
        </h1>

        <?php if (!empty($story['image'])): ?>
          <div class="rounded-4 overflow-hidden shadow mb-4">
            <img src="<?php echo htmlspecialchars($story['image']); ?>" class="w-100 object-fit-cover" style="max-height: 400px;" alt="<?php echo htmlspecialchars($story['title']); ?>">
          </div>
        <?php endif; ?>

        <?php if (!empty($story['moral'])): ?>
          <div class="p-4 rounded-4 bg-warning bg-opacity-15 border border-warning border-opacity-30 mb-4">
            <h5 class="fw-bold text-stone-900 mb-1"><i class="bi bi-gem text-warning me-2"></i>ఈ కథలోని నీతి (Moral):</h5>
            <p class="text-stone-800 mb-0 font-serif-telugu fs-5"><?php echo htmlspecialchars($story['moral']); ?></p>
          </div>
        <?php endif; ?>

        <!-- Multi-Episode Content or Standard Content -->
        <?php if (!empty($story['episodes'])): ?>
          <div class="mb-4">
            <div class="d-flex flex-wrap gap-2 pb-3 mb-4 border-bottom">
              <a href="/story-detail.php?slug=<?php echo $story['slug']; ?>" class="btn btn-sm rounded-pill <?php echo empty($current_episode) ? 'btn-warning fw-bold' : 'btn-outline-secondary'; ?>">
                అన్ని ఎపిసోడ్లు
              </a>
              <?php foreach ($story['episodes'] as $ep): ?>
                <a href="/story-detail.php?slug=<?php echo $story['slug']; ?>&episode=<?php echo $ep['episode']; ?>" class="btn btn-sm rounded-pill <?php echo ($current_episode === $ep['episode']) ? 'btn-warning fw-bold' : 'btn-outline-secondary'; ?>">
                  <?php echo htmlspecialchars($ep['title']); ?>
                </a>
              <?php endforeach; ?>
            </div>

            <?php foreach ($story['episodes'] as $ep): ?>
              <?php if (empty($current_episode) || $current_episode === $ep['episode']): ?>
                <div class="story-episode-card p-4 rounded-4 bg-stone-50 border mb-4">
                  <h4 class="fw-bold text-stone-900 mb-3 text-warning-emphasis"><?php echo htmlspecialchars($ep['title']); ?></h4>
                  <div class="article-content-body font-telugu text-stone-800 fs-6" style="line-height: 1.8;">
                    <?php echo $ep['content']; ?>
                  </div>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        <?php elseif (!empty($story['content'])): ?>
          <div class="article-content-body font-telugu text-stone-800 fs-6" style="line-height: 1.8;">
            <?php echo $story['content']; ?>
          </div>
        <?php endif; ?>

        <div class="mt-5 pt-4 border-top d-flex justify-content-between align-items-center">
          <a href="/stories.php" class="btn btn-outline-dark rounded-pill">
            <i class="bi bi-arrow-left"></i> అన్ని కథలు
          </a>
          <button type="button" class="btn btn-success rounded-pill" onclick="window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent('<?php echo addslashes($story['title']); ?> - ' + window.location.href), '_blank')">
            <i class="bi bi-whatsapp"></i> WhatsApp షేర్
          </button>
        </div>

      </div>
    </div>
  </div>
</article>

<?php include __DIR__ . '/footer.php'; ?>
