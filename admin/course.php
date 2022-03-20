<?php

require_once "config.php";


session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$userName = htmlspecialchars($_SESSION["username"]);

// $sql = "INSERT INTO details (username, title, course_code, faculty, school)
// VALUES ('John', 'Doe', 'john@example.com', 'Doe', 'john@example.com')";

if(isset($_POST['submit']))
{    
     $username = $_POST['username'];
     $LTM = $_POST['LTM'];
     // $course_code = $_POST['course_code'];
     // $faculty = $_POST['faculty'];
     // $school = $_POST['school'];

    if ($LTM == "Latest Trends in Marketing") {
            
          $sql = "INSERT INTO details (username,title,course_code, faculty, school)
     VALUES ('$userName','Latest Trends in Marketing','TDC22PD01','Dr. Himadri Shekhar Dey','SPD')";     
    }
    elseif (condition) {
        // code...
    }

     
    
    if ($link->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $link->error;
    }   
}




?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TDCC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="SUSHANT UNIVERSITY" />
	<meta name="keywords" content="SUSHANT UNIVERSITY" />
	<meta name="author" content="SUSHANT UNIVERSITY" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php require'nav.php' ?>
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Our Course</h1>

			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Course</h2>
					<p>You can choose one of the course from any other School</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<form action="" method="post">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-1.jpg);">
						</a>
						<div class="desc">
							<h3 name="LTM" >Latest Trends in Marketing</h3>
							<p>More Emphasis on Quality, Value, and Customer Satisfaction: Today's customers place a greater weight to direct motivations (convenience, status, style, features, services and qualities) to buy product. </p>
							<span>
								<input type="submit" class="btn btn-primary btn-sm btn-course" name=submit value="Take A Course">
							</span>
						</div>
					</div>
					</form>
				</div>
				<!-- <div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">GIS and remote sensing</a></h3>
							<p>The PG Diploma programme aims to provide in-depth understanding of remote sensing, satellite image analysis, Geographic Information System and Global Navigation Satellite System (GNSS) technologies.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Urban Interiority Emerging cultural and spatial practices</a></h3>
							<p>The urban interior recently have emerged as a series of provocations and experimentations that highlight the critical understanding of the urban realm.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Street food of old delhi</a></h3>
							<p>Eat your way around Old Delhi like a local on a 4-hour evening street food tour. Explore the bustling streets on foot and cycle rickshaw, and sample popular local snacks like syrup-soaked jalebis, chole bhature.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">MSME Production Skillset</a></h3>
							<p>MSME stands for Micro, Small and Medium Enterprises. These industries or enterprises form the backbone of our economy and need assistance and protection from other big companies as they lack resources and technology.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Science of Light</a></h3>
							<p>Freedom Cole has taught Vedic astrology to beginners for many years and has developed an effective format. Each lesson in the course goes with a chapter from his book, Science of Light (SOL).Vedic Astrology.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Research Methodology</a></h3>
							<p>What is research methodology course?
								The course covers all the conceptual and methodological issues that go into successful conduction of research. That includes philosophy of science, the methodological in measurement.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Business Analytics</a></h3>
							<p>Data-driven companies continue growing at a staggerinig rate, warranting the need for skilled professionals to help them succeed by dealing with insightfuls facts and data. Blended learning (live and recorded) and kickstart your career after college.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-3.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Digital Marketing</a></h3>
							<p>Those who are interested in the field of marketing, should go for a Digital Marketing course instead of a regular Marketing degree. Most companies are now opting for digital marketing techniques.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-4.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Criminal Justice Administration</a></h3>
							<p>Criminal Justice is the field that studies formal social control. This course covers the processing of crime by agents of formal control (police, courts, and institutional corrections).</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-5.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Emerging Issues in Corporate Law</a></h3>
							<p>Corporate Law is one of the most popular law specialisations that is opted by candidates these days. It includes the rules, practices and regulations that govern the formation as well as the operation of corporate firms.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/project-6.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Intellectual Property Rights</a></h3>
							<p>What is intellectual property rights course?
								The programme consists of eight courses which deals with the various areas of IPR like Patents, Copyrights, Trademarks. The objectives of this Programme are to: acquaint the learners with the basic concepts of Intellectual Property Rights.</p>
							<span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>


	<?php require 'foot.php' ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

