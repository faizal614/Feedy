<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
    <title>Lenity - Charity & Donation HTML Template</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Onest:wght@100..900&display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Header Start -->
	<?php include"header.php"; ?>
	<!-- Header End -->

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Donation</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">donation</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Donation Start -->
    <div class="page-donation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Donation Box Start -->
                    <div class="donation-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">donate now</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Your donation</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Your donation is more than just financial support; it is a powerful act of kindness that drives meaningful change. Every contribution helps provide essential resources, support impactful programs, and empower communities in need.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Campaign Donation Form Start -->
                        <div class="donate-form campaign-donate-form">
                            <form id="donateForm" action="#" method="POST">
                                <div class="campaign-donate-value wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="form-group mb-4">
                                        <input type="text" name="text" class="form-control"  id="text" placeholder="Donate Now ..." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                    
                                    <fieldset class="donate-value-box">
                                        <div class="donate-value">
                                            <input type="radio" id="value1" name="value" value="value1" checked>
                                            <label for="value1">$ 100.00</label>
                                        </div>
                                        
                                        <div class="donate-value">
                                            <input type="radio" id="value2" name="value" value="value2">
                                            <label for="value2">$ 200.00</label>
                                        </div>
                                        
                                        <div class="donate-value">
                                            <input type="radio" id="value3" name="value" value="value3">
                                            <label for="value3">$ 300.00</label>
                                        </div>
                                        
                                        <div class="donate-value">
                                            <input type="radio" id="value4" name="value" value="value4">
                                            <label for="value4">$ 400.00</label>
                                        </div>
                                        
                                        <div class="donate-value">
                                            <input type="radio" id="value5" name="value" value="value5">
                                            <label for="value5">$ 500.00</label>
                                        </div>
                                        
                                        <div class="donate-value">
                                            <input type="radio" id="value6" name="value" value="value6">
                                            <label for="value6">$ 600.00</label>
                                        </div>
                                    </fieldset>
                                </div>
                    
                                <!-- Donation Payment Method Start -->
                                <div class="donate-payment-method">
                                    <div class="section-title">
                                        <h2 class="text-anime-style-2" data-cursor="-opaque">Select <span>payment method</span></h2>
                                    </div>
                                    <div class="donate-payment-type wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="payment-method">
                                            <input type="radio" id="test" name="payment" value="Test" checked>
                                            <label for="test">test donation</label>
                                        </div>
                                        <div class="payment-method">
                                            <input type="radio" id="Offline" name="payment" value="Offline">
                                            <label for="Offline">offline donation</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Donation Payment Method End -->
                                
                                <!-- Donar Personal Info Start -->
                                <div class="donar-personal-info">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h2 class="text-anime-style-2" data-cursor="-opaque">Personal <span>info</span></h2>
                                    </div>
                                    <!-- Section Title End -->
                
                                    <div class="row wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="fname" class="form-control" id="fname" placeholder="First name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                
                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                
                                        <div class="form-group col-md-12 mb-4">
                                            <input type="email" name ="email" class="form-control" id="email" placeholder="Enter your e-mail" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                
                                        <div class="form-group col-md-12 mb-4">
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone no." required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                
                                        <div class="form-group col-md-12 mb-5">
                                            <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Donar Personal Info End -->
                    
                                <!-- Donar Info Form Button Start -->
                                <div class="form-group-btn wow fadeInUp" data-wow-delay="1s">
                                    <button type="submit" class="btn-default">donate now</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                                <!-- Donar Info Form Button End -->
                            </form>
                        </div>
                        <!-- Campaign Donation Form End -->
                    </div>
                    <!-- Donation Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Donation End -->

    <!-- Main Footer Section Start -->
    <?php include"footer.php"; ?>
    <!-- Main Footer Section End -->

    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Isotop js file -->
	<script src="js/isotope.min.js"></script>
    <!-- Magnific js file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="js/function.js"></script>
</body>
</html>