<?php include 'includes/header.php'; ?>

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 mb-4 mb-lg-0 reveal text-center">
                <h1 class="fw-bold mb-2 text-animate">
                    Your Trusted Partner for <br>
                    <span class="color-cycle">Digital Transformation</span>
                </h1>
                <h5 class="text-secondary mb-3 reveal-child">Expert <span class="color-cycle">Microsoft 365</span> Consultants</h5>
                
                <p class="text-muted mb-4 reveal-child" style="font-size: 0.95rem; line-height: 1.6;">
                    At SlickWhiz Solutions, we specialize in driving digital transformation for businesses through cutting-edge cloud solutions. Our expertise in Microsoft technologies ensures seamless collaboration.
                </p>

                <div class="d-flex gap-3 mt-3 reveal-child justify-content-center">
                    <div class="border p-2 bg-white rounded shadow-sm"><i class="fab fa-microsoft fa-2x text-dark"></i></div>
                    <div class="border p-2 bg-white rounded shadow-sm"><i class="fas fa-certificate fa-2x text-primary"></i></div>
                    <div class="border p-2 bg-white rounded shadow-sm"><i class="fas fa-award fa-2x text-danger"></i></div>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 reveal">
                <div class="hero-card">
                    <div class="text-center mb-3">
                        <h2 class="mb-1">Simplify Your Business</h2>
                        <h3 class="text-orange">Let's Talk</h3>
                    </div>
                    
                    <form action="submit_form.php" method="POST" class="hero-form">
                        <div class="row g-2">
                            <div class="col-6">
                                <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="col-6">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-6">
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                            </div>
                            <div class="col-6">
                                <select name="service" class="form-select">
                                    <option selected disabled>Service</option>
                                    <option value="SharePoint">SharePoint</option>
                                    <option value="Azure">Azure</option>
                                    <option value="Power Platform">Power Platform</option>
                                </select>
                            </div>
                        </div>
                        <textarea name="idea" class="form-control" rows="2" placeholder="Tell us your idea..."></textarea>
                        <button type="submit" class="btn btn-orange">REQUEST CALL BACK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="supercharge-section py-5 text-center reveal">
    <div class="container">
        <h2 class="fw-bold text-dark mb-3 reveal-child">Supercharge Your Business with Microsoft 365 Managed Services</h2>
        <p class="text-muted mx-auto reveal-child" style="max-width: 800px; font-size: 1.05rem;">
            Struggling with outdated systems and inefficient workflows? Our Microsoft 365 managed services empower businesses with seamless cloud solutions, enterprise-grade security and enhanced productivity.
        </p>
        <a href="contact.php" class="btn btn-orange px-5 mt-4 shadow reveal-child">TALK TO AN EXPERT TODAY!</a>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <h2 class="fw-bold display-5 text-animate" style="color: var(--primary-purple);">Why SlickWhiz</h2>
            <p class="text-muted text-uppercase letter-spacing-2 reveal-child">Partnering for Success</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 reveal">
                <div class="d-flex align-items-start why-box">
                    <div class="icon-square me-3"><i class="fas fa-check"></i></div>
                    <div>
                        <h4 class="fw-bold">Expertise that Delivers Results</h4>
                        <p class="text-muted small mt-2">With years of hands-on experience, our team specializes in Microsoft 365 managed services.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 reveal">
                <div class="d-flex align-items-start why-box">
                    <div class="icon-square me-3"><i class="fas fa-lightbulb"></i></div>
                    <div>
                        <h4 class="fw-bold">Innovation at the Forefront</h4>
                        <p class="text-muted small mt-2">The digital landscape is evolving are you keeping up? We leverage Power Apps development.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 reveal">
                <div class="d-flex align-items-start why-box">
                    <div class="icon-square me-3"><i class="fas fa-user-check"></i></div>
                    <div>
                        <h4 class="fw-bold">Client First Approach</h4>
                        <p class="text-muted small mt-2">We don't believe in cookie cutter solutions. Our specialists analyze your business needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 reveal">
                <div class="d-flex align-items-start why-box">
                    <div class="icon-square me-3"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4 class="fw-bold">Proven Track Record of Success</h4>
                        <p class="text-muted small mt-2">With global clients across multiple industries, our expertise speaks for itself.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5 reveal">
             <button class="btn btn-orange px-5" data-bs-toggle="modal" data-bs-target="#callbackModal">REQUEST A CALL BACK</button>
        </div>
    </div>
</section>

<section class="py-5 stats-section bg-light text-center reveal">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <h2 class="stat-number count-up" data-target="100">0</h2>
                <p class="text-muted fw-bold text-uppercase small">Completed Projects</p>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <h2 class="stat-number count-up" data-target="21">0</h2>
                <p class="text-muted fw-bold text-uppercase small">Years of Experience</p>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <h2 class="stat-number count-up" data-target="50">0</h2>
                <p class="text-muted fw-bold text-uppercase small">Global Customers</p>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <h2 class="stat-number count-up" data-target="20">0</h2>
                <p class="text-muted fw-bold text-uppercase small">Countries Client Served</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5 reveal">
            <h2 class="display-5 fw-bold text-animate" style="color: var(--primary-purple);">Solutions</h2>
            <p class="text-muted reveal-child">Empowering Your Digital Journey</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 reveal">
                <div class="p-4 h-100 d-flex align-items-start why-box">
                    <div class="icon-square me-3"><i class="fab fa-microsoft text-secondary"></i></div>
                    <div>
                        <h4 class="fw-bold">SharePoint Work Smarter</h4>
                        <p class="text-muted small mt-2">Still dealing with on premise SharePoint headaches? It's time to migrate from SharePoint on premise to online securely.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 reveal">
                <div class="p-4 h-100 d-flex align-items-start why-box">
                    <div class="icon-square me-3"><i class="fas fa-bolt text-warning"></i></div>
                    <div>
                        <h4 class="fw-bold">Microsoft Power Platform</h4>
                        <p class="text-muted small mt-2">Revolutionize your operations with Power Apps development services. Create custom business apps.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 reveal">
                <div class="p-4 h-100 d-flex align-items-start why-box">
                    <div class="icon-square me-3"><i class="fas fa-users-cog text-danger"></i></div>
                    <div>
                        <h4 class="fw-bold">Microsoft Dynamics 365 CRM</h4>
                        <p class="text-muted small mt-2">With our Dynamics 365 development services, you can streamline sales, marketing and customer support.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 reveal">
                <div class="p-4 h-100 d-flex align-items-start why-box">
                    <div class="icon-square me-3"><i class="fas fa-cloud text-primary"></i></div>
                    <div>
                        <h4 class="fw-bold">Microsoft Azure Secure</h4>
                        <p class="text-muted small mt-2">Your cloud infrastructure is the backbone of your business. Our Azure management services ensure top tier security.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5 reveal">
            <a href="solutions.php" class="btn btn-orange px-5 shadow">EXPLORE OUR FULL RANGE OF SERVICES</a>
        </div>
    </div>
</section>

<section class="py-5 bg-light reveal">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3 text-animate" style="color: var(--primary-purple);">Our Expertise in Microsoft Cloud Solutions</h2>
                <h5 class="mb-4 text-secondary reveal-child">Microsoft Cloud Experts Turning Challenges into Growth Opportunities</h5>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex reveal-child"><i class="fas fa-check-circle text-success mt-1 me-3"></i> <span><strong>Microsoft 365 Managed Services:</strong> Secure, scalable and tailored to your business.</span></li>
                    <li class="mb-3 d-flex reveal-child"><i class="fas fa-check-circle text-success mt-1 me-3"></i> <span><strong>Seamless SharePoint Migrations:</strong> Migrate from SharePoint on premise to online without data loss.</span></li>
                    <li class="mb-3 d-flex reveal-child"><i class="fas fa-check-circle text-success mt-1 me-3"></i> <span><strong>Power Apps Development Services:</strong> Automate workflows.</span></li>
                </ul>
            </div>
            <div class="col-lg-6 text-center reveal-child">
                <img src="assets/images/1.png" class="img-fluid" alt="Cloud Diagram Structure">
            </div>
        </div>
    </div>
</section>

<section class="py-5 text-white text-center reveal" style="background-color: #0a192f;">
    <div class="container">
        <h2 class="fw-bold display-6 text-animate">Solve Complexity with SlickWhiz</h2>
        <p class="mx-auto mt-3 text-light opacity-75 reveal-child" style="max-width: 700px;">
            With a deep understanding of cloud solutions, we help businesses navigate digital transformation with ease. Our team of Microsoft 365 consultants ensures secure, scalable environments.
        </p>
        <button class="btn btn-orange mt-4 px-5 shadow reveal-child" data-bs-toggle="modal" data-bs-target="#callbackModal">REQUEST A CALL BACK</button>
    </div>
</section>

<section class="py-5 bg-white reveal">
    <div class="container">
        <div class="row align-items-center justify-content-center g-5">
            <div class="col-6 col-md-4 col-lg-3 reveal-child">
                <img src="assets/images/2.webp" alt="Van Roey" class="img-fluid client-logo-fix">
            </div>
            <div class="col-6 col-md-4 col-lg-3 reveal-child">
                <img src="assets/images/3.png" alt="Kajima" class="img-fluid client-logo-fix">
            </div>
            <div class="col-6 col-md-4 col-lg-3 reveal-child">
                <img src="assets/images/4.png" alt="Outthinker" class="img-fluid client-logo-fix">
            </div>
            <div class="col-6 col-md-4 col-lg-3 reveal-child">
                <img src="assets/images/5.png" alt="WeTrack" class="img-fluid client-logo-fix">
            </div>

            <div class="col-6 col-md-4 col-lg-3 reveal-child">
                <img src="assets/images/6.png" alt="Wilo" class="img-fluid client-logo-fix">
            </div>
            <div class="col-6 col-md-4 col-lg-3 reveal-child">
                <img src="assets/images/7.png" alt="Argo Translation" class="img-fluid client-logo-fix">
            </div>
            <div class="col-6 col-md-4 col-lg-3 reveal-child">
                <img src="assets/images/8.png" alt="SSRU" class="img-fluid client-logo-fix">
            </div>
            <div class="col-6 col-md-4 col-lg-3 reveal-child">
                <img src="assets/images/9.png" alt="SMART" class="img-fluid client-logo-fix">
            </div>

            <div class="col-6 col-md-4 col-lg-3 reveal-child">
                <img src="assets/images/10.png" alt="The Dutch Goat" class="img-fluid client-logo-fix">
            </div>
            <div class="col-6 col-md-4 col-lg-3 reveal-child">
                <img src="assets/images/3.png" alt="Picard Angst" class="img-fluid client-logo-fix">
            </div>
        </div>
    </div>
</section>

<section class="py-5 testimonial-section reveal">
    <div class="container text-center">
        <h2 class="fw-bold mb-5 text-animate" style="color: var(--primary-purple);">Your Trusted Microsoft Cloud Partner</h2>
        
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-card mx-auto" style="max-width: 800px;">
                        <h2 class="fw-bold text-secondary mb-3">Leicestershire County Council</h2>
                        <p class="lead fst-italic text-dark mb-4">"SlickWhiz Solutions has been instrumental in transforming our e-citizen services. Their expertise ensured that our transport assistance application was both secure and compliant with GDPR."</p>
                        <h5 class="text-orange fw-bold" style="color: var(--accent-orange);">David Thompson</h5>
                        <p class="small text-uppercase fw-bold text-muted">Head of Digital Services</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-card mx-auto" style="max-width: 800px;">
                        <h2 class="fw-bold text-secondary mb-3">Crew Clothing Company</h2>
                        <p class="lead fst-italic text-dark mb-4">"SlickWhiz Solutions streamlined our retail operations with their expertise in SharePoint and Microsoft Dynamics AX."</p>
                        <h5 class="text-orange fw-bold" style="color: var(--accent-orange);">Laura Green</h5>
                        <p class="small text-uppercase fw-bold text-muted">Retail Operations Manager</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-card mx-auto" style="max-width: 800px;">
                        <h2 class="fw-bold text-secondary mb-3">Kajima</h2>
                        <p class="lead fst-italic text-dark mb-4">"SlickWhiz Solutions brought our Document Management System to life with the innovative use of SharePoint and Power Automation."</p>
                        <h5 class="text-orange fw-bold" style="color: var(--accent-orange);">Emily Roberts</h5>
                        <p class="small text-uppercase fw-bold text-muted">Project Lead</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>