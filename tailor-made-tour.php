<?php
if(isset($_POST['tailormadeSubmit'])){
	$title=$_POST['title'];
	$name=$_POST['fullname'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$arrivalDate=$_POST['arrival'];
	$departureDate=$_POST['departure'];	
	$adults=$_POST['adults'];
	$travelWithKids=$_POST['travel-with-kids'];
	$accommodation=$_POST['accommodation'];
	$message=$_POST['message'];
	$my_email="tonytours111@gmail.com";
	if(isset($title) && isset($name) && isset($phone) && isset($email) && isset($arrivalDate) && isset($departureDate) && isset($adults) && isset($travelWithKids) && isset($accommodation) && isset($message)){					 
		$body=" Title  : ".$title ."\n";
		$body.=" Name : ".$name."\n";
		$body.=" Mobile Phone : ".$phone."\n";
		$body.=" Email : ".$email."\n";
		$body.=" Arrival Date : ".$arrivalDate."\n";
		$body.=" Departure Date : ".$departureDate."\n";
		$body.=" Adults : ".$adults."\n";
		$body.=" Travel With Kids : ".$travelWithKids."\n";
		$body.=" Accommodation : ".$accommodation."\n";
		$body.=" Children : ".$children."\n";
		$body.=" Message : ".$message."\n"; 
		$mailTo=$my_email;
		$subject="Tailor Made Tour From ".$name;
		$headers = 'From: info@tonysrilankatour.com'."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();
						
		if(mail($mailTo,$subject,$body, $headers)){
			$suc="Your message has been sent successfully.";
		}else{
			$err="There are have some errors in server, please try gain later!!!.";
		}
	}else{
		$err="Please fill the fields to send email.";
	}
}


 ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tony Tours</title>
    
    <link rel="icon" type="image/png" href="images/tony-favi.png" sizes="32x32">
    
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tony Tours, Tony Travels,Ahungalla Tours,Ahungalla,Tony Sri Lanka Tours,Tailor Made Tours,Sri Lanka Tour, Sri Lanka,Tony Sri Lanka Tours,Best Tailor Made Tour, Tailor Made Tour in Sri Lanka, "/>
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
	<link rel="stylesheet" href="css/team.css" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    
    <link href="js/css/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />
    <link href="js/css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="js/css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css" media="all" />
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
                                    <li><a href="tailor-made-tour.php" data-hover="Tailor Made Tours" class="active">Tailor Made Tours</a></li>
                                    <li class="dropdown menu__item">
                                    	<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" data-hover="Sri Lanka" role="button" aria-haspopup="true" aria-expanded="false">Sri Lanka<span class="caret"></span></a>
                                    	<ul class="dropdown-menu">
                                        	<li><a href="about-srilanka.php">Sri Lanka</a></li>
                                            <li><a href="best-activities.php">Activities</a></li>
                                        </ul>  
                                    </li>
                                    <li><a href="our-story.php" data-hover="Our Story">Our Story</a></li>
                                    
									<li><a href="contactUs.php" data-hover="Contact Us">Contact Us</a></li>
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
	
    
    <div class="about">
		<div class="container-1">
			<h3 class="tittle">Tailor Made Tour</h3>
            
            <div class="row">
            	<div class="col-sm-10 col-sm-offset-1">                    
                    <?php
					  if(isset($err)){
						  echo'
							  <div class="alert alert-danger">'.$err.'</div>
						   ';
					  }
					  if(isset($suc)){
						  echo'
							  <div class="alert alert-success">'.$suc.'</div>
						  ';
					  }
				   ?>
                    
                    <form id="formhoundContactForm" method="post">
                    	<div class="form-row">
                        	<div class="col-md-2 mb-3"> 
                            	<select id="Title" name="title" required placeholder="Title" autofocus="">
                                	<option value="" selected="" disabled="">Title*</option>
                                    <option value="Mr">Mr.</option>
                                    <option value="Mrs">Mrs.</option>
                                    <option value="Ms">Ms.</option>
                                    <option value="Miss">Miss.</option>
                                    <option value="Dr">Dr.</option>
                                    <option value="Prof">Prof.</option> 
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3"> 
                            	<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name*" required>
                            </div>
                            
                            <div class="col-md-4 mb-3"> 
                                <input type="text" class="form-control" id="nationality" name="nationality" required placeholder="Nationality*">
                            </div>
                        </div>
                            
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="phone" name="phone" required placeholder="Telephone Number*">
                           	</div>
                            
                            <div class="col-md-6 mb-3"> 
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address*" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                        	<div class="col-md-3 mb-3"> 
                            	<input type="text" class="form-control" id="date-picker-1" name="arrival" placeholder="Arrival Date*">
                            </div>
                            
                            <div class="col-md-3 mb-3"> 
                            	<input type="text" class="form-control" id="date-picker-2" name="departure" placeholder="Departure Date*">
                            </div>
                            
                        	<div class="col-md-3 mb-3"> 
                            	<input type="number" class="form-control" id="Adults" name="adults" placeholder="Number of Adults*" required>
                            </div>
                            
                            <div class="col-md-3 mb-3" id="travelwkids"> 
                            	<select id="travel-with-kids" name="travel-with-kids" required class="form-contro">
                                	<option value="" selected="" disabled="">Travel With Kids*</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option> 
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-row">
                        	<div class="col-md-6 mb-3" id="acco-sec"> 
                            	<select id="Accommodation" name="accommodation" class="form-contro">
                                	<option value="" selected="" disabled="">Type of Accommodation</option>
                                    <option value="5 Star Hotels">5 Star Hotels</option>
                                    <option value="4 Star Hotels">4 Star Hotels</option>
                                    <option value="3 Star Hotels">3 Star Hotels</option>
                                    <option value="Luxury Boutiques">Luxury Boutiques</option>
                                    <option value="Wallet Friendly">Wallet Friendly</option> 
                                </select>
                            </div>                            
                        </div>
                        
                        <div class="form-row">
                        	<div class="col-md-12 mb-3">
                            	<textarea id="Message" class="form-contro" placeholder="Special Notes*" rows="1" name="message" required></textarea>
                            </div>
                        </div>
                        <p class="text-center"> 
                            <input type="submit" class="btn btn-primary" id="submit" name="tailormadeSubmit" value="Submit">
                        </p>
            		</form>
                </div>
            </div>
    	</div>	
    </div>
   
   
   
   
   <?php include 'footer.php' ?>
   
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
	<!-- About-Responsiveslides -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: false,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!--// About-Responsiveslides -->

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
    
    <script src="js/jquery-ui.js"></script>
    
   <script>
            $(function () {
                $("#date-picker-1").datepicker({
                    dateFormat: 'yy/mm/dd',
                    onClose: function (selectedDate) {
                        $("#date-picker-2").datepicker("option", "minDate", selectedDate);
                    }
                });

                $("#date-picker-2").datepicker({
                    dateFormat: 'yy/mm/dd',
                    onClose: function (selectedDate) {
                        $("#date-picker-1").datepicker("option", "maxDate", selectedDate);
                    }
                });
            });
        </script>

	
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script> 
</body>
</html>
