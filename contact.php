<?php
$pageTitle = "Contact Us | Rapid Redesign";
include('components/header.php');
?>

<section class="page-hero">
 <div class="container">
  <h1>Let's Transform Your Website</h1>
  <p>Get in touch for a free website assessment or to discuss your project</p>
 </div>
</section>

<section class="contact-section">
 <div class="container">
  <div class="contact-container">
   <div class="contact-info">
    <h2>Contact Information</h2>
    <div class="info-item">
     <div class="info-icon">📧</div>
     <div>
      <h3>Email</h3>
      <p>contact@rapidredesign.co</p>
     </div>
    </div>
    <div class="info-item">
     <div class="info-icon">🕒</div>
     <div>
      <h3>Business Hours</h3>
      <p>Monday-Friday: 9am-5pm EST</p>
     </div>
    </div>
    <div class="info-item">
     <div class="info-icon">📍</div>
     <div>
      <h3>Based In</h3>
      <p>Serving clients across North America</p>
     </div>
    </div>

    <div class="assurance-box">
     <h3>What to Expect</h3>
     <ul>
      <li>Response within 24 hours</li>
      <li>No high-pressure sales</li>
      <li>Honest assessment of your website</li>
      <li>Clear next steps if we're a good fit</li>
     </ul>
    </div>
   </div>

   <div class="contact-form">
    <h2>Send Us a Message</h2>
    <form id="website-contact-form">
     <div class="form-group">
      <label for="name">Your Name*</label>
      <input type="text" id="name" name="name" required>
     </div>

     <div class="form-group">
      <label for="email">Your Email*</label>
      <input type="email" id="email" name="email" required>
     </div>

     <div class="form-group">
      <label for="message">How can we help?*</label>
      <textarea id="message" name="message" rows="4" required></textarea>
     </div>

     <div class="form-group checkbox-group">
      <input type="checkbox" id="has-website" name="has-website">
      <label for="has-website">I already have a website</label>
     </div>

     <div class="form-group website-field" style="display: none;">
      <label for="website-url">Website URL</label>
      <input type="url" id="website-url" name="website-url" placeholder="https://">
     </div>

     <button type="submit" class="btn">Send Message</button>
    </form>
   </div>
  </div>
 </div>
</section>

<section class="faq-preview">
 <div class="container">
  <h2 class="section-title">Common Questions</h2>
  <div class="faq-grid">
   <div class="faq-card">
    <h3>How quickly can you start my project?</h3>
    <p>Most projects begin within 48 hours of approval. We maintain a streamlined workflow to ensure quick start times.
    </p>
   </div>
   <div class="faq-card">
    <h3>Do I need to provide content?</h3>
    <p>No! We use your existing website content. If you want to add anything new later, we can help with that too.</p>
   </div>
   <div class="faq-card">
    <h3>What if I need changes after launch?</h3>
    <p>We offer 30 days of complimentary minor tweaks. After that, we provide affordable maintenance plans.</p>
   </div>
  </div>
  <div class="cta-center">
   <a href="addressing-concerns.php" class="btn btn-light">See All FAQs</a>
  </div>
 </div>
</section>

<?php include('components/footer.php'); ?>

<script>
 document.addEventListener('DOMContentLoaded', function () {
  const websiteCheckbox = document.getElementById('has-website');
  const websiteField = document.querySelector('.website-field');

  websiteCheckbox.addEventListener('change', function () {
   if (this.checked) {
    websiteField.style.display = 'block';
   } else {
    websiteField.style.display = 'none';
    document.getElementById('website-url').value = '';
   }
  });

  // Form submission handling
  const contactForm = document.getElementById('website-contact-form');
  contactForm.addEventListener('submit', function (e) {
   e.preventDefault();

   // Basic validation
   const name = document.getElementById('name').value;
   const email = document.getElementById('email').value;
   const message = document.getElementById('message').value;

   if (name && email && message) {
    // In a real implementation, you would send the form data to your server here
    alert('Thank you for your message! We\'ll contact you shortly.');
    contactForm.reset();
    websiteField.style.display = 'none';
   } else {
    alert('Please fill in all required fields.');
   }
  });
 });
</script>

<style>
 /* Contact Page Styles */
 .contact-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 50px;
  max-width: 1200px;
  margin: 0 auto;
 }

 .contact-info,
 .contact-form {
  background: white;
  border-radius: 8px;
  padding: 40px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
 }

 .contact-info h2,
 .contact-form h2 {
  margin-bottom: 30px;
  color: var(--dark);
  font-size: 1.8rem;
 }

 .info-item {
  display: flex;
  gap: 20px;
  margin-bottom: 30px;
  align-items: flex-start;
 }

 .info-icon {
  font-size: 1.8rem;
  color: var(--primary);
 }

 .info-item h3 {
  margin-bottom: 5px;
  color: var(--dark);
 }

 .assurance-box {
  background: #f0f9ff;
  border-radius: 8px;
  padding: 25px;
  margin-top: 40px;
 }

 .assurance-box h3 {
  margin-bottom: 15px;
  color: var(--primary);
 }

 .assurance-box ul {
  list-style: none;
 }

 .assurance-box li {
  padding: 8px 0;
  padding-left: 25px;
  position: relative;
 }

 .assurance-box li:before {
  content: "✓";
  color: #10b981;
  position: absolute;
  left: 0;
  font-weight: bold;
 }

 /* Form Styles */
 .form-group {
  margin-bottom: 25px;
 }

 .form-group label {
  display: block;
  margin-bottom: 8px;
  font-weight: 500;
  color: var(--dark);
 }

 .form-group input,
 .form-group textarea {
  width: 100%;
  padding: 12px 15px;
  border: 1px solid #d1d5db;
  border-radius: 4px;
  font-size: 1rem;
  transition: border-color 0.3s;
 }

 .form-group input:focus,
 .form-group textarea:focus {
  border-color: var(--primary);
  outline: none;
  box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
 }

 .checkbox-group {
  display: flex;
  align-items: center;
 }

 .checkbox-group input {
  width: auto;
  margin-right: 10px;
 }

 /* FAQ Preview */
 .faq-preview {
  padding: 80px 0;
  background: #f9fafb;
 }

 .faq-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  max-width: 1200px;
  margin: 50px auto;
 }

 .faq-card {
  background: white;
  border-radius: 8px;
  padding: 30px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
 }

 .faq-card h3 {
  margin-bottom: 15px;
  color: var(--primary);
 }

 @media (max-width: 900px) {
  .contact-container {
   grid-template-columns: 1fr;
  }
 }

 @media (max-width: 600px) {

  .contact-info,
  .contact-form {
   padding: 25px;
  }
 }
</style>