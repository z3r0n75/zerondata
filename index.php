<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Zeron Data |  <?php
$data_in = "http://ws.geeklab.com.ar/dolar/get-dolar-json.php";
$data_json = @file_get_contents($data_in);
if(strlen($data_json)>0)
{
  $data_out = json_decode($data_json,true);
 
  if(is_array($data_out))
  { 
    if(isset($data_out['libre']))  print "dolar libre: ".$data_out['libre']."\n";
    if(isset($data_out['blue'])) print "dolar blue: ".$data_out['blue']."";
  }
}
?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="estadistica, zeron, analisis, finanzas, economia, desarrollo, cuadros" />
	<meta name="author" content="z3r0n" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content="Zeron Data"/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content="http://www.zerondata.com"/>
	<meta property="og:site_name" content="zeron data"/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="Zeron Data" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="http://www.zerondata.com" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
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
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="index.php">Zeron Data</a><br>
			</h1>
			
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="index.php">Inicio</a></li>
					<!--<li><a href="work.html">Project</a></li> -->
					<li><a href="#">Estudios</a></li>
					<!--<li><a href="services.html">Servicios</a></li>-->
					<li><a href="#">Blog</a></li>
					<li><a href="contact.html">Contactos</a></li>
				</ul>
				
			</nav>
						

			<div class="colorlib-footer">
				<h5 align="center"><a>
					
					<p id="time"></p>
			
			</a>
			</h5>
			
				<p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by z3r0n</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.  </span> <span>Demo Images: <a href="http://nothingtochance.co/" target="_blank">nothingtochance.co</a></span></small></p>-->
				<ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>
			
			

		</aside>

		<div id="colorlib-main">
			<aside id="colorlib-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(images/datos.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>
							   					
DOLAR VENTA <br>
							   					<?php
$data_in = "http://ws.geeklab.com.ar/dolar/get-dolar-json.php";
$data_json = @file_get_contents($data_in);
if(strlen($data_json)>0)
{
  $data_out = json_decode($data_json,true);
 
  if(is_array($data_out))
  { 
    if(isset($data_out['libre']))  print "Libre: ".$data_out['libre']."<br>\n";
    if(isset($data_out['blue'])) print "Blue: ".$data_out['blue']."<br>\n";
  }
}
?></h1>

						   				<h2><?php
// prints something like: Wednesday the 15th
echo date("F j, Y, G:i"). "<br>\n";
?></h2>
											<!--	<p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
											</div> -->
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  <!-- 	<li style="background-image: url(images/img_bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>Interior Design Studio</h1>
												<h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
												<p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/img_bg_3.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1>The National Gallery</h1>
												<h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2>
												<p><a class="btn btn-primary btn-learn">View Project <i class="icon-arrow-right3"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li> -->
				  	</ul>
			  	</div>
			</aside>

			<div class="colorlib-about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft">
								<a href="#" class="image featured"><iframe src="graph/graph/Highcharts-4.1.5/examples/line-labels/inflacion.htm" width="100%" height="490px" scrolling="no" alt=""> </iframe></a>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">Bienvenido</span>
								<h2 class="colorlib-heading">Quienes somos</h2>
								<p>equipo de trabajo destinado a brindar informacion de forma estadistica, relevante para entender el entorno social de espacio / region  / pais</p>
								<p></p>
							</div>
							<div class="row padding">
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps active">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Somos  <br>apasionados</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Honestos <br></h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>objetivos</h3>
									</a>
								</div>
							</div>
						</div>
						<a href="#" class="image featured">
							<iframe src="graph/graph/Highcharts-4.1.5/examples/line-labels/dolar.htm" width="100%" height="400px" scrolling="no" alt=""></iframe>
						</a> 
					</div>
				</div>
			</div>
			
			<div class="colorlib-services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Que hacemos</span>
							<h2 class="colorlib-heading">Estudios de comportamientos</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									
									<a href="politica.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="colorlib-icon">
											<i class="flaticon-crane"></i>
										</div>
										<div class="colorlib-text">
											<h3>Politica</h3>
											<p>Politica</p>
										</div>
									</div>
									</a>
									
									<a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="colorlib-icon">
											<i class="flaticon-worker"></i>
										</div>
										<div class="colorlib-text">
											<h3>Economicos</h3>
											<p>Trabajando</p>
										</div>
									</div>
									</a>
									
									<a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="colorlib-icon">
											<i class="flaticon-crane"></i>
										</div>
										<div class="colorlib-text">
											<h3>Produccion</h3>
											<p>Trabajando</p>
										</div>
									</div>
									</a>
									
									
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									
									<a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="colorlib-icon">
											<i class="flaticon-sketch"></i>
										</div>
										<div class="colorlib-text">
											<h3>Consumo</h3>
											<p>Trabajando</p>
										</div>
									</div>
									</a>
									
									<a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="colorlib-icon">
											<i class="flaticon-engineering"></i>
										</div>
										<div class="colorlib-text">
											<h3>Servicios</h3>
											<p>Trabajando</p>
										</div>
									</div>
									
									</a>
									<a href="#" class="services-wrap animate-box" data-animate-effect="fadeInRight">
									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="colorlib-icon">
											<i class="flaticon-crane"></i>
										</div>
										<div class="colorlib-text">
											<h3>Educacion</h3>
											<p>Trabajando</p>
										</div>
									</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 move-bottom">
											<h3>Principales incrementos de servicios básicos<p> periodo 2015 dic - 2018 sept
										</div>
			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="fas fa-lightbulb"></i></span>
							<span class="colorlib-counter js-counter"  data-from="0" data-to="562" data-speed="100" data-refresh-interval="50"> </span><span class="colorlib-counter-label">%</span>
							<span class="colorlib-counter-label">Electicidad</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-engineer"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="223" data-speed="100" data-refresh-interval="50"> </span><span class="colorlib-counter-label">%</span>
							<span class="colorlib-counter-label">Gas</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="fas fa-tint"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="338" data-speed="100" data-refresh-interval="50"></span><span class="colorlib-counter-label">%</span>
							<span class="colorlib-counter-label">Agua</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="fas fa-bus-alt"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="250" data-speed="100" data-refresh-interval="50"></span><span class="colorlib-counter-label">%</span>
							<span class="colorlib-counter-label">Transporte</span>
						</div>
					</div>
				</div>
			</div>

	<!--		<div class="colorlib-work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">My Work</span>
							<h2 class="colorlib-heading animate-box">Recent Work</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/img-1.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 01</a></h3>
										<span>Building</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/img-2.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 02</a></h3>
										<span>House, Apartment</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/img-3.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 03</a></h3>
										<span>Dining Room</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/img-4.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 04</a></h3>
										<span>House, Building</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/img-5.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 05</a></h3>
										<span>Condo, Pad</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(images/img-6.jpg);">
								<div class="desc">
									<div class="con">
										<h3><a href="work.html">Work 06</a></h3>
										<span>Table, Chairs</span>
										<p class="icon">
											<span><a href="#"><i class="icon-share3"></i></a></span>
											<span><a href="#"><i class="icon-eye"></i> 100</a></span>
											<span><a href="#"><i class="icon-heart"></i> 49</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->

			<div class="colorlib-blog">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Notas</span>
							<h2 class="colorlib-heading">Lo mas reciente</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="#" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small>Abril 14, 2018 </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="blog.html">BlockChain en la educación</a></h3>
									<p>BlockChain</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="#" class="blog-img"><img src="images/blog-2.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small>Abril 14, 2018 </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="blog.html">Big data Electoral</a></h3>
									<p>Big Data</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="#" class="blog-img"><img src="images/blog-3.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small>Abril 14, 2018 </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
									<h3><a href="blog.html">Big data en la educación</a></h3>
									<p>Big Data</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="get-in-touch" class="colorlib-bg-color">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Get in Touch!</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="colorlib-lead"></p>
							<p><a href="contact.html" class="btn btn-primary btn-learn">Contactame!</a></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	<script type="text/javascript">
var timestamp = '<?=time();?>';
function updateTime(){
  $('#time').html(Date(timestamp));
  timestamp++;
}
$(function(){
  setInterval(updateTime, 1000);
});
</script>
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

