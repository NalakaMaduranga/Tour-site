<?php
if(isset($_POST['btnThTsubmit'])){
	$err="";
	$name=$_POST['txtThTname'];
	$phone=$_POST['txtThTphone'];
	$email=$_POST['txtThTemail'];
	$country=$_POST['txtThTcountry'];
							 
	$message=" Name  : ".$name ."\n";
	$message=" Phone Number  : ".$phone ."\n";
	$message.=" Email Address : ".$email."\n";
	$message.=" Country : ".$country."\n";
				   
	$mailTo="tonytours111@gmail.com";
	$subject="Tour Enquiry From ".$name;
	$headers = 'From: Tour Enquiry From<info@tonytours.com>'."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();
					
	mail($mailTo,$subject,$message, $headers);
						   
	//$err="Your message has been sent successfully.";
	}
	
	
	if(isset($_POST['btnThEsubmit'])){
		$err="";
		$name=$_POST['txtThEname'];
		$phone=$_POST['txtThEphone'];
		$email=$_POST['txtThEemail'];
		$country=$_POST['txtThEcountry'];
								 
		$message=" Name  : ".$name ."\n";
		$message=" Phone Number  : ".$phone ."\n";
		$message.=" Email Address : ".$email."\n";
		$message.=" Country : ".$country."\n";
					   
		$mailTo="tonytours111@gmail.com";
		$subject="Excursion Enquiry From ".$name;
		$headers = 'From: Excursion Enquiry From<info@tonytours.com>'."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();
						
		mail($mailTo,$subject,$message, $headers);
							   
		//$err="Your message has been sent successfully.";
	}
	
	if(isset($_POST['btnThTrasubmit'])){
		$err="";
		$name=$_POST['txtThTraname'];
		$phone=$_POST['txtThTraphone'];
		$email=$_POST['txtThTraemail'];
		$country=$_POST['txtThTracountry'];
								 
		$message=" Name  : ".$name ."\n";
		$message=" Phone Number  : ".$phone ."\n";
		$message.=" Email Address : ".$email."\n";
		$message.=" Country : ".$country."\n";
					   
		$mailTo="tonytours111@gmail.com";
		$subject="Transport Enquiry From ".$name;
		$headers = 'From: Transport Enquiry From<info@tonytours.com>'."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();
						
		mail($mailTo,$subject,$message, $headers);
							   
		//$err="Your message has been sent successfully.";
	}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tony Sri Lanka Tours : Ahungalla Tours – Best Day Tours and Excursions from Ahungalla-Things to do in Ahungalla</title>
    
    <link rel="icon" type="image/png" href="images/tony-favi.png" sizes="32x32">
    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tony Tours, Tony Travels,Ahungalla Tours,Ahungalla,Tony Sri Lanka Tours,Tailor Made Tours,The ultimate soft Adventure,Sri Lanka Tour, Sri Lanka,Tony Sri Lanka Tours,A touch of enlightenment,Authentic island explorer,The ultimate soft Adventure, Why we are the best	" />
    
    <meta name="description" content="Tony Tours Ahungalla is the Best Tour guide in Ahungalla. We arrange Day Tours from Riu Ahungalla Hotel and Heritance Ahungalla Hotels Such as Galle Day Tour,Kandy Day Tour,Safari Tours(Udawalawa and Yala National parks) Kandy Day Tour. Whale Watching Tour. Sigiriya Day Tour…etc" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css" />

	<link href="//fonts.googleapis.com/css?family=Montserrat:100,200,400,500,600" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body>
	<!--Header-->
	<div class="header" id="home">
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
									<li><a href="index.php" class="active" data-hover="Home">Home</a></li>
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
									<li><a href="round-tours.php" data-hover="Things To Do">Things To Do</a></li>
                                    <li><a href="tailor-made-tour.php" data-hover="Tailor Made Tours">Tailor Made Tours</a></li>
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
        
        
		<!--Slider-->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-img-w3layouts one">
							<div class="container">
								<div class="slider-info">
									<h3>A touch of enlightenment</h3>
									<div class="readmore-w3-agileits"><a href="our-story.php" class="blog-more-agile">Know More</a></div>
								</div>
							</div>
						</div>
					</li>
                    
					<li>
						<div class="slider-img-w3layouts two">
							<div class="container">
								<div class="slider-info">
									<h3>Authentic island explorer</h3>
									<div class="readmore-w3-agileits"><a href="our-story.php" class="blog-more-agile">Know More</a></div>
								</div>
							</div>
						</div>
					</li>
                    
					<li>
						<div class="slider-img-w3layouts three">
							<div class="container">
								<div class="slider-info">
									<h3>The ultimate soft Adventure</h3>
									<div class="readmore-w3-agileits"><a href="our-story.php" class="blog-more-agile">Know More</a></div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--//Header-->

    
	<!--banner form-->
	<div id="horizontalTab">
		<ul class="resp-tabs-list">
			<li>TOURS</li>
			<li>EXCURSIONS</li>
			<li>TRANSPORT</li>
		</ul>
        
		<div class="resp-tabs-container">
			<div class="tab1">
				<form action="#" method="post">
					<div class="col-md-4 fields">
						<span>Name</span>
                        <input type="text" name="txtThTname" id="txtThTname">
					</div>
                    
					<div class="col-md-2 fields">
						<span>Phone</span>
                        <input type="text" name="txtThTphone" id="txtThTphone">
					</div>
                    
					<div class="col-md-2 fields">
						<span>Email</span>
						<input type="text" name="txtThTemail" id="txtThTemail">
					</div>
                    
					<div class="col-md-2 fields">
						<span>Country</span>
						<select class="form-control" name="txtThTcountry" id="txtThTcountry"></select>
                        <script language="javascript">
                               populateCountries("txtThTcountry", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
                          </script>
					</div>
                    
					<div class="col-md-2">
						<input type="submit" value="Submit" name="btnThTsubmit" id="btnThTsubmit">
					</div>
				</form>
				<div class="clearfix"></div>
			</div>

			<div class="tab2">
				<div class="register">
					<form action="#" method="post">
						<div class="col-md-4 fields">
                            <span>Name</span>
                            <input type="text" name="txtThEname" id="txtThEname">
						</div>
                        
						<div class="col-md-2 fields">
                            <span>Phone</span>
                            <input type="text" name="txtThEphone" id="txtThEphone">
						</div>
                        
						<div class="col-md-2 fields">
                            <span>Email</span>
                            <input type="text" name="txtThEemail" id="txtThEemail">
						</div>
                        
						<div class="col-md-2 fields">
                            <span>Country</span>
                            <select class="form-control" name="txtThEcountry" id="txtThEcountry"></select>
                            <script language="javascript">
                                   populateCountries("txtThEcountry", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
                              </script>
						</div>
						<div class="col-md-2 fields">
							<input type="submit" value="Submit" name="btnThEsubmit" id="btnThEsubmit">
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
            
			<div class="tab3">
				<div class="reset">
					<form action="#" method="post">
						<div class="col-md-4 fields">
                            <span>Name</span>
                            <input type="text" name="txtThTraname" id="txtThTraname">
						</div>
                        
						<div class="col-md-2 fields">
                            <span>Phone</span>
                            <input type="text" name="txtThTraphone" id="txtThTraphone">
						</div>
                        
						<div class="col-md-2 fields">
                            <span>Email</span>
                            <input type="text" name="txtThTraemail" id="txtThTraemail">
						</div>
                        
						<div class="col-md-2 fields">
                            <span>Country</span>
                            <select class="form-control" name="txtThTracountry" id="txtThTracountry"></select>
                            <script language="javascript">
                                   populateCountries("txtThTracountry", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
                              </script>
						</div>
						<div class="col-md-2 fields">
							<input type="submit" value="Submit" name="btnThTrasubmit" id="btnThTrasubmit">
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--//banner form-->

	<!-- About -->
	<div class="about">
    	<div class="col-sm-10 col-sm-offset-1">
			<h3 class="tittle">Tony Sri Lanka – Your Trusted Ahungalla Tour Guides</h3>
        </div>
		<div class="banner_bottom_right">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text1"></div>
					</li>
					<li>
						<div class="banner-text2"></div>
					</li>
					<li>
						<div class="banner-text3"></div>
					</li>
					<li>
						<div class="banner-text4"></div>
					</li>
				</ul>
			</div>
		</div>
        
		<div class="col-md-7 banner_bottom_left">
			<h3>Experience a tour to remember In Ahungalla Sri Lanka</h3>
			<p class="para-agileits">Explore the best sights and sounds of Ahungalla uncovering the beauty and the serenity of the area experiencing authentic Sri Lanka with Tony Sri Lanka Tours. </p>
			<p class="para-agileits">Being the No. 01 Ahungalla tour guides with over 20 years of experience we are here to deliver you an unforgettable touring experience that you will cherish forever.</p>
            <p class="para-agileits">Offering you a range of tour packages(Specially from RIU Ahungalla and Heritance Ahungalla Hotels) to choose from, we ensure you a hassle-free touring experience worth your money.</p>
         
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //About -->
    
	<!--daytours-->
	<div class="blog" id="blog">
		<div class="container">
			<h3 class="tittle pink-day">Day Tours</h3>
			<p class="handpickerTxt">We offer a range of Ahungalla day tours to show you the hidden treasures of the area in the most authentic way promising you an unforgettable holiday experience. Find the best day tours and excursions from RIU Ahungalla and Heritance Ahungalla hotels with Tony Sri Lanka.</p>
			<br>
			<h5></h5>
       
		</div>
        
        <div id="owl-demo3">
            <div class="item"><a href="galle.php"><img src="images/home/galle-day-tour.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Galle Day Tour</h4></span></div></a></div>
            <div class="item"><a href="kandy.php"><img src="images/home/kandy-day-tour.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Kandy Day Tour</h4></span></div></a></div>
            <div class="item"><a href="udawalawa.php"><img src="images/home/udawalawe-day-tour.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Udawalawe National Park Day Tour</h4></span></div></a></div>
            <div class="item"><a href="yala.php"><img src="images/home/yala-day-tours.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Yala National Park Day Tour</h4></span></div></a></div>
            <div class="item"><a href="sigiriya&dambulla.php"><img src="images/home/sigiriya-daytour.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Sigiriya & Dambulla Day Tour</h4></span></div></a></div>
            <div class="item"><a href="mirissa.php"><img src="images/home/whale-watching-day-tour.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Whale Watching Day Tour</h4></span></div></a></div>
            <div class="item"><a href="pinnawala.php"><img src="images/home/pinnawala-day-tour.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Pinnawala Day Tour</h4></span></div></a></div>
        </div>
    </div>
    
	<!--end-->

    <div class="container-1">
        <h3 class="main-title">ROUND TOUR PACAGES</h3>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <p class="handpickerTxt">Designed to showcase the best attractions and the best experiences our tours will let you explore Sri Lanka like no other. Check out some of our Round Tour Packages we’ve put together to let you experience authentic Sri Lanka. </p>
                
                <div class="col-sm-4 col-sm-offset-5"><a href="our-story.php" class="blog-more-agile">View All</a></div>
            </div>
        </div>
    </div>
    
        
    <div id="owl-demo1">
        <div class="item"><a href="facination.php"><img src="images/home/facination-round-tour.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Facination Sri Lanka</h4></span></div></a></div>
        <div class="item"><a href="experiance.php"><img src="images/home/experiance-round-tour.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Experiance Sri Lanka</h4></span></div></a></div>
        <div class="item"><a href="compct.php"><img src="images/home/compact-round-tour.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Sri Lanka Compact</h4></span></div></a></div>
        <div class="item"><a href="07days-roundTour.php"><img src="images/home/07days-round-tour.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>07 Days Round Tour</h4></span></div></a></div>
        <div class="item"><a href="06days-roundTour.php"><img src="images/home/06days-round-tour.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>06 Days Round Tour</h4></span></div></a></div>
    </div>

    
  
    
    <!--<div class="blog" id="blog">
		<div class="container">
			<h3>Things To Do</h3>
        </div>
    
    
   		<div class="incentive-slider-main invert-thing-text">
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-12">
                    	<div id="incentivesSlider" class="owl-carousel owl-loaded owl-drag">       
                        	<div class="owl-stage-outer owl-height">
                            	<div class="owl-stage">
                                	<div class="owl-item">
                                    	<a href="https://www.bluelankatours.com/spa-relaxation/" class="block-link">
                                            <div class="item">
                                                <img src="https://www.bluelankatours.com/wp-content/themes/bluelanka/assets/images/spa_relaxation.png" class="mice-ico" alt="Incentives">
                                                <h5>Spa Relaxation</h5>
                                                <p>From Ayurvedic spa treatments to modern spa therapy Sri Lanka offers wellness and healing to weary travelers from across the globe.</p>
                                            </div> 
                                        </a>                                    
                                    </div>
                                    
                                	<div class="owl-item">
                                    	<a href="https://www.bluelankatours.com/water-sports/" class="block-link">
                                        	<div class="item"> 
                                            	<img src="https://www.bluelankatours.com/wp-content/themes/bluelanka/assets/images/water_sports.png" class="mice-ico" alt="Incentives">
                                                <h5>Water Sports</h5>
                                                <p>Sri Lanka makes the perfect destination for endless water sport opportunities.</p>
                                            </div> 
                                        </a>                                    
                                    </div>
                                    
                                    <div class="owl-item">
                                    	<a href="https://www.bluelankatours.com/wildlife-and-nature/" class="block-link">
                                        	<div class="item"> 
                                            	<img src="https://www.bluelankatours.com/wp-content/themes/bluelanka/assets/images/wildlife.png" class="mice-ico" alt="Incentives">
                                                <h5>Wildlife and Nature</h5>
                                                <p>Sri Lanka’s wilderness is an exotic enchantment that has the sights and sounds of the exquisite creatures.</p>
                                            </div> 
                                        </a>                                    
                                    </div>
                                    
                                    <div class="owl-item">
                                    	<a href="https://www.bluelankatours.com/blog/best-places-visit-sri-lanka/" class="block-link">
                                        	<div class="item"> 
                                            	<img src="https://www.bluelankatours.com/wp-content/themes/bluelanka/assets/images/visit_in_srilanka.png" class="mice-ico" alt="Incentives">
                                                <h5>Best Places to Visit</h5>
                                                <p>A wide range of beautiful landscapes all in one holiday destination is what you will find in your holiday to Sri Lanka.</p>
                                            </div> 
                                        </a>                                    
                                    </div>
                                    
                                    <div class="owl-item">
                                    	<a href="https://www.bluelankatours.com/ayurveda-and-yoga/" class="block-link">
                                        	<div class="item"> 
                                            	<img src="https://www.bluelankatours.com/wp-content/themes/bluelanka/assets/images/ayurveda.png" class="mice-ico" alt="Meetings">
                                                <h5>Ayurveda</h5>
                                                <p>The ancient healing powers of Ayurveda regarded almost sacred in the East, is preserved in its original form in Sri Lanka.</p>
                                            </div> 
                                        </a>                                    
                                    </div>
                                    
                                    <div class="owl-item">
                                    	<a href="https://www.bluelankatours.com/beaches/" class="block-link">
                                        	<div class="item"> 
                                            	<img src="https://www.bluelankatours.com/wp-content/themes/bluelanka/assets/images/beaches.png" class="mice-ico" alt="Incentives">
                                                <h5>Beaches</h5>
                                                <p>Sri Lanka is home to some of the loveliest and the most surf-able beaches in Asia.</p>
                                            </div> 
                                        </a>                                    
                                    </div>
                                    
                                    <div class="owl-item">
                                    	<a href="https://www.bluelankatours.com/culture-and-heritage/" class="block-link">
                                        	<div class="item"> 
                                            	<img src="https://www.bluelankatours.com/wp-content/themes/bluelanka/assets/images/culture_heritage.png" class="mice-ico" alt="Exhibitions">
                                                <h5>Culture and Heritage</h5>
                                                <p>The island nation of Sri Lanka has a history that dates back over 2500 years.</p>
                                            </div> 
                                        </a>                                    
                                    </div>
                                 </div>
                             </div>
                             
                         	<div class="owl-nav">
                            	<button type="button" role="presentation" class="owl-prev">
                                	<img src="https://www.bluelankatours.com/wp-content/themes/bluelanka/assets/images/arrow-circle-prev.png">                                
                                </button>
                                
                                <button type="button" role="presentation" class="owl-next">
                                	<img src="https://www.bluelankatours.com/wp-content/themes/bluelanka/assets/images/arrow-circle-next.png">                                
                                </button>
                            </div>
                            
                        	<div class="owl-dots disabled"></div>
                        </div>
                    </div>
                 </div>
             </div>
        </div> 
    </div>-->
    
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 banner_bottom_left" style="background-color:#337AB7; padding-bottom:93px">
				<br>
			<h3>Why Choose us?</h3>
				</h3>
				<br>
				<p class="para-agileits">
				•	A wide selection of high-quality tours</p>
				<p class="para-agileits">
•	20 years of experience in the industry
</p>
<p class="para-agileits">
•	Family run business who strive to deliver a personalized experience
</p>
<p class="para-agileits">
•	Have won TripAdvisor Excellency Award 2019 & Travelers Choice  Award 2020
</p>
<p class="para-agileits">
•	No hidden charges
</p>
<p class="para-agileits">
•	Premium touring experience with ultimate comfort


				</p>
				</div>
				<div class="col-md-6 banner_bottom_rightnew" styLE="padding-bottom:20px">
				<h3>Tony Sri Lanka Tours –The Most trusted Ahungalla Travel Guides</h3>
				</h3>
				<br>
				<p class="para-agileits">
				We are an experienced tour operator based in Ahungalla who have made their mission to show you the best of Sri Lanka during your holiday on the island. We are a family run business who offers a range of tours(Specially from RIU Ahungalla and Heritance Ahungalla Hotels) with English speaking and German Speaking guides to fit your requirements. Whether you are looking for a day tour in Ahungalla, a round trip from Ahungalla or tailor-made tour to fit your budget and schedule, Tony Sri Lanka got you covered.
				</p>
				</div>
		</div>
	</div>
    
 
	<div class="container ">
	<h3 class="main-title">THINGS TO DO</h3>
		<div class="row">

		<div class="col-md-4">
		<div class="card bg-light mb-3" style="max-width: 18rem;">

  <div class="card-body">
   
   <img src="images/bike.png">
  </div>
</div>
				</div>
				
		<div class="col-md-4">
		<div class="card bg-light mb-3" style="max-width: 18rem;">

  <div class="card-body">
  
   <img src="images/boats.png">
  </div>
</div>
				</div>

				
		<div class="col-md-4">
		<div class="card bg-light mb-3" style="max-width: 18rem;">
 
  <div class="card-body">
  
   <img src="images/sport.png">
  </div>
</div>
				</div>
		</div>
		
				</div>
    
	<div class="blog achievements" id="blog" >
		<div class="container" >
			<h3>Our Achievements</h3>
        </div>
        
        <div id="owl-demo2">
            <div class="item"><img src="images/home/tripadvisor-excellence.png" alt="Owl Image"></div>
            <div class="item"><img src="images/home/Trustpilot-logo.png" alt="Owl Image"></div>
            <div class="item"><img src="images/home/Silver_Travel_Advisor_Square_Logo_15cm.jpg" alt="Owl Image"></div>
            <div class="item"><img src="images/home/holidayCheck.png" alt="Owl Image"></div>
        </div>
    </div>

  
    

    <div class="home-cover">
    	<div class="container-1">
            <div class="row review" id="owl-demo4">
                <div class="col-sm-1 col-md-6 comment customer-review">
                	<div class="test-review item">
						<div class="img-agile">
							<img src="images/c4.jpg" class="img-responsive" alt="" />
						</div>
						<div class="testi-right-agileits">
							<h5>ClareM -UK<span></span></h5>
							<ul class="top-right-info-w3ls">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
						<div class="textagile">
							<br>
							<h4>Fabulous tours by father and son!</h4><br>
							<p>We booked to stay at the RIU hotel in Ahungalla and were looking to organise tours before we arrived in Sri Lanka so we could plan the rest of the holiday around them. Tony’s tours were the highest rated tours for that area so I contacted Tony for more information. Tony and his son helped me plan the perfect tours for us, with prices agreed ahead of time and took my concerns for the amount of travel for our two year old daughter on board.
When I met Tony for the first tour to Kandy he put me at ease straight away. His top priority is that everyone is enjoying, and will go above and beyond to ensure your happiness. Tony was so knowledgeable about what he was showing on the tours and was happy to change plans slightly if you have a sudden whim to go and see something nearby. He will also stay with you through the whole tour and ensure you don’t get taken in by any of the overpricing for tourists!
Tony was fabulous with our daughter to the point of her wanting to be carried by him and constantly holding his hand. She told me she missed him when we arrived home!

If you want an honest, knowledgeable tour guide who will treat you like one if the family then I couldn’t recommend Tony’s tours enough.
.</p>
						</div>
					</div>
                </div>
                    
                <div class="col-sm-1 col-md-6 comment customer-review">
                	<div class="test-review item">
                        <div class="img-agile">
                            <img src="images/c5.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="testi-right-agileits">
                            <h5>Lucy-UK<span></span></h5>
                            <ul class="top-right-info-w3ls">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="textagile">
						<br>
							<h4>The most amazing tour company ever!!!!!!!</h4><br>
                            <p> I contacted Tony from the UK and he was very responsive and gave us lots of information which was fantastic. We met Tony the day after my birthday to arrange our personalised 2 day tour. He even turned up with birthday flowers for me! Such a lovely man. We done everything I had on my wish list and so much more! Safri Park, elephant orphanage, feeding elephants at the side of the road, the most beautiful waterfalls, sitting on 9 arch Bridge, climbed mini adams peak, had dinner in Ella and this was just in the first day! We then stayed at a really quirky lodge in the mountains with the view of 9 arch Bridge. The next day we done the 3 hour train journey (which he got us the best seats!) little England, even better waterfalls, tea plantation, hidden beach with the swing ( something I saw online!) fishing in the sea with the locals, temples, swimming with turtles then realised a baby one into the sea... The list goes on.
I can not recommend this company enough. By far the best thing I have done in my life and thankyou Tony's tours for the trip of a lifetime. I will continue to recommend you to anyone that goes to sri lanka it's the least I can do.
Thankyou again Tony you were amazing and very professional.
<br>&nbsp; </p>
                        </div>
                    </div>
                </div>
                    
                <div class="col-sm-1 col-md-6 comment customer-review">
                	<div class="test-review item">
                        <div class="img-agile">
                            <img src="images/c6.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="testi-right-agileits">
                            <h5>Cortney T- UAE<span></span></h5>
                            <ul class="top-right-info-w3ls">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="textagile">
						<br>
							<h4>Amazing tour guide in Sri Lanka</h4><br>
                            <p> My husband and I arrived in Ahungulla to stay at the Riu and contacted Tony to set up 2 days of tours, one in Kandy and the other in Galle. Tony was very prompt in answering all my questions and providing detailed information when I contacted him via WhatsApp prior to the tours. Both mornings of the tours Tony was prompt in his scheduled pick up (he was early both days, which we appreciated). On the way to Kandy we stopped at the elephant orphanage - which we enjoyed, a tea factory, a spice and herb garden, and Sri Lanka’s most sacred temple. The day finished off at the stunning Botanical Gardens. Tony took care of everything for us (communicating with each place we stopped, purchasing our tickets, etc.). Day 2 we toured Galle, where we got beautiful pictures of the Indian Ocean, went to the turtle sancturary, the Moonstone Mine, took a tour of the Madu river, saw the stilt fisherman and went to the fort. Another perfect day. Along the way Tony provided us with lots of information about the culture and heritage of Sri Lanka and was able to answer all of our questions! We highly recommend Tony’s Tours. It is well worth the money and an experience that you won't forget!!</p>
                        </div>
                    </div>
                </div>

				

            </div>
        </div>
    </div>
    
    
    
    <!--<div class="blog" id="blog">
		<div class="row">
        	<div class="col-sm-6 col-xs-12">
            	<img src="images/home/owner.jpg" class="img-responsive">
                <div class="custom_overlay-2"><span class="custom_overlay_inner"><p>Tony Sri Lanka Tours is your best way to explore the beauty and serenity of Sri Lanka.Our Family team will provide you with a fantastic service,giving you the oportunity to see our wonderful island,and all its amazing sights, from beautiful beaches,to vibrant cities and nature in all its forms,incuding of course the famous elephants and turtles that are renowned the world over.</p>
            
            	<p>Tony Sri Lanka Tours will customise your trip to satisfy your every wish,with a taylor made package providing the best customer service and guaranteed time of your life.</p></span></div>
            </div>
            
            
            <div class="col-sm-6 col-xs-12">
            	<div class="col-sm-6">
                	<h2>Sri Lanka</h2>
                    
                    <p>Sri Lanka is one of the most exotic getaways in the world. Surrounded by the azure Indian Ocean, this island paradise has contrasting landscapes, stretches of golden sandy beaches and a wealth of wildlife and culture to discover.</p>
                    
                    <p>Sri Lanka is one of the most exotic getaways in the world. Surrounded by the azure Indian Ocean, this island paradise has contrasting landscapes, stretches of golden sandy beaches and a wealth of wildlife and culture to discover.</p></div>
                
                <div class="col-sm-6 col-xs-12"><img src="images/home/sri_lanka_map.png" class="img-responsive"></div>
            </div>
        </div>
    </div>-->
    
    
    <div class="section section-09" style="padding-top:50px">
    	<div class="container-fluid">
        	<div class="row">
            	<div class="col-md-12 col-lg-6 left-cont invert-text">
                	<div class="inner-text">
                    	<p>Tony Sri Lanka Tours is your best way to explore the beauty and serenity of Sri Lanka.Our Family team will provide you with a fantastic service,giving you the oportunity to see our wonderful island,and all its amazing sights, from beautiful beaches,to vibrant cities and nature in all its forms,incuding of course the famous elephants and turtles that are renowned the world over.</p>
                        
                        <p>Tony Sri Lanka Tours will customise your trip to satisfy your every wish,with a taylor made package providing the best customer service and guaranteed time of your life.</p>
                        
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-6 right-cont">
                	<div class="row">
                    	<div class="col-md-6">
                        	<div class="inner-cont">
                            	<h3 class="light-blue-text">Sri Lanka</h3>
                                <p>Sri Lanka is one of the most exotic getaways in the world. Surrounded by the azure Indian Ocean, this island paradise has contrasting landscapes, stretches of golden sandy beaches and a wealth of wildlife and culture to discover.</p><p class="lanka-info">Commercial Capital: Colombo<br> Currency: Sri Lankan Rupee LKR<br> Language: Sinhala, Tamil<br> Religion: Buddhism <br> Official Name: Democratic Socialist Republic of Sri Lanka <br> Administrative Capital: Sri Jayawardenapura Kotte</p>
                                <a class="btn btn-primary" href="about-srilanka.php">Discover Sri Lanka</a>
                            </div>
                        </div>
                        
                    	<div class="col-md-6 map-img"> 
                        	<img src="images/home/sri_lanka_map.png" alt="Sri Lanka">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="blog quctions" id="blog">
    	<h3>Have A Question</h3>
        
        <div class="container-1">
        	<div class="row">
                <div class="col-sm-1 col-xs-12 quction talk-us">
                	<h5>Talk To Us</h5>
                    <p>+94 771873421</p>
                    <p>To Find a local destination expert</p>
                </div>
                
                <div class="col-sm-1 col-xs-12 quction write">
                	<h5>Write To Us</h5>
                    <p>tonytours111@gmail.com</p>
                    <p>To Find a local destination expert</p>
                </div>
                
                <a href="tailor-made-tour.php"><div class="col-sm-1 col-xs-12 quction tailor-make">
                	<h5>Tailor Make Your Tour</h5>
                    <!--<p>+94 771873421</p>-->
                    <p>customize  your tours packages</p>
                </div></a>
        	</div>	
        </div>
    </div>
    
    
    <!--<div class="section section-14">
    	<div class="container">
        	<div class="row justify-content-md-center">
            	<div class="col-md-10">
                	<div class="newsletter-section">
                    	<h3>Join Our Newsletter</h3> 
						<script>(function(){if(!window.mc4wp){window.mc4wp={listeners:[],forms:{on:function(event,callback){window.mc4wp.listeners.push({event:event,callback:callback});}}}}})();</script>
                        
                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-5067" method="post" data-id="5067" data-name="Newsletter Footer">
                        	<div class="mc4wp-form-fields">
                            	<div class="newsletter-signup">
                                	<h5>Stay connected with us to receive exciting travel updates &amp; news</h5>
                                    <div class="newsletter-form-inner"> 
                                    	<input type="email" name="EMAIL" placeholder="Your email address" required="">
                                      <p><label> <input name="AGREE_TO_TERMS" type="checkbox" value="1" required="" oninvalid="this.setCustomValidity('Please agree to our Privacy Policy')" oninput="this.setCustomValidity('')"> <a href="https://www.bluelankatours.com/cookie-policy" target="_blank" class="small">By subscribing to our newsletter you agree to receive email from us. For more information, please click here</a> </label></p>
                                        <input type="submit" value="">
                                  </div>
                                </div>
                            </div>
                            
                            <label style="display: none !important;">Leave this field empty if you're human:<input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label>
                            
                            <input type="hidden" name="_mc4wp_timestamp" value="1563958701"><input type="hidden" name="_mc4wp_form_id" value="5067"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"><div class="mc4wp-response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    
    

	<!-- Footer -->
	<?php include 'footer.php' ?>
    
    <script type="text/javascript" src="js/countries.js"></script>
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    
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
    
	<script src="js/responsiveslides.min.js"></script>
    
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 1000,
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
    
	<!--Rersponsive tabs-->
	<script src="js/easy-responsive-tabs.js"></script>
    
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- //Rersponsive tabs -->

	<!-- testimonials required-js-files-->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				lazyLoad: true,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
		
		$(document).ready(function() {
 
		  $("#owl-demo1").owlCarousel({
		 
			  autoPlay: 3000, //Set AutoPlay to 3 seconds
		 
			  items : 3,
			  itemsDesktop : [1199,2],
			  itemsDesktopSmall : [979,2]
		 
		  });
		 
		});
		
		$(document).ready(function() {
 
		  $("#owl-demo2").owlCarousel({
		 
			  autoPlay: 4000, //Set AutoPlay to 3 seconds
		 
			  items : 4,
			  margin :50,
			  itemsDesktop : [1199,3],
			  itemsDesktopSmall : [979,3]
		 
		  });
		 
		});
		
		
		$(document).ready(function() {
 
		  $("#owl-demo3").owlCarousel({
		 
			  autoPlay: 3000, //Set AutoPlay to 3 seconds
		 
			  items : 3,
			  itemsDesktop : [1199,2],
			  itemsDesktopSmall : [979,2]
		 
		  });
		 
		});
		
		$(document).ready(function() {
 
		  $("#owl-demo4").owlCarousel({
		 
			  autoPlay: 3000, //Set AutoPlay to 3 seconds
		 
			  items : 3,
			  itemsDesktop : [1199,3],
			  itemsDesktopSmall : [979,3]
		 
		  });
		 
		});
		
		
		//$(document).ready(function() {
//			$('#incentivesSlider').owlCarousel({
//				loop:true,
//				center:true,
//				autoplay:true,
//				autoHeight:true,
//				autoplayTimeout:3000,
//				autoplayHoverPause:true,
//				nav:true,
//				margin:10,
//				dots:false,
//				navText:
//						["<img src=https://www.bluelankatours.com/wp-content/themes/bluelanka/assets/images/arrow-circle-prev.png>",
//						"<img src=https://www.bluelankatours.com/wp-content/themes/bluelanka/assets/images/arrow-circle-next.png>"],
//						responsive:{0:{items:1},600:{items:2},1000:{items:3}}
//				});				
//		});
		
		
		$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1000,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 2
					}
				}]
			});
		});
	</script>
	<!--// testimonials required-js-files-->

	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->


	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3,#datepicker4,#datepicker5").datepicker();
		});
	</script>
	<!-- //Calendar -->
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
    
	
    
    

</body>

</html>