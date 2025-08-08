<?php
$pageTitle = "Before & After Gallery | Rapid Redesign";
$pageDescription = "See how outdated websites transform into fast, modern, SEO-safe lead machines. Real examples of layout, speed, and conversion improvements.";
include(__DIR__ . '/components/header2.php');
?>

<!-- HERO -->
<section class="page-hero">
  <div class="container">
    <h1>Before & After Gallery</h1>
    <p class="lead-text">Quick upgrades. Clear results. Drag the handle or browse side-by-side to see what changes in a 7–14 day Rapid Redesign.</p>
    <div class="hero-ctas">
      <a href="/contact.php" class="btn btn-primary">Get Your 15-min Audit</a>
      <a href="/pricing.php" class="btn btn-link">See Pricing</a>
    </div>
  </div>
</section>

<!-- INTERACTIVE SLIDER COMPARISONS -->
<section class="proof-section section-light">
  <div class="container narrow-container">
    <h2 class="section-title">Drag to Compare</h2>

    <div class="compare-grid">
      <!-- Compare 1 -->
      <figure class="ba-compare">
        <img src="/images/case1-before.jpg" alt="Before redesign: Case 1" class="ba-img ba-before" loading="lazy">
        <img src="/images/case1-after.jpg" alt="After redesign: Case 1" class="ba-img ba-after" loading="lazy">
        <input type="range" min="0" max="100" value="50" aria-label="Reveal after image">
        <figcaption class="ba-caption"><strong>+38% form submissions</strong> in 30 days • <strong>LCP 1.3s</strong></figcaption>
      </figure>

      <!-- Compare 2 -->
      <figure class="ba-compare">
        <img src="/images/case2-before.jpg" alt="Before redesign: Case 2" class="ba-img ba-before" loading="lazy">
        <img src="/images/case2-after.jpg" alt="After redesign: Case 2" class="ba-img ba-after" loading="lazy">
        <input type="range" min="0" max="100" value="50" aria-label="Reveal after image">
        <figcaption class="ba-caption"><strong>-52% bounce rate</strong> • <strong>Mobile LCP 1.9s</strong></figcaption>
      </figure>

      <!-- Compare 3 -->
      <figure class="ba-compare">
        <img src="/images/case3-before.jpg" alt="Before redesign: Case 3" class="ba-img ba-before" loading="lazy">
        <img src="/images/case3-after.jpg" alt="After redesign: Case 3" class="ba-img ba-after" loading="lazy">
        <input type="range" min="0" max="100" value="50" aria-label="Reveal after image">
        <figcaption class="ba-caption"><strong>+24% call clicks</strong> • <strong>CLS &lt; 0.1</strong></figcaption>
      </figure>
    </div>

    <div class="center mt-4">
      <a href="/contact.php" class="btn btn-primary">Want results like these?</a>
      <a href="/process.php" class="btn btn-link">See how we ship in 7–14 days</a>
    </div>
  </div>
</section>

<!-- SIDE-BY-SIDE GRID (STATIC) -->
<section class="proof-section">
  <div class="container narrow-container">
    <h2 class="section-title">Side-by-Side Snapshots</h2>
    <div class="ba-grid ba-grid-3">
      <div class="ba-tile">
        <div class="ba-images">
          <img src="/images/case4-before.jpg" alt="Before redesign screenshot, Case 4" loading="lazy">
          <img src="/images/case4-after.jpg" alt="After redesign screenshot, Case 4" loading="lazy">
        </div>
        <p class="ba-result"><strong>+31% quote requests</strong> • <strong>Nav simplified</strong></p>
      </div>
      <div class="ba-tile">
        <div class="ba-images">
          <img src="/images/case5-before.jpg" alt="Before redesign screenshot, Case 5" loading="lazy">
          <img src="/images/case5-after.jpg" alt="After redesign screenshot, Case 5" loading="lazy">
        </div>
        <p class="ba-result"><strong>Home above-fold clarity</strong> • <strong>CTA every ~2 scrolls</strong></p>
      </div>
      <div class="ba-tile">
        <div class="ba-images">
          <img src="/images/case6-before.jpg" alt="Before redesign screenshot, Case 6" loading="lazy">
          <img src="/images/case6-after.jpg" alt="After redesign screenshot, Case 6" loading="lazy">
        </div>
        <p class="ba-result"><strong>Local schema added</strong> • <strong>Internal links upgraded</strong></p>
      </div>
    </div>

    <div class="center mt-4">
      <a href="/contact.php" class="btn btn-primary">Book a 15-min Rapid Audit</a>
      <a href="/pricing.php" class="btn btn-link">Pricing & packages</a>
    </div>
  </div>
</section>

<!-- CTA / CLOSE -->
<section class="promise-section section-light">
  <div class="container narrow-container">
    <div class="promise-box">
      <h2>Ready to Upgrade Yours?</h2>
      <p>We’ll preserve your content, upgrade design & speed, and launch SEO-safe. <strong>$0 due until launch.</strong></p>
      <a href="/contact.php" class="btn btn-primary">Get Your Fixed Quote</a>
    </div>
  </div>
</section>

<!-- Sticky CTA -->
<div class="sticky-cta" aria-hidden="false">
  <a href="/contact.php" class="btn btn-primary">Start My Upgrade</a>
</div>

<script>
  // Minimal before/after slider JS (no dependencies)
  (function () {
    const comps = document.querySelectorAll('.ba-compare');
    comps.forEach(comp => {
      const range = comp.querySelector('input[type="range"]');
      const after = comp.querySelector('.ba-after');
      if (!range || !after) return;

      function update() {
        const v = range.value; // 0..100
        after.style.setProperty('--reveal', v + '%');
        range.setAttribute('aria-valuenow', v);
      }
      range.addEventListener('input', update);
      range.addEventListener('change', update);
      update();
    });
  })();
</script>

<?php include(__DIR__ . '/components/footer2.php'); ?>
</main>
</body>
</html>
