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
	<style >
		.info-bx a.readmore-btn{
        display: inline-block;
        color: #fff;
        background-color: #121d82;
        text-decoration: none;
        padding: 5px 6px;
        border-radius: 5px;
        margin-top: 15px;

    }
    .info-bx a.readmore-btn:hover{
        box-shadow: 0 5px 5px rgba(0,0,0,0.2);
    }
    .info-bx p{
    height: 90px;
    overflow: hidden;}
    .info-bx.showContent p{
    	height: auto;}
    .info-bx.showContent a.readmore-btn{
    	background-color: #303eba;
    } 

	</style>
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
    <!-- header END -->
    <!-- Inner Content Box ==== -->
    <div class="page-content bg-white">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/about/img6.jfif);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Research Blog</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Research Blog</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		<!-- Page Content Box ==== -->
        <div class="content-block">
			<!-- Blog Grid ==== -->
			<div class="section-area section-sp1">
				<div class="container">
					<div class="ttr-blog-grid-3 row">
						<?php
$limit =9;
if(isset($_GET['page'])){
$page = $_GET['page'];
}else{
	$page=1;
}
$offset = ($page -1) * $limit;
$query1 = "SELECT * FROM research ORDER BY id DESC LIMIT {$offset},{$limit}";
$run1 = mysqli_query($db,$query1);;
while($research=mysqli_fetch_array($run1)){
 ?>
						<div class=" action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
							
							<div class="recent-news">
								
								<div class="action-box">
									<img src="assets/images/event/<?=$research['res_pic']?>" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i><?=$research['res_date']?></a></li><br>
										<li><a href="#"><i class="fa fa-user"></i><?=$research['res_name']?></a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html"><?=$research['res_title']?></a></h5>
									<p><?=$research['res_desc']?></p> 
									
									<a href="javascript:void();" class="readmore-btn">Read More</a></div>
								
							</div>
							
						</div>
						<?php

}
          ?>
						
					</div>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
					<script>
	$(".readmore-btn").on('click',function(){
		$(this).parent().toggleClass("showContent");
		var replaceText =$(this).parent().hasClass("showContent")? "Read Less" : "Read More";
		$(this).text(replaceText);
	});

</script>
					
					<!-- Pagination ==== -->
					<div class="pagination-bx rounded-sm gray clearfix">
						<?php
					
					$sql1= "SELECT * FROM research";
					$result1 =mysqli_query($db, $sql1) or die("Query Failed");
					if (mysqli_num_rows($result1)>0){
						$total_records= mysqli_num_rows($result1);
						
						$total_page = ceil($total_records/$limit);
						echo'<ul class="pagination admin-pagination">';
						if($page > 1){
						echo '<li class="previous"><a href="blog-classic-grid.php?page='.($page-1).'" ><i class="ti-arrow-left"></i>Prev</a></li>';
					}
						for($i =1; $i<=$total_page; $i++){
							if($i == $page){
								$active = "active";

							}else{
								$active = "";

							}
							echo '<li class = "'.$active.'"><a href="blog-classic-grid.php?page='.$i.'">'.$i.'</a></li>';


						}
						if($total_page > $page){
						echo '<li  class="next"><a href="blog-classic-grid.php?page='.($page+1).'" >Next <i class="ti-arrow-right"></i></a></li>';
				}
						echo'</ul>';
					}

					  ?>

						
					</div>
					<!-- Pagination END ==== -->
				</div>
			</div>
			<!-- Blog Grid END ==== -->
        </div>
		<!-- Page Content Box END ==== -->
    </div>
    <!-- Page Content Box END ==== -->
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
                <div class="row">
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up"></button>
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
