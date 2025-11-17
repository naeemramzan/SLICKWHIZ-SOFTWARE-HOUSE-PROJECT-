<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/insight.css">

<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold text-purple mb-3">Our Blogs</h1>
        <p class="lead text-secondary">Insightful content on tech evolution</p>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8">
                <div class="row g-4" id="blogGrid">
                    
                    <div class="col-md-6 blog-item page-1">
                        <div class="blog-card position-relative">
                            <div class="blog-date-badge"><span>11</span><small>JUN</small></div>
                            <div class="img-wrapper"><img src="assets/images/blog1.png" class="blog-img-top" alt="Blog"></div>
                            <div class="blog-content">
                                <span class="badge-category">Support Series</span>
                                <a href="blog-detail.php?id=1" class="blog-title">Why Every Business Needs Reliable Microsoft 365 Support?</a>
                                <a href="blog-detail.php?id=1" class="read-more-link">READ MORE <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 blog-item page-1">
                        <div class="blog-card position-relative">
                             <div class="blog-date-badge"><span>11</span><small>JUN</small></div>
                             <div class="img-wrapper"><img src="assets/images/blog2.png" class="blog-img-top" alt="Blog"></div>
                            <div class="blog-content">
                                <span class="badge-category">Growth</span>
                                <a href="blog-detail.php?id=2" class="blog-title">Top 13 Benefits of Microsoft 365 Support for Business Growth</a>
                                <a href="blog-detail.php?id=2" class="read-more-link">READ MORE <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 blog-item page-1">
                        <div class="blog-card position-relative">
                             <div class="blog-date-badge"><span>17</span><small>APR</small></div>
                             <div class="img-wrapper"><img src="assets/images/blog3.png" class="blog-img-top" alt="Blog"></div>
                            <div class="blog-content">
                                <span class="badge-category">Productivity</span>
                                <a href="blog-detail.php?id=3" class="blog-title">Tired of Manual Tasks Draining Productivity?</a>
                                <a href="blog-detail.php?id=3" class="read-more-link">READ MORE <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-6 blog-item page-1">
                        <div class="blog-card position-relative">
                             <div class="blog-date-badge"><span>17</span><small>APR</small></div>
                             <div class="img-wrapper"><img src="assets/images/blog4.png" class="blog-img-top" alt="Blog"></div>
                            <div class="blog-content">
                                <span class="badge-category">Automation</span>
                                <a href="blog-detail.php?id=4" class="blog-title">How Can a Microsoft Power Platform Specialist Solve Your Nightmare?</a>
                                <a href="blog-detail.php?id=4" class="read-more-link">READ MORE <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 blog-item page-2" style="display:none;">
                        <div class="blog-card position-relative">
                             <div class="blog-date-badge"><span>30</span><small>MAR</small></div>
                             <div class="img-wrapper"><img src="assets/images/blog1.png" class="blog-img-top" alt="Blog"></div>
                            <div class="blog-content">
                                <span class="badge-category">AI</span>
                                <a href="blog-detail.php?id=5" class="blog-title">The Future of AI in SharePoint Development</a>
                                <a href="blog-detail.php?id=5" class="read-more-link">READ MORE <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 blog-item page-2" style="display:none;">
                        <div class="blog-card position-relative">
                             <div class="blog-date-badge"><span>22</span><small>MAR</small></div>
                             <div class="img-wrapper"><img src="assets/images/blog2.png" class="blog-img-top" alt="Blog"></div>
                            <div class="blog-content">
                                <span class="badge-category">Azure</span>
                                <a href="blog-detail.php?id=6" class="blog-title">Securing Your Data with Azure Cloud Services</a>
                                <a href="blog-detail.php?id=6" class="read-more-link">READ MORE <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 blog-item page-3" style="display:none;">
                        <div class="blog-card position-relative">
                             <div class="blog-date-badge"><span>10</span><small>FEB</small></div>
                             <div class="img-wrapper"><img src="assets/images/blog3.png" class="blog-img-top" alt="Blog"></div>
                            <div class="blog-content">
                                <span class="badge-category">Security</span>
                                <a href="blog-detail.php?id=7" class="blog-title">Cybersecurity Trends in 2025</a>
                                <a href="blog-detail.php?id=7" class="read-more-link">READ MORE <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-5 d-flex justify-content-center">
                    <nav>
                        <ul class="pagination" id="blogPagination">
                            <li class="page-item active"><a class="page-link" href="#" onclick="changePage(1); return false;">1</a></li>
                            <li class="page-item"><a class="page-link" href="#" onclick="changePage(2); return false;">2</a></li>
                            <li class="page-item"><a class="page-link" href="#" onclick="changePage(3); return false;">3</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-lg-4 ps-lg-5 mt-5 mt-lg-0">
                <div class="sidebar-widget">
                    <h5 class="sidebar-title">Search</h5>
                    <div class="search-form">
                        <input type="text" id="blogSearchInput" placeholder="Type keywords...">
                        <button type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <div class="sidebar-widget">
                    <h5 class="sidebar-title">Post Categories</h5>
                    <ul class="category-list ps-0 mb-0">
                        <li><a href="#">Our Blogs <span>(12)</span></a></li>
                        <li><a href="#">News <span>(5)</span></a></li>
                        <li><a href="#">Microsoft 365 <span>(8)</span></a></li>
                        <li><a href="#">Power Platform <span>(3)</span></a></li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h5 class="sidebar-title">Recent News</h5>
                    <div class="recent-post-item">
                        <img src="assets/images/blog1.png" class="recent-post-img">
                        <div class="recent-post-info">
                            <h6><a href="blog-detail.php?id=1">Why Every Business Needs Reliable Support</a></h6>
                            <small>June 11, 2024</small>
                        </div>
                    </div>
                    <div class="recent-post-item">
                         <img src="assets/images/blog2.png" class="recent-post-img">
                        <div class="recent-post-info">
                            <h6><a href="blog-detail.php?id=2">Top 13 Benefits of Microsoft 365</a></h6>
                            <small>June 11, 2024</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function changePage(pageNums) {
        // 1. Hide all posts
        const allPosts = document.querySelectorAll('.blog-item');
        allPosts.forEach(post => post.style.display = 'none');

        // 2. Select posts for this page
        const targetPosts = document.querySelectorAll('.page-' + pageNums);
        
        // 3. Show them
        if(targetPosts.length > 0) {
            targetPosts.forEach(post => {
                post.style.display = 'block';
                // Reset animation
                post.style.opacity = 0;
                setTimeout(() => post.style.opacity = 1, 100);
            });
        } else {
            // Fallback if page empty
            alert("No posts found for Page " + pageNums);
            // Show page 1 instead
            changePage(1);
            return;
        }

        // 4. Update Active Button State
        const buttons = document.querySelectorAll('.pagination .page-item');
        buttons.forEach(btn => btn.classList.remove('active'));
        // Logic to activate clicked button (assuming 1-based index maps to array index 0,1,2)
        if(buttons[pageNums-1]) buttons[pageNums-1].classList.add('active');

        // 5. Scroll top
        document.getElementById('blogGrid').scrollIntoView({behavior: 'smooth', block: 'start'});
    }

    // SEARCH FUNCTIONALITY
    document.getElementById('blogSearchInput').addEventListener('keyup', function() {
        let filter = this.value.toUpperCase();
        let posts = document.querySelectorAll('.blog-item');
        let pagination = document.querySelector('.pagination');

        if (filter.length > 0) {
            // If searching, hide pagination and filter all items
            pagination.style.display = 'none';
            
            posts.forEach(post => {
                let title = post.querySelector('.blog-title').innerText;
                if (title.toUpperCase().indexOf(filter) > -1) {
                    post.style.display = "block";
                } else {
                    post.style.display = "none";
                }
            });
        } else {
            // If search cleared, reset to Page 1
            pagination.style.display = 'flex';
            changePage(1);
        }
    });
</script>

<?php include 'includes/footer.php'; ?>