<?php
$page = 'services';
$pageTitle = 'Services - Vemico Tech';
require_once 'header.php';
?>

<!-- Hero Section -->
<section class="bg-body text-center py-5">
    <div class="container">
        <h1 class="display-5 fw-bold">Our Services</h1>
        <p class="lead mb-4">Explore how Vemico Tech can power your digital transformation.</p>
    </div>
</section>

<!-- Services Section -->
<section id="services-detail" class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Graphics Design -->
            <div class="col-md-4">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="assets/images/graphics-design.jpg" class="card-img-top" alt="Graphics Design">
                    <div class="card-body">
                        <h5 class="card-title">Graphics Design</h5>
                        <p class="card-text">Bring your imagination to life with professional visual design services.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#graphicsModal">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Web Development -->
            <div class="col-md-4">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="assets/images/services-web-dev.jpg" class="card-img-top" alt="Graphics Design">
                    <div class="card-body">
                        <h5 class="card-title">Web development</h5>
                        <p class="card-text">We create dynamic, responsive websites with 
                            excellent UI/UX.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#webdevelomentModal">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
            <!-- Social Media Management -->
            <div class="col-md-4">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="assets/images/social-media.jpg" class="card-img-top" alt="Social Media Management">
                    <div class="card-body">
                        <h5 class="card-title">Social Media Management</h5>
                        <p class="card-text">Strategy, content creation, and community engagement across platforms.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#socialModal">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Software Development -->
            <div class="col-md-4">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="assets/images/software-development.jpg" class="card-img-top" alt="Software Development">
                    <div class="card-body">
                        <h5 class="card-title">Software Development</h5>
                        <p class="card-text">End-to-end application design and engineering for web and mobile.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#softwareModal">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
            <!-- IT Support -->
            <div class="col-md-4">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="assets/images/it-support.jpg" class="card-img-top" alt="IT Support">
                    <div class="card-body">
                        <h5 class="card-title">IT Support</h5>
                        <p class="card-text">24/7 helpdesk and on-site troubleshooting for all your IT needs.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#itSupportModal">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
            <!--Data Analysis -->
            <div class="col-md-4">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="assets/images/data-analysis.jpg" class="card-img-top" alt="Data Analysis">
                    <div class="card-body">
                        <h5 class="card-title">Data Analysis</h5>
                        <p class="card-text">Transforming raw data into actionable insights for better decision-making.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dataAnalysisModal">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action -->
<section class="py-5 text-black text-center" style="background-color:rgb(229, 230, 231);">
    <div class="container">
        <h3 class="mb-3">Ready to start your project?</h3>
        <p class="mb-4">Get in touch today for a free consultation and quote.</p>
        <a href="contact.php" class="btn btn-light btn-lg">Contact Us</a>
    </div>
</section>

<!-- Modals Definitions -->

<!-- Graphics Design Modal -->
<div
    class="modal fade"
    id="graphicsModal"
    tabindex="-1"
    aria-labelledby="graphicsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="graphicsModalLabel">Graphics Design</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Logo and brand identity creation</li>
                    <li>Brochure, flyer, and poster design</li>
                    <li>Illustrations and infographics</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Web Development Modal -->
<div
    class="modal fade"
    id="webdevelomentModal"
    tabindex="-1"
    aria-labelledby="webdevelomentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="webdelopmentmodallabel">Web Devolepment</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                We create dynamic, responsive websites with excellent UI/UX,
                ranging from corporate sites to eCommerce platforms, ensuring seamless user experiences.
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Social Media Management Modal -->
<div
    class="modal fade"
    id="socialModal"
    tabindex="-1"
    aria-labelledby="socialModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="socialModalLabel">Social Media Management</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Platform strategy and audit</li>
                    <li>Content calendar and creation</li>
                    <li>Community management and reporting</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Software Development Modal -->
<div
    class="modal fade"
    id="softwareModal"
    tabindex="-1"
    aria-labelledby="softwareModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="softwareModalLabel">Software Development</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Requirement analysis and system design</li>
                    <li>Agile development with CI/CD pipelines</li>
                    <li>Quality assurance and performance tuning</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- IT Support Modal -->
<div class="modal fade" id="itSupportModal" tabindex="-1" aria-labelledby="itSupportModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"><!-- modal-lg for wider content, centered vertically -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="itSupportModalLabel">IT Support</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul>
          <li>24/7 helpdesk with priority ticketing system</li>
          <li>On‑site and remote troubleshooting for hardware and software</li>
          <li>Network configuration, monitoring, and optimization</li>
          <li>Backup verification and disaster recovery planning</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Data Analysis Modal -->
<div class="modal fade" id="dataAnalysisModal" tabindex="-1" aria-labelledby="dataAnalysisModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered"><!-- consistent sizing and centering -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dataAnalysisModalLabel">Data Analysis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul>
          <li>Data cleaning and preprocessing pipelines</li>
          <li>Statistical modeling and predictive analytics</li>
          <li>Interactive dashboards with real‑time updates</li>
          <li>Custom reporting and KPI tracking</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php require_once 'footer.php'; ?>