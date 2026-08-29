<?php
// assessment.php - Interactive Telugu Life Assessment Tool ("జీవన విశ్లేషణ")
$page_title = 'జీవన విశ్లేషణ (Life Assessment Test) - KK LifeWise | ఆలోచన మార్చు • జీవితం మార్చు';
$page_description = 'Interactive Telugu Life Assessment Test. Evaluate your Mindset, Financial Discipline, Career Growth, Habits and Life Purpose in 2 minutes.';
$active_page = 'assessment';

require_once __DIR__ . '/header.php';
?>

<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-10">
    <!-- Header Banner -->
    <div class="relative py-12 px-6 sm:px-10 rounded-3xl overflow-hidden glass-panel border border-primary/30 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container/20 text-primary text-xs font-bold uppercase mb-3">
            <span class="material-symbols-outlined text-sm">psychology</span>
            Self Evaluation & Growth Roadmap
        </div>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-primary font-sans mb-3">
            జీవన విశ్లేషణ (Life Assessment)
        </h1>
        <p class="text-base sm:text-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
            మీ జీవితంలోని 6 ముఖ్య రంగాలను (ఆలోచన, సంపద, కెరీర్, క్రమశిక్షణ, ఆరోగ్యం, లక్ష్యం) నిజాయితీగా సమీక్షించుకోండి.
        </p>
    </div>

    <!-- Assessment Form Container -->
    <div id="assessment-container" class="bg-surface-container rounded-3xl p-6 sm:p-10 border border-white/10 shadow-2xl space-y-8">
        <div class="flex items-center justify-between pb-4 border-b border-white/10">
            <div class="text-xs font-bold text-primary uppercase tracking-widest font-sans">
                6 ముఖ్య రంగాలు • 6 ప్రశ్నలు
            </div>
            <div class="text-xs text-on-surface-variant" id="progress-text">పూర్తి: 0 / 6</div>
        </div>

        <form id="life-assessment-form" class="space-y-8">
            <?php foreach ($assessment_questions as $index => $q): ?>
                <div class="p-6 rounded-2xl bg-surface-container-high/60 border border-white/5 space-y-4 question-block" data-qindex="<?= $index + 1 ?>">
                    <div class="flex items-center gap-2">
                        <span class="w-7 h-7 rounded-full bg-primary/20 text-primary font-bold text-xs flex items-center justify-center font-sans">
                            <?= $index + 1 ?>
                        </span>
                        <span class="text-xs font-bold text-primary font-sans uppercase">
                            <?= htmlspecialchars($q['pillar_name']) ?>
                        </span>
                    </div>

                    <h3 class="text-base sm:text-lg font-bold text-on-surface leading-snug">
                        <?= htmlspecialchars($q['question']) ?>
                    </h3>

                    <div class="space-y-2.5">
                        <?php foreach ($q['options'] as $optIndex => $opt): ?>
                            <label class="flex items-start gap-3 p-3.5 rounded-xl bg-surface-container hover:bg-surface-container-highest border border-white/5 hover:border-primary/40 cursor-pointer transition-all">
                                <input type="radio" name="<?= $q['id'] ?>" value="<?= $opt['score'] ?>" class="mt-1 text-primary focus:ring-primary h-4 w-4 bg-surface-container border-white/20 option-input" required>
                                <span class="text-xs sm:text-sm text-on-surface leading-relaxed">
                                    <?= htmlspecialchars($opt['text']) ?>
                                </span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <button type="submit" id="submit-assessment-btn" class="btn-gold w-full py-4 rounded-xl font-bold text-base shadow-xl flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">analytics</span>
                నా విశ్లేషణ నివేదిక చూడండి (Generate My Report)
            </button>
        </form>
    </div>

    <!-- Assessment Result Card (Initially Hidden) -->
    <div id="assessment-result-box" class="hidden bg-surface-container rounded-3xl p-6 sm:p-10 border border-primary/40 shadow-2xl space-y-8 animate-in fade-in zoom-in duration-300">
        <div class="text-center space-y-3">
            <div class="w-16 h-16 rounded-2xl bg-primary-container/30 border border-primary/50 text-primary flex items-center justify-center mx-auto shadow-lg">
                <span class="material-symbols-outlined text-3xl">military_tech</span>
            </div>
            <span class="text-xs font-bold text-primary uppercase tracking-widest font-sans">మీ జీవన విశ్లేషణ స్కోరు</span>
            <h2 id="result-grade-title" class="text-2xl sm:text-4xl font-extrabold text-on-surface font-sans">
                Achiever (విజేత మైండ్‌సెట్)
            </h2>
            <div class="text-4xl sm:text-5xl font-extrabold text-primary font-sans" id="result-score-percent">
                85%
            </div>
            <p id="result-summary-msg" class="text-sm sm:text-base text-on-surface-variant max-w-xl mx-auto leading-relaxed">
                మీరు మంచి ఆలోచనా విధానం మరియు సంకల్పం కలిగి ఉన్నారు. కొన్ని రంగాలలో చిన్న సర్దుబాట్లు చేస్తే అద్భుతమైన స్థాయికి ఎదుగుతారు.
            </p>
        </div>

        <!-- Pillar Insights Breakdown -->
        <div class="space-y-4 pt-4 border-t border-white/10">
            <h3 class="text-lg font-bold text-primary font-sans">మీ రంగాలు & ప్రణాళిక (Action Roadmap):</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4" id="pillar-feedback-grid">
                <!-- Generated by JS -->
            </div>
        </div>

        <div class="pt-6 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
            <button type="button" id="retake-assessment-btn" class="btn-outline-gold px-6 py-3 rounded-xl text-xs font-bold flex items-center gap-1.5">
                <span class="material-symbols-outlined text-base">replay</span>
                మళ్లీ విశ్లేషించండి
            </button>
            <button type="button" class="btn-gold px-6 py-3 rounded-xl text-xs font-bold flex items-center gap-2 share-quote-btn">
                <span class="material-symbols-outlined text-base">share</span>
                మిత్రులకు సవాల్ విసరండి
            </button>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('life-assessment-form');
    const container = document.getElementById('assessment-container');
    const resultBox = document.getElementById('assessment-result-box');
    const progressText = document.getElementById('progress-text');
    const inputs = document.querySelectorAll('.option-input');

    // Update progress
    function updateProgress() {
        const answered = new Set();
        inputs.forEach(input => {
            if (input.checked) answered.add(input.name);
        });
        progressText.innerText = `పూర్తి: ${answered.size} / 6`;
    }

    inputs.forEach(input => {
        input.addEventListener('change', updateProgress);
    });

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            let totalScore = 0;
            const maxScore = 24;

            const formData = new FormData(form);
            for (let val of formData.values()) {
                totalScore += parseInt(val, 10);
            }

            const percent = Math.round((totalScore / maxScore) * 100);
            document.getElementById('result-score-percent').innerText = `${percent}% (${totalScore} / ${maxScore} పాయింట్లు)`;

            let title = '';
            let summary = '';
            if (percent >= 80) {
                title = 'Master Mindset (ఉన్నత స్థితి)';
                summary = 'అభినందనలు! మీ ఆలోచనా సరళి, క్రమశిక్షణ మరియు లక్ష్యాలు చాలా స్పష్టంగా ఉన్నాయి. ఇతరులకు ఆదర్శంగా నిలవండి.';
            } else if (percent >= 60) {
                title = 'Achiever (పురోగతిలో ఉన్న విజేత)';
                summary = 'మీరు మంచి పునాదిపై ఉన్నారు. ఖర్చుల నియంత్రణ మరియు రోజువారీ అలవాట్లపై మరింత శ్రద్ధ పెడితే అద్భుతమైన మార్పు సాధ్యమవుతుంది.';
            } else if (percent >= 40) {
                title = 'Builder (నిర్మాణ దశ)';
                summary = 'మీ జీవితంలో కొంత సందిగ్ధత లేదా ఓవర్‌థింకింగ్ ఉంది. భయపడకండి; చిన్న చిన్న అలవాట్లతో ప్రారంభించి లక్ష్యాలను స్థిరపరచుకోండి.';
            } else {
                title = 'Seeker (సరికొత్త ఆరంభం అవసరం)';
                summary = 'ప్రస్తుతం మీరు ఒత్తిడి లేదా అయోమయంలో ఉండవచ్చు. KK LifeWise వ్యాసాలు, భగవద్గీత సూత్రాలు చదివి నమ్మకంతో మొదటి అడుగు వేయండి.';
            }

            document.getElementById('result-grade-title').innerText = title;
            document.getElementById('result-summary-msg').innerText = summary;

            // Render pillar suggestions
            const feedbackGrid = document.getElementById('pillar-feedback-grid');
            feedbackGrid.innerHTML = `
                <div class="p-4 rounded-xl bg-surface-container-high border border-white/5">
                    <span class="text-xs font-bold text-amber-400 block mb-1">1. ఆలోచనా సరళి (Mindset)</span>
                    <p class="text-xs text-on-surface-variant">ప్రతికూల ఆలోచనలు వచ్చినప్పుడు 5-సెకండ్ రూల్ పాటించండి.</p>
                </div>
                <div class="p-4 rounded-xl bg-surface-container-high border border-white/5">
                    <span class="text-xs font-bold text-emerald-400 block mb-1">2. ఆర్థిక క్రమశిక్షణ (Money)</span>
                    <p class="text-xs text-on-surface-variant">50-30-20 నిబంధన పాటించి నెలకు కనీసం 20% SIP లో ఉంచండి.</p>
                </div>
                <div class="p-4 rounded-xl bg-surface-container-high border border-white/5">
                    <span class="text-xs font-bold text-blue-400 block mb-1">3. నైపుణ్యాలు (Skills)</span>
                    <p class="text-xs text-on-surface-variant">వారానికి ఒక కొత్త స్కిల్ లేదా AI టూల్‌ను ప్రాక్టీస్ చేయండి.</p>
                </div>
                <div class="p-4 rounded-xl bg-surface-container-high border border-white/5">
                    <span class="text-xs font-bold text-purple-400 block mb-1">4. మానసిక ప్రశాంతత (Health)</span>
                    <p class="text-xs text-on-surface-variant">రోజూ 10 నిమిషాల ప్రాణాయామం మరియు డిజిటల్ డిటాక్స్ చేయండి.</p>
                </div>
            `;

            container.classList.add('hidden');
            resultBox.classList.remove('hidden');
            window.scrollTo({ top: 0, behavior: 'smooth' });

            if (typeof showToast === 'function') {
                showToast('మీ జీవన విశ్లేషణ పూర్తయింది!');
            }
        });
    }

    const retakeBtn = document.getElementById('retake-assessment-btn');
    if (retakeBtn) {
        retakeBtn.addEventListener('click', function() {
            form.reset();
            updateProgress();
            resultBox.classList.add('hidden');
            container.classList.remove('hidden');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
