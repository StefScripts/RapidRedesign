<?php
// Determine current page for active link state
$current = basename($_SERVER['PHP_SELF']);
function is_active($file, $current) {
  return $file === $current ? ' aria-current="page" class="active"' : '';
}
?>
<header class="site-header" role="banner">
  <a class="skip-link" href="#main">Skip to content</a>

  <div class="container header-inner">
    <a href="/index.php" class="logo-link" aria-label="Rapid Redesign Home">
      <img src="/images/logo.png" alt="Rapid Redesign" class="logo">
    </a>

    <button class="menu-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="primary-nav">
      <span class="menu-icon" aria-hidden="true"></span>
      <span class="menu-text">Menu</span>
    </button>

    <nav id="primary-nav" class="site-nav" role="navigation" aria-label="Primary">
      <ul class="nav-list">
        <li><a href="/process.php"<?php echo is_active('process.php', $current); ?>>Process</a></li>
        <li><a href="/faqs.php"<?php echo is_active('faqs.php', $current); ?>>FAQs</a></li>
        <li><a href="/pricing.php"<?php echo is_active('pricing.php', $current); ?>>Pricing</a></li>
        <li><a href="/contact.php"<?php echo is_active('contact.php', $current); ?>>Contact</a></li>
      </ul>
      <div class="nav-cta">
        <a href="/contact.php" class="btn btn-primary">Book a 15-min Audit</a>
      </div>
    </nav>
  </div>
</header>

<script>
  (function () {
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.getElementById('primary-nav');
    if (!toggle || !nav) return;

    function closeOnEscape(e) {
      if (e.key === 'Escape') {
        nav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.focus();
      }
    }

    toggle.addEventListener('click', () => {
      const isOpen = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', String(isOpen));
      if (isOpen) {
        document.addEventListener('keydown', closeOnEscape);
      } else {
        document.removeEventListener('keydown', closeOnEscape);
      }
    });

    // Close when clicking outside on mobile
    document.addEventListener('click', (e) => {
      if (!nav.classList.contains('open')) return;
      if (!nav.contains(e.target) && !toggle.contains(e.target)) {
        nav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  })();
</script>
