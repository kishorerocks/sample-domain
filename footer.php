<?php
// footer.php - Reusable Footer and Universal Modals Component
?>
  </main> <!-- End Main Content -->

  <!-- Site Footer -->
  <footer class="site-footer mt-auto">
    <div class="container">
      <div class="row g-4 mb-5">
        
        <!-- Column 1: Brand & Tagline -->
        <div class="col-lg-4 col-md-6">
          <div class="d-flex align-items-center gap-2 mb-3">
            <div class="brand-logo-icon">
              <i class="bi bi-fire"></i>
            </div>
            <div>
              <span class="brand-title text-white">KK <span class="text-gold-gradient">LifeWise</span></span>
              <span class="brand-tagline text-warning font-telugu"><?php echo SITE_TAGLINE; ?></span>
            </div>
          </div>
          <p class="text-stone-400 small pe-lg-3 mb-4">
            తెలుగు ప్రజల ఆలోచనా విధానంలో విప్లవాత్మక మార్పు తీసుకొచ్చి, ప్రతి ఒక్కరిలో దాగి ఉన్న అపారమైన శక్తిని వెలికితీయడమే మా లక్ష్యం. వ్యక్తిగత వికాసం, ఆర్థిక క్రమశిక్షణ, కెరీర్ ఎదుగుదల మరియు పుస్తక జ్ఞానాన్ని అందించే తెలుగు వేదిక.
          </p>
          <div class="d-flex align-items-center gap-2">
            <a href="<?php echo YOUTUBE_CHANNEL_URL; ?>" target="_blank" rel="noopener" class="social-icon-btn" title="YouTube">
              <i class="bi bi-youtube text-danger fs-5"></i>
            </a>
            <a href="<?php echo INSTAGRAM_PROFILE_URL; ?>" target="_blank" rel="noopener" class="social-icon-btn" title="Instagram">
              <i class="bi bi-instagram text-warning fs-5"></i>
            </a>
            <a href="https://t.me/kkmotivation" target="_blank" rel="noopener" class="social-icon-btn" title="Telegram">
              <i class="bi bi-telegram text-info fs-5"></i>
            </a>
            <a href="https://whatsapp.com" target="_blank" rel="noopener" class="social-icon-btn" title="WhatsApp Channel">
              <i class="bi bi-whatsapp text-success fs-5"></i>
            </a>
          </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="col-lg-2 col-md-6 col-6">
          <h5 class="footer-heading">త్వరిత లింకులు</h5>
          <ul class="list-unstyled">
            <li><a href="/index.php" class="footer-link">హోమ్ పేజీ</a></li>
            <li><a href="/motivation.php" class="footer-link">మోటివేషన్</a></li>
            <li><a href="/money.php" class="footer-link">మనీ & సంపద</a></li>
            <li><a href="/career.php" class="footer-link">కెరీర్ & స్కిల్స్</a></li>
            <li><a href="/stories.php" class="footer-link">ప్రేరణ కథలు</a></li>
            <li><a href="/assessment.php" class="footer-link">జీవన విశ్లేషణ</a></li>
          </ul>
        </div>

        <!-- Column 3: Resources & Learning -->
        <div class="col-lg-3 col-md-6 col-6">
          <h5 class="footer-heading">వనరులు & జ్ఞానం</h5>
          <ul class="list-unstyled">
            <li><a href="/books.php" class="footer-link">పుస్తక సారాంశాలు</a></li>
            <li><a href="/videos.php" class="footer-link">వీడియో హబ్</a></li>
            <li><a href="/pdfs.php" class="footer-link">ఉచిత PDF గైడ్స్</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="footer-link">కోట్ కార్డ్ జనరేటర్</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#wpBlueprintModal" class="footer-link">WordPress Blueprint</a></li>
            <li><a href="/about.php" class="footer-link">మా గురించి & విజన్</a></li>
          </ul>
        </div>

        <!-- Column 4: Newsletter & Contact -->
        <div class="col-lg-3 col-md-6">
          <h5 class="footer-heading">న్యూస్‌లెటర్ సబ్‌స్క్రిప్షన్</h5>
          <p class="text-stone-400 small mb-3">వారానికోసారి అత్యుత్తమ తెలుగు ఆర్టికల్స్ మరియు పుస్తక సారాంశాలు మీ ఇమెయిల్‌కి పొందండి.</p>
          <form onsubmit="event.preventDefault(); showToast('సబ్‌స్క్రైబ్ చేసుకున్నందుకు ధన్యవాదాలు!'); this.reset();" class="mb-3">
            <div class="input-group">
              <input type="email" class="form-control form-control-sm bg-stone-900 border-stone-800 text-white" placeholder="మీ ఇమెయిల్..." required>
              <button class="btn btn-warning btn-sm fw-bold" type="submit">చేరండి</button>
            </div>
          </form>
          <div class="small text-stone-500">
            <i class="bi bi-shield-check text-warning me-1"></i> మీ గోప్యత మాకు ముఖ్యం. నో స్పామ్.
          </div>
        </div>

      </div>

      <!-- Bottom Disclaimer & Copyright -->
      <div class="pt-4 border-top border-stone-800 d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 text-stone-500 small">
        <div>
          © <?php echo date('Y'); ?> <strong>KK LifeWise</strong> (KK Motivation Telugu). సర్వహక్కులు ప్రత్యేకించబడ్డాయి.
        </div>
        <div class="d-flex align-items-center gap-3">
          <a href="/about.php" class="text-stone-500 text-decoration-none hover-warning">విధానాలు</a>
          <span>•</span>
          <a href="/contact.php" class="text-stone-500 text-decoration-none hover-warning">సంప్రదించండి</a>
          <span>•</span>
          <span class="text-stone-500">Designed with Craft & Telugu Heritage</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- =========================================================================
       MODALS
       ========================================================================= -->

  <!-- 1. Search Modal (Live AJAX / JS) -->
  <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content shadow-lg border-0">
        <div class="modal-header bg-stone-900 text-white py-3">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-search text-warning fs-5"></i>
            <h5 class="modal-title fs-6 fw-bold mb-0" id="searchModalLabel">KK LifeWise నాలెడ్జ్ శోధన</h5>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 bg-stone-50">
          <div class="input-group input-group-lg shadow-sm mb-4">
            <span class="input-group-text bg-white border-end-0 text-muted"><i class="bi bi-search"></i></span>
            <input type="text" id="searchInputField" class="form-control border-start-0 ps-0" placeholder="వ్యాసం, పుస్తకం, వీడియో లేదా అంశం శోధించండి... (ఉదా: శ్రీకృష్ణుడు, మనీ, భయం)" autofocus>
          </div>
          <div id="searchLoading" class="text-center py-3 d-none">
            <div class="spinner-border text-warning spinner-border-sm" role="status"></div>
            <span class="ms-2 small text-muted">శోధిస్తోంది...</span>
          </div>
          <div id="searchResultsContainer" class="search-results-box" style="max-height: 400px; overflow-y: auto;">
            <div class="text-center py-4 text-muted">
              <i class="bi bi-lightbulb display-6 text-warning opacity-50 d-block mb-2"></i>
              <p class="mb-0 small">మీరు వెతకాలనుకుంటున్న పదాన్ని పైన టైప్ చేయండి.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-white py-2 px-4 justify-content-between">
          <span class="small text-muted"><kbd class="bg-light text-dark border">ESC</kbd> మూసివేయడానికి</span>
          <span class="small text-warning fw-bold">KK LifeWise Knowledge Base</span>
        </div>
      </div>
    </div>
  </div>

  <!-- 2. Quick View Article Modal -->
  <div class="modal fade" id="articleQuickModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content shadow-lg">
        <div class="modal-header bg-stone-900 text-white">
          <div>
            <span id="articleModalCategory" class="badge bg-warning text-dark mb-1">వ్యాసం</span>
            <h5 id="articleModalTitle" class="modal-title fw-bold text-white fs-5">వ్యాసం శీర్షిక</h5>
            <small id="articleModalReadTime" class="text-stone-400">5 min read</small>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 font-telugu" id="articleModalBody">
          <!-- Dynamic Content Loaded by JS -->
        </div>
        <div class="modal-footer bg-light justify-content-between">
          <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill" data-bs-dismiss="modal">మూసివేయి</button>
          <a id="articleModalFullLink" href="#" class="btn btn-gold btn-sm">పూర్తి పేజీలో చూడండి <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- 3. Quick View Book Summary Modal -->
  <div class="modal fade" id="bookQuickModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content shadow-lg">
        <div class="modal-header bg-stone-900 text-white">
          <div>
            <span class="badge bg-warning text-dark mb-1">బెస్ట్ సెల్లర్ పుస్తక సారాంశం</span>
            <h5 id="bookModalTitle" class="modal-title fw-bold text-white fs-5">పుస్తకం పేరు</h5>
            <small id="bookModalAuthor" class="text-stone-400">రచయిత</small>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 font-telugu" id="bookModalBody">
          <!-- Dynamic Content Loaded by JS -->
        </div>
        <div class="modal-footer bg-light justify-content-between">
          <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill" data-bs-dismiss="modal">మూసివేయి</button>
          <a id="bookModalFullLink" href="#" class="btn btn-gold btn-sm">పూర్తి సారాంశ పేజీ <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- 4. Video Player Modal -->
  <div class="modal fade" id="videoPlayerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-dark border-0 shadow-lg">
        <div class="modal-header border-bottom border-stone-800 text-white py-2">
          <h6 class="modal-title text-truncate me-3" id="videoPlayerTitle">వీడియో ప్లేయర్</h6>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <div class="ratio ratio-16x9">
            <iframe id="videoPlayerIframe" src="" title="KK LifeWise Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 5. Quote Card Generator Modal -->
  <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content shadow-lg">
        <div class="modal-header bg-stone-900 text-white">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-card-image text-warning fs-5"></i>
            <h5 class="modal-title fw-bold fs-6 mb-0" id="quoteModalLabel">కోట్ కార్డ్ జనరేటర్ (Quote Card Studio)</h5>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 bg-stone-100">
          <div class="row g-4 align-items-center">
            
            <!-- Left: Card Live Preview -->
            <div class="col-lg-6 text-center">
              <div id="quotePreviewBox" class="quote-canvas-preview text-start" style="background: linear-gradient(135deg, #1c1917 0%, #0c0a09 50%, #451a03 100%);">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-fire text-warning fs-4"></i>
                    <span class="fw-bold tracking-wide small" style="letter-spacing: 1px;">KK LIFEWISE</span>
                  </div>
                  <span class="small opacity-75">ఆలోచన మార్చు • జీవితం మార్చు</span>
                </div>
                <div class="my-4">
                  <p id="quotePreviewText" class="fs-5 fw-semibold mb-0" style="line-height: 1.5;">
                    ఆలోచన మార్చుకుంటే మీ భావోద్వేగాలు మారతాయి. భావోద్వేగాలు మారితే మీ చేతలు మారతాయి. చేతలు మారితే మీ జీవితమే మారుతుంది.
                  </p>
                </div>
                <div class="d-flex justify-content-between align-items-end pt-2 border-top border-secondary">
                  <span id="quotePreviewAuthor" class="fw-bold text-warning small">— KK Motivation</span>
                  <span class="small opacity-50" style="font-size: 0.7rem;">@KKMotivationTelugu</span>
                </div>
              </div>
            </div>

            <!-- Right: Controls & Customization -->
            <div class="col-lg-6">
              <h6 class="fw-bold text-stone-900 mb-3">కార్డ్ అనుకూలీకరణ (Customize Card):</h6>
              
              <div class="mb-3">
                <label class="form-label small fw-bold text-stone-700">కోట్ టెక్స్ట్ (Quote Text):</label>
                <textarea id="generatorQuoteText" class="form-control" rows="3">ఆలోచన మార్చుకుంటే మీ భావోద్వేగాలు మారతాయి. భావోద్వేగాలు మారితే మీ చేతలు మారతాయి. చేతలు మారితే మీ జీవితమే మారుతుంది.</textarea>
              </div>

              <div class="mb-3">
                <label class="form-label small fw-bold text-stone-700">రచయిత / మూలం (Author):</label>
                <input type="text" id="generatorAuthor" class="form-control" value="KK Motivation">
              </div>

              <div class="mb-4">
                <label class="form-label small fw-bold text-stone-700 d-block">రంగుల థీమ్ (Theme):</label>
                <div class="d-flex gap-2">
                  <button type="button" class="theme-opt-btn theme-select-btn border-warning" data-theme="gold" style="background: #1c1917;" title="Gold Stone"></button>
                  <button type="button" class="theme-opt-btn theme-select-btn" data-theme="amber" style="background: #d97706;" title="Warm Amber"></button>
                  <button type="button" class="theme-opt-btn theme-select-btn" data-theme="crimson" style="background: #881337;" title="Crimson"></button>
                  <button type="button" class="theme-opt-btn theme-select-btn" data-theme="emerald" style="background: #064e3b;" title="Emerald"></button>
                  <button type="button" class="theme-opt-btn theme-select-btn" data-theme="royal" style="background: #1e1b4b;" title="Royal Blue"></button>
                </div>
              </div>

              <div class="d-flex flex-wrap gap-2">
                <button type="button" id="downloadQuoteCardBtn" class="btn btn-gold flex-grow-1">
                  <i class="bi bi-download"></i> HD ఇమేజ్ డౌన్‌లోడ్
                </button>
                <button type="button" class="btn btn-outline-dark" onclick="copyQuoteText(document.getElementById('generatorQuoteText').value, document.getElementById('generatorAuthor').value)" title="టెక్స్ట్ కాపీ చేయండి">
                  <i class="bi bi-clipboard"></i>
                </button>
                <button type="button" class="btn btn-success" onclick="shareQuoteWhatsApp(document.getElementById('generatorQuoteText').value, document.getElementById('generatorAuthor').value)" title="WhatsApp షేర్">
                  <i class="bi bi-whatsapp"></i>
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 6. WordPress Architecture Blueprint Modal -->
  <div class="modal fade" id="wpBlueprintModal" tabindex="-1" aria-labelledby="wpBlueprintModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
      <div class="modal-content shadow-lg">
        <div class="modal-header bg-stone-900 text-white">
          <div class="d-flex align-items-center gap-2">
            <i class="bi bi-wordpress text-warning fs-4"></i>
            <div>
              <h5 class="modal-title fw-bold fs-5 mb-0" id="wpBlueprintModalLabel">WordPress Theme Architecture Blueprint</h5>
              <small class="text-stone-400">1:1 Mapping between PHP Standalone & WordPress Production Theme</small>
            </div>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 bg-stone-50">
          <div class="alert alert-warning border-warning d-flex align-items-center gap-3 mb-4">
            <i class="bi bi-info-circle-fill fs-3 text-warning"></i>
            <div>
              <strong>100% WordPress Theme Ready!</strong> This entire standalone PHP architecture was designed to directly translate into a standard WordPress Custom Theme (`wp-content/themes/kk-lifewise/`) with standard Custom Post Types and ACF fields.
            </div>
          </div>

          <div class="row g-4">
            <div class="col-md-6">
              <div class="p-4 bg-white rounded-3 border shadow-sm h-100">
                <h6 class="fw-bold text-stone-900 mb-3 text-uppercase small text-warning"><i class="bi bi-folder2-open me-1"></i> 1. Template Hierarchy Mapping</h6>
                <ul class="list-group list-group-flush small">
                  <li class="list-group-item px-0 py-2 d-flex justify-content-between">
                    <code>index.php</code> <span class="badge bg-secondary">Front-Page / Hero / Sections</span>
                  </li>
                  <li class="list-group-item px-0 py-2 d-flex justify-content-between">
                    <code>header.php & navbar.php</code> <span class="badge bg-secondary">get_header()</span>
                  </li>
                  <li class="list-group-item px-0 py-2 d-flex justify-content-between">
                    <code>footer.php</code> <span class="badge bg-secondary">get_footer()</span>
                  </li>
                  <li class="list-group-item px-0 py-2 d-flex justify-content-between">
                    <code>article.php</code> <span class="badge bg-secondary">single-article.php</span>
                  </li>
                  <li class="list-group-item px-0 py-2 d-flex justify-content-between">
                    <code>book-detail.php</code> <span class="badge bg-secondary">single-book_summary.php</span>
                  </li>
                  <li class="list-group-item px-0 py-2 d-flex justify-content-between">
                    <code>video-detail.php</code> <span class="badge bg-secondary">single-video.php</span>
                  </li>
                  <li class="list-group-item px-0 py-2 d-flex justify-content-between">
                    <code>story-detail.php</code> <span class="badge bg-secondary">single-story.php</span>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-6">
              <div class="p-4 bg-white rounded-3 border shadow-sm h-100">
                <h6 class="fw-bold text-stone-900 mb-3 text-uppercase small text-warning"><i class="bi bi-cpu me-1"></i> 2. WordPress Custom Post Types (CPTs)</h6>
                <pre class="bg-stone-900 text-warning p-3 rounded-3 small mb-0" style="max-height: 220px; overflow-y: auto;">
register_post_type('article', [
  'labels' => ['name' => 'వ్యాసాలు'],
  'public' => true,
  'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
  'taxonomies' => ['article_category', 'post_tag']
]);

register_post_type('book_summary', [
  'labels' => ['name' => 'పుస్తక సారాంశాలు'],
  'public' => true,
  'supports' => ['title', 'editor', 'thumbnail']
]);

register_post_type('video_hub', [
  'labels' => ['name' => 'వీడియోలు'],
  'public' => true,
  'supports' => ['title', 'editor']
]);
                </pre>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-dark btn-sm rounded-pill" data-bs-dismiss="modal">సరే, ధన్యవాదాలు</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5.3.3 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom Core Scripts -->
  <script src="/js/main.js?v=2.0"></script>
  <script src="/js/search.js?v=2.0"></script>
  <script src="/js/quotes.js?v=2.0"></script>
  <script src="/js/assessment.js?v=2.0"></script>
  <script src="/js/modals.js?v=2.0"></script>

</body>
</html>
