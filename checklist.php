<?php
$pageTitle = "Website Upgrade Checklist | Rapid Redesign";
$pageDescription = "A practical, no-fluff checklist to turn an outdated website into a fast, modern, SEO-safe lead machine. Use it to spot quick wins before a redesign.";
include(__DIR__ . '/components/header2.php');
?>

<!-- HERO -->
<section class="page-hero">
  <div class="container">
    <h1>Website Upgrade Checklist</h1>
    <p class="lead-text">Use this to quickly spot what’s hurting conversions, speed, and SEO. Fix what you can—then we’ll handle the rest in 7–14 days.</p>
    <div class="hero-ctas">
      <a href="/contact.php" class="btn btn-primary">Get a 15-min Rapid Audit</a>
      <a href="#download" class="btn btn-link">Download as PDF</a>
    </div>
  </div>
</section>

<!-- INTRO -->
<section class="improvements-section">
  <div class="container narrow-container">
    <p class="tiny-trust">Tip: Don’t try to nail everything at once. Circle your top 3 issues, then book the audit and we’ll give you a fixed plan.</p>
  </div>
</section>

<!-- CHECKLIST -->
<section class="detailed-process-section">
  <div class="container narrow-container">
    <h2 class="section-title">Clarity & Conversion</h2>
    <ul class="rr-checklist">
      <li><input type="checkbox" id="c1"><label for="c1"><strong>Homepage headline says who you help + the outcome</strong> (no slogans).</label></li>
      <li><input type="checkbox" id="c2"><label for="c2"><strong>Primary CTA appears in the header and above the fold</strong> (e.g., “Request Quote”).</label></li>
      <li><input type="checkbox" id="c3"><label for="c3">There’s a <strong>CTA every ~2 scrolls</strong> and in the footer.</label></li>
      <li><input type="checkbox" id="c4"><label for="c4"><strong>Services are grouped</strong> into clear categories—one click from homepage.</label></li>
      <li><input type="checkbox" id="c5"><label for="c5">Contact info is <strong>visible on mobile</strong> (tap-to-call, simple form).</label></li>
    </ul>

    <div class="inline-cta">
      <a href="/contact.php" class="btn btn-primary">Want us to fix these?</a>
      <a href="/process.php" class="btn btn-link">See how we work</a>
    </div>

    <h2 class="section-title">Speed & Stability</h2>
    <ul class="rr-checklist">
      <li><input type="checkbox" id="p1"><label for="p1"><strong>LCP under 2.5s</strong> on mobile (check PageSpeed Insights).</label></li>
      <li><input type="checkbox" id="p2"><label for="p2">Images are <strong>compressed & lazy-loaded</strong>; no 5MB hero photos.</label></li>
      <li><input type="checkbox" id="p3"><label for="p3">No blocking scripts in the head; <strong>defer non-critical JS</strong>.</label></li>
      <li><input type="checkbox" id="p4"><label for="p4"><strong>HTTPS</strong> enabled; no mixed-content warnings.</label></li>
      <li><input type="checkbox" id="p5"><label for="p5"><strong>Backups & uptime monitoring</strong> are set up.</label></li>
    </ul>

    <h2 class="section-title">SEO-Safe Structure</h2>
    <ul class="rr-checklist">
      <li><input type="checkbox" id="s1"><label for="s1"><strong>Every page has a unique title & meta description</strong>.</label></li>
      <li><input type="checkbox" id="s2"><label for="s2"><strong>Clean URL structure</strong> (e.g., <code>/services/plumbing</code>).</label></li>
      <li><input type="checkbox" id="s3"><label for="s3">Old URLs have <strong>301 redirects</strong> to their new locations.</label></li>
      <li><input type="checkbox" id="s4"><label for="s4"><strong>XML sitemap submitted</strong> in Search Console.</label></li>
      <li><input type="checkbox" id="s5"><label for="s5"><strong>Internal links</strong> connect related service pages.</label></li>
    </ul>

    <h2 class="section-title">Mobile UX & Accessibility</h2>
    <ul class="rr-checklist">
      <li><input type="checkbox" id="a1"><label for="a1"><strong>Text size is readable</strong> (16px+), contrast passes AA.</label></li>
      <li><input type="checkbox" id="a2"><label for="a2"><strong>Tap targets</strong> are large enough; no tiny links jammed together.</label></li>
      <li><input type="checkbox" id="a3"><label for="a3">Images have <strong>alt text</strong> and headings are structured (H1→H2→H3).</label></li>
      <li><input type="checkbox" id="a4"><label for="a4"><strong>Focus states</strong> visible for keyboard users.</label></li>
      <li><input type="checkbox" id="a5"><label for="a5"><strong>Forms have labels</strong> and show clear errors.</label></li>
    </ul>

    <h2 class="section-title">Tracking & Proof</h2>
    <ul class="rr-checklist">
      <li><input type="checkbox" id="t1"><label for="t1"><strong>GA4 or analytics</strong> installed and firing on key pages.</label></li>
      <li><input type="checkbox" id="t2"><label for="t2"><strong>Goals tracked</strong> (form submits, call clicks, bookings).</label></li>
      <li><input type="checkbox" id="t3"><label for="t3"><strong>Testimonials or before/after</strong> visible near CTAs.</label></li>
      <li><input type="checkbox" id="t4"><label for="t4">A <strong>privacy policy</strong> page is linked in the footer.</label></li>
    </ul>

    <div class="inline-cta">
      <a href="/contact.php" class="btn btn-primary">Send us your checklist →</a>
      <span class="tiny-trust">We’ll reply with a mini plan + quote.</span>
    </div>
  </div>
</section>

<!-- DOWNLOAD -->
<section id="download" class="section-light">
  <div class="container narrow-container">
    <div class="promise-box">
      <h2>Download the Checklist (PDF)</h2>
      <p class="muted">Prefer to print? Grab the PDF version and mark it up with your team.</p>
      <div class="hero-ctas">
        <a href="/downloads/website-upgrade-checklist.pdf" class="btn btn-primary">Download PDF</a>
        <button class="btn btn-link" onclick="window.print()">Print This Page</button>
      </div>
    </div>
  </div>
</section>

<!-- CLOSE / PROMISE -->
<section class="promise-section">
  <div class="container narrow-container">
    <div class="promise-box">
      <h2>Short on Time? We’ll Do It For You.</h2>
      <p>We’ll preserve your voice, upgrade design and speed, migrate SEO-safe, and launch in 7–14 days. <strong>$0 due until launch.</strong></p>
      <a href="/contact.php" class="btn btn-primary">Book a 15-min Rapid Audit</a>
    </div>
  </div>
</section>

<!-- Sticky CTA -->
<div class="sticky-cta" aria-hidden="false">
  <a href="/contact.php" class="btn btn-primary">Get a Fixed Plan</a>
</div>

<?php include(__DIR__ . '/components/footer2.php'); ?>
</main>
</body>
</html>
