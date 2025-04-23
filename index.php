<?php
$page = 'home';
$pageTitle = 'Home - Vemico Tech';
require_once 'header.php';
?>
<!-- Hero Section with Animations -->
<section id="hero-section" class="bg-dark text-white d-flex align-items-center" style="
  height: 100vh;
  background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
              url('assets/images/hero-bg.jpg') center/cover no-repeat;
">
    <div class="container text-center">
        <h1 class="display-4 fw-bold animate__animated animate__fadeInDown">Welcome to Vemico Tech</h1>
        <p class="lead mb-4 animate__animated animate__fadeIn animate__delay-1s">Your partner for web development, IT support, and digital transformation</p>
        <a href="services.php" class="btn btn-primary btn-lg animate__animated animate__fadeInUp animate__delay-2s">Explore Our Solutions</a>
    </div>
</section>

<!-- Services Section with Modal Triggers -->
<section id="services" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Core Services</h2>
        <div class="row g-4">
            <!-- Web Development Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4 service-card" 
                     data-bs-toggle="modal" data-bs-target="#webdevelopmentModal">
                    <i class="fas fa-code fa-2x mb-3 text-primary"></i>
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">Responsive websites built with React, Laravel & modern frameworks</p>
                </div>
            </div>
            <!-- IT Support Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4 service-card"
                     data-bs-toggle="modal" data-bs-target="#itSupportModal">
                    <i class="fas fa-headset fa-2x mb-3 text-primary"></i>
                    <h5 class="card-title">IT Support</h5>
                    <p class="card-text">24/7 helpdesk, network security & cloud solutions</p>
                </div>
            </div>
            <!-- Graphics Design Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4 service-card"
                     data-bs-toggle="modal" data-bs-target="#graphicsModal">
                    <i class="fas fa-paint-brush fa-2x mb-3 text-primary"></i>
                    <h5 class="card-title">Graphics Design</h5>
                    <p class="card-text">Professional branding & marketing collateral</p>
                </div>
            </div>
            <!-- Software Development Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4 service-card"
                     data-bs-toggle="modal" data-bs-target="#softwareModal">
                    <i class="fas fa-laptop-code fa-2x mb-3 text-primary"></i>
                    <h5 class="card-title">Software Development</h5>
                    <p class="card-text">Custom ERP, mobile apps & enterprise solutions</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section with Stats -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/about-us.jpg" 
                     alt="Vemico Tech team working" 
                     class="img-fluid rounded shadow" 
                     loading="lazy">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Driving Digital Innovation Since 2017</h2>
                <p class="lead">
                    Vemico Tech specializes in transforming businesses through cutting-edge software solutions 
                    and strategic IT services.
                </p>
                <div class="d-flex justify-content-between mt-4 mb-4">
                    <div class="text-center">
                        <h3 class="text-primary">50+</h3>
                        <p>Successful Projects</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-primary">98%</h3>
                        <p>Client Satisfaction</p>
                    </div>
                </div>
                <a href="about.php" class="btn btn-outline-primary">Our Journey</a>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced CTA Section -->
<section class="py-5 text-white text-center cta-bg">
    <div class="container">
        <div class="animate__animated animate__zoomIn">
            <h3 class="mb-3">Ready to Transform Your Business?</h3>
            <p class="mb-4">Schedule your free consultation today</p>
            <a href="contact.php" class="btn btn-light btn-lg px-5">Start Now</a>
        </div>
    </div>
</section>

<!-- Improved Newsletter Section -->
<section class="newsletter-cta py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h4 class="fw-bold mb-3 text-primary">Get Tech Insights Delivered</h4>
                <p class="lead mb-4">Subscribe for industry updates, exclusive content, and special offers</p>
                <form id="newsletterForm" class="row g-2 justify-content-center needs-validation" novalidate>
                    <div class="col-sm-8">
                        <input type="email" class="form-control form-control-lg" 
                               placeholder="Enter your work email" required>
                        <div class="invalid-feedback">Please provide a valid email address</div>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button>
                    </div>
                </form>
                <div id="successMessage" class="mt-3 text-success" style="display:none;">
                    <i class="fas fa-check-circle"></i> Thank you for subscribing!
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>


