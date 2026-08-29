<?php
// assessment.php - 6-Pillar Interactive Life Assessment Page
require_once __DIR__ . '/functions.php';

$custom_page_title = 'జీవన విశ్లేషణ (Life Assessment) | KK LifeWise';
$custom_page_desc = 'మీ మైండ్‌సెట్, ఆర్థిక క్రమశిక్షణ, కెరీర్, ఆరోగ్యం మరియు సంబంధాల సమతుల్యతను అంచనా వేయండి.';

include __DIR__ . '/header.php';
?>

<div class="bg-hero-pattern py-5 border-bottom border-stone-200">
  <div class="container py-lg-3">
    <div class="max-w-3xl">
      <div class="badge badge-pill badge-gold mb-2">
        <i class="bi bi-compass text-warning"></i> స్వీయ విశ్లేషణ టూల్
      </div>
      <h1 class="hero-heading font-serif-telugu fw-bold text-stone-900 mb-3" style="font-size: 2.8rem;">
        జీవన సమతుల్యత విశ్లేషణ (Life Balance Assessment)
      </h1>
      <p class="text-stone-600 fs-5 mb-0" style="line-height: 1.6;">
        కింది 6 జీవన స్తంభాలలో మీకు మీరే 1 నుండి 10 వరకు నిజాయితీగా రేటింగ్ ఇచ్చుకోండి. మీ తక్షణ స్కోరు మరియు అనుకూల కార్యాచరణ ప్రణాళికను పొందండి.
      </p>
    </div>
  </div>
</div>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-5">
      
      <!-- Sliders Column -->
      <div class="col-lg-7">
        <div class="p-4 p-md-5 rounded-4 bg-stone-50 border border-stone-200 shadow-sm">
          
          <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
            <h4 class="fw-bold text-stone-900 mb-0">6 ముఖ్య స్తంభాలు (Pillars)</h4>
            <button type="button" id="resetAssessmentBtn" class="btn btn-sm btn-outline-secondary rounded-pill">
              <i class="bi bi-arrow-counterclockwise"></i> రీసెట్
            </button>
          </div>

          <!-- Pillar 1: Mindset -->
          <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <label for="pillar-mindset" class="fw-bold text-stone-900">
                1. మైండ్‌సెట్ & భావోద్వేగ స్థిరత్వం (Mindset)
              </label>
              <span id="val-pillar-mindset" class="badge bg-stone-900 text-warning px-2.5 py-1">8/10</span>
            </div>
            <p class="small text-stone-500 mb-2">సమస్యలు ఎదురైనప్పుడు మీరు ఎంత ప్రశాంతంగా, సానుకూలంగా స్పందిస్తారు?</p>
            <input type="range" class="assessment-range-slider" id="pillar-mindset" min="1" max="10" value="8">
          </div>

          <!-- Pillar 2: Finance -->
          <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <label for="pillar-finance" class="fw-bold text-stone-900">
                2. ఆర్థిక క్రమశిక్షణ & పొదుపు (Finance)
              </label>
              <span id="val-pillar-finance" class="badge bg-stone-900 text-warning px-2.5 py-1">7/10</span>
            </div>
            <p class="small text-stone-500 mb-2">మీ బడ్జెటింగ్, పెట్టుబడులు మరియు అప్పుల నియంత్రణ ఏ స్థాయిలో ఉన్నాయి?</p>
            <input type="range" class="assessment-range-slider" id="pillar-finance" min="1" max="10" value="7">
          </div>

          <!-- Pillar 3: Career -->
          <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <label for="pillar-career" class="fw-bold text-stone-900">
                3. కెరీర్ & స్కిల్స్ అప్‌గ్రేడ్ (Career)
              </label>
              <span id="val-pillar-career" class="badge bg-stone-900 text-warning px-2.5 py-1">8/10</span>
            </div>
            <p class="small text-stone-500 mb-2">మీ వృత్తిలో మీరు నిత్యం కొత్త నైపుణ్యాలు నేర్చుకుంటూ ముందుకు సాగుతున్నారా?</p>
            <input type="range" class="assessment-range-slider" id="pillar-career" min="1" max="10" value="8">
          </div>

          <!-- Pillar 4: Discipline & Health -->
          <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <label for="pillar-health" class="fw-bold text-stone-900">
                4. ఆరోగ్యం & దినచర్య క్రమశిక్షణ (Health & Routine)
              </label>
              <span id="val-pillar-health" class="badge bg-stone-900 text-warning px-2.5 py-1">7/10</span>
            </div>
            <p class="small text-stone-500 mb-2">నిద్ర, వ్యాయామం, ఆహారం మరియు సమయ నిర్వహణపై మీ నిబద్ధత ఎంత?</p>
            <input type="range" class="assessment-range-slider" id="pillar-health" min="1" max="10" value="7">
          </div>

          <!-- Pillar 5: Continuous Learning -->
          <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <label for="pillar-learning" class="fw-bold text-stone-900">
                5. పుస్తక పఠనం & జ్ఞాన సముపార్జన (Learning)
              </label>
              <span id="val-pillar-learning" class="badge bg-stone-900 text-warning px-2.5 py-1">8/10</span>
            </div>
            <p class="small text-stone-500 mb-2">మంచి పుస్తకాలు లేదా విజ్ఞానాన్ని పెంచే కంటెంట్‌కు మీరు ఎంత సమయం కేటాయిస్తున్నారు?</p>
            <input type="range" class="assessment-range-slider" id="pillar-learning" min="1" max="10" value="8">
          </div>

          <!-- Pillar 6: Relationships & Purpose -->
          <div class="mb-2">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <label for="pillar-purpose" class="fw-bold text-stone-900">
                6. సంబంధాలు & జీవిత లక్ష్యం (Relationships & Purpose)
              </label>
              <span id="val-pillar-purpose" class="badge bg-stone-900 text-warning px-2.5 py-1">7/10</span>
            </div>
            <p class="small text-stone-500 mb-2">కుటుంబం, స్నేహితులతో అనుబంధాలు మరియు సమాజానికి విలువ చేకూర్చే భావన ఎంత ఉంది?</p>
            <input type="range" class="assessment-range-slider" id="pillar-purpose" min="1" max="10" value="7">
          </div>

        </div>
      </div>

      <!-- Live Score & Tailored Feedback Column -->
      <div class="col-lg-5">
        <div class="p-4 p-md-5 rounded-4 bg-stone-900 text-white shadow-lg sticky-lg-top" style="top: 100px;">
          
          <div class="text-center mb-4">
            <div class="score-circle-lg mb-3">
              <span id="assessmentScorePercent" class="display-6 fw-bold">75%</span>
              <small class="text-uppercase small fw-bold" style="font-size: 0.7rem; letter-spacing: 1px;">
                (<span id="assessmentTotalScore">45</span>/60 పాయింట్లు)
              </small>
            </div>
            <div id="assessmentTierBadge" class="badge bg-warning text-dark px-3 py-1.5 rounded-pill fs-6 mb-2">
              🚀 సాధకుడు (High Achiever)
            </div>
          </div>

          <div class="p-3.5 rounded-3 bg-stone-800 border border-stone-700 mb-4">
            <h6 id="assessmentFeedbackHeading" class="fw-bold text-warning mb-2">మంచి పునాది ఉంది!</h6>
            <p id="assessmentFeedbackDesc" class="text-stone-300 small mb-0 font-telugu" style="line-height: 1.6;">
              మీరు చాలా రంగాలలో బాగున్నారు. మీ సమతుల్యతను మరింత పెంచుకోవడానికి మా గైడ్స్ మీకు తోడ్పడతాయి.
            </p>
          </div>

          <h6 class="fw-bold text-white mb-2 small text-uppercase" style="letter-spacing: 1px;">సిఫార్సు చేయబడిన అడుగులు:</h6>
          <ul class="list-unstyled text-stone-300 small d-flex flex-column gap-2 mb-4">
            <li><i class="bi bi-check-circle-fill text-warning me-1"></i> ప్రతిరోజూ 1 మోటివేషన్ లేదా ఫైనాన్స్ వ్యాసం చదవండి.</li>
            <li><i class="bi bi-check-circle-fill text-warning me-1"></i> శ్రీకృష్ణుని 6 విజయ రహస్యాల వీడియోను అమలు చేయండి.</li>
            <li><i class="bi bi-check-circle-fill text-warning me-1"></i> ప్రతి వారం ఒక పుస్తక సారాంశాన్ని అధ్యయనం చేయండి.</li>
          </ul>

          <div class="d-grid gap-2">
            <a href="/motivation.php" class="btn btn-gold">
              వ్యాసాలు చదవండి <i class="bi bi-arrow-right"></i>
            </a>
            <button type="button" class="btn btn-outline-light btn-sm rounded-pill" onclick="window.print()">
              <i class="bi bi-printer"></i> నా స్కోర్‌ను ప్రింట్ చేయండి
            </button>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
