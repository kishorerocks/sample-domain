<?php
// story-detail.php - Single Motivational Story Detail
require_once __DIR__ . '/functions.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$story = $slug ? get_story_by_slug($slug) : ($id ? get_story_by_id($id) : null);

if (!$story) {
    $story = $stories[0] ?? [
        'id' => 1,
        'slug' => 'bamboo-tree-patience',
        'title' => 'చైనీస్ వెదురు చెట్టు కథ | సహనం మరియు సంకల్పం',
        'summary' => '4 సంవత్సరాల పాటు భూమి కింద ఏ మార్పు లేకుండా కనిపించినా, 5వ సంవత్సరంలో 80 అడుగులు ఎదిగే వెదురు కథ.',
        'author' => 'KK LifeWise Team',
        'image' => 'https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?w=800&auto=format&fit=crop&q=80',
        'moral' => 'కఠిన పరిశ్రమకు ఫలితం వెంటనే కనిపించకపోయినా సహనంతో ఉంటే అద్భుతమైన విజయం లభిస్తుంది.',
        'content' => '
          <h3>నిరీక్షణ యొక్క అద్భుత శక్తి</h3>
          <p>చైనాలో ఒక ప్రత్యేకమైన వెదురు విత్తనాన్ని నాటినప్పుడు, రైతు దానికి ప్రతిరోజూ నీరు పోసి ఎరువు వేస్తాడు. కానీ మొదటి సంవత్సరం భూమిపై ఒక్క చిన్న ఆకు కూడా మొలకెత్తదు. రెండవ సంవత్సరం, మూడవ సంవత్సరం, నాల్గవ సంవత్సరం కూడా అలాగే ఉంటుంది. పైకి ఏ మార్పూ కనిపించదు.</p>
          <p>కానీ ఐదవ సంవత్సరంలో ఒక అద్భుతం జరుగుతుంది! కేవలం 6 వారాల వ్యవధిలోనే ఆ వెదురు చెట్టు 80 అడుగుల ఎత్తుకు ఎదుగుతుంది!</p>
          <h4>దీని వెనుక ఉన్న రహస్యం ఏమిటి?</h4>
          <p>ఆ మొదటి 4 సంవత్సరాలలో ఆ చెట్టు భూమి కింద వందలాది మీటర్ల లోతుకు తన వేళ్లను బలంగా విస్తరించుకుంది. ఆ బలమైన పునాది లేకుండా కేవలం 6 వారాల్లో 80 అడుగులు ఎదగడం అసాధ్యం.</p>
          <h4>మన జీవితానికి అన్వయం</h4>
          <p>మీరు కూడా వ్యాపారంలో లేదా కెరీర్‌లో కష్టపడుతున్నప్పుడు ఫలితం వెంటనే కనిపించకపోవచ్చు. మీరు నిరుత్సాహపడకండి; మీరు భూమి కింద బలమైన పునాదిని నిర్మించుకుంటున్నారు అని నమ్మండి.</p>
        '
    ];
}

$custom_page_title = $story['title'] . ' | KK LifeWise Stories';
$custom_page_desc = $story['summary'];

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

        <div class="article-content-body font-telugu text-stone-800 fs-6" style="line-height: 1.8;">
          <?php echo $story['content']; ?>
        </div>

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
