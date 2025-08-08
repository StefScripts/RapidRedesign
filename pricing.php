<?php
$pageTitle = "Pricing | Rapid Redesign";
$pageDescription = "Transparent pricing for 7–14 day website upgrades. Fixed scope, clear deliverables, and $0 due until launch.";
include(__DIR__ . '/components/header.php');
?>

<!-- Hero -->
<section class="page-hero">
  <div class="container">
    <h1>Simple, Transparent Pricing</h1>
    <p class="lead-text">Fixed scope. Clear deliverables. <strong>$0 due until launch.</strong> Most projects land between $1.5–$3.5k and ship in 7–14 days.</p>
    <div class="hero-ctas">
      <a href="/contact.php" class="btn btn-primary">Get a Fixed Quote</a>
      <a href="/process.php" class="btn btn-link">See How It Works</a>
    </div>
  </div>
</section>

<!-- Packages -->
<section class="improvements-section">
  <div class="container">
    <h2 class="section-title">Pick the Package That Fits</h2>

    <div class="comparison-grid">
      <!-- Starter -->
      <div class="approach-column">
        <div class="column-header"><h3>Starter</h3></div>
        <ul>
          <li><strong>$1,500</strong> one-time</li>
          <li>Up to 8 pages migrated</li>
          <li>Homepage refresh + 1 template (e.g., Service)</li>
          <li>Mobile-first layout pass</li>
          <li>Core Web Vitals tune: LCP &lt; 2.5s target</li>
          <li>SEO-safe migration (301s, meta parity)</li>
        </ul>
        <a class="btn btn-primary mt-4" href="/contact.php">Choose Starter</a>
      </div>

      <!-- Standard -->
      <div class="approach-column highlight">
        <div class="column-header"><h3>Standard</h3></div>
        <ul>
          <li><strong>$2,500</strong> one-time</li>
          <li>Up to 20 pages migrated</li>
          <li>Homepage + 3 templates (Service, About, Contact)</li>
          <li>CTA pattern & form optimization</li>
          <li>Image compression & lazy loading</li>
          <li>Analytics carried over (GA4/GTM)</li>
        </ul>
        <a class="btn btn-primary mt-4" href="/contact.php">Choose Standard</a>
      </div>

      <!-- Plus -->
      <div class="approach-column">
        <div class="column-header"><h3>Plus</h3></div>
        <ul>
          <li><strong>$3,500</strong> one-time</li>
          <li>Up to 40 pages migrated</li>
          <li>Homepage + 5 templates (incl. Blog/Resources)</li>
          <li>Schema (LocalBusiness/Service) where relevant</li>
          <li>Advanced internal linking pass</li>
          <li>14-day post-launch tweak window</li>
        </ul>
        <a class="btn btn-primary mt-4" href="/contact.php">Choose Plus</a>
      </div>
    </div>

    <p class="tiny-trust mt-4">All packages: 7–14 day turnaround • $0 due until launch • No retainers • You own everything</p>
  </div>
</section>

<!-- What’s Included -->
<section class="detailed-process-section section-light">
  <div class="container narrow-container">
    <h2 class="section-title">Every Package Includes</h2>
    <div class="deliverables">
      <div class="deliverable">
        <div class="step-header"><span class="step-label">Content Preservation</span></div>
        <ul>
          <li>1:1 page import + meta titles/descriptions</li>
          <li>Redirect map (301s) documented</li>
          <li>No net content loss without approval</li>
        </ul>
      </div>
      <div class="deliverable">
        <div class="step-header"><span class="step-label">Design & UX Upgrade</span></div>
        <ul>
          <li>Modern layout, readable typography, clear CTAs</li>
          <li>Mobile-first pass & accessibility basics</li>
          <li>Lead form optimization</li>
        </ul>
      </div>
      <div class="deliverable">
        <div class="step-header"><span class="step-label">Performance & SEO Safety</span></div>
        <ul>
          <li>Core Web Vitals target: LCP &lt; 2.5s, CLS &lt; 0.1</li>
          <li>Image optimization & caching setup</li>
          <li>Sitemap & Search Console resubmission</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Add-Ons -->
<section class="expansion-section">
  <div class="container narrow-container">
    <h2 class="section-title">Add-Ons (Fixed Price)</h2>
    <div class="benefits-grid services-grid">
      <div class="benefit-card service-card">
        <h3>Content Overhaul</h3>
        <ul>
          <li>New copy/pages: from <strong>$600</strong></li>
          <li>Testimonial & case study buildouts</li>
        </ul>
      </div>
      <div class="benefit-card service-card">
        <h3>Scheduling & Integrations</h3>
        <ul>
          <li>Calendly/Cal.com, CRM forms, email DNS</li>
          <li>From <strong>$300</strong> depending on stack</li>
        </ul>
      </div>
      <div class="benefit-card service-card">
        <h3>Hosting</h3>
        <ul>
          <li>Fast, secure hosting from <strong>$20/mo</strong></li>
          <li>Backups & uptime monitoring included</li>
        </ul>
      </div>
      <div class="benefit-card service-card">
        <h3>Ongoing Support</h3>
        <ul>
          <li>Pay-as-you-go: <strong>$120/hr</strong></li>
          <li>No retainers required</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Risk Reversal -->
<section class="promise-section section-light">
  <div class="container narrow-container">
    <div class="promise-box">
      <h2>Pay After Launch</h2>
      <p>We invoice on launch day after you approve staging. If we miss the agreed scope or timeline, you don’t pay until it’s right.</p>
      <a href="/contact.php" class="btn btn-primary">Get Your Fixed Quote</a>
    </div>
  </div>
</section>

<!-- Sticky CTA -->
<div class="sticky-cta" aria-hidden="false">
  <a href="/contact.php" class="btn btn-primary">Get a Fixed Quote</a>
</div>

<?php include(__DIR__ . '/components/footer.php'); ?>
</main>
</body>
</html>
