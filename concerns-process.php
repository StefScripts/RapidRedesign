<?php
/* ===========================================================
   concerns-process.php  (one-page merge of the two originals)
   Rapid Redesign – https://rapidredesign.co
   =========================================================== */

$pageTitle = "Your Concerns & Our Process | Rapid Redesign";
include('components/header.php');          // <head> + nav

/* -----------------------------------------------------------
   1.  Hero – we keep ONE hero instead of two
   ----------------------------------------------------------- */
?>
<section class="page-hero">
 <div class="container">
  <h1>Your Concerns & Our 7-Day Redesign Process</h1>
  <p class="lead-text">
   We get it—updating your site raises real questions.
   Here’s exactly how we address them with a simple, transparent 3-step process.
  </p>
 </div>
</section>

<?php
/* -----------------------------------------------------------
   2.  Pull the body of common-concerns.php
       – strip out its header, footer, and own hero
   ----------------------------------------------------------- */
ob_start();
include('common-concerns.php');
$concerns = ob_get_clean();

/* remove the duplicate header/footer includes */
$concerns = preg_replace(
 [
  '/<\?php\s*\$pageTitle.*?include\(\'components\/header\.php\'\);\s*\?>/si',
  '/<\?php\s*include\(\'components\/footer\.php\'\);\s*\?>/si'
 ],
 '',
 $concerns
);
/* remove its individual hero section */
$concerns = preg_replace(
 '#<section class="page-hero">.*?</section>#si',
 '',
 $concerns
);

/* OPTIONAL: collapse each concern into a <details> block
   to cut scroll depth without deleting copy */
$concerns = preg_replace_callback(
 '#<div class="concern-card">(.*?)</div>#si',
 function ($m) {
  return '<details class="concern-card">' .
   '<summary>' .
   preg_replace('#.*?<h2>(.*?)</h2>.*#si', '$1', $m[0]) .
   '</summary>' .
   $m[1] .
   '</details>';
 },
 $concerns
);

echo $concerns;

/* -----------------------------------------------------------
   3.  Pull the body of our-process.php
       – same clean-up as above
   ----------------------------------------------------------- */
ob_start();
include('our-process.php');
$process = ob_get_clean();

$process = preg_replace(
 [
  '/<\?php\s*\$pageTitle.*?include\(\'components\/header\.php\'\);\s*\?>/si',
  '/<\?php\s*include\(\'components\/footer\.php\'\);\s*\?>/si'
 ],
 '',
 $process
);
/* remove its hero section – already handled */
$process = preg_replace(
 '#<section class="page-hero">.*?</section>#si',
 '',
 $process
);

/* OPTIONAL: collapse long “What We Don’t Do” + “Additional Services” boxes */
$process = preg_replace(
 '#<div class="avoid-list">(.*?)</div>#si',
 '<details class="avoid-list"><summary><strong>What We Don’t Do</strong></summary>$1</details>',
 $process
);

echo $process;

/* -----------------------------------------------------------
   4.  Close out with the shared footer
   ----------------------------------------------------------- */
include('components/footer.php');
?>