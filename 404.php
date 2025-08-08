<?php
http_response_code(404);
$pageTitle = "Page Not Found | Rapid Redesign";
$pageDescription = "The page you’re looking for doesn’t exist. Here are helpful links.";
include(__DIR__ . '/components/header.php');
?>
<section class="page-hero">
  <div class="container">
    <h1>Oops—nothing here.</h1>
    <p class="lead-text">The link may be broken or the page was moved. Try these instead:</p>
    <div class="hero-ctas">
      <a href="/index.php" class="btn btn-primary">Go to Homepage</a>
      <a href="/contact.php" class="btn btn-link">Request a Quick Audit</a>
    </div>
  </div>
</section>

<section class="improvements-section">
  <div class="container narrow-container">
    <div class="deliverables">
      <div class="deliverable">
        <h3>Popular Pages</h3>
        <ul>
          <li><a href="/process.php">Our Process</a></li>
          <li><a href="/pricing.php">Pricing</a></li>
          <li><a href="/faqs.php">FAQs</a></li>
          <li><a href="/before-after.php">Before & After</a></li>
          <li><a href="/checklist.php">Website Upgrade Checklist</a></li>
          <li><a href="/contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="deliverable">
        <h3>Why Rapid Redesign?</h3>
        <p>We turn outdated websites into fast, modern, SEO-safe lead machines in <strong>7–14 days</strong>. Keep your content, improve results, and pay <strong>$0 until launch</strong>.</p>
        <a href="/process.php" class="btn btn-primary mt-4">See How It Works</a>
      </div>
    </div>
  </div>
</section>

<?php include(__DIR__ . '/components/footer.php'); ?>
</main>
</body>
</html>
