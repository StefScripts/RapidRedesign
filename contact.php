<?php
$pageTitle = "Book a 15-min Rapid Audit | Rapid Redesign";
$pageDescription = "Send your URL and top concern. We’ll reply with a 2-minute Loom and a fixed quote.";
session_start();
if (empty($_SESSION['csrf'])) { $_SESSION['csrf'] = bin2hex(random_bytes(32)); }
include(__DIR__ . '/components/header.php');
$sent = isset($_GET['sent']) && $_GET['sent'] === '1';
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>
<!-- Hero -->
<section class="page-hero">
  <div class="container">
    <h1>Get Your Quick Site Audit</h1>
    <p class="lead-text">Share your URL and your #1 concern. We’ll send a short Loom with top fixes and a fixed quote. <strong>$0 due until launch.</strong></p>
  </div>
</section>

<section class="improvements-section">
  <div class="container narrow-container">
    <?php if ($sent): ?>
      <div class="promise-box" role="status" aria-live="polite">
        <h2>Thanks—you're in!</h2>
        <p class="tiny-trust">We’ll review your site and email you within one business day.</p>
        <a href="/process.php" class="btn btn-link">See how the process works →</a>
      </div>
    <?php else: ?>
      <?php if ($error): ?>
        <div class="promise-box" role="alert" style="border:1px solid var(--danger-500);">
          <h2>We couldn’t send that</h2>
          <p class="tiny-trust">Reason: <?php echo htmlspecialchars($error); ?>. Please fix and try again.</p>
        </div>
      <?php endif; ?>

      <form class="mini-form" method="post" action="/forms/audit-request.php" id="audit-form" novalidate>
        <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($_SESSION['csrf']); ?>">
        <!-- Honeypot -->
        <label for="company" class="sr-only">Company (leave blank)</label>
        <input type="text" id="company" name="company" autocomplete="organization" tabindex="-1" aria-hidden="true" style="position:absolute;left:-9999px;opacity:.01;">

        <label for="url" class="sr-only">Your website URL</label>
        <input type="url" id="url" name="url" placeholder="https://yourwebsite.com" required inputmode="url" spellcheck="false">

        <label for="email" class="sr-only">Your email</label>
        <input type="email" id="email" name="email" placeholder="you@company.com" required inputmode="email" autocomplete="email">

        <label for="message" class="sr-only">What bugs you most about your site?</label>
        <input type="text" id="message" name="message" placeholder="What bugs you most about your site?" maxlength="240" required>

        <button type="submit" class="btn btn-primary" id="submit-btn">Request Audit</button>
      </form>

      <p class="tiny-trust">No spam. One follow-up max. We’ll never share your info.</p>
    <?php endif; ?>
  </div>
</section>

<!-- Sticky CTA -->
<div class="sticky-cta" aria-hidden="false">
  <a href="#audit-form" class="btn btn-primary">Request Audit</a>
</div>

<script>
  (function () {
    const form = document.getElementById('audit-form');
    if (!form) return;
    const btn = document.getElementById('submit-btn');
    form.addEventListener('submit', function () {
      if (btn) {
        btn.setAttribute('disabled', 'true');
        btn.textContent = 'Sending…';
      }
    });
  })();
</script>

<?php include(__DIR__ . '/components/footer.php'); ?>
</main>
</body>
</html>
