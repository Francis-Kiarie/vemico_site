<?php
$page       = 'portfolio';
$pageTitle  = 'Portfolio - Vemico Tech';
require_once 'header.php';
?>

<!-- Hero Banner -->
<section class="bg-light text-center py-5 mb-5">
  <div class="container">
    <h1 class="display-5 fw-bold">Our Portfolio</h1>
    <p class="lead">Discover our latest projects spanning web, software, design, and more.</p>
  </div>
</section>
<section class="text-center mb-4">
  <div class="container">
    <div class="btn-group" role="group" aria-label="Portfolio filters">
      <button type="button" class="btn btn-outline-primary active" data-filter="all">All</button>
      <button type="button" class="btn btn-outline-primary" data-filter="web">Web</button>
      <button type="button" class="btn btn-outline-primary" data-filter="design">Design</button>
      <button type="button" class="btn btn-outline-primary" data-filter="software">Software</button>
    </div>
  </div>
</section>
<section id="portfolio" class="py-5 bg-white">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      
      <!-- Example Item: Web Project -->
      <div class="col" data-category="web">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/images/project-web.jpg" class="card-img-top" alt="Web Project">
          <div class="card-body text-center">
            <h5 class="card-title">E‑Commerce Platform</h5>
            <p class="card-text">A scalable online store with custom CMS integration.</p>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalWeb1">
              View Details
            </button>
          </div>
        </div>
      </div>

      <!-- Repeat for other items, updating data-category and IDs accordingly -->

    </div>
  </div>
</section>
<!-- Web Project Modal -->
<div class="modal fade" id="modalWeb1" tabindex="-1" aria-labelledby="modalWeb1Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalWeb1Label">E‑Commerce Platform</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Developed a full‑stack e‑commerce solution featuring user authentication, product management, and secure payment gateways. The responsive front‑end utilizes React, while the back‑end leverages Node.js and MongoDB for high performance under load .
        </p>
        <p>
          Integrated real‑time analytics dashboards and automated email notifications to streamline operations for both customers and admins. Optimized SEO metadata and lazy‑loaded images to ensure fast page‑loading times across devices.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Additional modals for Design, Software, etc., following the same pattern -->
<section class="py-5 bg-primary bg-gradient text-light text-center rounded-3 shadow-lg mt-5">
  <div class="container">
    <h2 class="display-6 fw-bold mb-3">Have a project in mind?</h2>
    <p class="lead mb-4">Let’s collaborate to bring your vision to life. Reach out today for a free consultation!</p>
    <a href="contact.php" class="btn btn-light btn-lg rounded-pill">Contact Us</a>
  </div>
</section>
    <!-- Footer -->
<?php 
require_once 'footer.php';
?>