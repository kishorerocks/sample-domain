/**
 * KK LifeWise - Live Search Component
 */

document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.getElementById('searchInputField');
  const searchResultsContainer = document.getElementById('searchResultsContainer');
  const searchLoading = document.getElementById('searchLoading');

  if (!searchInput || !searchResultsContainer) return;

  let debounceTimer;

  searchInput.addEventListener('input', (e) => {
    const query = e.target.value.trim();
    clearTimeout(debounceTimer);

    if (query.length < 2) {
      searchResultsContainer.innerHTML = `
        <div class="text-center py-4 text-muted">
          <i class="bi bi-search display-6 d-block mb-2 text-warning opacity-50"></i>
          <p class="mb-0">వ్యాసాలు, పుస్తకాలు, వీడియోలు లేదా కథల కోసం కనీసం 2 అక్షరాలు టైప్ చేయండి...</p>
        </div>
      `;
      return;
    }

    if (searchLoading) searchLoading.classList.remove('d-none');

    debounceTimer = setTimeout(() => {
      fetch(`/search.php?ajax=1&q=${encodeURIComponent(query)}`)
        .then(res => res.json())
        .then(data => {
          if (searchLoading) searchLoading.classList.add('d-none');
          renderSearchResults(data, query);
        })
        .catch(err => {
          if (searchLoading) searchLoading.classList.add('d-none');
          searchResultsContainer.innerHTML = `
            <div class="alert alert-danger py-2 px-3 small">శోధనలో సమస్య ఏర్పడింది. దయచేసి మళ్ళీ ప్రయత్నించండి.</div>
          `;
        });
    }, 250);
  });

  function renderSearchResults(data, query) {
    const totalResults = (data.articles?.length || 0) + (data.books?.length || 0) + (data.videos?.length || 0) + (data.stories?.length || 0);

    if (totalResults === 0) {
      searchResultsContainer.innerHTML = `
        <div class="text-center py-4">
          <i class="bi bi-emoji-neutral display-6 text-muted mb-2 d-block"></i>
          <p class="text-stone-700 fw-bold mb-1">"${query}" కోసం ఫలితాలు దొరకలేదు</p>
          <p class="text-muted small">వేరే పదాలతో లేదా సంబంధిత టాపిక్స్‌తో వెతకండి.</p>
        </div>
      `;
      return;
    }

    let html = `<div class="d-flex flex-column gap-3">`;

    // Articles results
    if (data.articles && data.articles.length > 0) {
      html += `<div>
        <h6 class="text-uppercase text-warning fw-bold small mb-2 d-flex align-items-center gap-1">
          <i class="bi bi-newspaper"></i> వ్యాసాలు (${data.articles.length})
        </h6>
        <div class="list-group list-group-flush">`;
      data.articles.forEach(art => {
        html += `
          <a href="/article.php?slug=${art.slug}" class="list-group-item list-group-item-action py-2 px-3 rounded-3 border-0 mb-1 d-flex align-items-center justify-content-between hover-light">
            <div>
              <div class="fw-bold text-stone-900">${art.title}</div>
              <small class="text-muted"><span class="badge bg-warning text-dark me-1">${art.category_name}</span> • ${art.read_time}</small>
            </div>
            <i class="bi bi-chevron-right text-muted"></i>
          </a>
        `;
      });
      html += `</div></div>`;
    }

    // Books results
    if (data.books && data.books.length > 0) {
      html += `<div>
        <h6 class="text-uppercase text-warning fw-bold small mb-2 d-flex align-items-center gap-1">
          <i class="bi bi-book"></i> పుస్తక సారాంశాలు (${data.books.length})
        </h6>
        <div class="list-group list-group-flush">`;
      data.books.forEach(b => {
        html += `
          <a href="/book-detail.php?slug=${b.slug}" class="list-group-item list-group-item-action py-2 px-3 rounded-3 border-0 mb-1 d-flex align-items-center justify-content-between hover-light">
            <div>
              <div class="fw-bold text-stone-900">${b.title}</div>
              <small class="text-muted">రచయిత: ${b.author}</small>
            </div>
            <i class="bi bi-chevron-right text-muted"></i>
          </a>
        `;
      });
      html += `</div></div>`;
    }

    // Videos results
    if (data.videos && data.videos.length > 0) {
      html += `<div>
        <h6 class="text-uppercase text-danger fw-bold small mb-2 d-flex align-items-center gap-1">
          <i class="bi bi-youtube"></i> వీడియోలు (${data.videos.length})
        </h6>
        <div class="list-group list-group-flush">`;
      data.videos.forEach(v => {
        html += `
          <a href="/video-detail.php?id=${v.id}" class="list-group-item list-group-item-action py-2 px-3 rounded-3 border-0 mb-1 d-flex align-items-center justify-content-between hover-light">
            <div>
              <div class="fw-bold text-stone-900">${v.title}</div>
              <small class="text-muted"><i class="bi bi-clock"></i> ${v.duration}</small>
            </div>
            <i class="bi bi-play-circle text-danger fs-5"></i>
          </a>
        `;
      });
      html += `</div></div>`;
    }

    // Stories results
    if (data.stories && data.stories.length > 0) {
      html += `<div>
        <h6 class="text-uppercase text-primary fw-bold small mb-2 d-flex align-items-center gap-1">
          <i class="bi bi-journal-text"></i> ప్రేరణాత్మక కథలు (${data.stories.length})
        </h6>
        <div class="list-group list-group-flush">`;
      data.stories.forEach(s => {
        html += `
          <a href="/story-detail.php?slug=${s.slug}" class="list-group-item list-group-item-action py-2 px-3 rounded-3 border-0 mb-1 d-flex align-items-center justify-content-between hover-light">
            <div>
              <div class="fw-bold text-stone-900">${s.title}</div>
              <small class="text-muted">${s.moral ? 'నీతి: ' + s.moral : ''}</small>
            </div>
            <i class="bi bi-chevron-right text-muted"></i>
          </a>
        `;
      });
      html += `</div></div>`;
    }

    html += `</div>`;
    searchResultsContainer.innerHTML = html;
  }
});
