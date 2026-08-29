<?php
// about.php - About Us & Vision Page
require_once __DIR__ . '/functions.php';

$custom_page_title = 'మా గురించి & మా విజన్ | KK LifeWise';
$custom_page_desc = 'KK LifeWise - ఆలోచన మార్చు • జీవితం మార్చు. తెలుగు ప్రజల ఆలోచనా విధానాన్ని ఉన్నతంగా తీర్చిదిద్దే సమగ్ర వేదిక.';

include __DIR__ . '/header.php';
?>

<div class="bg-hero-pattern py-5 border-bottom border-stone-200">
  <div class="container py-lg-3">
    <div class="max-w-3xl">
      <div class="badge badge-pill badge-gold mb-2">
        <i class="bi bi-heart-fill text-danger"></i> మా ప్రయాణం & విలువలు
      </div>
      <h1 class="hero-heading font-serif-telugu fw-bold text-stone-900 mb-3" style="font-size: 2.8rem;">
        మా గురించి (About KK LifeWise)
      </h1>
      <p class="text-stone-600 fs-5 mb-0" style="line-height: 1.6;">
        ఆలోచన మారితే జీవితం మారుతుంది అనే బలమైన నమ్మకంతో ప్రారంభమైన ఒక విశిష్ట తెలుగు విజ్ఞాన ఉద్యమం.
      </p>
    </div>
  </div>
</div>

<section class="py-5 bg-white">
  <div class="container">
    
    <div class="row g-5 align-items-center mb-5">
      <div class="col-lg-6">
        <h2 class="fw-bold text-stone-900 mb-3 font-serif-telugu">మా లక్ష్యం & దృక్పథం (Our Mission & Vision)</h2>
        <p class="text-stone-700 fs-5" style="line-height: 1.7;">
          తెలుగు నేలలో ప్రతి ఒక్కరికీ నాణ్యమైన వ్యక్తిగత వికాసం, ఆర్థిక విజ్ఞానం, మరియు ప్రపంచ ప్రసిద్ధ ఆలోచనలను తమ మాతృభాషలోనే ఉచితంగా మరియు సులభంగా అందించడమే <strong>KK LifeWise</strong> ప్రధాన ఉద్దేశం.
        </p>
        <p class="text-stone-600" style="line-height: 1.7;">
          యూట్యూబ్‌లో <strong>KK Motivation Telugu</strong> ఛానెల్ ద్వారా 500,000 పైగా సబ్స్క్రైబర్ల విశ్వాసాన్ని పొందిన మేము, మరింత సమగ్రమైన రీతిలో ఆర్టికల్స్, పుస్తక సారాంశాలు, ఆడియో నోట్స్ మరియు ప్రాక్టికల్ వర్క్‌బుక్స్ రూపంలో ఈ వేదికను అందించడం గర్వకారణంగా భావిస్తున్నాము.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="p-4 p-md-5 rounded-4 bg-stone-900 text-white shadow-xl">
          <div class="brand-logo-icon mb-4" style="width: 54px; height: 54px; font-size: 26px;">
            <i class="bi bi-fire"></i>
          </div>
          <blockquote class="fs-4 fw-medium text-warning font-serif-telugu mb-3">
            "ఆలోచన మార్చుకుంటే మీ భావోద్వేగాలు మారతాయి. భావోద్వేగాలు మారితే చేతలు మారతాయి. చేతలు మారితే జీవితమే మారుతుంది!"
          </blockquote>
          <span class="d-block text-stone-400 font-telugu">— KK Motivation Team</span>
        </div>
      </div>
    </div>

    <!-- 4 Core Pillars -->
    <div class="pt-5 border-top">
      <div class="text-center max-w-2xl mx-auto mb-5">
        <span class="badge badge-pill badge-gold mb-2">పునాదులు</span>
        <h3 class="fw-bold text-stone-900">KK LifeWise 4 ప్రధాన స్తంభాలు</h3>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-4 bg-stone-50 border h-100 text-center">
            <div class="brand-logo-icon mx-auto mb-3">
              <i class="bi bi-lightning-charge"></i>
            </div>
            <h5 class="fw-bold text-stone-900 mb-2">1. మోటివేషన్</h5>
            <p class="text-stone-600 small mb-0">శాస్త్రీయ మరియు భావోద్వేగ స్థిరత్వాన్ని అందించే ప్రేరణ.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-4 bg-stone-50 border h-100 text-center">
            <div class="brand-logo-icon mx-auto mb-3">
              <i class="bi bi-coin"></i>
            </div>
            <h5 class="fw-bold text-stone-900 mb-2">2. ఆర్థిక వివేకం</h5>
            <p class="text-stone-600 small mb-0">సామాన్యుడిని ఆర్థిక స్వాతంత్ర్యం దిశగా నడిపించే పాఠాలు.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-4 bg-stone-50 border h-100 text-center">
            <div class="brand-logo-icon mx-auto mb-3">
              <i class="bi bi-briefcase"></i>
            </div>
            <h5 class="fw-bold text-stone-900 mb-2">3. కెరీర్ ఎదుగుదల</h5>
            <p class="text-stone-600 small mb-0">ఆధునిక నైపుణ్యాలు మరియు ఉద్యోగ విజయ వ్యూహాలు.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-4 bg-stone-50 border h-100 text-center">
            <div class="brand-logo-icon mx-auto mb-3">
              <i class="bi bi-book"></i>
            </div>
            <h5 class="fw-bold text-stone-900 mb-2">4. పుస్తక విజ్ఞానం</h5>
            <p class="text-stone-600 small mb-0">ప్రపంచ స్థాయి బెస్ట్ సెల్లర్ల అద్భుతమైన సారాంశాలు.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
