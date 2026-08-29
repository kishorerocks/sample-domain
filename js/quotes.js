/**
 * KK LifeWise - Interactive Quote Card Generator
 */

document.addEventListener('DOMContentLoaded', () => {
  const quoteTextInput = document.getElementById('generatorQuoteText');
  const quoteAuthorInput = document.getElementById('generatorAuthor');
  const quotePreviewBox = document.getElementById('quotePreviewBox');
  const quotePreviewText = document.getElementById('quotePreviewText');
  const quotePreviewAuthor = document.getElementById('quotePreviewAuthor');
  const downloadBtn = document.getElementById('downloadQuoteCardBtn');
  const copyCardBtn = document.getElementById('copyCardQuoteBtn');
  const themeBtns = document.querySelectorAll('.theme-select-btn');

  if (!quoteTextInput || !quotePreviewBox) return;

  // Background Theme Gradients
  const themes = {
    gold: 'linear-gradient(135deg, #1c1917 0%, #0c0a09 50%, #451a03 100%)',
    amber: 'linear-gradient(135deg, #fbbf24 0%, #d97706 50%, #78350f 100%)',
    crimson: 'linear-gradient(135deg, #881337 0%, #4c0519 50%, #1c1917 100%)',
    emerald: 'linear-gradient(135deg, #064e3b 0%, #022c22 50%, #1c1917 100%)',
    royal: 'linear-gradient(135deg, #1e1b4b 0%, #0f172a 50%, #0c0a09 100%)',
    minimal: 'linear-gradient(135deg, #292524 0%, #1c1917 100%)'
  };

  let currentTheme = 'gold';

  // Live Text Sync
  quoteTextInput.addEventListener('input', (e) => {
    quotePreviewText.textContent = e.target.value || 'మీరు ఒక కొత్త ఆలోచనతో మీ రోజును ప్రారంభించండి.';
  });

  if (quoteAuthorInput) {
    quoteAuthorInput.addEventListener('input', (e) => {
      quotePreviewAuthor.textContent = e.target.value || 'KK LifeWise';
    });
  }

  // Live Theme Switching
  themeBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      themeBtns.forEach(b => b.classList.remove('border-warning', 'scale-110'));
      btn.classList.add('border-warning', 'scale-110');
      currentTheme = btn.getAttribute('data-theme') || 'gold';
      quotePreviewBox.style.background = themes[currentTheme] || themes.gold;
    });
  });

  // Download Quote Card via HTML5 Canvas
  if (downloadBtn) {
    downloadBtn.addEventListener('click', () => {
      const canvas = document.createElement('canvas');
      const ctx = canvas.getContext('2d');
      const width = 1080;
      const height = 1080;
      canvas.width = width;
      canvas.height = height;

      // Draw Gradient Background
      let grad;
      if (currentTheme === 'amber') {
        grad = ctx.createLinearGradient(0, 0, width, height);
        grad.addColorStop(0, '#fbbf24');
        grad.addColorStop(0.5, '#d97706');
        grad.addColorStop(1, '#78350f');
      } else if (currentTheme === 'crimson') {
        grad = ctx.createLinearGradient(0, 0, width, height);
        grad.addColorStop(0, '#881337');
        grad.addColorStop(0.5, '#4c0519');
        grad.addColorStop(1, '#1c1917');
      } else if (currentTheme === 'emerald') {
        grad = ctx.createLinearGradient(0, 0, width, height);
        grad.addColorStop(0, '#064e3b');
        grad.addColorStop(0.5, '#022c22');
        grad.addColorStop(1, '#1c1917');
      } else if (currentTheme === 'royal') {
        grad = ctx.createLinearGradient(0, 0, width, height);
        grad.addColorStop(0, '#1e1b4b');
        grad.addColorStop(0.5, '#0f172a');
        grad.addColorStop(1, '#0c0a09');
      } else {
        grad = ctx.createLinearGradient(0, 0, width, height);
        grad.addColorStop(0, '#1c1917');
        grad.addColorStop(0.5, '#0c0a09');
        grad.addColorStop(1, '#451a03');
      }
      ctx.fillStyle = grad;
      ctx.fillRect(0, 0, width, height);

      // Decorative Accent Border
      ctx.strokeStyle = 'rgba(251, 191, 36, 0.4)';
      ctx.lineWidth = 12;
      ctx.strokeRect(60, 60, width - 120, height - 120);

      // Draw Large Quotation Icon
      ctx.font = 'bold 220px serif';
      ctx.fillStyle = 'rgba(251, 191, 36, 0.12)';
      ctx.fillText('“', 100, 240);

      // Brand Header Top
      ctx.font = 'bold 36px "Plus Jakarta Sans", sans-serif';
      ctx.fillStyle = '#fbbf24';
      ctx.textAlign = 'center';
      ctx.fillText('KK LIFEWISE', width / 2, 140);

      ctx.font = '24px "Noto Sans Telugu", sans-serif';
      ctx.fillStyle = 'rgba(255, 255, 255, 0.7)';
      ctx.fillText('ఆలోచన మార్చు • జీవితం మార్చు', width / 2, 185);

      // Quote Text (Wrapped)
      const text = quotePreviewText.textContent;
      ctx.font = '500 42px "Noto Sans Telugu", "Suranna", sans-serif';
      ctx.fillStyle = '#ffffff';
      ctx.textAlign = 'center';

      wrapCanvasText(ctx, `"${text}"`, width / 2, 460, width - 240, 68);

      // Author Signature
      const author = quotePreviewAuthor.textContent || 'KK LifeWise';
      ctx.font = 'bold 32px "Noto Sans Telugu", sans-serif';
      ctx.fillStyle = '#fbbf24';
      ctx.fillText(`— ${author}`, width / 2, 860);

      // Platform Footer Tag
      ctx.font = '22px "Plus Jakarta Sans", sans-serif';
      ctx.fillStyle = 'rgba(255, 255, 255, 0.5)';
      ctx.fillText('YouTube: @KKMotivationTelugu • kklifewise.com', width / 2, 940);

      // Download image
      const link = document.createElement('a');
      link.download = 'KK-LifeWise-Wisdom.png';
      link.href = canvas.toDataURL('image/png');
      link.click();

      if (window.showToast) window.showToast('కోట్ కార్డ్ ఇమేజ్ డౌన్‌లోడ్ చేయబడింది!');
    });
  }

  function wrapCanvasText(ctx, text, x, y, maxWidth, lineHeight) {
    const words = text.split(' ');
    let line = '';
    let testLine = '';
    const lines = [];

    for (let n = 0; n < words.length; n++) {
      testLine = line + words[n] + ' ';
      const metrics = ctx.measureText(testLine);
      const testWidth = metrics.width;
      if (testWidth > maxWidth && n > 0) {
        lines.push(line);
        line = words[n] + ' ';
      } else {
        line = testLine;
      }
    }
    lines.push(line);

    // Center vertical alignment for multiple lines
    const startY = y - ((lines.length - 1) * lineHeight) / 2;
    for (let k = 0; k < lines.length; k++) {
      ctx.fillText(lines[k], x, startY + (k * lineHeight));
    }
  }

  // Open generator with pre-filled quote
  window.openQuoteGeneratorWith = function(quoteText, author) {
    if (quoteTextInput) quoteTextInput.value = quoteText;
    if (quoteAuthorInput) quoteAuthorInput.value = author;
    if (quotePreviewText) quotePreviewText.textContent = quoteText;
    if (quotePreviewAuthor) quotePreviewAuthor.textContent = author;

    const modalEl = document.getElementById('quoteModal');
    if (modalEl) {
      const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
      modal.show();
    }
  };
});
