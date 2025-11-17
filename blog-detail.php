<?php 
include 'includes/header.php'; 

// Simple PHP Logic to simulate different posts based on ID
$blog_id = isset($_GET['id']) ? $_GET['id'] : 1;
$title = "Why Every Business Needs Reliable Microsoft 365 Support?";
$category = "Microsoft 365";
$image = "assets/images/blog1.png";

if($blog_id == 2) {
    $title = "Top 13 Benefits of Microsoft 365 Support for Business Growth";
    $category = "Growth";
    $image = "assets/images/blog2.png";
} elseif($blog_id == 3) {
    $title = "Tired of Manual Tasks Draining Productivity?";
    $category = "Productivity";
    $image = "assets/images/blog3.png";
} elseif($blog_id == 4) {
    $title = "How Can a Microsoft Power Platform Specialist Solve Your Nightmare?";
    $category = "Automation";
    $image = "assets/images/blog4.png";
}
// Add more conditions as needed
?>

<link rel="stylesheet" href="assets/css/insight.css">

<div class="container mt-5 pt-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="img-wrapper rounded shadow" style="height: 400px;">
                <img src="<?php echo $image; ?>" class="w-100 h-100 object-fit-cover" alt="Blog Banner">
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-lg-8">
                <div class="mb-4 text-center text-md-start">
                    <span class="badge-category mb-2 d-inline-block"><?php echo $category; ?></span>
                    <h1 class="fw-bold text-purple mb-3 display-5"><?php echo $title; ?></h1>
                    
                    <div class="author-meta justify-content-center justify-content-md-start">
                        <div><i class="far fa-calendar-alt"></i> June 11, 2024</div>
                        <div><i class="far fa-user"></i> SlickWhiz Admin</div>
                        <div><i class="far fa-comment"></i> 0 Comments</div>
                    </div>
                </div>
                
                <div class="blog-detail-content">
                    <p class="lead text-dark fw-bold">Generative AI has the potential to transform business processes and massively improve productivity. One of the leaders in this field is Microsoft.</p>
                    
                    <p>As we'll explore in this blog, there are some huge advantages to using Copilot. Despite this, it's also understandable that many organizations are still a little cautious; AI is a relatively new technology, after all.</p>
                    
                    <h2>What is Microsoft Copilot?</h2>
                    <p>Microsoft Copilot is an intelligent assistant that combines the strengths of pre-trained large language models (LLMs) with the knowledge and contexts from your own organization's enterprise content.</p>
                    
                    <div class="blockquote-custom">
                        "Knowledge is power. But let's get to know Copilot better, and learn what it can do for your organization."
                    </div>

                    <h3>Key Benefits of Dedicated Support</h3>
                    <ul>
                        <li><strong>Instant Issue Resolution:</strong> Never let downtime affect your business operations.</li>
                        <li><strong>Security Management:</strong> We ensure your tenant is secure against modern threats.</li>
                        <li><strong>Cost Optimization:</strong> Are you paying for licenses you don't use? We audit and optimize.</li>
                    </ul>

                    <p>By using natural language to control Copilot, everyone in your organization can benefit from an intelligent assistant. The barrier to increased productivity is substantially lowered.</p>
                </div>

                <div class="mt-5 py-4 border-top border-bottom d-flex align-items-center justify-content-between">
                     <span class="fw-bold text-dark">Share this post:</span>
                     <div class="d-flex gap-2">
                         <button class="btn btn-light rounded-circle shadow-sm border"><i class="fab fa-facebook-f text-primary"></i></button>
                         <button class="btn btn-light rounded-circle shadow-sm border"><i class="fab fa-twitter text-info"></i></button>
                         <button class="btn btn-light rounded-circle shadow-sm border"><i class="fab fa-linkedin-in text-primary"></i></button>
                     </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                 <div class="sidebar-widget">
                    <h5 class="sidebar-title">Search</h5>
                    <div class="search-form">
                        <input type="text" placeholder="Search articles...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </div>

                 <div class="sidebar-widget">
                    <h5 class="sidebar-title">Post Categories</h5>
                    <ul class="category-list ps-0 mb-0">
                        <li><a href="insights.php">Our Blogs <span>(12)</span></a></li>
                        <li><a href="news.php">News <span>(5)</span></a></li>
                        <li><a href="#">Microsoft 365 <span>(8)</span></a></li>
                        <li><a href="#">Power Platform <span>(3)</span></a></li>
                    </ul>
                </div>
                
                <div class="sidebar-widget">
                    <h5 class="sidebar-title">Recent Posts</h5>
                     <div class="recent-post-item">
                        <img src="assets/images/blog2.png" class="recent-post-img">
                        <div class="recent-post-info">
                            <h6><a href="blog-detail.php?id=2">Top 13 Benefits of Microsoft 365</a></h6>
                            <small>June 11, 2024</small>
                        </div>
                    </div>
                     <div class="recent-post-item">
                        <img src="assets/images/blog3.png" class="recent-post-img">
                        <div class="recent-post-info">
                            <h6><a href="blog-detail.php?id=3">Manual Tasks Draining Productivity?</a></h6>
                            <small>April 17, 2024</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>