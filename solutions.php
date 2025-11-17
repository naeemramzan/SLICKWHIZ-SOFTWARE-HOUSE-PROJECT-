<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/solutions.css">

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 reveal">
                <h1 class="display-4 fw-bold mb-3">Our <span style="color: var(--accent-orange);">Solutions</span></h1>
                <p class="lead text-secondary">
                    Empowering businesses with cutting-edge Microsoft technologies. Choose a solution to learn more.
                </p>
            </div>
            <div class="col-lg-5 offset-lg-1 reveal">
                 <div class="hero-card">
                    <h3 class="text-center text-white mb-4">Get a Quote</h3>
                    <form action="submit_form.php" method="POST" class="hero-form">
                        <input type="text" name="full_name" class="form-control" placeholder="Name" required>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <button type="submit" class="btn btn-orange w-100 mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 reveal">
                <a href="sharepoint.php">
                    <div class="solution-hub-card">
                        <div class="solution-hub-icon text-success"><i class="fab fa-microsoft"></i></div>
                        <h3 class="fw-bold text-dark">SharePoint</h3>
                        <p class="text-muted mt-3">Harness the full potential of SharePoint for enhanced collaboration, document management, and intranet solutions.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 reveal">
                <a href="#"> <div class="solution-hub-card">
                        <div class="solution-hub-icon text-warning"><i class="fas fa-bolt"></i></div>
                        <h3 class="fw-bold text-dark">Microsoft Power Platform</h3>
                        <p class="text-muted mt-3">Leveraging the latest technologies like Power Apps, Power BI, Power Automation, and Azure.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 reveal">
                <a href="#"> <div class="solution-hub-card">
                        <div class="solution-hub-icon text-danger"><i class="fas fa-users-cog"></i></div>
                        <h3 class="fw-bold text-dark">Microsoft Dynamics 365 CRM</h3>
                        <p class="text-muted mt-3">Transforming ideas into reality with cutting-edge software solutions.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 reveal">
                <a href="#"> <div class="solution-hub-card">
                        <div class="solution-hub-icon text-primary"><i class="fas fa-cloud"></i></div>
                        <h3 class="fw-bold text-dark">Microsoft Azure</h3>
                        <p class="text-muted mt-3">Our AI solutions are designed to help you harness the full potential of your data.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>