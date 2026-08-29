<?php
// navbar.php - Reusable Navigation Component
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<header class="site-header sticky-top">
  <div class="container py-2">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      
      <!-- Brand Logo & Tagline -->
      <a class="navbar-brand d-flex align-items-center gap-2 p-0 text-decoration-none" href="/index.php">
        <div class="brand-logo-icon">
          <i class="bi bi-fire"></i>
        </div>
        <div>
          <span class="brand-title d-block">KK <span class="text-gold-gradient">LifeWise</span></span>
          <span class="brand-tagline font-telugu"><?php echo SITE_TAGLINE; ?></span>
        </div>
      </a>

      <!-- Quick Action Buttons (Mobile & Desktop) -->
      <div class="d-flex align-items-center gap-2 order-lg-3 ms-auto ms-lg-3">
        
        <!-- Search Trigger Button -->
        <button type="button" class="btn-search-trigger" data-bs-toggle="modal" data-bs-target="#searchModal" title="శోధించండి (Search)">
          <i class="bi bi-search text-warning"></i>
          <span class="d-none d-md-inline">శోధించండి...</span>
          <span class="search-badge-key d-none d-lg-inline">⌘K</span>
        </button>

        <!-- Quote Card Generator Quick Trigger -->
        <button type="button" class="btn btn-outline-warning btn-sm rounded-pill d-none d-sm-inline-flex align-items-center gap-1 px-3 py-1.5" data-bs-toggle="modal" data-bs-target="#quoteModal" title="కోట్ కార్డ్ జనరేటర్">
          <i class="bi bi-card-image"></i>
          <span class="d-none d-md-inline">కోట్ కార్డ్</span>
        </button>

        <!-- WordPress Architecture Blueprint Modal Button -->
        <button type="button" class="btn btn-dark btn-sm rounded-pill d-none d-xl-inline-flex align-items-center gap-1 px-3 py-1.5" data-bs-toggle="modal" data-bs-target="#wpBlueprintModal" title="WordPress Blueprint">
          <i class="bi bi-wordpress text-warning"></i>
          <span>WP Blueprint</span>
        </button>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler border-0 p-1 ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbarCollapse" aria-controls="mainNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <!-- Navigation Links Collapse -->
      <div class="collapse navbar-collapse order-lg-2" id="mainNavbarCollapse">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-1 pt-2 pt-lg-0">
          
          <li class="nav-item">
            <a class="nav-link-custom <?php echo ($current_page == 'index' || $current_page == '') ? 'active' : ''; ?>" href="/index.php">
              <i class="bi bi-house-door text-warning"></i> హోమ్
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link-custom <?php echo ($current_page == 'motivation') ? 'active' : ''; ?>" href="/motivation.php">
              <i class="bi bi-lightning-charge text-warning"></i> మోటివేషన్
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link-custom <?php echo ($current_page == 'money') ? 'active' : ''; ?>" href="/money.php">
              <i class="bi bi-coin text-warning"></i> మనీ
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link-custom <?php echo ($current_page == 'career') ? 'active' : ''; ?>" href="/career.php">
              <i class="bi bi-briefcase text-warning"></i> కెరీర్
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link-custom <?php echo ($current_page == 'stories') ? 'active' : ''; ?>" href="/stories.php">
              <i class="bi bi-journal-richtext text-warning"></i> కథలు
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link-custom <?php echo ($current_page == 'books') ? 'active' : ''; ?>" href="/books.php">
              <i class="bi bi-book text-warning"></i> పుస్తకాలు
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link-custom <?php echo ($current_page == 'videos') ? 'active' : ''; ?>" href="/videos.php">
              <i class="bi bi-play-circle text-warning"></i> వీడియోలు
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link-custom <?php echo ($current_page == 'pdfs') ? 'active' : ''; ?>" href="/pdfs.php">
              <i class="bi bi-file-earmark-pdf text-warning"></i> Free PDFs
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link-custom <?php echo ($current_page == 'assessment') ? 'active' : ''; ?>" href="/assessment.php">
              <i class="bi bi-compass text-warning"></i> జీవన విశ్లేషణ
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link-custom <?php echo ($current_page == 'about') ? 'active' : ''; ?>" href="/about.php">
              మా గురించి
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link-custom <?php echo ($current_page == 'contact') ? 'active' : ''; ?>" href="/contact.php">
              సంప్రదించండి
            </a>
          </li>

        </ul>
      </div>

    </nav>
  </div>
</header>
