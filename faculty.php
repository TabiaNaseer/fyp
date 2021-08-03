<?php
require('include/db.php');
$query = "SELECT * FROM aboutme";
$run = mysqli_query($db,$query);
$user_data=mysqli_fetch_array($run);
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
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/about/img6.jfif);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">About</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>About</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp2">
                <div class="container">
					<div class="row">
							<h2 class="title-head text-uppercase m-b0"><span>Learn More About Me</span></h2>
							</div>
					</div>
					
				</div>
            </div>
            <!-- Our Services ==== -->
			<div class="section-area section-sp2 bg-fix ovbl-dark join-bx" style="background-image:url(assets/images/about/<?=$user_data['profile-pic']?>);">
                <div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx text-white">
							<h2 class="title-head m-b0"><?=$user_data['name']?></h2>
							<p class="m-b0"><?=$user_data['mydesc']?></p>
						</div>
						<div class="col-md-6">	
							<div class="video-bx">
								<img src="assets/images/profile/<?=$user_data['profile-pic']?>" alt=""/>
								
							</div>
						</div>
						
						<div class="col-md-6">	
							<div class="why-chooses-bx ">
								<div class="ttr-accordion m-b30 faq-bx" id="accordion1">
									<div class="panel">
										<div class="acod-head">
											<h6 class="acod-title"> 
												<a data-toggle="collapse"  href="#faq4" class="collapsed"  data-parent="#faq4">
												Personal </a> </h6>
												
										</div>
										<?php

$query4 = "SELECT * FROM personal_info";
$run4 = mysqli_query($db,$query4);;
while($personal_info=mysqli_fetch_array($run4)){
  if($personal_info['type']=='Personal'){
  ?>
										<div id="faq4" class="acod-body collapse">
											
											<div class="acod-content">Phone: <?=$personal_info['value']?></div>
											
										</div>
										
		<?php

}
}
          ?>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h6 class="acod-title"> 
												<a data-toggle="collapse"  href="#faq5" class="collapsed"  data-parent="#faq5">
												Degree </a> </h6>
												<?php

$query4 = "SELECT * FROM personal_info";
$run4 = mysqli_query($db,$query4);;
while($personal_info=mysqli_fetch_array($run4)){
  if($personal_info['type']=='Degree'){
  	?>
										</div>
										<div id="faq5" class="acod-body collapse">
											
											<div class="acod-content"><?=$personal_info['value']?></div>
											
										</div>
										<?php

}
}
          ?>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h6 class="acod-title"> 
												<a data-toggle="collapse" href="#faq1" class="collapsed" data-parent="#faq1">
												Brief Statement of Research Interest</a> </h6>
												<?php

$query4 = "SELECT * FROM personal_info";
$run4 = mysqli_query($db,$query4);;
while($personal_info=mysqli_fetch_array($run4)){
  if($personal_info['type']=='Brief Statement of Research Interest'){
  ?>
										</div>
										<div id="faq1" class="acod-body collapse">
											<div class="acod-content"><?=$personal_info['value']?></div>
										</div>
										<?php

}
}
          ?>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h6 class="acod-title"> 
												<a data-toggle="collapse" href="#faq2" class="collapsed" data-parent="#faq2">
												Service Activity</a> </h6>
												<?php

$query4 = "SELECT * FROM personal_info";
$run4 = mysqli_query($db,$query4);;
while($personal_info=mysqli_fetch_array($run4)){
  if($personal_info['type']=='Service Activity'){
  ?>
										</div>
										<div id="faq2" class="acod-body collapse">
											<div class="acod-content"><?=$personal_info['value']?></div>
										</div>
										<?php

}
}
          ?>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h6 class="acod-title"> 
												<a data-toggle="collapse"  href="#faq3" class="collapsed"  data-parent="#faq3">
												Other Research or Creative Accomplishments </a> </h6>
												<?php

$query4 = "SELECT * FROM personal_info";
$run4 = mysqli_query($db,$query4);;
while($personal_info=mysqli_fetch_array($run4)){
  if($personal_info['type']=='Other Research or Creative Accomplishments'){
  ?>
										</div>
										<div id="faq3" class="acod-body collapse">
											<div class="acod-content"> <?=$personal_info['value']?></div>
											<?php

}
}
          ?>
										</div>
										
									</div>
									
									<div class="panel">
										<div class="acod-head">
											<h6 class="acod-title"> 
												<a data-toggle="collapse"  href="#faq6" class="collapsed"  data-parent="#faq6">
												Experience </a> </h6>
												<?php

$query4 = "SELECT * FROM personal_info";
$run4 = mysqli_query($db,$query4);;
while($personal_info=mysqli_fetch_array($run4)){
  if($personal_info['type']=='Experience'){
  ?>
										</div>
										<div id="faq6" class="acod-body collapse">
											<div class="acod-content"> <?=$personal_info['value']?>(</div>
											
										</div>
										<?php

}
}
          ?>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- contact area END ==== -->
		<!-- Our Status ==== -->
		
			<div class="section-area content-inner section-sp1">
                <div class="container">
                    <div class="section-content">
                         <div class="row">
                            <div class="" id="instructor">
								<h2 class="title-head m-b0">Publications</h2>
								
								<div class="instructor-bx">
									<?php

$query4 = "SELECT * FROM resume";
$run4 = mysqli_query($db,$query4);;
while($resume=mysqli_fetch_array($run4)){
  if($resume['type']=='Publication'){
  ?>
									<div class="instructor-info">
										<h6 class="title-head m-b0">-<?=$resume['title']?></h6>
										<span><?=$resume['date']?> <br><i>-Ms Abeera Adeel</i></span>
										
										<p class="m-b0"><?=$resume['description']?></p>
										<br>
										<?php

}
}
          ?>
										
									
									</div>

								</div>
								
									
									
								</div>
							
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="section-content">
                         <div class="row">
                            <div class="" id="instructor">
								<h2 class="title-head m-b0">Honors and Awards</h2>
								<div class="instructor-bx">
									<?php

$query4 = "SELECT * FROM resume";
$run4 = mysqli_query($db,$query4);;
while($resume=mysqli_fetch_array($run4)){
  if($resume['type']=='Honors and Awards'){
  ?>
									<div class="instructor-info">
										<h6 class="title-head m-b0">-<?=$resume['title']?> </h6>
										<span><?=$resume['date']?> <br><i>-Ms Abeera Adeel</i></span>
										
										<p class="m-b0"><?=$resume['description']?></p>
										<br>
										<?php

}
}
          ?>
									
									</div>

								</div>
								
									
									
								</div>
							
                        </div>
                    </div>
                </div>
            
           </div>
                
			<!-- Our Status END ==== -->
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
