/**
 * KK LifeWise - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {
  // Initialize Lucide icons if loaded
  if (window.lucide) {
    window.lucide.createIcons();
  }

  // Header scroll shadow effect
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }
  });

  // Global Keyboard Shortcut: Cmd/Ctrl + K for Search
  document.addEventListener('keydown', (e) => {
    if ((e.metaKey || e.ctrlKey) && e.key.toLowerCase() === 'k') {
      e.preventDefault();
      const searchModalEl = document.getElementById('searchModal');
      if (searchModalEl) {
        const searchModal = bootstrap.Modal.getOrCreateInstance(searchModalEl);
        searchModal.show();
        setTimeout(() => {
          document.getElementById('searchInputField')?.focus();
        }, 350);
      }
    }
  });

  // Articles Category Filtering
  const filterBtns = document.querySelectorAll('.filter-tab-btn');
  const articleCards = document.querySelectorAll('.article-item-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const targetCategory = btn.getAttribute('data-category');

      articleCards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');
        if (targetCategory === 'all' || cardCategory === targetCategory) {
          card.style.display = 'block';
          card.classList.add('animate-fade-in');
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Toast / Copy helper
  window.showToast = function(message) {
    let toast = document.getElementById('lwToast');
    if (!toast) {
      toast = document.createElement('div');
      toast.id = 'lwToast';
      toast.className = 'position-fixed bottom-0 end-0 p-3';
      toast.style.zIndex = '9999';
      toast.innerHTML = `
        <div class="toast align-items-center text-white bg-dark border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
            <div class="toast-body d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-warning"></i>
              <span id="lwToastMessage">${message}</span>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>
      `;
      document.body.appendChild(toast);
    }
    document.getElementById('lwToastMessage').textContent = message;
    const bsToast = new bootstrap.Toast(toast.querySelector('.toast'));
    bsToast.show();
  };

  // Copy Daily Quote to Clipboard
  window.copyQuoteText = function(text, author) {
    const fullText = `"${text}"\n\n— ${author} (KK LifeWise)\nhttps://kklifewise.com`;
    navigator.clipboard.writeText(fullText).then(() => {
      window.showToast('కోట్ క్లిప్‌బోర్డ్‌కి కాపీ చేయబడింది!');
    }).catch(() => {
      window.showToast('కాపీ చేయడం సాధ్యపడలేదు.');
    });
  };

  // Share Daily Quote to WhatsApp
  window.shareQuoteWhatsApp = function(text, author) {
    const fullText = `✨ *నేటి ఆలోచన - KK LifeWise*\n\n"${text}"\n\n— *${author}*\n\nమరిన్ని తెలుగు ఆలోచనల కోసం: ${window.location.origin}`;
    const url = `https://api.whatsapp.com/send?text=${encodeURIComponent(fullText)}`;
    window.open(url, '_blank');
  };
});
