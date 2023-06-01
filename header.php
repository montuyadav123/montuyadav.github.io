<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Portfolio Website</title>
	<!---custom css link---->
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body>
	<video autoplay muted loop id="myVideo">
  <source src="img/vedio/1.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
	<div class="loader">
	<i class="loader-el"></i>
	<i class="loader-el"></i>
</div>



	<header>
		<a href="index.html" class="logo">Devlo<span class="span">pe</span>r..</a>
		<ul class="navlist">
			<li><a href="#home" class="active">Home</a></li>
			<li><a href="#about">About Me</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#portfolio">Portfolio</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>

		<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#home" class="active">Home</a>
  <a href="#about">About Me</a>
  <a href="#services">Services</a>
  <a href="#portfolio">Portfolio</a>
  <a href="#contact">Contact</a>
</div>

<span id="moblie-menu" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
		<div class="bx bx-menu" id="menu-icon"></div>
	</header>






	<section class="home" id="home">
		<div class="home-text" >
			<div class="slide">

				<span class="one">Hello</span>
				<span class="two">I'm</span>
			</div>
			<div class="name"><h1>Montu</h1></div> 
			<h3 >Website 
    			<span class="typed-text"id="career"></span>

                            <span class="cursor typing" >&nbsp;</span>
			</h3>
			<p>we Developer with 5+ years experience that keep customers <br> coming for about services make best effort.</p>
			<div class="button">
				<a href="about-me.php" class="btn">
					<button class="button-48" role="button">
						<span class="text">About Me</span>
					</button>
				</a>
			</div>
		</div>
	</section>

<!-- 
	 <p style="font-size: 25px;color:#fff !important;">

                            <strong>How can we</strong>

                            <span class="typed-text">help your comp</span>

                            <span class="cursor typing">&nbsp;</span>

                        </p> -->
