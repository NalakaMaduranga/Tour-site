<?php
if(isset($_POST['btnSend'])){
	$err="";
	$name=$_POST['txtName'];
	$email=$_POST['txtEmail'];
	$phone=$_POST['txtPhone'];	
	$guestMessage=$_POST['txtMessage'];
							 
	$message=" Name  : ".$name ."\n";
	$message.=" Email Address : ".$email."\n";
	$message.=" Phone Number : ".$phone."\n";
	$message.=" Message : ".$guestMessage."\n";
				   
	$mailTo="tonytours111@gmail.com";
	$subject="Website Enquiry From ".$name;
	$headers = 'From: Website Enquiry<info@tonytours.com>'."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();
					
	mail($mailTo,$subject,$message, $headers);
						   
	$err="Your message has been sent successfully.";
	}
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tony Tours - Contact Us</title>
    
    <link rel="icon" type="image/png" href="images/tony-favi.png" sizes="32x32">
    
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tony Tours, Contact, Contact Tony Tours" />
    <meta name="author" content="Smart Eworks">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Style-sheets -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- // Style-sheets -->
	<!-- Online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,200,400,500,600" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--// Online-fonts -->

</head>

<body>
	<!--Header-->
	<div class="header inn-banner" id="home">
		<!--top-bar-w3-agile-->
		<div class="top-bar-w3-agile">
			<div class="container">
			<div id="google_translate_element" align="right"></div>
				<script type="text/javascript">
				function googleTranslateElementInit() {
				new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
				}
				</script>
				<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				<div class="header-top-agileits">
					<div class="agile_forms">
						<p><span class="fa fa-map-marker" aria-hidden="true"></span>Tony Sri Lanka Tours, Prabath waturegama , Ahungalla, Sri Lanka.</p>
					</div>
					<ul class="top-right-info-w3ls">
						<li><a href="https://www.facebook.com/ahungallatours" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/tony_srilanka_tours/?fbclid=IwAR0jpUsn2jtRSwd1sRmTq8jeDQZNCPHY23SVtithHTZl-ve4E-m7w05Cblk" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.tripadvisor.co.uk%2F12315019%3Fm%3D19905%26fbclid%3DIwAR3M4ggzHQ0aGbJh9wB_ZVeWya-Yfs2nHo08ZkC4aMGpYJMYCsMhqyrbrTw&h=AT3Hg8pp56j8wdjBVcBc0--y9jfyk8X4Afe9YHPvnb6a_mNlgrOqejUtxk-WAQyNNwof-VjxjhO2N-Q_Fvw9p2Za_rWDigJ3tsq1YIU3H-OlPoqMfJwnDq4SE0PRJBkM8mTg" target="_blank"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="header-nav">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							<h1><a class="navbar-brand" href="index.php"><img src="images/logo.png"></a></h1>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav class="cl-effect-15" id="cl-effect-15">
								<ul class="menu">
									<li><a href="index.php" data-hover="Home">Home</a></li>
									<!--<li><a href="about.php" data-hover="About Us">About Us</a></li>-->
                                    <li class="dropdown menu__item">
                                    	<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" data-hover="Day Tours" role="button" aria-haspopup="true" aria-expanded="false">Day Tours<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="galle.php">Galle Day Tours</a></li>
                                            <li><a href="kandy.php">Kandy Day Tours</a></li>
                                            <li><a href="udawalawa.php">Udawalawe National Park Day Tour</a></li>
                                            <li><a href="yala.php">Yala National Park Day Tour</a></li>
                                            <li><a href="sigiriya&dambulla.php">Sigiriya & Dambulla Day Tour</a></li>
                                            <li><a href="mirissa.php">Whale Watching Day Tour In Mirissa</a></li>
                                            <li><a href="pinnawala.php">Pinnawala Elephant Orphanage Day Tour</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="round-tours.php" data-hover="Round Tours">Round Tours</a></li>
                                    <li><a href="tailor-made-tour.php" data-hover="Tailor Made Tours">Tailor Made Tours</a></li>
                                    <li class="dropdown menu__item">
                                    	<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" data-hover="Sri Lanka" role="button" aria-haspopup="true" aria-expanded="false">Sri Lanka<span class="caret"></span></a>
                                    	<ul class="dropdown-menu">
                                        	<li><a href="about-srilanka.php">Sri Lanka</a></li>
                                            <li><a href="best-activities.php">Activities</a></li>
                                        </ul>  
                                    </li>
                                    <li><a href="our-story.php" data-hover="Our Story">Our Story</a></li>
									<li><a href="contactUs.php" data-hover="Contact Us" class="active">Contact Us</a></li>
								</ul>
							</nav>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!--//top-bar-w3-agile-->
	</div>
	<!--//Header-->
</div>


	<!--contact-->
	<div class="contact-w3-agileits">
		<div class="container">
			<h3 class="tittle">Contact Us</h3>
			<div class="form">
             <span class="text-success"><?php echo $err;?></span>
				<form action="#" method="post">
					<div class="styled-input">
						<input type="text" name="txtName" id="txtName" placeholder="Name" required="">
					</div>
					<div class="styled-input">
						<input type="email" name="txtEmail" id="txtEmail" placeholder="Email" required="">
					</div>
					<div class="styled-input">
						<input type="text" name="txtPhone" id="txtPhone" placeholder="Phone" required="">
					</div>
					<div class="clearfix"> </div>
					<textarea name="txtMessage" id="txtMessage" placeholder="Message..." required="" ></textarea>
					<input type="submit" value="Submit" name="btnSend">
				</form>
			</div>
			<!--Addresses -->
			<div class="addresses-w3ls">
				<div class="col-md-4 col-sm-4 loc-left-w3ls">
					<h4>Address</h4>
					<p>Tony Sri Lanka Tours,</p>
					<p>Prabath waturegama ,</p>
					<p>Ahungalla,</p>
					<p>Sri Lanka.</p>
				</div>
                 
  
				<div class="col-md-4 col-sm-4 loc-left-w3ls">
					<h4>Email</h4>
					<p><a href="mailto:tonytours111@gmail.com">tonytours111@gmail.com</a></p>
				</div>
                
				<div class="col-md-4 col-sm-4 loc-left-w3ls">
					<h4>Phone</h4>
					<p>+94 771873421</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--//Addresses -->
		</div>
	</div>
    
    <div class="map-w3-agileits">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.99038413449!2d80.0204702!3d6.3619929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23deffa1b2163c6e!2sTony+Sri+Lanka+Tours!5e0!3m2!1sen!2slk!4v1542171984524" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!--//contact -->
	<!-- Footer -->
	<?php include 'footer.php' ?>
	<!--// Copy-right -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>

	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

</body>

</html>