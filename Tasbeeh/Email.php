<?php 

if(isset($_POST['submit'])){
$EmailTo = "shoby42@hotmail.com";
$EmailCC = "";
$EmailFrom = "admin@tasbeeh.dx.am";
$EmailSubject = $_POST['subject'];
//$EmailMessage = "<html>Test email</html>";
$name = $_POST['name'];
$message = $name . " " . " wrote the following:" . "\r\n\r\n" . $_POST['message'];

 $EmailMessage = $message;
 
 //echo $EmailMessage;
 
 SendHtmlEmail($EmailTo, $EmailCC, $EmailFrom, $EmailSubject, $EmailMessage);
  

}


	function SendHtmlEmail($to, $cc , $from, $subject, $message)
	{
		
		//$to = "shoaib@wipath.com.au";
		//$subject = "Test email";
		//$message = "This is a test email";
		//$from = "wipathorders@wipath.dx.am";  
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Additional headers
		//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
		$headers .= 'From:' . $from . "\r\n";
		$headers .= 'Cc:' . $cc . "\r\n";
		//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";


		if(!filter_var($from, FILTER_VALIDATE_EMAIL)){
			die('Invalid email address.');	
		}
		
		if (mail($to,$subject,$message,$headers)){
			// Success
			echo "Thank you for contacting us" . $first_name . ", we will contact you shortly.";
		}
		else{
			// Error
			echo 'Error Sending Email';
		}

	}
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Daily Tasbeeh</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!--Owl Carousel CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <!--Magnific PopUp Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!--Icofont CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!--Animate CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!--Bootsnav CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootsnav.css">
    <!--Main CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/reward.css">
    <!--Responsive CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!--Modanizr JS-->
    <script src="assets/js/modernizr.custom.js"></script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body style="background: linear-gradient(-45deg, rgb(91, 37, 95) 0%, rgb(4, 62, 154) 100%);">
    <!--Start Preloader-->
    <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--End Preloader-->
    <!--Start Body Wrap-->
    <div id="body-wrap">
        <!--Start Header-->
        <header id="header">
            <nav class="navbar navbar-default bootsnav" data-spy="affix" data-offset-top="10">
                <div class="container">
                    <!-- Start Atribute Navigation -->
                    <!-- End Atribute Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="icofont icofont-navigation-menu"></i> </button>
                        <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" class="logo" alt=""></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            <li><a href="index.html"><i class="icofont icofont-home"></i> Home</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
            <div class="clearfix"></div>

            <div class="clearfix"></div>
        </header>
        <!--End Header-->
        <!--Start Banner Section-->
        <section id="banner">
            <!--Start Container-->
            <div class="container" style="padding-bottom: 100px;">
                
            </div>
        </section>
        <!--End Banner Section-->
        <!--Start Benefits Section-->










        <!--Start Footer-->
        <footer id="footer">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Footer Social-->
                    <div class="col-sm-4">
                        <div class="footer-social text-left wow fadeIn" data-wow-delay="0.1s">
                            <ul>
                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Footer Social-->
                    <!--Start Copyright Text-->
                    <div class="col-sm-8">
                        <div class="copyright-text text-right wow fadeIn" data-wow-delay="0.2s">
                            <p class="color-white">&copy; 2018 All Rights Reserved By <a class="color-base" href="themeforest.net/user/rootpointer">Tasbeeh</a></p>
                        </div>
                    </div>
                    <!--End Copyright Text-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
            <!--Start ClickToTop-->
            <div class="click-to-top"> <a class="gradient-bg" href="#header"><i class="icofont icofont-simple-up"></i></a> </div>
            <!--End ClickToTop-->
        </footer>
        <!--End Footer-->
    </div>
    <!--End Body Wrap-->
    <!--jQuery JS-->
    <script src="assets/js/jquery.min.js"></script>
    <!--Bootstrap JS-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--Magnic PopUp JS-->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!--Owl Carousel JS-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--Wow JS-->
    <script src="assets/js/wow.min.js"></script>
    <!--Bootsnavs JS-->
    <script src="assets/js/bootsnav.js"></script>
    <!--Contact Form JS-->
    <!--Main-->
    <script src="assets/js/custom.js"></script>
</body>

</html>






