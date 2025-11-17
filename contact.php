<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 reveal">
                <h1 class="fw-bold mb-4 text-animate">Get In Touch With Us</h1>
                <!-- Styled the map container -->
                <div class="shadow-lg rounded-3 overflow-hidden mb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1!2d-73.98!3d40.75!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM40zMCcyNS4xIk4gNzPCsDU4JzMwLjAiVw!5e0!3m2!1sen!2sus!4v1600000000000!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 reveal">
                <!-- Updated card style for consistency -->
                <div class="hero-card" style="background: white; color: #333; border: 1px solid #eee; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-radius: 15px; padding: 30px;">
                    
                    <!-- PHP logic to show success message instead of alert -->
                    <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                        <div class="alert alert-success" role="alert">
                          <strong>Thank you!</strong> Your message has been sent. We will contact you shortly.
                        </div>
                    <?php endif; ?>

                    <h3 class="mb-4">Send a Message</h3>
                    <form action="submit_form.php" method="POST">
                        <div class="mb-3">
                            <input type="text" name="full_name" class="form-control bg-light" placeholder="Full Name" style="padding: 12px; font-size: 0.95rem;">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control bg-light" placeholder="Email" style="padding: 12px; font-size: 0.95rem;">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone" class="form-control bg-light" placeholder="Phone" style="padding: 12px; font-size: 0.95rem;">
                        </div>
                        <div class="mb-3">
                            <textarea name="idea" class="form-control bg-light" rows="4" placeholder="Your Idea" style="padding: 12px; font-size: 0.95rem;"></textarea>
                        </div>
                        <button class="btn btn-orange w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Added reveal animations to the address cards -->
        <div class="row mt-5 reveal">
             <div class="col-md-4 mb-3 reveal-child">
                <div class="contact-card p-4 rounded h-100 shadow">
                    <h4><img src="assets/images/usa-flag.png" width="25" class="me-2" alt="USA"> USA</h4>
                    <p class="small mt-3 text-white-50">5900 Balcones Drive, STE 100 Austin, TX 78731</p>
                </div>
             </div>
             <div class="col-md-4 mb-3 reveal-child">
                <div class="contact-card orange p-4 rounded h-100 shadow">
                    <h4><img src="assets/images/uae-flag.png" width="25" class="me-2" alt="UAE"> UAE</h4>
                    <p class="small mt-3 text-white-50">Meydan Grandstand, Dubai, U.A.E</p>
                </div>
             </div>
             <div class="col-md-4 mb-3 reveal-child">
                <div class="contact-card blue p-4 rounded h-100 shadow">
                    <h4><img src="assets/images/pak-flag.png" width="25" class="me-2" alt="PAK"> Karachi (HQ)</h4>
                    <p class="small mt-3 text-white-50">AR-01, Gulshan-e-Iqbal 10-A, Karachi, Pakistan</p>
                </div>
             </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>