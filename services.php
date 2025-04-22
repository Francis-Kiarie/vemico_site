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
                    <img src="assets/images/services-web-dev.jpg" class="card-img-top" alt="Web Development">
                    <div class="card-body">
                        <h5 class="card-title">Web development</h5>
                        <p class="card-text">We create dynamic, responsive websites with excellent UI/UX.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#webdevelopmentModal">
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
<!-- Call to Action Section -->
<section id="why-choose-us" class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="display-5">Why Choose Us?</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <p class="lead mb-4">
          We combine technical expertise with a client-centric approach, delivering solutions that align with your business goals.
        </p>
        <p class="mb-4">
          From startups to enterprises, our multidisciplinary team ensures innovation, security, and measurable results at every stage of your digital journey. Let us be your partner in navigating the evolving tech landscape!
        </p>
        <div class="text-center">
          <a href="contact.php" class="btn btn-primary btn-lg">Get Started</a>
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