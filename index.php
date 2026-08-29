<?php
// index.php - KK LifeWise Main Homepage
require_once __DIR__ . '/functions.php';

$custom_page_title = 'KK LifeWise - ఆలోచన మార్చు • జీవితం మార్చు | Official Telugu Platform';
$custom_page_desc = 'వ్యక్తిగత వికాసం, ఆర్థిక వివేకం, కెరీర్ గైడెన్స్, ప్రేరణాత్మక కథలు మరియు ప్రపంచ ప్రసిద్ధ పుస్తకాల తెలుగు సారాంశాల వేదిక.';

$daily_quote = get_daily_quote();
include __DIR__ . '/header.php';
?>

<!-- 1. HERO SECTION -->
<section class="bg-hero-pattern py-5 border-bottom border-stone-200 position-relative overflow-hidden">
  <div class="container py-lg-4">
    <div class="row align-items-center g-5">
      
      <!-- Hero Left: Content, Badges & Stats -->
      <div class="col-lg-7">
        
        <!-- Platform Badge -->
        <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill bg-warning bg-opacity-10 border border-warning border-opacity-30 text-warning-emphasis fw-bold small mb-3">
          <i class="bi bi-patch-check-fill text-warning"></i>
          <span>అధికారిక తెలుగు ప్లాట్‌ఫారమ్ • KK Motivation</span>
        </div>

        <!-- Main Title with Gold Gradient -->
        <h1 class="hero-heading font-serif-telugu fw-extrabold text-stone-900 mb-3" style="font-size: 3.1rem; line-height: 1.15; font-weight: 800;">
          ఆలోచన మార్చు<br>
          <span class="text-gold-gradient">జీవితం మార్చు</span>
        </h1>

        <!-- Hero Subtitle -->
        <p class="text-stone-600 fs-5 mb-4 pe-lg-4" style="line-height: 1.6;">
          వ్యక్తిగత వికాసం, ఆర్థిక వివేకం, కెరీర్ గైడెన్స్, ప్రేరణాత్మక కథలు మరియు ప్రపంచ ప్రసిద్ధ పుస్తకాల తెలుగు సారాంశాల సమగ్ర వేదిక.
        </p>

        <!-- Call to Actions -->
        <div class="d-flex flex-wrap align-items-center gap-3 hero-buttons mb-5">
          <a href="#articlesSection" class="btn btn-gold">
            <i class="bi bi-book-half"></i> వ్యాసాలు చదవండి
          </a>
          <a href="/assessment.php" class="btn btn-gold-outline">
            <i class="bi bi-compass"></i> జీవన విశ్లేషణ (Assessment)
          </a>
          <a href="#youtubeSection" class="btn btn-dark">
            <i class="bi bi-play-circle text-danger"></i> వీడియోలు
          </a>
        </div>

        <!-- Key Trust Stats -->
        <div class="row g-3 pt-3 border-top border-stone-200">
          <div class="col-6 col-sm-3 stat-card-item border-end border-stone-200">
            <div class="fw-extrabold fs-4 text-stone-900 font-sans" style="font-weight: 800;">500K+</div>
            <div class="text-stone-500 small">యూట్యూబ్ సబ్స్క్రైబర్స్</div>
          </div>
          <div class="col-6 col-sm-3 stat-card-item border-end border-stone-200">
            <div class="fw-extrabold fs-4 text-stone-900 font-sans" style="font-weight: 800;">100+</div>
            <div class="text-stone-500 small">తెలుగు గైడ్స్ & వ్యాసాలు</div>
          </div>
          <div class="col-6 col-sm-3 stat-card-item border-end border-stone-200">
            <div class="fw-extrabold fs-4 text-stone-900 font-sans" style="font-weight: 800;">50+</div>
            <div class="text-stone-500 small">పుస్తక సారాంశాలు</div>
          </div>
          <div class="col-6 col-sm-3 stat-card-item">
            <div class="fw-extrabold fs-4 text-warning font-sans" style="font-weight: 800;">4.9 ★</div>
            <div class="text-stone-500 small">కమ్యూనిటీ రేటింగ్</div>
          </div>
        </div>

      </div>

      <!-- Hero Right: Interactive Daily Wisdom Card -->
      <div class="col-lg-5">
        <div class="wisdom-card p-4 p-md-5">
          
          <div class="d-flex align-items-center justify-content-between mb-4">
            <span class="badge badge-pill badge-gold">
              <i class="bi bi-stars text-warning"></i> నేటి ఆలోచన (Daily Wisdom)
            </span>
            <span class="text-stone-500 small font-sans"><?php echo date('d M, Y'); ?></span>
          </div>

          <blockquote class="fs-5 fw-semibold text-stone-900 mb-4 font-serif-telugu" style="line-height: 1.6;">
            "<?php echo htmlspecialchars($daily_quote['quote']); ?>"
          </blockquote>

          <div class="d-flex align-items-center justify-content-between pt-3 border-top border-warning border-opacity-30">
            <div>
              <strong class="d-block text-warning-emphasis font-telugu">— <?php echo htmlspecialchars($daily_quote['author']); ?></strong>
              <small class="text-stone-500"><?php echo htmlspecialchars($daily_quote['category']); ?></small>
            </div>
            
            <div class="d-flex align-items-center gap-2">
              <button type="button" class="btn btn-sm btn-outline-warning rounded-pill" onclick="openQuoteGeneratorWith('<?php echo addslashes($daily_quote['quote']); ?>', '<?php echo addslashes($daily_quote['author']); ?>')" title="కార్డ్ జనరేట్ చేయండి">
                <i class="bi bi-card-image"></i>
              </button>
              <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill" onclick="copyQuoteText('<?php echo addslashes($daily_quote['quote']); ?>', '<?php echo addslashes($daily_quote['author']); ?>')" title="కాపీ చేయండి">
                <i class="bi bi-clipboard"></i>
              </button>
              <button type="button" class="btn btn-sm btn-success rounded-pill" onclick="shareQuoteWhatsApp('<?php echo addslashes($daily_quote['quote']); ?>', '<?php echo addslashes($daily_quote['author']); ?>')" title="WhatsApp షేర్">
                <i class="bi bi-whatsapp"></i>
              </button>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- 2. ARTICLES SECTION WITH CATEGORY FILTER -->
<section id="articlesSection" class="py-5 bg-white border-bottom border-stone-200">
  <div class="container py-lg-3">
    
    <!-- Section Header -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
      <div>
        <div class="badge badge-pill badge-gold mb-2">నాలెడ్జ్ హబ్</div>
        <h2 class="fw-extrabold text-stone-900 mb-1" style="font-weight: 800;">తాజా వ్యాసాలు & విశ్లేషణలు</h2>
        <p class="text-stone-500 mb-0">మీ ఆలోచనను, జీవితాన్ని ఉన్నతంగా తీర్చిదిద్దే తాజా గైడ్స్</p>
      </div>

      <!-- Filter Tabs -->
      <div class="filter-tabs-wrapper">
        <button type="button" class="filter-tab-btn active" data-category="all">అన్నీ (All)</button>
        <button type="button" class="filter-tab-btn" data-category="motivation">మోటివేషన్</button>
        <button type="button" class="filter-tab-btn" data-category="money">మనీ & సంపద</button>
        <button type="button" class="filter-tab-btn" data-category="career">కెరీర్ & స్కిల్స్</button>
      </div>
    </div>

    <!-- Articles Grid -->
    <div class="row g-4" id="articlesGrid">
      <?php foreach ($articles as $art): ?>
        <div class="col-lg-4 col-md-6 article-item-card" data-category="<?php echo $art['category']; ?>">
          <div class="lw-card">
            
            <div class="card-img-wrap">
              <img src="<?php echo htmlspecialchars($art['image']); ?>" alt="<?php echo htmlspecialchars($art['title']); ?>" loading="lazy">
              <span class="position-absolute top-0 start-0 m-3 badge bg-stone-900 bg-opacity-90 text-warning px-2.5 py-1 rounded-pill small">
                <?php echo htmlspecialchars($art['category_name']); ?>
              </span>
            </div>

            <div class="p-4 d-flex flex-column flex-grow-1">
              <div class="d-flex align-items-center gap-2 text-stone-400 small mb-2">
                <i class="bi bi-clock"></i> <span><?php echo htmlspecialchars($art['read_time']); ?></span>
                <span>•</span>
                <span><?php echo htmlspecialchars($art['date']); ?></span>
              </div>

              <h4 class="fs-5 fw-bold text-stone-900 mb-2">
                <a href="/article.php?slug=<?php echo $art['slug']; ?>" class="text-decoration-none text-stone-900 hover-warning">
                  <?php echo htmlspecialchars($art['title']); ?>
                </a>
              </h4>

              <p class="text-stone-600 small flex-grow-1 mb-4" style="line-height: 1.6;">
                <?php echo htmlspecialchars($art['excerpt']); ?>
              </p>

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

    <!-- Section View All Link -->
    <div class="text-center mt-5">
      <a href="/motivation.php" class="btn btn-gold-outline px-4">
        మరిన్ని మోటివేషన్ & నాలెడ్జ్ వ్యాసాలు చూడండి <i class="bi bi-arrow-right"></i>
      </a>
    </div>

  </div>
</section>

<!-- 3. BOOK SUMMARIES SECTION -->
<section id="booksSection" class="py-5 bg-stone-100 border-bottom border-stone-200">
  <div class="container py-lg-3">
    
    <div class="text-center max-w-2xl mx-auto mb-5">
      <div class="badge badge-pill badge-gold mb-2">బెస్ట్ సెల్లర్స్ నాలెడ్జ్</div>
      <h2 class="fw-extrabold text-stone-900 mb-2" style="font-weight: 800;">ప్రపంచ ప్రసిద్ధ పుస్తకాల తెలుగు సారాంశాలు</h2>
      <p class="text-stone-600">అంతర్జాతీయంగా లక్షలాది మంది జీవితాలను మార్చిన బెస్ట్ సెల్లర్ పుస్తకాల ప్రధాన పాఠాలు సరళమైన తెలుగులో.</p>
    </div>

    <div class="row g-4">
      <?php foreach (array_slice($books, 0, 3) as $book): ?>
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

    <div class="text-center mt-5">
      <a href="/books.php" class="btn btn-gold-outline px-4">
        అన్ని 50+ పుస్తక సారాంశాలు అన్వేషించండి <i class="bi bi-arrow-right"></i>
      </a>
    </div>

  </div>
</section>

<!-- 4. YOUTUBE HUB SECTION (DARK STONE WITH GOLD ACCENTS) -->
<section id="youtubeSection" class="py-5 bg-dark-mesh text-white border-bottom border-stone-800">
  <div class="container py-lg-4">
    
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5 gap-3">
      <div>
        <div class="badge badge-pill badge-dark mb-2">
          <i class="bi bi-youtube text-danger"></i> వీడియో హబ్
        </div>
        <h2 class="fw-extrabold text-white mb-1" style="font-weight: 800;">KK Motivation Telugu - వీడియోలు</h2>
        <p class="text-stone-400 mb-0">యూట్యూబ్‌లో 500,000+ సబ్స్క్రైబర్స్ వీక్షిస్తున్న స్ఫూర్తిదాయక వీడియోలు</p>
      </div>

      <div>
        <a href="<?php echo YOUTUBE_CHANNEL_URL; ?>" target="_blank" rel="noopener" class="btn btn-danger rounded-pill px-4 fw-bold d-inline-flex align-items-center gap-2">
          <i class="bi bi-youtube"></i> ఛానెల్ సబ్‌స్క్రైబ్ చేయండి
        </a>
      </div>
    </div>

    <!-- Featured Video: Sri Krishna 6 Vijaya Rahasyalu -->
    <div class="row g-4 align-items-center mb-5 p-4 rounded-4 bg-stone-900 border border-stone-800 shadow-lg">
      <div class="col-lg-7">
        <div class="video-thumbnail-container shadow">
          <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?w=1000&auto=format&fit=crop&q=80" class="w-100 h-100 object-fit-cover" alt="శ్రీకృష్ణుని 6 విజయ రహస్యాలు">
          <button type="button" class="play-overlay-btn" onclick="openVideoModal('QXhd_yW2VEE', 'శ్రీకృష్ణుని 6 విజయ రహస్యాలు | తెలిస్తే జీవితం మారుతుంది!')" title="వీడియో ప్లే చేయండి">
            <i class="bi bi-play-fill"></i>
          </button>
          <span class="video-duration-badge">14:20</span>
        </div>
      </div>
      <div class="col-lg-5">
        <span class="badge bg-danger px-3 py-1 rounded-pill small mb-2">🔥 అత్యధికంగా వీక్షించిన వీడియో</span>
        <h3 class="fw-bold text-white mb-3 fs-4">శ్రీకృష్ణుని 6 విజయ రహస్యాలు | తెలిస్తే జీవితం మారుతుంది!</h3>
        <p class="text-stone-300 small mb-4" style="line-height: 1.6;">
          భగవద్గీత మరియు మహాభారతం నుండి శ్రీకృష్ణుడు అందించిన 6 అద్భుతమైన జీవిత సూత్రాలు. వీటిని జీవితంలో ఆచరిస్తే ఎలాంటి సంక్షోభాలనైనా దాటి విజేతగా నిలవవచ్చు.
        </p>
        <div class="d-flex gap-3">
          <button type="button" class="btn btn-gold flex-grow-1" onclick="openVideoModal('QXhd_yW2VEE', 'శ్రీకృష్ణుని 6 విజయ రహస్యాలు | తెలిస్తే జీవితం మారుతుంది!')">
            <i class="bi bi-play-circle"></i> ఇప్పుడే చూడండి
          </button>
          <a href="<?php echo YOUTUBE_CHANNEL_URL; ?>" target="_blank" rel="noopener" class="btn btn-outline-light">
            <i class="bi bi-youtube text-danger"></i> YouTube లో
          </a>
        </div>
      </div>
    </div>

    <!-- Video Grid -->
    <div class="row g-4">
      <?php foreach (array_slice($videos, 1, 3) as $vid): ?>
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
              <button type="button" class="btn btn-sm btn-link text-warning p-0 text-decoration-none" onclick="openVideoModal('<?php echo $vid['youtube_id']; ?>', '<?php echo addslashes($vid['title']); ?>')">
                ప్లే చేయండి <i class="bi bi-chevron-right"></i>
              </button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5">
      <a href="/videos.php" class="btn btn-gold-outline px-4">
        అన్ని వీడియోలు చూడండి <i class="bi bi-arrow-right"></i>
      </a>
    </div>

  </div>
</section>

<!-- 5. 6-PILLAR LIFE ASSESSMENT PREVIEW -->
<section id="assessmentSection" class="py-5 bg-white border-bottom border-stone-200">
  <div class="container py-lg-3">
    <div class="row g-5 align-items-center">
      
      <div class="col-lg-6">
        <div class="badge badge-pill badge-gold mb-2">స్వీయ పరిశీలన సాధనం</div>
        <h2 class="fw-extrabold text-stone-900 mb-3" style="font-weight: 800;">మీ జీవన సమతుల్యతను విశ్లేషించుకోండి</h2>
        <p class="text-stone-600 mb-4" style="line-height: 1.6;">
          విజయం కేవలం డబ్బు లేదా ఉద్యోగంతో మాత్రమే కొలవబడదు. మైండ్‌సెట్, ఆర్థిక ఆరోగ్యం, కెరీర్ ఎదుగుదల, క్రమశిక్షణ మరియు సంబంధాలు — ఈ 6 స్తంభాలలో మీ బలం ఎక్కడుందో తక్షణమే తెలుసుకోండి.
        </p>

        <div class="row g-3 mb-4">
          <div class="col-6">
            <div class="p-3 rounded-3 bg-stone-50 border">
              <strong class="d-block text-stone-900 mb-1"><i class="bi bi-lightning-charge text-warning me-1"></i> 6 ముఖ్య స్తంభాలు</strong>
              <small class="text-stone-500">సమగ్ర జీవిత విశ్లేషణ</small>
            </div>
          </div>
          <div class="col-6">
            <div class="p-3 rounded-3 bg-stone-50 border">
              <strong class="d-block text-stone-900 mb-1"><i class="bi bi-graph-up-arrow text-success me-1"></i> తక్షణ స్కోరు</strong>
              <small class="text-stone-500">కస్టమ్ తెలుగు యాక్షన్ ప్లాన్</small>
            </div>
          </div>
        </div>

        <a href="/assessment.php" class="btn btn-gold btn-lg">
          <i class="bi bi-compass"></i> పూర్తి అసెస్‌మెంట్ ప్రారంభించండి
        </a>
      </div>

      <div class="col-lg-6">
        <div class="p-4 p-md-5 rounded-4 bg-stone-50 border border-stone-200 shadow-sm">
          <div class="text-center mb-4">
            <div class="score-circle-lg mb-3">
              <span id="assessmentScorePercent" class="display-6 fw-bold">75%</span>
              <small class="text-uppercase small fw-bold" style="font-size: 0.7rem; letter-spacing: 1px;">ఓవర్‌ఆల్ స్కోరు</small>
            </div>
            <div id="assessmentTierBadge" class="badge bg-warning text-dark px-3 py-1.5 rounded-pill fs-6">
              🚀 సాధకుడు (High Achiever)
            </div>
          </div>

          <div class="p-3 rounded-3 bg-white border mb-3">
            <h6 id="assessmentFeedbackHeading" class="fw-bold text-stone-900 mb-1">మంచి పునాది ఉంది!</h6>
            <p id="assessmentFeedbackDesc" class="text-stone-600 small mb-0">
              మీరు చాలా రంగాలలో బాగున్నారు. మీ సమతుల్యతను మరింత పెంచుకోవడానికి మా గైడ్స్ మీకు తోడ్పడతాయి.
            </p>
          </div>

          <div class="text-center">
            <a href="/assessment.php" class="btn btn-sm btn-outline-dark rounded-pill">
              ఇంటరాక్టివ్ స్లైడర్లతో చెక్ చేయండి <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 6. ABOUT SECTION -->
<section id="aboutSection" class="py-5 bg-stone-50 border-bottom border-stone-200">
  <div class="container py-lg-3">
    <div class="row g-5 align-items-center">
      
      <div class="col-lg-6">
        <div class="position-relative">
          <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=800&auto=format&fit=crop&q=80" class="img-fluid rounded-4 shadow-lg" alt="KK LifeWise About">
          <div class="position-absolute bottom-0 start-0 m-4 p-3 rounded-3 glass-panel shadow">
            <span class="fw-bold text-warning-emphasis d-block">✨ ఆలోచన మార్చు • జీవితం మార్చు</span>
            <small class="text-stone-600">KK Motivation Telugu Official Initiative</small>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="badge badge-pill badge-gold mb-2">మా గురించి & విజన్</div>
        <h2 class="fw-extrabold text-stone-900 mb-3" style="font-weight: 800;">తెలుగు ఆలోచనా విధానంలో సరికొత్త విప్లవం</h2>
        <p class="text-stone-700 mb-4" style="line-height: 1.7;">
          <strong>KK LifeWise</strong> అనేది కేవలం ఒక వెబ్‌సైట్ కాదు; లక్షలాది మంది తెలుగు వారి జీవితాల్లో సానుకూల మార్పు తీసుకురావడానికి రూపొందించబడిన సమగ్ర జ్ఞాన వేదిక.
        </p>

        <div class="d-flex flex-column gap-3 mb-4">
          <div class="d-flex gap-3">
            <i class="bi bi-check-circle-fill text-warning fs-5 flex-shrink-0"></i>
            <div>
              <strong class="text-stone-900">విలువలతో కూడిన విజయం:</strong>
              <p class="text-stone-600 small mb-0">తాత్కాలిక ఉత్సాహం కాకుండా శాశ్వత వ్యక్తిత్వ వికాసం.</p>
            </div>
          </div>
          <div class="d-flex gap-3">
            <i class="bi bi-check-circle-fill text-warning fs-5 flex-shrink-0"></i>
            <div>
              <strong class="text-stone-900">ఆచరణాత్మక ఆర్థిక వివేకం:</strong>
              <p class="text-stone-600 small mb-0">సామాన్యుడు సైతం సంపదను సృష్టించే సరళమైన నియమాలు.</p>
            </div>
          </div>
          <div class="d-flex gap-3">
            <i class="bi bi-check-circle-fill text-warning fs-5 flex-shrink-0"></i>
            <div>
              <strong class="text-stone-900">ప్రపంచ స్థాయి పుస్తక జ్ఞానం:</strong>
              <p class="text-stone-600 small mb-0">అంతర్జాతీయ రచయితల అత్యుత్తమ సూత్రాలు సులభమైన తెలుగులో.</p>
            </div>
          </div>
        </div>

        <a href="/about.php" class="btn btn-gold">
          మా పూర్తి ప్రయాణం తెలుసుకోండి <i class="bi bi-arrow-right"></i>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- 7. COMMUNITY & TELEGRAM / WHATSAPP SECTION -->
<section class="py-5 bg-gold-gradient text-white">
  <div class="container py-lg-3 text-center">
    <div class="max-w-2xl mx-auto">
      <h2 class="fw-extrabold text-white mb-3" style="font-weight: 800;">మా కమ్యూనిటీలో చేరండి</h2>
      <p class="fs-5 text-white text-opacity-90 mb-4">
        ప్రతిరోజూ ఉదయం సానుకూల ఆలోచనలు, పుస్తక సారాంశాలు మరియు వీడియో నోటిఫికేషన్‌లు తక్షణమే పొందండి.
      </p>
      <div class="d-flex flex-wrap justify-content-center gap-3">
        <a href="<?php echo YOUTUBE_CHANNEL_URL; ?>" target="_blank" rel="noopener" class="btn btn-dark rounded-pill px-4 py-2 fw-bold">
          <i class="bi bi-youtube text-danger me-1"></i> YouTube ఛానెల్
        </a>
        <a href="<?php echo INSTAGRAM_PROFILE_URL; ?>" target="_blank" rel="noopener" class="btn btn-light rounded-pill px-4 py-2 fw-bold text-dark">
          <i class="bi bi-instagram text-danger me-1"></i> Instagram లో ఫాలో అవ్వండి
        </a>
        <a href="https://t.me/kkmotivation" target="_blank" rel="noopener" class="btn btn-dark rounded-pill px-4 py-2 fw-bold">
          <i class="bi bi-telegram text-info me-1"></i> Telegram ఛానెల్
        </a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
