/**
 * KK LifeWise - Dynamic Modals Handler
 */

document.addEventListener('DOMContentLoaded', () => {
  // Quick View Article Modal Trigger
  document.querySelectorAll('.open-article-modal-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const articleId = btn.getAttribute('data-id');
      fetchArticleModalData(articleId);
    });
  });

  function fetchArticleModalData(id) {
    const modalEl = document.getElementById('articleQuickModal');
    if (!modalEl) return;

    const modalBody = document.getElementById('articleModalBody');
    const modalTitle = document.getElementById('articleModalTitle');
    const modalCategory = document.getElementById('articleModalCategory');
    const modalReadTime = document.getElementById('articleModalReadTime');
    const modalFullLink = document.getElementById('articleModalFullLink');

    if (modalBody) modalBody.innerHTML = '<div class="text-center py-5"><div class="spinner-border text-warning" role="status"></div></div>';

    const bsModal = bootstrap.Modal.getOrCreateInstance(modalEl);
    bsModal.show();

    fetch(`/article.php?ajax=1&id=${id}`)
      .then(res => res.json())
      .then(data => {
        if (data.error) {
          modalBody.innerHTML = `<div class="alert alert-danger">${data.error}</div>`;
          return;
        }

        if (modalTitle) modalTitle.textContent = data.title;
        if (modalCategory) modalCategory.textContent = data.category_name;
        if (modalReadTime) modalReadTime.textContent = data.read_time;
        if (modalFullLink) modalFullLink.href = `/article.php?slug=${data.slug}`;

        let contentHtml = '';
        if (data.image) {
          contentHtml += `<div class="mb-4 rounded-4 overflow-hidden"><img src="${data.image}" class="w-100 object-fit-cover" style="max-height: 350px;" alt="${data.title}"></div>`;
        }
        if (data.youtube_id) {
          contentHtml += `
            <div class="ratio ratio-16x9 mb-4 rounded-4 overflow-hidden shadow-sm">
              <iframe src="https://www.youtube.com/embed/${data.youtube_id}?autoplay=0" title="${data.title}" allowfullscreen></iframe>
            </div>
          `;
        }
        contentHtml += `<div class="article-content-body">${data.content}</div>`;

        if (data.tags && data.tags.length > 0) {
          contentHtml += `<div class="d-flex flex-wrap gap-2 mt-4 pt-3 border-top">`;
          data.tags.forEach(t => {
            contentHtml += `<span class="badge bg-light text-dark border">#${t}</span>`;
          });
          contentHtml += `</div>`;
        }

        if (modalBody) modalBody.innerHTML = contentHtml;
      })
      .catch(err => {
        modalBody.innerHTML = `<div class="alert alert-danger">వ్యాసం లోడ్ చేయడంలో లోపం ఏర్పడింది.</div>`;
      });
  }

  // Quick View Book Summary Modal Trigger
  document.querySelectorAll('.open-book-modal-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const bookId = btn.getAttribute('data-id');
      fetchBookModalData(bookId);
    });
  });

  function fetchBookModalData(id) {
    const modalEl = document.getElementById('bookQuickModal');
    if (!modalEl) return;

    const modalBody = document.getElementById('bookModalBody');
    const modalTitle = document.getElementById('bookModalTitle');
    const modalAuthor = document.getElementById('bookModalAuthor');
    const modalFullLink = document.getElementById('bookModalFullLink');

    if (modalBody) modalBody.innerHTML = '<div class="text-center py-5"><div class="spinner-border text-warning" role="status"></div></div>';

    const bsModal = bootstrap.Modal.getOrCreateInstance(modalEl);
    bsModal.show();

    fetch(`/book-detail.php?ajax=1&id=${id}`)
      .then(res => res.json())
      .then(data => {
        if (data.error) {
          modalBody.innerHTML = `<div class="alert alert-danger">${data.error}</div>`;
          return;
        }

        if (modalTitle) modalTitle.textContent = data.title;
        if (modalAuthor) modalAuthor.textContent = 'రచయిత: ' + data.author;
        if (modalFullLink) modalFullLink.href = `/book-detail.php?slug=${data.slug}`;

        let contentHtml = `
          <div class="row g-4 mb-4">
            <div class="col-md-4 text-center">
              <img src="${data.cover_image}" class="img-fluid rounded-3 shadow" style="max-height: 260px;" alt="${data.title}">
              <div class="mt-2 text-warning">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="text-muted ms-1 small">(${data.rating || '5.0'})</span>
              </div>
            </div>
            <div class="col-md-8">
              <h5 class="text-warning fw-bold">${data.tagline || ''}</h5>
              <p class="text-stone-700">${data.description || ''}</p>
              <div class="p-3 bg-light rounded-3 border">
                <h6 class="fw-bold mb-2"><i class="bi bi-check2-circle text-success me-1"></i>ఈ పుస్తకం ఎందుకు చదవాలి?</h6>
                <p class="small mb-0 text-muted">${data.why_read || 'వ్యక్తిగత వికాసం మరియు ఆలోచనా విధానంలో మార్పు కోసం అత్యుత్తమ గైడ్.'}</p>
              </div>
            </div>
          </div>
        `;

        if (data.key_lessons && data.key_lessons.length > 0) {
          contentHtml += `
            <div class="mb-4">
              <h6 class="fw-bold text-stone-900 mb-3 border-bottom pb-2">ముఖ్యమైన 4 పాఠాలు (Key Lessons):</h6>
              <div class="d-flex flex-column gap-2">
          `;
          data.key_lessons.forEach((lesson, idx) => {
            contentHtml += `
              <div class="p-3 rounded-3 bg-stone-50 border d-flex gap-3 align-items-start">
                <span class="badge bg-warning text-dark rounded-circle p-2 fs-6 fw-bold" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;">${idx + 1}</span>
                <div>
                  <strong class="d-block text-stone-900 mb-1">${lesson.title}</strong>
                  <span class="text-stone-600 small">${lesson.description}</span>
                </div>
              </div>
            `;
          });
          contentHtml += `</div></div>`;
        }

        if (data.full_summary) {
          contentHtml += `<div class="mt-4 pt-3 border-top">${data.full_summary}</div>`;
        }

        if (modalBody) modalBody.innerHTML = contentHtml;
      })
      .catch(err => {
        modalBody.innerHTML = `<div class="alert alert-danger">పుస్తక సారాంశం లోడ్ చేయడంలో లోపం ఏర్పడింది.</div>`;
      });
  }

  // Quick View Video Modal
  window.openVideoModal = function(youtubeId, title) {
    const modalEl = document.getElementById('videoPlayerModal');
    if (!modalEl) return;

    const iframe = document.getElementById('videoPlayerIframe');
    const titleEl = document.getElementById('videoPlayerTitle');

    if (iframe) iframe.src = `https://www.youtube.com/embed/${youtubeId}?autoplay=1`;
    if (titleEl) titleEl.textContent = title;

    const bsModal = bootstrap.Modal.getOrCreateInstance(modalEl);
    bsModal.show();

    modalEl.addEventListener('hidden.bs.modal', () => {
      if (iframe) iframe.src = '';
    }, { once: true });
  };
});
