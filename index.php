<?php
$page = 'home';
$pageTitle = 'Home - Vemico Tech';
require_once 'header.php';
?>
<!-- Hero Section -->
<section id="hero-section" class="bg-dark text-white d-flex align-items-center" style="
  height: 100vh;
  background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
              url('assets/images/hero-bg.jpg') center/cover no-repeat;
">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Welcome to Vemico Tech</h1>
        <p class="lead mb-4">Your partner for web development, IT support, and beyond.</p>
        <a href="services.php" class="btn btn-primary btn-lg">Discover Our Services</a>
    </div>
</section>
<!-- Services Section -->
<section id="services" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row g-4">
            <!-- Web Development -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <i class="fas fa-code fa-2x mb-3 text-primary"></i>
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">Custom websites built with modern frameworks.</p>
                </div>
            </div>
            <!-- IT Support -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <i class="fas fa-headset fa-2x mb-3 text-primary"></i>
                    <h5 class="card-title">IT Support</h5>
                    <p class="card-text">24/7 helpdesk and on‑site troubleshooting.</p>
                </div>
            </div>
            <!-- Graphics Design -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <i class="fas fa-paint-brush fa-2x mb-3 text-primary"></i>
                    <h5 class="card-title">Graphics Design</h5>
                    <p class="card-text">Bring your imagination to life.</p>
                </div>
            </div>
            <!-- Software Development -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <i class="fas fa-laptop-code fa-2x mb-3 text-primary"></i>
                    <h5 class="card-title">Software Development</h5>
                    <p class="card-text">End‑to‑end application design and engineering.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img
                    src="assets/images/about-us.jpg"
                    alt="About Vemico Tech"
                    class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2>About Vemico Tech</h2>
                <p>
                    Founded in 2017, Vemico Tech is a leading software company.
                    Driven by a commitment to innovation and excellence, we specialize in developing cutting-edge software solutions that transform businesses.
                </p>
                <p>
                    As a trailblazer in the industry, we continuously redefine the digital landscape, ensuring our clients achieve unmatched visibility and success.
                    With a passion for pushing the boundaries of software development, we empower businesses with innovative, scalable, and transformative solutions tailored for a dynamic, ever-evolving world.
                </p>
                <!-- <a href="about.php" class="btn btn-outline-primary">Learn More</a> -->
            </div>
        </div>
    </div>
</section>

<!-- Call to action -->
<section class="py-5 text-white text-center" style="background-color: var(--bs-navbar-bg);">
    <div class="container">
        <h3 class="mb-3">Ready to start your project?</h3>
        <p class="mb-4">Get in touch today for a free consultation and quote.</p>
        <a href="contact.php" class="btn btn-light btn-lg">Contact Us</a>
    </div>
</section>
<!-- Newsletter subscriiption -->
<section class="newsletter-cta py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h4 class="fw-bold mb-3 text-primary">Stay Updated with Our Newsletter</h4>
                <p class="lead mb-4">Get the latest news, updates, and exclusive offers delivered to your inbox.</p>
                <form class="row g-2 justify-content-center">
                    <div class="col-sm-8">
                        <input type="email" class="form-control form-control-lg" placeholder="Enter your email" required>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>