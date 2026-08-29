<?php
// data/quotes.php - KK LifeWise Telugu Daily Wisdom, Quotes & Affirmations

$quotes = [
    [
        'id' => 1,
        'quote' => 'నీ గమ్యం చేరుకునే వరకు అలుపెరుగక సాగిపో. ఓటమి నిన్ను భయపెట్టినా, నీ సంకల్పం దాన్ని జయించాలి.',
        'author' => 'స్వామి వివేకానంద ప్రేరణ',
        'category' => 'motivation',
        'affirmation' => 'నేను నా లక్ష్యాన్ని సాధించగలను. ప్రతిరోజూ నా ఎదుగుదలకు కృషి చేస్తాను.',
        'translation' => 'Keep moving until you reach your goal. Even if failure scares you, your determination must overcome it.'
    ],
    [
        'id' => 2,
        'quote' => 'ధనం సంపాదించడం ఒక కళ అయితే, దాన్ని నిలబెట్టుకోవడం మరియు పెంచుకోవడం ఒక శాస్త్రం.',
        'author' => 'ఆర్థిక వివేకం',
        'category' => 'money',
        'affirmation' => 'నేను ఆర్థిక క్రమశిక్షణతో నా సంపదను నిర్మిస్తున్నాను.',
        'translation' => 'If earning money is an art, preserving and growing it is a science.'
    ],
    [
        'id' => 3,
        'quote' => 'నీ ఆలోచనలే నీ ప్రపంచాన్ని నిర్మిస్తాయి. గొప్ప ఆలోచనలు గొప్ప ఫలితాలను ఇస్తాయి.',
        'author' => 'శ్రీకృష్ణ సందేశం',
        'category' => 'mindset',
        'affirmation' => 'నా మనస్సు ప్రశాంతంగా, శక్తివంతంగా మరియు సానుకూలంగా ఉంది.',
        'translation' => 'Your thoughts shape your world. Great thoughts produce great results.'
    ],
    [
        'id' => 4,
        'quote' => 'రోజూ చేసే చిన్న అలవాట్లే భవిష్యత్తులో అద్భుతమైన మార్పులను తెస్తాయి. క్రమశిక్షణే నిజమైన స్వేచ్ఛ.',
        'author' => 'జేమ్స్ క్లియర్ ప్రేరణ',
        'category' => 'habits',
        'affirmation' => 'ప్రతిరోజూ 1% మెరుగవ్వడానికి నేను అలవాట్లను పాటిస్తాను.',
        'translation' => 'Small daily habits create massive transformations. Discipline is true freedom.'
    ],
    [
        'id' => 5,
        'quote' => 'భయం అనేది కేవలం ఊహ మాత్రమే. ధైర్యంగా మొదటి అడుగు వేస్తే అవకాశాల ద్వారాలు తెరుచుకుంటాయి.',
        'author' => 'KK LifeWise',
        'category' => 'career',
        'affirmation' => 'నేను ఎలాంటి సవాళ్లనైనా స్వీకరించి విజయం సాధించే సామర్థ్యం కలిగి ఉన్నాను.',
        'translation' => 'Fear is just an illusion. When you take the bold first step, doors of opportunity open.'
    ],
    [
        'id' => 6,
        'quote' => 'గతం నేర్పిన పాఠాన్ని గుర్తుంచుకో, వర్తమానాన్ని ప్రేమించు, భవిష్యత్తు కోసం నిర్భయంగా శ్రమించు.',
        'author' => 'జీవన సత్యం',
        'category' => 'life',
        'affirmation' => 'నేను నేటి రోజును పరిపూర్ణంగా ఉపయోగించుకుంటాను.',
        'translation' => 'Remember lessons from the past, love the present, work fearlessly for the future.'
    ]
];

function getDailyQuote($quotes) {
    // Deterministic daily quote based on day of year, or random
    $dayOfYear = (int)date('z');
    $index = $dayOfYear % count($quotes);
    return $quotes[$index];
}

function getRandomQuote($quotes) {
    $index = array_rand($quotes);
    return $quotes[$index];
}
