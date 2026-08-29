<?php
// contact.php - Contact Us Page
require_once __DIR__ . '/functions.php';

$custom_page_title = 'సంప్రదించండి (Contact Us) | KK LifeWise';
$custom_page_desc = 'KK LifeWise & KK Motivation Telugu బృందాన్ని సంప్రదించండి.';

$success_msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $success_msg = 'మీ సందేశం విజయవంతంగా అందింది. మా బృందం త్వరలోనే మీకు ప్రత్యుత్తరం ఇస్తుంది. ధన్యవాదాలు!';
}

include __DIR__ . '/header.php';
?>

<div class="bg-hero-pattern py-5 border-bottom border-stone-200">
  <div class="container py-lg-3">
    <div class="max-w-3xl">
      <div class="badge badge-pill badge-gold mb-2">
        <i class="bi bi-chat-dots-fill text-warning"></i> కనెక్ట్ అవ్వండి
      </div>
      <h1 class="hero-heading font-serif-telugu fw-bold text-stone-900 mb-3" style="font-size: 2.8rem;">
        సంప్రదించండి (Contact Us)
      </h1>
      <p class="text-stone-600 fs-5 mb-0" style="line-height: 1.6;">
        మీ విలువైన అభిప్రాయాలు, సందేహాలు లేదా భాగస్వామ్యం కోసం మమ్మల్ని నేరుగా సంప్రదించవచ్చు.
      </p>
    </div>
  </div>
</div>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-5">
      
      <!-- Contact Info Cards -->
      <div class="col-lg-5">
        <div class="p-4 p-md-5 rounded-4 bg-stone-900 text-white shadow-lg h-100">
          <h3 class="fw-bold text-white mb-4 font-serif-telugu">కమ్యూనిటీ & సోషల్ మీడియా</h3>
          
          <div class="d-flex flex-column gap-4 mb-5">
            <div class="d-flex align-items-center gap-3">
              <div class="brand-logo-icon" style="background: #dc2626;">
                <i class="bi bi-youtube"></i>
              </div>
              <div>
                <strong class="d-block text-white">YouTube ఛానెల్</strong>
                <a href="<?php echo YOUTUBE_CHANNEL_URL; ?>" target="_blank" rel="noopener" class="text-warning text-decoration-none small">
                  @KKMotivationTelugu (500K+ Subs)
                </a>
              </div>
            </div>

            <div class="d-flex align-items-center gap-3">
              <div class="brand-logo-icon" style="background: #e1306c;">
                <i class="bi bi-instagram"></i>
              </div>
              <div>
                <strong class="d-block text-white">Instagram హ్యాండిల్</strong>
                <a href="<?php echo INSTAGRAM_PROFILE_URL; ?>" target="_blank" rel="noopener" class="text-warning text-decoration-none small">
                  @kkmotivationhub
                </a>
              </div>
            </div>

            <div class="d-flex align-items-center gap-3">
              <div class="brand-logo-icon" style="background: #2563eb;">
                <i class="bi bi-envelope"></i>
              </div>
              <div>
                <strong class="d-block text-white">ఇమెయిల్ అడ్రస్</strong>
                <span class="text-stone-300 small"><?php echo CONTACT_EMAIL; ?></span>
              </div>
            </div>
          </div>

          <div class="p-3.5 rounded-3 bg-stone-800 border border-stone-700">
            <h6 class="fw-bold text-warning mb-1"><i class="bi bi-lightbulb me-1"></i> మీ ఆలోచనలను పంచుకోండి:</h6>
            <p class="small text-stone-300 mb-0">
              మీరు ఏ అంశంపై లేదా ఏ పుస్తకంపై తదుపరి వీడియో లేదా వ్యాసం కోరుకుంటున్నారో మాకు తెలియజేయండి!
            </p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-7">
        <div class="p-4 p-md-5 rounded-4 bg-stone-50 border border-stone-200 shadow-sm">
          <h3 class="fw-bold text-stone-900 mb-4 font-serif-telugu">మాకు సందేశం పంపండి</h3>
          
          <?php if (!empty($success_msg)): ?>
            <div class="alert alert-success d-flex align-items-center gap-2 mb-4">
              <i class="bi bi-check-circle-fill fs-5"></i>
              <div><?php echo $success_msg; ?></div>
            </div>
          <?php endif; ?>

          <form action="/contact.php" method="POST">
            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <label for="name" class="form-label small fw-bold text-stone-700">మీ పూర్తి పేరు *</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="ఉదా: కిరణ్ కుమార్">
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label small fw-bold text-stone-700">మీ ఇమెయిల్ అడ్రస్ *</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="name@example.com">
              </div>
            </div>

            <div class="mb-3">
              <label for="subject" class="form-label small fw-bold text-stone-700">విషయం (Subject)</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="సందేశం లేదా సూచన సారాంశం">
            </div>

            <div class="mb-4">
              <label for="message" class="form-label small fw-bold text-stone-700">మీ సందేశం (Message) *</label>
              <textarea class="form-control" id="message" name="message" rows="5" required placeholder="మీ సందేశాన్ని ఇక్కడ టైప్ చేయండి..."></textarea>
            </div>

            <button type="submit" class="btn btn-gold btn-lg w-100">
              <i class="bi bi-send"></i> సందేశాన్ని పంపండి
            </button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
