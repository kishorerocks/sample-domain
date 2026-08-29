/**
 * KK LifeWise - 6-Pillar Interactive Life Assessment
 */

document.addEventListener('DOMContentLoaded', () => {
  const sliders = document.querySelectorAll('.assessment-range-slider');
  const totalScoreVal = document.getElementById('assessmentTotalScore');
  const scorePercentVal = document.getElementById('assessmentScorePercent');
  const scoreTierBadge = document.getElementById('assessmentTierBadge');
  const feedbackHeading = document.getElementById('assessmentFeedbackHeading');
  const feedbackDesc = document.getElementById('assessmentFeedbackDesc');
  const resetBtn = document.getElementById('resetAssessmentBtn');

  if (!sliders || sliders.length === 0) return;

  function calculateAssessment() {
    let sum = 0;
    const maxScore = sliders.length * 10;

    sliders.forEach(slider => {
      const val = parseInt(slider.value, 10) || 5;
      sum += val;
      const valDisplay = document.getElementById(`val-${slider.id}`);
      if (valDisplay) valDisplay.textContent = val + '/10';
    });

    const percentage = Math.round((sum / maxScore) * 100);

    if (totalScoreVal) totalScoreVal.textContent = sum;
    if (scorePercentVal) scorePercentVal.textContent = percentage + '%';

    // Tier Classification & Tailored Advice in Telugu
    if (percentage >= 85) {
      if (scoreTierBadge) {
        scoreTierBadge.className = 'badge bg-success px-3 py-1.5 rounded-pill fs-6';
        scoreTierBadge.textContent = '🌟 జీవన మాస్టర్ (Master Level)';
      }
      if (feedbackHeading) feedbackHeading.textContent = 'అద్భుతం! మీరు సమతుల్యమైన మరియు క్రమశిక్షణతో కూడిన జీవితాన్ని గడుపుతున్నారు.';
      if (feedbackDesc) feedbackDesc.textContent = 'మీ మైండ్‌సెట్, కెరీర్, ఆర్థిక క్రమశిక్షణ చాలా ఉన్నత స్థాయిలో ఉన్నాయి. ఇదే వేగాన్ని కొనసాగిస్తూ ఇతరులకు ప్రేరణగా నిలవండి. మా పుస్తక సారాంశాలు మరియు తాజా ఆర్టికల్స్ చదువుతూ మరింత ఎదగండి.';
    } else if (percentage >= 60) {
      if (scoreTierBadge) {
        scoreTierBadge.className = 'badge bg-warning text-dark px-3 py-1.5 rounded-pill fs-6';
        scoreTierBadge.textContent = '🚀 సాధకుడు (High Achiever)';
      }
      if (feedbackHeading) feedbackHeading.textContent = 'మంచి పునాది ఉంది! కొన్ని అంశాలపై శ్రద్ధ పెడితే మరింత ఉన్నత స్థాయికి చేరుకోవచ్చు.';
      if (feedbackDesc) feedbackDesc.textContent = 'మీరు చాలా రంగాలలో బాగున్నారు. ముఖ్యంగా తక్కువ స్కోరు వచ్చిన 1-2 స్తంభాలపై (ఉదాహరణకు ఫైనాన్స్ లేదా క్రమశిక్షణ) దృష్టి కేంద్రీకరించండి. మా ప్రత్యేక గైడ్స్ మీకు ఎంతగానో ఉపయోగపడతాయి.';
    } else {
      if (scoreTierBadge) {
        scoreTierBadge.className = 'badge bg-danger px-3 py-1.5 rounded-pill fs-6';
        scoreTierBadge.textContent = '🌱 అన్వేషకుడు (Growth Seeker)';
      }
      if (feedbackHeading) feedbackHeading.textContent = 'మార్పును ప్రారంభించడానికి ఇదే సరైన సమయం!';
      if (feedbackDesc) feedbackDesc.textContent = 'నిరాశ చెందకండి. ప్రతి పెద్ద ప్రయాణం ఒక చిన్న అడుగుతోనే ప్రారంభమవుతుంది. ప్రతిరోజూ 15 నిమిషాల సమయం కేటాయించి మా ప్రేరణాత్మక వ్యాసాలు చదవండి మరియు శ్రీకృష్ణుని విజయ రహస్యాల వీడియోను వీక్షించండి.';
    }
  }

  sliders.forEach(slider => {
    slider.addEventListener('input', calculateAssessment);
  });

  if (resetBtn) {
    resetBtn.addEventListener('click', () => {
      sliders.forEach(slider => {
        slider.value = 5;
      });
      calculateAssessment();
    });
  }

  // Initial calculation on load
  calculateAssessment();
});
