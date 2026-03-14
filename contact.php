<?php
$pageTitle = "Contact IronClad ISO | Talk Through Your ISO Certification Timeline";
$metaDescription = "Contact IronClad ISO to discuss ISO 9001 consulting, gap assessments, audit preparation, and certification support for manufacturers in Indiana and Kentucky.";
$canonical = "https://ironcladiso.com/contact.php";
$active = "contact";
$pageType = "Service";
$breadcrumbs = [["name" => "Home", "item" => "https://ironcladiso.com/"], ["name" => "Contact", "item" => "https://ironcladiso.com/contact.php"]];
$schema = <<<'SCHEMA'

SCHEMA;
include __DIR__ . "/includes/header.php";
?>

<main>
  <section class="hero hero-contact">
    <div class="container hero-grid">
      <div class="hero-left">
        <div class="breadcrumbs"><a href="/index.php">Home</a> / <span>Contact</span></div>
        <span class="eyebrow">Contact</span>
        <h1 class="hero-title-break">
          <span>Talk through your ISO certification timeline.</span>
        </h1>
        <p class="lead">Whether the company needs a focused gap assessment, a practical QMS implementation plan, or help preparing for a registrar audit, IronClad ISO is built to support manufacturing organizations that need a serious, straightforward path to certification.</p>
        <div class="contact-hero-brand">
          <img src="/assets/img/ironclad-iso-logo-new.webp" alt="IronClad ISO Consulting" class="contact-brand-logo" loading="lazy" decoding="async">
        </div>
        <div class="hero-subproof">
          <span class="chip">Machine Shops</span>
          <span class="chip">Fabrication Companies</span>
          <span class="chip">Contract Manufacturers</span>
          <span class="chip">Industrial Suppliers</span>
        </div>
        <?php if (isset($_GET["success"])): ?>
        <div class="notice" style="margin-top:1rem;">Thanks — your message was submitted. Check your inbox and follow up promptly with the new lead.</div>
        <?php endif; ?>
      </div>

      <div class="hero-right">
        <div class="panel">
          <span class="eyebrow">Consultation Overview</span>
          <h2>What the first conversation should give you.</h2>
          <p>Use the first conversation to clarify the timeline, customer pressure, certification scope, likely documentation work, and the most practical next step.</p>
          <div class="service-box"><strong>What you’ll leave with</strong><p>A clearer starting point, practical next steps, and a better understanding of what the certification path will require.</p></div>
          <div class="service-box"><strong>Best first step</strong><p>Gap assessment for manufacturers that need a realistic roadmap without overbuilding the system.</p></div>
          <div class="service-box"><strong>Built for</strong><p>Machine shops, fabrication companies, contract manufacturers, and industrial suppliers.</p></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container two-col">
      <div class="contact-card">
        <span class="eyebrow">Request Consultation</span>
        <h2 id="consultation-form">Tell us about the ISO need.</h2>
        <p>Share the company name, timeline, industry, customer pressure, or current certification situation. IronClad ISO will have the context needed for a serious first conversation.</p>
        <div class="guarantee-card">
          <picture>
            <source srcset="/assets/img/ironclad-guarantee-badge.webp 1x, /assets/img/ironclad-guarantee-badge@2x.webp 2x" type="image/webp">
            <source srcset="/assets/img/ironclad-guarantee-badge.png 1x, /assets/img/ironclad-guarantee-badge@2x.png 2x" type="image/png">
            <img class="guarantee-badge" src="/assets/img/ironclad-guarantee-badge.png" alt="IronClad Guarantee" width="600" height="711" loading="lazy" decoding="async">
          </picture>
          <div class="guarantee-text">
            <h4>The IronClad Guarantee</h4>
            <p>
              IronClad ISO focuses on practical systems built for real manufacturing
              environments. The goal is clear documentation, operational fit, and
              registrar readiness without unnecessary complexity.
            </p>
          </div>
        </div>
      </div>

      <div class="contact-card">
        <span class="eyebrow">Contact Form</span>
        <h2>Request a gap assessment</h2>
        <form action="/contact_handler.php" method="post">
          <input class="hp-field" type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">
          <input type="text" name="name" placeholder="Your name" autocomplete="name" required>
          <input type="email" name="email" placeholder="Your email" autocomplete="email" required>
          <input type="text" name="company" placeholder="Company name" autocomplete="organization">
          <input type="text" name="industry" placeholder="Industry">

          <textarea name="message" placeholder="Tell us about the industry, timeline, customer requirement, or current certification situation." required></textarea>
          <button class="btn btn-primary" type="submit">Request a Gap Assessment</button>
        </form>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>
