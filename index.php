<?php
error_reporting(E_ALL); 
ini_set('display_errors','1');
include("includes/db.php");
$status='';
 
 if(isset($_POST['name'])){
  
        //getting the text data from the fields.
		$name = preg_replace('#[^0-9a-zA-Z,.)( -]#','',$_POST['name']);
		$email = preg_replace('#[^0-9a-zA-Z,.@_)( -]#','',$_POST['email']);
		$subject = preg_replace('#[^0-9a-zA-Z,.)( -]#','',$_POST['subject']);
		$message = mysqli_real_escape_string($con,$_POST['message']);
	$query = "INSERT INTO contacts(name,email, subject,message)VALUES('$name','$email','$subject','$message')";
	 
	 $insert_contact = mysqli_query($con, $query) or die(mysqli_error($con));
 }
  
 
?>

<!DOCTYPE html>
 <html lang="zxx">

    

<head>

    	<!-- Metas -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="keywords" content="HTML5 Template Tommy onepage themeforest" />
		<meta name="description" content="Tommy - Onepage Multi-Purpose HTML5 Template" />
		<meta name="author" content="" />

		<!-- Title  -->
		<title>Donald</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" />

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">

		<!-- Plugins -->
		<link rel="stylesheet" href="css/plugins.css" />

        <!-- Core Style Css -->
        <link rel="stylesheet" href="css/style.css" />
        
        <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css1/fonts/fontello/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="js1/jquery.uniform/uniform.default.css">
    <link rel="stylesheet" type="text/css" href="js1/jquery.magnific-popup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="js1/jquery.fluidbox/fluidbox.css">
    <link rel="stylesheet" type="text/css" href="js1/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="js1/selection-sharer/selection-sharer.css">
    <link rel="stylesheet" type="text/css" href="js1/responsive-image-gallery/elastislide.css" />
    <link rel="stylesheet" type="text/css" href="css1/align.css">
    <link rel="stylesheet" type="text/css" href="css1/768.css">
    <link rel="stylesheet" type="text/css" href="css1/992.css">
    
    <!-- INITIAL SCRIPTS -->
    <script src="js1/jquery-1.11.1.min.js"></script>
    <script src="js1/jquery-migrate-1.2.1.min.js"></script>
    <script src="js1/modernizr.min.js"></script>
    <!--[if lt IE 9]>
    	<script src="js/ie.js"></script>
    <![endif]-->

    </head>

    <body class="dark-theme">

    	<!-- =====================================
    	==== Start Loading -->

    	<div class="loading">
    		<div class="text-center middle">
    			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    		</div>
    	</div>
        
    	<!-- End Loading ====
    	======================================= -->

       
    	<!-- =====================================
    	==== Start Navbar -->

		<nav class="navbar navbar-dark navbar-expand-lg">
			<div class="container">

            <!-- Logo -->
            <a class="logo" href="index.php">
                Donald          
            </a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar"><i class="fas fa-bars"></i></span>
			  </button>

			  <!-- navbar links -->
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#0" data-scroll-nav="0" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Home
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             
                    </div>
                  </li>
			      <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                  </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="2">Services</a>
			      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="3">Portfolio</a>
                  </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="4">Contact</a>
			      </li>
			    </ul>
			  </div>
			</div>
		</nav>

    	<!-- End Navbar ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Header -->

    	<header class="header valign bg-img wave wave-light" data-scroll-index="0" data-overlay-dark="2" data-background="img/slider-4.jpg" data-stellar-background-ratio="0.5">

    		<div class="container">
    			<div class="row">
    				<div class="full-width text-center caption">
    					<h4>Hello,</h4>
                        <h1 class="cd-headline clip">
                            <span class="blc">I Am </span>
                            <span class="cd-words-wrapper">
                              <b class="is-visible">Donald</b>
                              <b>A Software Developer</b>
                              <b>A Web Designer</b>
                            </span>
                        </h1>

                        <div class="social">
			                <a href="https://www.facebook.com/profile.php?id=100013212763091" class="icon">
			                    <i class="fab fa-facebook-f"></i>
			                </a>
			                <a href="https://twitter.com/donaldtwice" class="icon">
			                    <i class="fab fa-twitter"></i>
			                </a>
			                <a href="https://www.linkedin.com/in/donald-okegbe-567730b2" class="icon">
			                    <i class="fab fa-linkedin-in"></i>
			                </a>
			                <a href="#0" class="icon">
			                    <i class="fab fa-instagram"></i>
			                </a>
			            </div>
    				</div>
    			</div>
    		</div>

            <div class="wave-svg-bottom">
                <svg class="curve-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2011 124.95"><path d="M2011,156.4V92.28C1552,189.23,1380,131,813,66.8S0,177.59,0,177.59H2011Z" transform="translate(0 -52.64)"/></svg>
            </div>
    	</header>

    	<!-- End Header ====
    	======================================= -->



        <!-- =====================================
        ==== Start Hero -->

        <section class="hero section-padding pt-80 pb-80" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-5">
                        <div class="hero-img">
                            <img src="img/IMG_6178.JPG" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 carousel-single">
                        <div class="content owl-carousel owl-theme">
                            <div class="item">
                                <div class="info">
                                    <div class="section-head text-left mb-30">
                                        <h4>About Me</h4>
                                    </div>
                                    <h5>I'm Donald Okegbe</h5>
                                    <h6>UI Designer & Web Developer</h6>
                                    <p>A graduate from the University of Benin with the degree B.Sc. in computer science.   I'm a programmer and a web developer. I have a strong passion for learning  because I'm a strong believer of the phrase "Knowledge is power" and it aids me in learning new things such as  new programming languages.  Currently I'm learning Python and Java. Although I started learning with PHP and MYSQL for about three years now after graduation. Even attained a certificate for it in web programming. 
               While offering the depth and breadth across this field, the course put into perspective the importance and relevance of Computer Science and the application of its fundamentals to the problems faced by the real world. It enabled me to realize that with my knowledge of Computer Science, I will have a great contribution to the society since our country begins to transfer manual system to computerize. I am much eager to adopt and know new technologies. Moreover, I feel I am responsible for making a big move in this field and working with you will give me a big chance to be one day someone who is remembered for his innovations. 
</p>
                                    <p>I think it is our duty as people sharing life in this world to make our future better because the future is not only ours. Our grandchildren should be proud of us one day when they look back and find how hard we worked to make the world a better place. </p>
                                    <a href="https://docs.google.com/document/d/1ZzSy14DTiJUUKN3kske6he5NOohzxbXbFWmDQ3au2tQ/edit#heading=h.gjdgxs" class="butn butn-bg mt-30">
                                        <span>Download C.V</span>
                                    </a>
                                    <a href="#" data-scroll-nav="4" class="butn butn-bord mt-30">
                                        <span>Hire Me</span>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="skills">
                                    <div class="section-head text-left mb-30">
                                        <h4>My Skills</h4>
                                    </div>
                                    <div class="progress-item">
                                        <div class="skills-progress">
                                            <h6>Web Design</h6>
                                            <span data-value="95%"></span>
                                        </div>
                                    </div>
                                    <div class="progress-item">
                                        <div class="skills-progress">
                                            <h6>Branding</h6>
                                            <span data-value="80%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- End Hero ====
        ======================================= -->



        <!-- =====================================
        ==== Start Services -->

        <section class="services bg-gray section-big-padding wave wave-light" data-scroll-index="2">
            <div class="container">
                <div class="row">

                    <div class="section-head col-sm-12">
                        <h4>Services</h4>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="item mb-30">
                            <div class="left">
                                <span class="icon icon-basic-book-pencil"></span>
                                <span class="num">01</span>
                            </div>
                            <div class="right">
                                <h6>Web Design</h6>
                                <p>I design super cool websites and it is a long established fact that a reader will be distracted by the readable content when looking at it's layout.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="item mb-30">
                            <div class="left">
                                <span class="icon icon-basic-pencil-ruler"></span>
                                <span class="num">02</span>
                            </div>
                            <div class="right">
                                <h6>Graphics Design</h6>
                                <p>I am also a graphic designer specializing in User interface design and development. I build clean, appealing and functional interfaces which comply with the latest web standards.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            

            <div class="wave-svg-top">
                <svg class="curve-top" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2011 124.95"><path class="cls-1" d="M0,21.19V85.31c459-96.95,631-38.73,1198,25.48S2011,0,2011,0H0Z"/></svg>
            </div>
            <div class="wave-svg-bottom">
                <svg class="curve-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2011 124.95"><path d="M2011,156.4V92.28C1552,189.23,1380,131,813,66.8S0,177.59,0,177.59H2011Z" transform="translate(0 -52.64)"/></svg>
            </div>
        </section>

        <!-- End Services ====
        ======================================= -->


        <!-- =====================================
        ==== Start Works -->

        <section class="works section-padding" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>My Works</h4>
                    </div>

                    <!-- filter links -->
                     <div class="filtering text-center col-sm-12">
                        <div class="filter">
                            <span data-filter='*' class="active">All</span>
                            <span data-filter='.web'>Design</span>
                            <span data-filter='.graphic'>Graphic</span>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    

                    <!-- gallery -->
                    <div class="gallery text-center full-width">

                        <!-- gallery item -->
                       <div class="col-lg-4 col-md-6 items graphic">
                            <div class="item-img">
                                <img src="img/portfolio/1.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Crearive Design</h6>
                                        <p>Text Description</p>
                                        <a href="img/portfolio/1.jpg" class="popimg">
                                            <span class="icon icon-basic-eye"></span>
                                        </a>
                                        <a href="#0">
                                            <span class="icon icon-basic-link"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items web">
                            <div class="item-img">
                                <img src="admin/portfolio_image/26151535956999.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Ynag</h6>
                                        <p>Young Nigerians Against Greed</p>
                                        <a href="admin/portfolio_image/26151535956999.jpg" class="popimg">
                                            <span class="icon icon-basic-eye"></span>
                                        </a>
                                        <a href="#0">
                                            <span class="icon icon-basic-link"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items web">
                            <div class="item-img">
                                <img src="admin/portfolio_image/35011535979912.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Goal</h6>
                                        <p>Live Scores</p>
                                        <a href="admin/portfolio_image/35011535979912.jpg" class="popimg">
                                            <span class="icon icon-basic-eye"></span>
                                        </a>
                                        <a href="#0">
                                            <span class="icon icon-basic-link"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                        

                        <!-- gallery item -->
                        <div class="col-lg-4 col-md-6 items web">
                            <div class="item-img">
                                <img src="admin/portfolio_image/93551535957284.jpg" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <h6>Hospital</h6>
                                        <p>ST Leo Hospital</p>
                                        <a href="admin/portfolio_image/93551535957284.jpg" class="popimg">
                                            <span class="icon icon-basic-eye"></span>
                                        </a>
                                        <a href="#0">
                                            <span class="icon icon-basic-link"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item -->
                       

                    </div>

                </div>
            </div>
        </section>

        <!-- End Works ====
        ======================================= -->


        <!-- =====================================
        ==== Start Numbers -->

        <!-- End Numbers ====
        ======================================= -->


        <!-- =====================================
        ==== Start Contact -->

       <section class="contact section-padding pb-80" data-scroll-index="4">
           <div class="container">
               <div class="row">
                   
                    <div class="section-head col-sm-12">
                        <h4>Get In Touch</h4>
                    </div>

                    <div class="col-lg-4">
                        <div class="info mb-md50">
                            <span class="icon icon-basic-smartphone"></span>
                            <div class="cont">
                                <h6>Phone : <span>+234 816 005 3307</span></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="info mb-md50">
                            <span class="icon icon-basic-mail"></span>
                            <div class="cont">
                                <h6>Email : <span>donaldo24ever@gmail.com</span></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="info">
                            <span class="icon icon-basic-geolocalize-05"></span>
                            <div class="cont">
                                <h6>Address : <span>30 Morinola Opebiyi Street Ijegun Lagos</span></h6>
                            </div>
                        </div>
                    </div>

                    <div class="offset-lg-1 col-lg-10">
                        <form class="form" method="post" action="index.php">

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name *" required data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="email *" required data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Your Message *" rows="4" required data-error="Your message is required."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="butn butn-bg"><span>Send Message</span></button>
                                    </div>

                                </div>                             
                            </div>
                        </form>
                    </div>

               </div>
           </div>
       </section>

        <!-- End Contact ====
        ======================================= -->


        <!-- =====================================
        ==== Start Footer -->

        <footer class="text-center wave wave-light pt-100">
            <div class="container">
                <div class="social">
                    <a href="#0" class="icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-behance"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

                <p>&copy;  <?php echo date("Y");?> Donald. All Rights Reserved.</p>
            </div>

            <div class="wave-svg-top">
                <svg class="curve-top" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2011 124.95"><path class="cls-1" d="M0,21.19V85.31c459-96.95,631-38.73,1198,25.48S2011,0,2011,0H0Z"/></svg>
            </div>
        </footer>

        <!-- End Footer ====
        ======================================= -->




       
        <!-- jQuery -->
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>

        <!-- popper.min -->
        <script src="js/popper.min.js"></script>

        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>

        <!-- scrollIt -->
        <script src="js/scrollIt.min.js"></script>

        <!-- animated.headline -->
        <script src="js/animated.headline.js"></script>

        <!-- jquery.waypoints.min -->
        <script src="js/jquery.waypoints.min.js"></script>

        <!-- jquery.counterup.min -->
        <script src="js/jquery.counterup.min.js"></script>

        <!-- owl carousel -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- jquery.magnific-popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>

        <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>

        <!-- isotope.pkgd.min js -->
        <script src="js/isotope.pkgd.min.js"></script>


        <!-- validator js -->
        <script src="js/validator.js"></script>

        <!-- custom scripts -->
        <script src="js/scripts.js"></script>

    </body>

</html>