<?php
// book-detail.php - Single Book Summary Detail & AJAX Endpoint
require_once __DIR__ . '/functions.php';

// Handle AJAX Request from Quick View Modal
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    header('Content-Type: application/json');
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    $slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
    
    $book = $id > 0 ? get_book_by_id($id) : get_book_by_slug($slug);
    if ($book) {
        echo json_encode($book);
    } else {
        echo json_encode(['error' => 'పుస్తక సారాంశం దొరకలేదు.']);
    }
    exit;
}

// Regular Page View
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$book = $slug ? get_book_by_slug($slug) : ($id ? get_book_by_id($id) : null);

if (!$book) {
    $book = $books[0];
}

$cover_img = $book['cover'] ?? ($book['cover_image'] ?? '');
$book_desc = $book['summary'] ?? ($book['description'] ?? '');
$key_points = $book['key_points'] ?? ($book['key_lessons'] ?? []);

$custom_page_title = $book['title'] . ' - తెలుగు సారాంశం | KK LifeWise';
$custom_page_desc = $book_desc;

include __DIR__ . '/header.php';
?>

<div class="bg-stone-100 py-4 border-bottom border-stone-200">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a href="/index.php" class="text-decoration-none text-stone-600">హోమ్</a></li>
        <li class="breadcrumb-item"><a href="/books.php" class="text-decoration-none text-stone-600">పుస్తకాలు</a></li>
        <li class="breadcrumb-item active text-stone-900 text-truncate" style="max-width: 300px;" aria-current="page"><?php echo htmlspecialchars($book['title']); ?></li>
      </ol>
    </nav>
  </div>
</div>

<article class="py-5 bg-white">
  <div class="container">
    
    <!-- Hero Header of Book Detail -->
    <div class="row g-5 align-items-center mb-5 pb-5 border-bottom border-stone-200">
      <div class="col-md-4 text-center">
        <div class="book-card-visual shadow-lg mx-auto" style="max-width: 280px;">
          <img src="<?php echo htmlspecialchars($cover_img); ?>" alt="<?php echo htmlspecialchars($book['title']); ?>">
        </div>
      </div>
      <div class="col-md-8">
        <span class="badge bg-warning text-dark px-3 py-1.5 rounded-pill fw-bold mb-2">
          <?php echo htmlspecialchars($book['category_name'] ?? $book['category']); ?>
        </span>
        <h1 class="font-serif-telugu fw-bold text-stone-900 mb-2" style="font-size: 2.5rem;">
          <?php echo htmlspecialchars($book['title']); ?>
        </h1>
        <h5 class="text-warning-emphasis fw-bold mb-3"><?php echo htmlspecialchars($book['tagline'] ?? ''); ?></h5>
        <div class="d-flex align-items-center gap-3 text-stone-500 mb-4">
          <span><i class="bi bi-person text-warning"></i> రచయిత: <strong><?php echo htmlspecialchars($book['author']); ?></strong></span>
          <span>•</span>
          <div class="text-warning small">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <span class="text-muted ms-1">(<?php echo $book['rating']; ?>)</span>
          </div>
        </div>

        <p class="fs-5 text-stone-700 font-serif-telugu mb-4" style="line-height: 1.6;">
          <?php echo htmlspecialchars($book_desc); ?>
        </p>

        <div class="d-flex flex-wrap gap-3">
          <button type="button" class="btn btn-gold" onclick="document.getElementById('summaryDetailsSection').scrollIntoView({behavior: 'smooth'})">
            <i class="bi bi-book"></i> సారాంశం చదవండి
          </button>
          <button type="button" class="btn btn-outline-success" onclick="window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent('<?php echo addslashes($book['title']); ?> - ' + window.location.href), '_blank')">
            <i class="bi bi-whatsapp"></i> షేర్
          </button>
        </div>
      </div>
    </div>

    <!-- Main Content & Lessons -->
    <div class="row justify-content-center" id="summaryDetailsSection">
      <div class="col-lg-8">
        
        <!-- Why Read This Book -->
        <div class="p-4 rounded-4 bg-warning bg-opacity-10 border border-warning border-opacity-30 mb-5">
          <h4 class="fw-bold text-stone-900 mb-2"><i class="bi bi-lightbulb-fill text-warning me-2"></i>ఈ పుస్తకం ఎందుకు చదవాలి?</h4>
          <p class="text-stone-700 mb-0 font-telugu" style="line-height: 1.7;">
            <?php echo htmlspecialchars($book['why_read'] ?? 'వ్యక్తిగత వికాసం మరియు జీవిత లక్ష్యాలను సులభంగా సాధించడానికి రచయిత అందించిన శాస్త్రీయ మార్గదర్శకం.'); ?>
          </p>
        </div>

        <!-- Key Lessons / Points -->
        <?php if (!empty($key_points)): ?>
          <div class="mb-5">
            <h3 class="fw-bold text-stone-900 mb-4 fs-4"><i class="bi bi-check2-all text-warning me-2"></i>ముఖ్యమైన సూత్రాలు & పాఠాలు</h3>
            <div class="d-flex flex-column gap-3">
              <?php foreach ($key_points as $idx => $lesson): ?>
                <div class="p-4 rounded-4 bg-stone-50 border d-flex gap-3 align-items-start">
                  <span class="badge bg-warning text-dark rounded-circle fs-5 fw-bold flex-shrink-0" style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center;">
                    <?php echo $idx + 1; ?>
                  </span>
                  <div>
                    <?php if (is_array($lesson)): ?>
                      <h5 class="fw-bold text-stone-900 mb-1"><?php echo htmlspecialchars($lesson['title']); ?></h5>
                      <p class="text-stone-600 mb-0 small" style="line-height: 1.6;"><?php echo htmlspecialchars($lesson['description']); ?></p>
                    <?php else: ?>
                      <p class="text-stone-800 mb-0 fw-medium" style="line-height: 1.6;"><?php echo htmlspecialchars($lesson); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- Full Summary Content if available -->
        <?php if (!empty($book['full_summary'])): ?>
          <div class="article-content-body font-telugu text-stone-800 fs-6 pt-4 border-top" style="line-height: 1.8;">
            <?php echo $book['full_summary']; ?>
          </div>
        <?php endif; ?>

      </div>
    </div>

  </div>
</article>

<?php include __DIR__ . '/footer.php'; ?>
