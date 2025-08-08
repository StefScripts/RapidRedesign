<footer class="site-footer" role="contentinfo">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a href="/index.php" class="logo-link">
        <img src="/images/logo.png" alt="Rapid Redesign" class="logo small">
      </a>
      <p class="tagline">Rapid Redesign: 7–14 Day Website Upgrades</p>
      <p class="contact">
        <strong>Address:</strong> 10033 River Dr, Richmond, BC V6X 0L1<br>
        <!-- <strong>Phone:</strong> <a href="tel:+16045551234">+1 (604) 555-1234</a><br> -->
        <strong>Email:</strong> <a href="mailto:hello@rapidredesign.co">hello@rapidredesign.co</a>
      </p>
      <!-- <div class="trust-badges" aria-label="Site assurances">
        <span class="badge">SEO-Safe Migration</span>
        <span class="badge">Core Web Vitals</span>
        <span class="badge">HTTPS & Backups</span>
      </div> -->
    </div>

    <nav class="footer-links" aria-label="Quick links">
      <h4>Pages</h4>
      <ul>
        <li><a href="/process.php">Process</a></li>
        <li><a href="/pricing.php">Pricing</a></li>
        <li><a href="/faqs.php">FAQs</a></li>
        <li><a href="/contact.php">Contact</a></li>
      </ul>
    </nav>

    <nav class="footer-links" aria-label="Resources">
      <h4>Resources</h4>
      <ul>
        <!-- <li><a href="/portfolio.php">Portfolio</a></li> -->
        <li><a href="/checklist.php">Website Upgrade Checklist</a></li>
        <!-- <li><a href="/book.php">Book an Audit</a></li> -->
      </ul>
    </nav>

    <div class="footer-cta">
      <h4>Get a quick site audit</h4>
      <p class="muted">Drop your URL—we’ll send a 2-minute loom with top fixes.</p>
      <form class="mini-form" method="post" action="/forms/audit-request.php">
        <label for="audit-url" class="sr-only">Your website URL</label>
        <input type="url" id="audit-url" name="url" placeholder="https://yourwebsite.com" required>
        <label for="audit-email" class="sr-only">Your email</label>
        <input type="email" id="audit-email" name="email" placeholder="you@company.com" required>
        <button type="submit" class="btn btn-primary">Request Audit</button>
      </form>
      <p class="tiny-trust">No spam. One follow-up max.</p>

      <!-- <div class="socials" aria-label="Social media">
        <a href="#" aria-label="Twitter">𝕏</a>
        <a href="#" aria-label="LinkedIn">in</a>
        <a href="#" aria-label="YouTube">▶</a>
      </div> -->
    </div>
  </div>

  <div class="container footer-bottom">
    <p>© <?php echo date('Y'); ?> Rapid Redesign Co. All rights reserved.</p>
    <ul class="legal">
      <li><a href="/privacy.php">Privacy</a></li>
      <li><a href="/terms.php">Terms</a></li>
      <li><a href="/accessibility.php">Accessibility</a></li>
      <li><a href="/sitemap.xml">Sitemap</a></li>
    </ul>
  </div>

  <!-- Optional Organization schema -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"Organization",
    "name":"Rapid Redesign",
    "url":"https://rapidredesign.co/",
    "logo":"https://rapidredesign.co/images/logo.png",
    "telephone":"+16045551234",
    "email":"hello@rapidredesign.co",
    "address":{
      "@type":"PostalAddress",
      "streetAddress":"123 Example St, Suite 200",
      "addressLocality":"Vancouver",
      "addressRegion":"BC",
      "postalCode":"V6B 1A1",
      "addressCountry":"CA"
    },
    "sameAs":[
      "https://www.linkedin.com/company/rapidredesign",
      "https://twitter.com/rapidredesign",
      "https://www.youtube.com/@rapidredesign"
    ]
  }
  </script>
</footer>
