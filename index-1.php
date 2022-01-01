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
	<title>Tony Tours</title>
    
    <link rel="icon" type="image/png" href="images/tony-favi.png" sizes="32x32">
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tony Tours, Tony Travels,Ahungalla Tours,Ahungalla,Tony Sri Lanka Tours,Tailor Made Tours,The ultimate soft Adventure,Sri Lanka Tour, Sri Lanka,Tony Sri Lanka Tours,A touch of enlightenment,Authentic island explorer,The ultimate soft Adventure, Why we are the best	" />
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
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css" /><!-- // calendar -->
	<!-- // Style-sheets -->
	<!-- Online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,200,400,500,600" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--// Online-fonts -->

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
						<li><a href="https://www.facebook.com/tonysrilankatours/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://www.tripadvisor.co.uk/12315019?m=19905"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>

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
                                    <li><a href="about-srilanka.php" data-hover="Sri Lanka">Sri Lanka</a></li>
                                     <li><a href="our-story.php" data-hover="Our Story">Our Story</a></li>
                                    <!--<li class="dropdown menu__item">
										<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" data-hover="Tony Tours" role="button" aria-haspopup="true" aria-expanded="false">Tony Tours<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="activities.php">Activities</a></li>
										</ul>
									</li>
									<li><a href="excursions.php" data-hover="Excursions">Excursions</a></li>
									<li class="dropdown menu__item">
										<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" data-hover="Sri Lanka" role="button" aria-haspopup="true" aria-expanded="false">Sri Lanka<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="">About </a></li>
											<li><a href="attractions.php">Attractions</a></li>
                                            <li><a href="travel-tips.php">Travel tips</a></li>
										</ul>
									</li>-->
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
									<!--<p>Lorem ipsum dolor amet, consectetur adipiscing elit.</p>-->
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
									<!--<p>Curabitur laoreet Nunc condimentum laoreet.</p>-->
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
									<!--<p>Lorem ipsum dolor amet, consectetur adipiscing elit.</p>-->
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
		<h3 class="tittle">WELCOME TO TONY TOURS</h3>
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
			<h3>Memorable themed tours with tony tours</h3>
			<p class="para-agileits">Tony Sri Lanka Tours is your gate to explore the beauty and serenity of Sri Lanka. </p>
			<p class="para-agileits">Our Family team will please you and provide you Royal Service while you sit, relax and enjoy the sun, beaches and nature of the gorgeous island.</p>
            <p class="para-agileits">You just name it & we will aim it.Tony Sri Lanka Tours will customise your trip to satisfy you with the best customer service and will guarantee you a time of your life.</p>
            <p class="para-agileits">Join us,and we promise you will have the best stories to tell when you return back home. Travel without a map, Travel with Tony Sri Lanka Tours. </p>
			
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //About -->
    
	
    
    <div>
		<div class="container-1">
			<h3 class="main-title">Handpicked Itineraries</h3>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <p class="handpickerTxt">Our team of expert travel consultants have selected a few from our wide range of themed tour itineraries that we believe will offer you an unforgettable holiday in Sri Lanka. For those who have different holiday preferences in Sri Lanka, we cater to tailor-made itineraries as per your requests. So do not hesitate to let us know if you need a special itinerary made just for you.</p>
                    
                    <div class="col-sm-4 col-sm-offset-5"><a href="our-story.php" class="blog-more-agile">View All</a></div>
                </div>
            </div>
        </div>
        
        <div id="owl-demo1">
          
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
         
        </div>
    </div>
    





    
    
    
    
    <div class="blog" id="blog">
		<div class="container">
			<h3 class="tittle pink-day">Day Tours</h3>
        </div>
        
        <div id="owl-demo3">
          
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
          <div class="item"><a href="#"><img src="images/day tours/galle-dammy.jpg" alt="Owl Image"><div class="custom_overlay"><span class="custom_overlay_inner"><h4>Title</h4></span></div></a></div>
         
        </div>
    </div>
    
    
    
    
    
    <div class="blog" id="blog">
		<div class="container">
			<h3 class="tittle">Our Achievements</h3>
        </div>
        
        <div id="owl-demo2">
          
          <div class="item"><img src="images/home/tripadvicer-logo.jpg" alt="Owl Image"></div>
          <div class="item"><img src="images/home/featured-logo-ngt.jpg" alt="Owl Image"></div>
          <div class="item"><img src="images/home/tripadvicer-logo.jpg" alt="Owl Image"></div>
          <div class="item"><img src="images/home/tripadvicer-logo.jpg" alt="Owl Image"></div>
          <div class="item"><img src="images/home/tripadvicer-logo.jpg" alt="Owl Image"></div>
          <div class="item"><img src="images/home/tripadvicer-logo.jpg" alt="Owl Image"></div>
          <div class="item"><img src="images/home/tripadvicer-logo.jpg" alt="Owl Image"></div>         
        </div>
    </div>
    
    
    
    
    
    
    
    
    <div class="home-cover">
    	<div class="container-1">
            <div class="row">
                <div class="col-sm-1 comment">
                	<div class="test-review">
						<div class="img-agile">
							<img src="images/c4.jpg" class="img-responsive" alt="" />
						</div>
						<div class="testi-right-agileits">
							<h5>Clare M<span></span></h5>
							<ul class="top-right-info-w3ls">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
						<div class="textagile">
							<p> We booked to stay at the RIU hotel in Ahungalla and were looking to organise tours before we arrived in Sri Lanka so we could plan the rest of the holiday around them. Tony’s tours were the highest rated tours for that area so I contacted Tony for more information..</p>
						</div>
					</div>
                   </div>
                    
                    
                    
                    
                <!--<div class="col-sm-1"></div>-->
                <div class="col-sm-1 comment">
                	<div class="test-review">
							<div class="img-agile">
								<img src="images/c5.jpg" class="img-responsive" alt="" />
							</div>
							<div class="testi-right-agileits">
								<h5>Chris D<span></span></h5>
								<ul class="top-right-info-w3ls">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
							<div class="textagile">
								<p> My girlfriend and myself had an amazing 2weeks guided tour in Sri Lanka.We felt welcome in every second with these guys.We told them what kind of holiday we want to have and they made it just as we told them.<br>&nbsp; </p>
							</div>
						</div>
                    </div>
                    
                    
                <!--<div class="col-sm-1"></div>-->
                <div class="col-sm-1 comment">
                	<div class="test-review">
							<div class="img-agile">
								<img src="images/c6.jpg" class="img-responsive" alt="" />
							</div>
							<div class="testi-right-agileits">
								<h5>Cortney T<span></span></h5>
								<ul class="top-right-info-w3ls">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
							<div class="textagile">
								<p> My husband and I arrived in Ahungulla to stay at the Riu and contacted Tony to set up 2 days of tours, one in Kandy and the other in Galle. Tony was very prompt in answering all my questions and providing detailed information when I contacted him via WhatsApp prior to the tours..</p>
							</div>
						</div>
                    </div>
            </div>
        </div>
    
    </div>
    
    
    
    
    
    
    <div class="blog" id="blog">
		<div class="row">
        	<div class="col-sm-6"><img src="images/home/owner.jpg" class="img-responsive"><div class="custom_overlay-2"><span class="custom_overlay_inner"><p>Tony Sri Lanka Tours is your best way to explore the beauty and serenity of Sri Lanka.Our Family team will provide you with a fantastic service,giving you the oportunity to see our wonderful island,and all its amazing sights, from beautiful beaches,to vibrant cities and nature in all its forms,incuding of course the famous elephants and turtles that are renowned the world over.</p>
            
            <p>Tony Sri Lanka Tours will customise your trip to satisfy your every wish,with a taylor made package providing the best customer service and guaranteed time of your life.</p></span></div></div>
            
            
            
            
            <div class="col-sm-6">
            	<div class="col-sm-6">
                	<h2>Sri Lanka</h2>
                    
                    <p>Sri Lanka is one of the most exotic getaways in the world. Surrounded by the azure Indian Ocean, this island paradise has contrasting landscapes, stretches of golden sandy beaches and a wealth of wildlife and culture to discover.</p>
                    
                    <p>Sri Lanka is one of the most exotic getaways in the world. Surrounded by the azure Indian Ocean, this island paradise has contrasting landscapes, stretches of golden sandy beaches and a wealth of wildlife and culture to discover.</p></div>
                
                <div class="col-sm-6"><img src="images/home/sri_lanka_map.png" class="img-responsive"></div>
            </div>
        </div>
    </div>
    
    
    
    <div class="blog" id="blog">
    	<h3 class="tittle">Have A Question</h3>
        
        <div class="container-1">
        	<div class="row">
                <div class="col-sm-1 quction talk-us">
                	<h5>Talk To Us</h5>
                    <p>+94 771873421</p>
                    <p>To Find a local destination expert</p>
                </div>
                
                <div class="col-sm-1 quction write">
                	<h5>Write To Us</h5>
                    <p>+94 771873421</p>
                    <p>To Find a local destination expert</p>
                </div>
                
                <div class="col-sm-1 quction tailor-make">
                	<h5>Tailor Make Your Tour</h5>
                    <p>+94 771873421</p>
                    <p>To Find a local destination expert</p>
                </div>
        	</div>	
        </div>
    </div>
    
    
    
    
    <!--<div class="blog" id="blog">        
        <div class="container-1">
        	<div class="row newslater-row">
            	<div class="col-sm-10">
                	<div class="newsletter-section">
                    	<h3>Join Our Newsletter</h3>
                        
                        <form method="post" action="">
                            <h5>Stay connected with us to receive exciting travel updates & news</h5>
                            
                            <div class="newsletter-form-inner">
                                <input type="email" name="newsEmail" id="newsEmail" placeholder="Your Email Address" required>
                            </div>
                        </form>
                    </div>
                </div>
               
        	</div>	
        </div>
    </div>-->
    
    
    
    
    
    
    
    
    
    
	<!--sevices-->
	<!--<div class="sevices-w3layouts" id="services">
		<div class="container">
			<h3 class="tittle white">Why we are the best</h3>
			<div class="row">
				<div class="col-md-4 sevices-grid text-right">
					<div class="icon">
						<img src="images/perfectly-planned.png">
						<h4>Perfectly planned</h4>
					</div>
					<p class="para-agileits">When we envision the perfect vacation, we see great hotels, amazing food, incredible sightseeing, and priceless memories!</p>

				</div>
				<div class="col-md-4 sevices-grid text-center">
					<div class="icon">
						<img src="images/included.png">
						<h4>Included</h4>
					</div>
					<p class="para-agileits">Everyone loves extras – until they&#39;re charged extra. So we include more visits, toss in more experiences, and include more sightseeing.</p>
				</div>
				<div class="col-md-4 sevices-grid text-left">
					<div class="icon">
						<img src="images/freedom.png">
						<h4>Freedom</h4>
					</div>
					<p class="para-agileits">Many travel operators tend to overschedule, instilling the need for a vacation after your vacation.</p>
				</div>
				<div class="col-md-6 sevices-grid text-right">
					<div class="icon">
						<img src="images/hotels.png">
						<h4>Hotels</h4>
					</div>
					<p class="para-agileits">A hotel can have the crispest sheets, the fluffiest towels, and the tastiest pillow mints, but if it&#39;s not near the sights.</p>
				</div>
				<div class="col-md-6 sevices-grid text-left">
					<div class="icon">
						<img src="images/experts.png">
						<h4>Experts</h4>
					</div>
					<p class="para-agileits">Our experts bring our destinations to life with firsthand, in-depth knowledge of their cities, towns, and neighborhoods.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>-->
	<!--//sevices-->
	<!--blog -->
	<!--<div class="blog" id="blog">
		<div class="container">
			<h3 class="tittle">Tour Best Tourist Attractions</h3>
			<div class="blog-grid-w3-agileits">
				<div class=" col-md-7 blog-img blog-img1-agileits-w3layouts">
					<a href="#" data-toggle="modal" data-target="#myModal2">
						<h6>Ahungalla</h6>
					</a>
				</div>
				<div class=" col-md-5 blog-info-w3layouts">
					<div class="inner-info-w3ls">
						<h5>Ahungalla</h5>
						<p class="para-agileits">We are based in Ahungalla which is in southern province. Ahungalla is a small coastal town located approximately 75 km south of Colombo. </p>
					</div>
					<a href="attractions.php" class="blog-more-agile">Read More</a>

				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog-grid-w3-agileits">
				<div class=" col-md-5 blog-info-w3layouts blog-mid">
					<div class="inner-info-w3ls-mid">
						<h5>Little adam's peak</h5>
						<p class="para-agileits">Ella is a cool little mountain town and tourist hot spot in the middle of Sri Lanka. We discovered that Ella a fairly easy walk with amazing views.</p>
					</div>
					<a href="attractions.php" class="blog-more-agile">Read More</a>

				</div>
				<div class=" col-md-7 blog-img blog-img2-agileits-w3layouts">
					<a href="#" data-toggle="modal" data-target="#myModal3">
						<h6>Little adam's peak</h6>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog-grid-w3-agileits">
				<div class=" col-md-7 blog-img blog-img3-agileits-w3layouts">
					<a href="#" data-toggle="modal" data-target="#myModal4">
						<h6>Udawalawa</h6>
					</a>
				</div>
				<div class=" col-md-5 blog-info-w3layouts">
					<div class="inner-info-w3ls">
						<h5>Udawalawa</h5>
						<p class="para-agileits">UDAWALAWE NATIONAL PARK is located approximately 200 km south-east of Colombo city and is a major tourism destination in Sri Lanka.</p>
					</div>
					<a href="attractions.php" class="blog-more-agile">Read More</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>-->
	<!-- //blog -->

	<!-- //blog -->

	<!-- testimonials -->
	<!--<div id="testimonials" class="testimonials">
		<div class="container">
			<h3 class="tittle">Travellers Feedback</h3>
		</div>
		<div class="test-monials">
			<div class="col-md-5 text-image-agileits-w3layouts">
                                    <script>(function(d, s, id) {
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) return;
                                  js = d.createElement(s); js.id = id;
                                  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
                                  fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>

                                    <div class="fb-page" data-href="https://www.facebook.com/tonysrilankatours/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-width="1100" data-height="415" ><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore" ><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                                
			</div>
			<div class="col-md-7 sreen-gallery-cursual">
				<div id="owl-demo" class="owl-carousel">
					<div class="item-owl">
						<div class="test-review">
							<div class="img-agile">
								<img src="images/c4.jpg" class="img-responsive" alt="" />
							</div>
							<div class="testi-right-agileits">
								<h5>Clare M<span></span></h5>
								<ul class="top-right-info-w3ls">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
							<div class="textagile">
								<p> We booked to stay at the RIU hotel in Ahungalla and were looking to organise tours before we arrived in Sri Lanka so we could plan the rest of the holiday around them. Tony’s tours were the highest rated tours for that area so I contacted Tony for more information..</p>
							</div>
						</div>
					</div>
					<div class="item-owl">
						<div class="test-review">
							<div class="img-agile">
								<img src="images/c5.jpg" class="img-responsive" alt="" />
							</div>
							<div class="testi-right-agileits">
								<h5>Chris D<span></span></h5>
								<ul class="top-right-info-w3ls">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
							<div class="textagile">
								<p> My girlfriend and myself had an amazing 2weeks guided tour in Sri Lanka.We felt welcome in every second with these guys.We told them what kind of holiday we want to have and they made it just as we told them. </p>
							</div>
						</div>
					</div>
					<div class="item-owl">
						<div class="test-review">
							<div class="img-agile">
								<img src="images/c6.jpg" class="img-responsive" alt="" />
							</div>
							<div class="testi-right-agileits">
								<h5>Cortney T<span></span></h5>
								<ul class="top-right-info-w3ls">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
							<div class="textagile">
								<p> My husband and I arrived in Ahungulla to stay at the Riu and contacted Tony to set up 2 days of tours, one in Kandy and the other in Galle. Tony was very prompt in answering all my questions and providing detailed information when I contacted him via WhatsApp prior to the tours..</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>-->
	<!--// testimonials -->
	<!-- Footer -->
	<?php include 'footer.php' ?>
	<!--// Copy-right -->
	<!-- js -->
    
   <!-- <script type='text/javascript' src='assets/js/jquery.min.js'></script>
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script>-->
<!--<script type='text/javascript' src='assets/js/vendors.js'></script>
<script type='text/javascript' src='assets/js/owl.carousel.min.js'></script>-->
    
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
	<!-- //js -->
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
		
		<!--$(document).ready(function() {
 
		  $("#owl-demo1").owlCarousel({
		 
			  autoPlay: 3000, 
		 
			  items : 3,
			  itemsDesktop : [1199,2],
			  itemsDesktopSmall : [979,2]
		 
		  });
		 
		});
		
		$(document).ready(function() {
 
		  $("#owl-demo2").owlCarousel({
		 
			  autoPlay: 4000,
		 
			  items : 4,
			  margin :10,
			  itemsDesktop : [1199,3],
			  itemsDesktopSmall : [979,3]
		 
		  });
		 
		});
		
		
		$(document).ready(function() {
 
		  $("#owl-demo3").owlCarousel({
		 
			  autoPlay: 3000, 
		 
			  items : 3,
			  itemsDesktop : [1199,2],
			  itemsDesktopSmall : [979,2]
		 
		  });
		 
		});-->
		
		
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