<?php
require('include/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/logofi.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logofi.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>MyCamp</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
    <!-- Header Top ==== -->
    <header class="header rs-nav">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
						<img src="assets/images/logo1.png" alt="">
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<!-- Search Button ==== -->
								
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
							<img src="assets/images/logo1.png" alt="">
						</div>
                        <ul class="nav navbar-nav">	
							<li><a href="index.html">Home</a>
							</li>
							<li><a href="blog-classic-grid.php">Projects</a>
							</li>
							<li class="add-mega-menu"><a href="javascript:;">Programs <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu add-menu">
									<li class="add-menu-left">
										<h5 class="menu-adv-title">Our Courses</h5>
										<ul>
											<li><a href="courses.html">BS Program</a></li>
											<li><a href="courses-details.html">MS Program</a></li>
											<li><a href="profile.html">Phd Program</a></li>
										</ul>
									</li>
									<li class="add-menu-right">
										<img src="assets/images/logofi.png" alt=""/>
									</li>
								</ul>
							</li>
							<li><a href="blog-classic-grid.php">Research</a>
							</li>
							<li><a href="profile.php">Faculty</a>
							</li>
							<li><a href="javascript:;">Activities <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									
									<li><a href="event.php">Event</a></li>
									<li><a href="#">Achievements</a></li>
									<li><a href="#">Participation</a></li>
									<li><a href="#">Community Service</a></li>
								</ul>
							</li>
							
							
							<li><a href="about-1.php">About Us</a>
										
									</li>
							<li><a href="contact-1.html">Contact Us</a>
										
									</li>
						</ul>
						<div class="nav-social-link">
							<a href="javascript:;"><i class="fa fa-facebook"></i></a>
							<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
							<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
						</div>
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- header END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/about/img3.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Faculty</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Faculty</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						
						<div class="col-lg-9 col-md-8 col-sm-12 m-b30">
							<div class="profile-content-bx">
								<div class="tab-content">
									<div class="tab-pane active" id="courses">
										<div class="profile-head">
											<h3>Faculty Members</h3>
											
										</div>
										<div class="courses-filter">
											<div class="clearfix">
												<ul id="masonry" class="ttr-gallery-listing magnific-image row">
													<?php

							$limit =1;
if(isset($_GET['page'])){
$page = $_GET['page'];
}else{
	$page=1;
}
$offset = ($page -1) * $limit;

$query1 = "SELECT * FROM faculty ORDER BY id DESC LIMIT {$offset},{$limit}";
$run1 = mysqli_query($db,$query1);;
while($faculty=mysqli_fetch_array($run1)){
 ?>
													<li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 pending">
														
														<div class="cours-bx">
															
															<div class="user-profile-thumb">
									<img src="assets/images/testimonials/<?=$faculty['my_prof_pic']?>" alt=""/>
								</div>
															<div class="info-bx text-center">
																<h5><a href="faculty.php"><?=$faculty['my_name']?></a></h5>
																<span>-<?=$faculty['my_designation']?></span>
															</div>
															
														</div>
														
													</li>

											 <?php

}
          ?>
												</ul>
											</div>

										</div>
									</div>

					<!-------not required		
									<div class="tab-pane" id="quiz-results">
										<div class="profile-head">
											<h3>Quiz Results</h3>
										</div>
										<div class="courses-filter">
											<div class="row">
												<div class="col-md-6 col-lg-6">
													<ul class="course-features">
														<li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value">8</span></li>
														<li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span class="value">1</span></li>
														<li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">60 hours</span></li>
														<li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span class="value">Beginner</span></li>
														<li><i class="ti-smallcap"></i> <span class="label">Language</span> <span class="value">English</span></li>
														<li><i class="ti-user"></i> <span class="label">Students</span> <span class="value">32</span></li>
														<li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span class="value">Yes</span></li>
													</ul>
												</div>
												<div class="col-md-6 col-lg-6">
													<ul class="course-features">
														<li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value">8</span></li>
														<li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span class="value">1</span></li>
														<li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">60 hours</span></li>
														<li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span class="value">Beginner</span></li>
														<li><i class="ti-smallcap"></i> <span class="label">Language</span> <span class="value">English</span></li>
														<li><i class="ti-user"></i> <span class="label">Students</span> <span class="value">32</span></li>
														<li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span class="value">Yes</span></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="edit-profile">
										<div class="profile-head">
											<h3>Edit Profile</h3>
										</div>
										<form class="edit-profile">
											<div class="">
												<div class="form-group row">
													<div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
														<h3>1. Personal Details</h3>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Full Name</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="Mark Andre">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Occupation</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="CTO">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Company Name</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="EduChamp">
														<span class="help">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Phone No.</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="+120 012345 6789">
													</div>
												</div>
												
												<div class="seperator"></div>
												
												<div class="form-group row">
													<div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
														<h3>2. Address</h3>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Address</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="5-S2-20 Dummy City, UK">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">City</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="US">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">State</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="California">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Postcode</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="000702">
													</div>
												</div>

												<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

												<div class="form-group row">
													<div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
														<h3 class="m-form__section">3. Social Links</h3>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Linkedin</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="www.linkedin.com">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Facebook</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="www.facebook.com">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Twitter</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="www.twitter.com">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Instagram</label>
													<div class="col-12 col-sm-9 col-md-9 col-lg-7">
														<input class="form-control" type="text" value="www.instagram.com">
													</div>
												</div>
											</div>
											<div class="">
												<div class="">
													<div class="row">
														<div class="col-12 col-sm-3 col-md-3 col-lg-2">
														</div>
														<div class="col-12 col-sm-9 col-md-9 col-lg-7">
															<button type="reset" class="btn">Save changes</button>
															<button type="reset" class="btn-secondry">Cancel</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane" id="change-password">
										<div class="profile-head">
											<h3>Change Password</h3>
										</div>
										<form class="edit-profile">
											<div class="">
												<div class="form-group row">
													<div class="col-12 col-sm-8 col-md-8 col-lg-9 ml-auto">
														<h3>Password</h3>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Current Password</label>
													<div class="col-12 col-sm-8 col-md-8 col-lg-7">
														<input class="form-control" type="password" value="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">New Password</label>
													<div class="col-12 col-sm-8 col-md-8 col-lg-7">
														<input class="form-control" type="password" value="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Re Type New Password</label>
													<div class="col-12 col-sm-8 col-md-8 col-lg-7">
														<input class="form-control" type="password" value="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 col-sm-4 col-md-4 col-lg-3">
												</div>
												<div class="col-12 col-sm-8 col-md-8 col-lg-7">
													<button type="reset" class="btn">Save changes</button>
													<button type="reset" class="btn-secondry">Cancel</button>
												</div>
											</div>
												
										</form>
									</div>
									-------not required==-->
								</div> 
							</div>
						</div>
					</div>
					<!-- Pagination ==== -->
					<div class="pagination-bx rounded-sm gray clearfix">
						<?php
					
					$sql1= "SeLECT * FROM faculty";
					$result1 =mysqli_query($db, $sql1) or die("Query Failed");
					if (mysqli_num_rows($result1)>0){
						$total_records= mysqli_num_rows($result1);
						
						$total_page = ceil($total_records/$limit);
						echo'<ul class="pagination admin-pagination">';
						if($page > 1){
						echo '<li class="previous"><a href="profile.php?page='.($page-1).'" ><i class="ti-arrow-left"></i>Prev</a></li>';
					}
						for($i =1; $i<=$total_page; $i++){
							if($i == $page){
								$active = "active";

							}else{
								$active = "";

							}
							echo '<li class = "'.$active.'"><a href="profile.php?page='.$i.'">'.$i.'</a></li>';


						}
						if($total_page > $page){
						echo '<li  class="next"><a href="profile.php?page='.($page+1).'" >Next <i class="ti-arrow-right"></i></a></li>';
				}
						echo'</ul>';
					}

					  ?>
					</div>
				</div>

            </div>

        </div>
		<!-- contact area END -->

    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
    <footer>
        <div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<img src="assets/images/logo.png" alt=""/>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">MyCamp</h5>
							<p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                            
                        </div>
                    </div>
					<div class="col-12 col-lg-5 col-md-7 col-sm-12">
						<div class="row">
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Company</h5>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="about-1.html">About</a></li>
										<li><a href="faq-1.html">FAQs</a></li>
										<li><a href="contact-1.html">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Get In Touch</h5>
									<ul>
										<li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a></li>
										<li><a href="blog-classic-grid.html">Blog</a></li>
										<li><a href="portfolio.html">Portfolio</a></li>
										<li><a href="event.html">Event</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Courses</h5>
									<ul>
										<li><a href="courses.html">Courses</a></li>
										<li><a href="courses-details.html">Details</a></li>
										<li><a href="membership.html">Membership</a></li>
										<li><a href="profile.html">Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                        <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title">Our Gallery</h5>
                            <ul class="magnific-image">
								<li><a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic1.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic2.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic3.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic4.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic5.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic6.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic7.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic8.jpg" alt=""></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>
