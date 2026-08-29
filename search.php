<?php
// search.php - Live Search JSON API & Full Search Page
require_once __DIR__ . '/functions.php';

$query = isset($_GET['q']) ? trim($_GET['q']) : '';

// AJAX Endpoint for Modal Search
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    header('Content-Type: application/json');
    $results = search_all_content($query);
    echo json_encode($results);
    exit;
}

$results = search_all_content($query);
$custom_page_title = 'శోధన ఫలితాలు: ' . htmlspecialchars($query) . ' | KK LifeWise';

include __DIR__ . '/header.php';
?>

<div class="bg-stone-100 py-4 border-bottom border-stone-200">
  <div class="container">
    <h1 class="fw-bold fs-3 text-stone-900 mb-0">
      శోధన ఫలితాలు: <span class="text-warning-emphasis">"<?php echo htmlspecialchars($query); ?>"</span>
    </h1>
  </div>
</div>

<div class="py-5 bg-white">
  <div class="container">
    
    <!-- Search Bar Input -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8">
        <form action="/search.php" method="GET" class="input-group input-group-lg shadow-sm">
          <input type="text" name="q" class="form-control" value="<?php echo htmlspecialchars($query); ?>" placeholder="శోధించండి (ఉదా: శ్రీకృష్ణుడు, మనీ, పుస్తకం)..." required>
          <button class="btn btn-gold" type="submit">శోధించండి</button>
        </form>
      </div>
    </div>

    <!-- Search Results Section -->
    <?php
    $total = count($results['articles']) + count($results['books']) + count($results['videos']) + count($results['stories']);
    ?>

    <?php if (empty($query)): ?>
      <div class="text-center py-5 text-muted">
        <i class="bi bi-search display-4 text-warning mb-3 d-block"></i>
        <h4>ఏదైనా టాపిక్ లేదా అంశం శోధించండి</h4>
      </div>
    <?php elseif ($total === 0): ?>
      <div class="text-center py-5">
        <i class="bi bi-emoji-frown display-4 text-muted mb-3 d-block"></i>
        <h3>క్షమించండి! "<?php echo htmlspecialchars($query); ?>" కి సరిపడే ఫలితాలు దొరకలేదు.</h3>
        <p class="text-muted">దయచేసి వేరే పదాలతో లేదా సంబంధిత టాపిక్స్‌తో ప్రయత్నించండి.</p>
        <a href="/index.php" class="btn btn-gold-outline mt-3">హోమ్ పేజీకి వెళ్లండి</a>
      </div>
    <?php else: ?>
      
      <!-- Articles Results -->
      <?php if (!empty($results['articles'])): ?>
        <div class="mb-5">
          <h3 class="fw-bold text-stone-900 mb-4 pb-2 border-bottom"><i class="bi bi-newspaper text-warning me-2"></i>వ్యాసాలు (<?php echo count($results['articles']); ?>)</h3>
          <div class="row g-4">
            <?php foreach ($results['articles'] as $art): ?>
              <div class="col-md-6 col-lg-4">
                <div class="lw-card p-4">
                  <span class="badge bg-warning text-dark mb-2 align-self-start"><?php echo $art['category_name']; ?></span>
                  <h5 class="fw-bold mb-2">
                    <a href="/article.php?slug=<?php echo $art['slug']; ?>" class="text-decoration-none text-stone-900 hover-warning">
                      <?php echo htmlspecialchars($art['title']); ?>
                    </a>
                  </h5>
                  <p class="text-stone-600 small flex-grow-1"><?php echo htmlspecialchars($art['excerpt']); ?></p>
                  <a href="/article.php?slug=<?php echo $art['slug']; ?>" class="btn btn-sm btn-gold mt-auto">చదవండి <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- Books Results -->
      <?php if (!empty($results['books'])): ?>
        <div class="mb-5">
          <h3 class="fw-bold text-stone-900 mb-4 pb-2 border-bottom"><i class="bi bi-book text-warning me-2"></i>పుస్తక సారాంశాలు (<?php echo count($results['books']); ?>)</h3>
          <div class="row g-4">
            <?php foreach ($results['books'] as $book): ?>
              <div class="col-md-6 col-lg-4">
                <div class="lw-card p-4">
                  <span class="badge bg-warning bg-opacity-20 text-warning-emphasis mb-2 align-self-start"><?php echo $book['category']; ?></span>
                  <h5 class="fw-bold mb-1">
                    <a href="/book-detail.php?slug=<?php echo $book['slug']; ?>" class="text-decoration-none text-stone-900 hover-warning">
                      <?php echo htmlspecialchars($book['title']); ?>
                    </a>
                  </h5>
                  <small class="text-muted d-block mb-2">రచయిత: <?php echo $book['author']; ?></small>
                  <p class="text-stone-600 small flex-grow-1"><?php echo htmlspecialchars($book['description']); ?></p>
                  <a href="/book-detail.php?slug=<?php echo $book['slug']; ?>" class="btn btn-sm btn-gold mt-auto">సారాంశం చూడండి <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

    <?php endif; ?>

  </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>
