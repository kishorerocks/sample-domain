<?php
// article.php - Single Article Detail & AJAX Endpoint
require_once __DIR__ . '/functions.php';

// Handle AJAX Request from Quick View Modal
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    header('Content-Type: application/json');
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    $slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
    
    $article = $id > 0 ? get_article_by_id($id) : get_article_by_slug($slug);
    if ($article) {
        echo json_encode($article);
    } else {
        echo json_encode(['error' => 'వ్యాసం దొరకలేదు.']);
    }
    exit;
}

// Regular Page View
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$article = $slug ? get_article_by_slug($slug) : ($id ? get_article_by_id($id) : null);

if (!$article) {
    // Fallback to first article
    $article = $articles[0];
}

$custom_page_title = $article['title'] . ' | KK LifeWise';
$custom_page_desc = $article['excerpt'];
$related_articles = get_related_articles($article['category'], $article['id'], 3);

include __DIR__ . '/header.php';
?>

<div class="bg-stone-100 py-4 border-bottom border-stone-200">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a href="/index.php" class="text-decoration-none text-stone-600">హోమ్</a></li>
        <li class="breadcrumb-item"><a href="/<?php echo $article['category']; ?>.php" class="text-decoration-none text-stone-600"><?php echo htmlspecialchars($article['category_name']); ?></a></li>
        <li class="breadcrumb-item active text-stone-900 text-truncate" style="max-width: 300px;" aria-current="page"><?php echo htmlspecialchars($article['title']); ?></li>
      </ol>
    </nav>
  </div>
</div>

<article class="py-5 bg-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        
        <!-- Article Header -->
        <div class="mb-4">
          <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">
            <?php echo htmlspecialchars($article['category_name']); ?>
          </span>
          <h1 class="font-serif-telugu fw-bold text-stone-900 mb-3" style="font-size: 2.4rem; line-height: 1.25;">
            <?php echo htmlspecialchars($article['title']); ?>
          </h1>

          <div class="d-flex flex-wrap align-items-center justify-content-between text-stone-500 small pb-3 border-bottom gap-2">
            <div class="d-flex align-items-center gap-3">
              <span><i class="bi bi-person-fill text-warning"></i> <?php echo htmlspecialchars($article['author']); ?></span>
              <span><i class="bi bi-calendar3"></i> <?php echo htmlspecialchars($article['date']); ?></span>
              <span><i class="bi bi-clock"></i> <?php echo htmlspecialchars($article['read_time']); ?></span>
            </div>
            
            <div class="d-flex align-items-center gap-2">
              <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill" onclick="window.print()" title="ప్రింట్ చేయండి">
                <i class="bi bi-printer"></i>
              </button>
              <button type="button" class="btn btn-sm btn-success rounded-pill" onclick="window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent('<?php echo addslashes($article['title']); ?> - ' + window.location.href), '_blank')">
                <i class="bi bi-whatsapp"></i> షేర్
              </button>
            </div>
          </div>
        </div>

        <!-- Featured Media -->
        <?php if (!empty($article['youtube_id'])): ?>
          <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-lg mb-5">
            <iframe src="https://www.youtube.com/embed/<?php echo $article['youtube_id']; ?>" title="<?php echo htmlspecialchars($article['title']); ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php elseif (!empty($article['image'])): ?>
          <div class="rounded-4 overflow-hidden shadow mb-5">
            <img src="<?php echo htmlspecialchars($article['image']); ?>" class="w-100 object-fit-cover" style="max-height: 440px;" alt="<?php echo htmlspecialchars($article['title']); ?>">
          </div>
        <?php endif; ?>

        <!-- Excerpt Box -->
        <div class="p-4 rounded-4 bg-stone-50 border-start border-4 border-warning mb-5">
          <p class="fs-5 text-stone-700 fw-medium mb-0 font-serif-telugu" style="line-height: 1.6;">
            <?php echo htmlspecialchars($article['excerpt']); ?>
          </p>
        </div>

        <!-- Article Rich Content -->
        <div class="article-content-body font-telugu text-stone-800 fs-6" style="line-height: 1.8;">
          <?php echo $article['content']; ?>
        </div>

        <!-- Tags -->
        <?php if (!empty($article['tags'])): ?>
          <div class="d-flex flex-wrap gap-2 my-5 pt-4 border-top">
            <span class="text-stone-500 small align-self-center me-2">ట్యాగ్‌లు:</span>
            <?php foreach ($article['tags'] as $tag): ?>
              <span class="badge bg-stone-100 text-stone-800 border px-3 py-1.5 rounded-pill">#<?php echo htmlspecialchars($tag); ?></span>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <!-- Author Bio Card -->
        <div class="p-4 rounded-4 bg-stone-50 border d-flex gap-4 align-items-center mb-5">
          <div class="brand-logo-icon flex-shrink-0" style="width: 56px; height: 56px; font-size: 26px;">
            <i class="bi bi-fire"></i>
          </div>
          <div>
            <h5 class="fw-bold text-stone-900 mb-1"><?php echo htmlspecialchars($article['author']); ?></h5>
            <p class="text-stone-600 small mb-0">
              తెలుగు ప్రజల్లో ఉన్నతమైన ఆలోచనా దృక్పథాన్ని, ఆత్మవిశ్వాసాన్ని నింపేందుకు <strong>KK LifeWise</strong> ఎడిటోరియల్ టీమ్ రూపొందించిన మార్గదర్శకం.
            </p>
          </div>
        </div>

        <!-- Related Articles -->
        <?php if (!empty($related_articles)): ?>
          <div class="mt-5 pt-4 border-top">
            <h3 class="fw-bold text-stone-900 mb-4 fs-4">సంబంధిత ఇతర వ్యాసాలు</h3>
            <div class="row g-4">
              <?php foreach ($related_articles as $rel): ?>
                <div class="col-md-6">
                  <div class="lw-card h-100">
                    <div class="card-img-wrap" style="aspect-ratio: 16/9;">
                      <img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>">
                    </div>
                    <div class="p-3 d-flex flex-column flex-grow-1">
                      <h6 class="fw-bold mb-2">
                        <a href="/article.php?slug=<?php echo $rel['slug']; ?>" class="text-decoration-none text-stone-900 hover-warning">
                          <?php echo htmlspecialchars($rel['title']); ?>
                        </a>
                      </h6>
                      <small class="text-stone-500 mt-auto"><i class="bi bi-clock"></i> <?php echo $rel['read_time']; ?></small>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</article>

<?php include __DIR__ . '/footer.php'; ?>
