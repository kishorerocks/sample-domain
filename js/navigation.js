/**
 * KK LifeWise - Navigation & Mobile Menu JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Offcanvas / Hamburger Menu Handling
  const navbarToggler = document.querySelector('.navbar-toggler');
  const navbarCollapse = document.querySelector('.navbar-collapse');
  const navLinks = document.querySelectorAll('.nav-link');

  // Close mobile collapse on link click if open
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      if (navbarCollapse && navbarCollapse.classList.contains('show')) {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
        if (bsCollapse) {
          bsCollapse.hide();
        }
      }
    });
  });

  // Active Link Highlight based on current path
  const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (!href) return;
    const cleanHref = href.replace(/\/$/, '') || '/';
    if (cleanHref === currentPath || (cleanHref !== '/' && currentPath.startsWith(cleanHref))) {
      link.classList.add('active');
    }
  });

  // Sticky Navbar Scroll Listener
  const siteNavbar = document.querySelector('.navbar');
  if (siteNavbar) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 30) {
        siteNavbar.classList.add('shadow-sm', 'bg-white');
      } else {
        siteNavbar.classList.remove('shadow-sm');
      }
    });
  }
});
