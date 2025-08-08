<?php
// Minimal, secure form handler for Rapid Redesign audit requests
// Sends to hello@rapidredesign.co

declare(strict_types=1);
session_start();

// Helpers
function redirect_with($params = []) {
  $base = '/contact.php';
  if (!$params) { header("Location: {$base}"); exit; }
  $qs = http_build_query($params);
  header("Location: {$base}?{$qs}");
  exit;
}

function clean_url(string $url): string {
  $url = trim($url);
  if (!preg_match('#^https?://#i', $url)) { $url = 'https://' . $url; } // assume https if scheme missing
  return $url;
}

function is_rate_limited(): bool {
  // Simple session-based rate limit: 1 submit per 60s
  $now = time();
  if (!isset($_SESSION['last_submit'])) {
    $_SESSION['last_submit'] = $now;
    return false;
  }
  $diff = $now - (int)$_SESSION['last_submit'];
  if ($diff < 60) { return true; }
  $_SESSION['last_submit'] = $now;
  return false;
}

// Basic checks
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { redirect_with(['error' => 'Invalid method']); }
if (!isset($_POST['csrf'], $_SESSION['csrf']) || !hash_equals($_SESSION['csrf'], (string)$_POST['csrf'])) {
  redirect_with(['error' => 'Session expired—reload and try again']);
}
if (!empty($_POST['company'])) { // honeypot hit
  redirect_with(['error' => 'Spam detected']);
}
if (is_rate_limited()) {
  redirect_with(['error' => 'Too many requests—please wait 60s']);
}

// Validate inputs
$url = isset($_POST['url']) ? clean_url((string)$_POST['url']) : '';
$email = isset($_POST['email']) ? trim((string)$_POST['email']) : '';
$message = isset($_POST['message']) ? trim((string)$_POST['message']) : '';

if (!$url || !filter_var($url, FILTER_VALIDATE_URL)) {
  redirect_with(['error' => 'Please enter a valid URL (include your domain)']);
}
if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  redirect_with(['error' => 'Please enter a valid email']);
}
if (!$message || mb_strlen($message) < 5) {
  redirect_with(['error' => 'Tell us briefly what’s not working (min 5 chars)']);
}
if (mb_strlen($message) > 400) { $message = mb_substr($message, 0, 400) . '…'; }

// Compose email
$to = 'hello@rapidredesign.co';
$subject = 'New Rapid Audit Request';
$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$ua = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
$time = gmdate('Y-m-d H:i:s') . 'Z';

$body = <<<EOT
New audit request:

Website URL: {$url}
Email: {$email}
Message: {$message}

Meta:
IP: {$ip}
User Agent: {$ua}
Received: {$time}
EOT;

// Email headers
$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';
$headers[] = 'From: Rapid Redesign <no-reply@rapidredesign.co>';
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'X-Mailer: PHP/' . phpversion();

$ok = @mail($to, $subject, $body, implode("\r\n", $headers));

if ($ok) {
  // Optional: log to file (ensure /tmp is writable on your host)
  // file_put_contents('/tmp/rapid_audits.log', "[".$time."] ".$email." ".$url.PHP_EOL, FILE_APPEND);
  redirect_with(['sent' => '1']);
} else {
  redirect_with(['error' => 'Mail server error—please email hello@rapidredesign.co directly']);
}
