<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="utf-8">
	<title>All In One Hostel</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- Responsive File -->
	<link href="css/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Responsive Settings -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">


</head>

<body>
	
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

    <!-- Main Header -->
    <header class="main-header header-style-one alternate">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="dashboard.php" title="All In One Hostel"><img src="images/logo2.png" alt="All In One Hostel" title="All In One Hostel"></a></div>
                </div>
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span class="txt">Menu</span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="dashboard.php">Home</a></li>
                                <li class="dropdown"><a>View Rooms Details</a>
									<ul>
                                        <li class="dropdown"><a>AC Rooms</a>
										<ul>
											<li><a href="ac-one-person.html">For One Person</a>
											<li><a href="ac-two-person.html">For Two Person</a></li>
											<li><a href="ac-four-person.html">For Four Person</a></li>
										</ul>
										</li>
                                        <li class="dropdown"><a>Non-AC Rooms</a>
										<ul>
											<li><a href="nonac-one-person.html">For One Person</a>
											<li><a href="nonac-two-person.html">For Two Person</a></li>
											<li><a href="nonac-four-person.html">For Four Person</a></li>
										</ul>
										</li>
                                    </ul>
								</li>
                                <li class="dropdown"><a>Pages</a>
                                    <ul>
										<li><a href="book-hostel.php">Book Hostel</a></li>
                                        <li><a href="mess2.html">View Mess</a></li>
                                        <li><a href="library.html">View Library</a></li>
                                    </ul>
                                </li>
								<li class="dropdown"><a>About My Self</a>
                                    <ul>
                                        <li><a href="my-profile.php">My Profile</a></li>
                                        <li><a href="change-password.php">Change Password</a></li>
                                        <li><a href="room-details.php">My Room Details</a></li>
										<li><a href="access-log.php">Access log</a></li>
                                    </ul>
                                </li>
								<li><a href="aboutus.html">About All In One</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="other-links clearfix">
                    <div class="info">
                        <ul class="clearfix">
                            <li><a href="logout.php"><span class="icon flaticon-padlock"></span><span class="txt">Logout</span></a></li>
                        </ul>
                    </div>
                    <div class="link-box">
                        <a href="book-hostel.php" class="theme-btn btn-style-two"><span class="btn-title">Book Now</span></a>
                    </div>
                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>
            <div class="menu-backdrop"></div>
            <div class="nav-logo"><a href="index-2.html"><img src="images/logo2.png" alt="" title=""></a></div>
            <nav class="menu-box">
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
            <div class="nav-bottom">
                <div class="copyright">All In One  &copy;  2021 All Right Reserved</div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- Banner Section -->
    <section class="banner-section banner-two">

		<div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide Item -->
			<div class="slide-item">
                <div class="image-layer" style="background-image: url(images/main-slider/6.jpg);"></div>
				<div class="auto-container">
					<div class="content-box">
                        <div class="content">
                            <div class="inner">
        						<h1>Welcome to <br>All In One Hostel</h1>
                                <div class="text">Live Hostel Life</div>
                            </div>
                        </div>
					</div>  
				</div>
			</div>

			<!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(images/main-slider/5.jpg);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <h1>Welcome to <br>All In One Hostel</h1>
                                <div class="text">Live Hostel Life</div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>

			<!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(images/main-slider/4.jpg);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <h1>Welcome to <br>All In One Hostel</h1>
                                <div class="text">Live Hostel Life</div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>

		</div>
    </section>
    <!--End Banner Section -->

    <!--Featured Section-->
    <section class="featured-section-two">
        <div class="pattern-bottom"></div>
        <span class="dotted-pattern dotted-pattern-5"></span>
        <span class="tri-pattern tri-pattern-4"></span>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-xl-4 col-lg-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Finest Comfortable Rooms in Gandhinagar</h2>
                        </div>
                        <div class="signature"><img src="images/resource/signature-1.png" alt="" title=""></div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-xl-8 col-lg-12 col-sm-12">
                    <div class="inner">
                        <span class="dotted-pattern dotted-pattern-2"></span>
                        <div class="row clearfix">
                            <div class="image-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <figure class="image"><a href="#"><img src="images/resource/featured-image-6.jpg" alt="" title=""></a></figure>
                                </div>
                            </div>
                            <div class="image-block col-lg-6 col-md-6 col-sm-12 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <figure class="image"><img src="images/resource/featured-image-7.jpg" alt="" title=""></figure>
                                    <div class="cap"><span class="txt">25 <br>Years <br>of <br>Experience</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Rooms Section-->
    <section class="rooms-section-two">
        <div class="outer-container">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Rooms</h2>
                    <div class="lower-text">Experience the real hustle and bustle of All In One Hostel. Our hostel is famous for its relaxed atmosphere in true Amsterdam style.</div>
                </div>
                <div class="carousel-box">

                    <div class="rooms-carousel owl-theme owl-carousel">
                        <div class="room-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="ac-one-person.html"><img src="images/resource/featured-image-9.jpg" alt="" title=""></a></figure>
                                </div>
                                <div class="lower-box">
                                    <h4>AC Room</h4>
                                    <div class="pricing clearfix">
                                        <div class="price">From <span>₹60000</span> <br>avg price per year</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="text">For One Person Room</div>
                                    <div class="link-box"><a href="ac-one-person.html" class="theme-btn btn-style-three"><span class="btn-title">View Details</span></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="room-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="ac-two-person.html"><img src="images/resource/featured-image-10.jpg" alt="" title=""></a></figure>
                                </div>
                                <div class="lower-box">
                                    <h4>AC Room</h4>
                                    <div class="pricing clearfix">
                                        <div class="price">From <span>₹54000</span> <br>avg price per year</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="text">For Two Person Room</div>
                                    <div class="link-box"><a href="ac-two-person.html" class="theme-btn btn-style-three"><span class="btn-title">View Details</span></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="room-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="ac-four-person.html"><img src="images/resource/featured-image-8.jpg" alt="" title=""></a></figure>
                                </div>
                                <div class="lower-box">
                                    <h4>AC Room</h4>
                                    <div class="pricing clearfix">
                                        <div class="price">From <span>₹48000</span> <br>avg price per year</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="text">For Four Person Room</div>
                                    <div class="link-box"><a href="ac-four-person.html" class="theme-btn btn-style-three"><span class="btn-title">View Details</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="nonac-one-person.html"><img src="images/resource/featured-image-9.jpg" alt="" title=""></a></figure>
                                </div>
                                <div class="lower-box">
                                    <h4>Non-AC Room</h4>
                                    <div class="pricing clearfix">
                                        <div class="price">From <span>₹36000</span> <br>avg price per year</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="text">For One Person Room</div>
                                    <div class="link-box"><a href="nonac-one-person.html" class="theme-btn btn-style-three"><span class="btn-title">View Details</span></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="room-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="nonac-two-person.html"><img src="images/resource/featured-image-10.jpg" alt="" title=""></a></figure>
                                </div>
                                <div class="lower-box">
                                    <h4>Non-AC Room</h4>
                                    <div class="pricing clearfix">
                                        <div class="price">From <span>₹30000</span> <br>avg price per year</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="text">For Two Person Room</div>
                                    <div class="link-box"><a href="nonac-two-person.html" class="theme-btn btn-style-three"><span class="btn-title">View Details</span></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="room-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="nonac-four-person.html"><img src="images/resource/featured-image-8.jpg" alt="" title=""></a></figure>
                                </div>
                                <div class="lower-box">
                                    <h4>Non-AC Room</h4>
                                    <div class="pricing clearfix">
                                        <div class="price">From <span>₹24000</span> <br>avg price per year</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="text">For Four Person Room</div>
                                    <div class="link-box"><a href="nonac-four-person.html" class="theme-btn btn-style-three"><span class="btn-title">View Details</span></a></div>
                                </div>
                            </div>
                        </div>
                     
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Why Section-->
    <section class="why-us-section">
        <span class="dotted-pattern dotted-pattern-6"></span>
        <span class="tri-pattern tri-pattern-5"></span>
        <div class="circles">
            <div class="c-1"></div>
            <div class="c-2"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Why Choose All In One</h2>
                <div class="lower-text">Experience the real hustle and bustle of All In One Hostel. Our hostel is famous for its relaxed atmosphere in true Amsterdam style.</div>
            </div>
            <div class="row clearfix">
                
				<!--Feature Box-->
                <div class="feature-box col-xl-4 col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<a href="mess2.html" style="color: black">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="circle"></span>
							<img src="images/food.png" alt="" title="">
                        </div>
                        <h4>Mess</h4>
                        <div class="text">Provide hygienic food facilities to ensure the health and and wellbeing of both students and staff.</div>
						<br>
						<br>
					</div>
					</a>
                </div>

                <!--Feature Box-->
                <div class="feature-box col-xl-4 col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="circle"></span>
                            <span class="flaticon-modem"></span>
                        </div>
                        <h4>Free Wi-Fi</h4>
                        <div class="text">Hostel is having high speed iternet facility.The Hostel has 24✕7 Wi-Fi facility in the hostel campus for the student ans staff to avail internet connection at any place in the hostel and staff houses.</div>
                    </div>
                </div>

                <!--Feature Box-->
                <div class="feature-box col-xl-4 col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
					<a href="library.html" style="color: black">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="circle"></span>
                            <img src="images/library.png" alt="" title="">
                        </div>
                        <h4>Library</h4>
                        <div class="text">Provide a good environment and both reading and working room facilities which motivates the students to study.</div>
						<br>
						<br>
                    </div>
					</a>
                </div>

            </div>
        </div>
    </section>

    <!--News Section-->
    <section class="news-section-two">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Stay Update with <br>All In One</h2>
                <div class="lower-text">Experience the real hustle and bustle of All In One Hostel. Our hostel is famous for its relaxed atmosphere in true Amsterdam style.</div>
            </div>
        </div>
    </section>

</div>

<!--End pagewrapper--><!--Scroll to top--><div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>

	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/scrollbar.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/custom-script.js"></script>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	<script>

	window.onload = function(){

		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		});

		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>

</body>

</html>
