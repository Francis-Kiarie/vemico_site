<?php
$page      = 'portfolio';
$pageTitle = 'Portfolio - Vemico Tech';
require_once 'header.php';
?>

<!-- Hero Section -->
<section class="bg-light text-center py-5 mb-5">
  <div class="container">
    <h1 class="display-5 fw-bold">Our Portfolio</h1>
    <p class="lead">Discover our latest projects spanning web, software, design, and more.</p>
  </div>
</section>

<!-- Portfolio Grid -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

      <!-- Project 1 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/images/project-ecom.jpg" class="card-img-top" alt="E-Commerce Platform">
          <div class="card-body text-center">
            <h5 class="card-title">E-Commerce Platform</h5>
            <p class="card-text">A scalable online store with custom CMS integration.</p>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
              View Details
            </button>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/images/project-dashboard.jpg" class="card-img-top" alt="Analytics Dashboard">
          <div class="card-body text-center">
            <h5 class="card-title">Analytics Dashboard</h5>
            <p class="card-text">Real-time data visualization for key performance metrics.</p>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
              View Details
            </button>
          </div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <img src="assets/images/project-app.jpg" class="card-img-top" alt="Mobile App">
          <div class="card-body text-center">
            <h5 class="card-title">Mobile App</h5>
            <p class="card-text">Cross-platform mobile app built with React Native.</p>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal3">
              View Details
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Modals -->

<!-- Modal 1 -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal1Label">E-Commerce Platform</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Developed a full-stack e-commerce solution featuring user authentication, product management, and secure payment gateways.
          The responsive front-end utilizes React, while the back-end leverages Node.js and MongoDB for high performance under load.
        </p>
        <p>
          Integrated real-time analytics dashboards and automated email notifications to streamline operations for both customers and admins.
          Optimized SEO metadata and lazy-loaded images to ensure fast page-loading times across devices.
        </p>
      </div>
      <div class="modal-footer">
        <a href="https://example.com/project1" target="_blank" class="btn btn-outline-primary">Visit Project</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal2Label">Analytics Dashboard</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Built an interactive analytics dashboard using Chart.js and D3.js to visualize sales, user engagement, and retention metrics.
          The application features filters, date range selectors, and exportable reports for seamless data-driven decision making.
        </p>
        <p>
          Implemented role-based access control and real-time WebSocket updates to ensure stakeholders receive the latest insights instantly.
        </p>
      </div>
      <div class="modal-footer">
        <a href="https://example.com/project2" target="_blank" class="btn btn-outline-primary">View Case Study</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal3Label">Mobile App</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Designed and developed a cross-platform mobile app using React Native, featuring push notifications, offline sync, and in-app purchases.
        </p>
        <p>
          Integrated with RESTful APIs for dynamic content loading and implemented rigorous testing on both iOS and Android platforms to ensure a smooth user experience.
        </p>
      </div>
      <div class="modal-footer">
        <a href="https://example.com/project3" target="_blank" class="btn btn-outline-primary">Download App</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php require_once 'footer.php'; ?>
