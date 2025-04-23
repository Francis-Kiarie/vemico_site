<?php
$page = 'services';
$pageTitle = 'Services - Vemico Tech';
require_once 'header.php';
?>

<!-- Hero Section -->
<section class="services-hero bg-dark text-white py-5">
    <div class="container text-center animate__animated animate__fadeIn">
        <h1 class="display-5 fw-bold mb-3">Transform Your Digital Presence</h1>
        <p class="lead mb-4">Leverage our full-spectrum technical expertise to drive business growth</p>
        <div class="d-flex gap-3 justify-content-center">
            <a href="#services-detail" class="btn btn-primary btn-lg px-4">Explore Services</a>
            <a href="contact.php" class="btn btn-outline-light btn-lg px-4">Quick Inquiry</a>
        </div>
    </div>
</section>

<!-- Services Grid with Enhanced Cards -->
<section id="services-detail" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold mb-3">Comprehensive Digital Solutions</h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">
                End-to-end services combining technical excellence with strategic innovation
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Graphics Design -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <img src="assets/images/graphics-design.jpg" 
                         class="card-img-top service-image" 
                         alt="Branding and visual design services"
                         loading="lazy">
                    <div class="card-body p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-palette fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 card-title fw-bold">Graphics Design</h3>
                        <p class="card-text text-secondary">
                            Professional branding packages and marketing collateral that tell your unique story
                        </p>
                        <div class="mt-auto">
                            <button type="button" 
                                    class="btn btn-outline-primary"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#graphicsModal">
                                Service Details <i class="fas fa-chevron-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Web Development -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <img src="assets/images/services-web-dev.jpg" 
                         class="card-img-top service-image" 
                         alt="Custom web development solutions"
                         loading="lazy">
                    <div class="card-body p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-code fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 card-title fw-bold">Web Development</h3>
                        <p class="card-text text-secondary">
                            Responsive websites and web apps built with modern tech stacks
                        </p>
                        <div class="mt-auto">
                            <button type="button" 
                                    class="btn btn-outline-primary"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#webdevelopmentModal">
                                Service Details <i class="fas fa-chevron-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media Management -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <img src="assets/images/social-media.jpg" 
                         class="card-img-top service-image" 
                         alt="Social media strategy and management"
                         loading="lazy">
                    <div class="card-body p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-hashtag fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 card-title fw-bold">Social Media Management</h3>
                        <p class="card-text text-secondary">
                            Data-driven social strategies across major platforms
                        </p>
                        <div class="mt-auto">
                            <button type="button" 
                                    class="btn btn-outline-primary"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#socialModal">
                                Service Details <i class="fas fa-chevron-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Software Development -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <img src="assets/images/software-development.jpg" 
                         class="card-img-top service-image" 
                         alt="Custom software development services"
                         loading="lazy">
                    <div class="card-body p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-cogs fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 card-title fw-bold">Software Development</h3>
                        <p class="card-text text-secondary">
                            Enterprise-grade solutions from concept to deployment
                        </p>
                        <div class="mt-auto">
                            <button type="button" 
                                    class="btn btn-outline-primary"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#softwareModal">
                                Service Details <i class="fas fa-chevron-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- IT Support -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <img src="assets/images/it-support.jpg" 
                         class="card-img-top service-image" 
                         alt="Comprehensive IT support services"
                         loading="lazy">
                    <div class="card-body p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-server fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 card-title fw-bold">IT Support</h3>
                        <p class="card-text text-secondary">
                            Proactive IT infrastructure management and support
                        </p>
                        <div class="mt-auto">
                            <button type="button" 
                                    class="btn btn-outline-primary"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#itSupportModal">
                                Service Details <i class="fas fa-chevron-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Analysis -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-hover">
                    <img src="assets/images/data-analysis.jpg" 
                         class="card-img-top service-image" 
                         alt="Data analytics and business intelligence"
                         loading="lazy">
                    <div class="card-body p-4">
                        <div class="service-icon mb-3">
                            <i class="fas fa-chart-line fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 card-title fw-bold">Data Analysis</h3>
                        <p class="card-text text-secondary">
                            Transform raw data into actionable business insights
                        </p>
                        <div class="mt-auto">
                            <button type="button" 
                                    class="btn btn-outline-primary"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#dataAnalysisModal">
                                Service Details <i class="fas fa-chevron-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Strategic CTA Section -->
<section class="cta-strategic py-5 bg-dark text-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-8">
                <h2 class="display-6 fw-bold mb-3">Strategic Technology Partnership</h2>
                <p class="lead mb-4">
                    Why 150+ businesses choose Vemico Tech as their digital transformation partner
                </p>
                <ul class="list-unstyled row g-3">
                    <li class="col-6 col-md-4 d-flex align-items-center gap-2">
                        <i class="fas fa-shield-alt text-primary"></i>
                        Enterprise-grade security
                    </li>
                    <li class="col-6 col-md-4 d-flex align-items-center gap-2">
                        <i class="fas fa-clock text-primary"></i>
                        24/7 Priority support
                    </li>
                    <li class="col-6 col-md-4 d-flex align-items-center gap-2">
                        <i class="fas fa-certificate text-primary"></i>
                        Certified experts
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 text-center">
                <div class="cta-card bg-primary text-white p-4 rounded-3 shadow">
                    <h3 class="h4 mb-3">Start Your Journey</h3>
                    <p class="small mb-4">Schedule a free consultation with our experts</p>
                    <a href="contact.php" class="btn btn-light btn-lg w-100">
                        Book Discovery Call
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modals Definitions -->

<!-- Graphics Design Modal -->
<div class="modal fade" id="graphicsModal" tabindex="-1" aria-labelledby="graphicsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="graphicsModalLabel">Graphics Design</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>
       Elevate your brand identity with visually striking designs tailored to your business ethos. 
       Our services include crafting professional company profiles, logos, business cards, letterheads, 
       and multimedia artwork optimized for both print and digital platforms. We focus on creating cohesive, 
       modern designs that resonate with your target audience, ensuring consistency across marketing collateral, 
       social media, and web assets. From concept to execution, we collaborate closely with clients to deliver 
       innovative visuals that amplify brand recognition and leave a lasting impression.
       </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Web Development Modal -->
<div
    class="modal fade"
    id="webdevelopmentModal"
    tabindex="-1"
    aria-labelledby="webdevelopmentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="webdevelopmentModalLabel">Web Development</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <p>
               Captivate your audience with high-performance websites that blend form and function. We specialize in responsive, mobile-first designs with intuitive UI/UX, tailored for corporate websites, eCommerce stores, SaaS platforms, and dynamic web applications. Leveraging CMS platforms like WordPress or headless architectures, we optimize sites for speed, SEO, and cross-device compatibility. Additional offerings include custom plugins, payment gateway integration, member portals, and ongoing maintenance to ensure your digital presence remains cutting-edge.
               </p>
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
                <p>
                Strengthen your online influence with strategic social media campaigns. We curate platform-specific content (video, graphics, blogs), manage community engagement, and deploy targeted ads across Facebook, Instagram, LinkedIn, and emerging platforms. Our data-backed approach includes competitor analysis, audience segmentation, and performance metrics to refine strategies. Services extend to influencer partnerships, crisis management, and campaign analytics, driving brand loyalty, lead generation, and measurable growth in conversions.
                </p>
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
                <p>
                Drive digital transformation with bespoke software solutions designed to meet your unique needs. Our full-cycle development process covers ERP systems, mobile apps (iOS/Android), web applications, and scalable enterprise software. Using agile methodologies, we build secure, user-centric platforms with robust features like CRM tools, inventory management, and workflow automation. From initial ideation to post-launch support, we ensure seamless integration with existing systems, future-proof scalability, and compliance with industry standards.
                </p>
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
        <p>
        Keep your business running smoothly with our end-to-end IT support solutions. We provide proactive troubleshooting, system maintenance, network security audits, and 24/7 technical assistance to businesses of all scales. Our experts handle hardware/software setup, data backup, cloud integration, and cybersecurity protocols to safeguard against threats. Whether resolving day-to-day glitches or implementing long-term IT strategies, we prioritize minimizing downtime, enhancing operational efficiency, and empowering your team with reliable technology.
        </p>
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
       <p>
       Unlock the power of your data with advanced analytics services. We transform raw data into actionable insights using predictive modeling, AI-driven analytics, and interactive dashboards. Our team employs tools like Power BI, Tableau, and Python to deliver real-time reporting, customer behavior analysis, and KPI tracking. Whether optimizing supply chains, forecasting trends, or refining marketing strategies, we empower data-driven decisions that enhance operational efficiency, reduce costs, and boost ROI.
       </p>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
  </div>
</div>
</div>


<!-- Footer -->
<?php require_once 'footer.php'; ?>