<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/logo.png') ?>">
	
	<!-- CSS -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/fontawesome-all.min.css') ?>">
 -->

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156455199-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-156455199-1');
	</script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet" type="text/css" media="all">
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
</head>
<style>
	.header{
		  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);

	}
</style>
<body>
	<div class="header" id="home">
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="<?php echo base_url('/') ?>">
							<h1 style="color:blue !important"><!-- <span class="fa fa-signal" aria-hidden="true"> --></span>CENFORSH <label style="color:black !important;text-align: left;margin-left: 5px">18 AÑOS</label></h1>
							<!-- <h1><img src="<?php //echo base_url('assets/images/logo-vertical.png') ?>" width='330px' class='p-2'></h1> -->
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url('/home/nosotros') ?>">Nosotros</a></li>
								<li><a href="<?php echo base_url('/home/') ?>">Articulos y publicaciones</a></li>
								<li><a href="<?php echo base_url('/home/programas') ?>">Programas</a></li>
								<li><a href="<?php echo base_url('/home/eventosInternacionales') ?>">Eventos Internacionales</a></li>
								<li>
						        <a class="nav-link font-weight-bold" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EFTN85RYKQGQA&source=url" target="_blank" style="background:green;color:white">Donar</a>
						      </li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	
	<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="padding:0px">
					<!-- header -->
		
					<!-- loading view -->
					<?php $this->load->view($view);?>

					<!-- footer -->
					<div class="footer_top_agileits">
						<div class="container">
							<div class="col-md-6 footer_grid">
								<h3>CENFORSH</h3>
								<p>El patrimonio del centro estará constituido por los bienes de cualquier naturaleza que el centro adquiera, titulo de cualquier forma lícita en el desarrollo de sus actividades en pro de la sociedad.
								</p>
							</div>
							<!-- <div class="col-md-4 footer_grid">
								<h3>Redes Sociales</h3>
								<ul class="footer_grid_list">
									<li><i class="fa fa-facebook-official" aria-hidden="true"></i></i>
										<a href="single.html" >Lorem ipsum neque vulputate </a>
									</li>
									<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										<a href="single.html" >Dolor amet sed quam vitae</a>
									</li>
									<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										<a href="single.html" >Lorem ipsum neque, vulputate </a>
									</li>
									<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										<a href="single.html" >Dolor amet sed quam vitae</a>
									</li>
									<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
										<a href="single.html" >Lorem ipsum neque, vulputate </a>
									</li>
								</ul>
							</div> -->
							<div class="col-md-6 footer_grid">
								<h3>Información de Contacto</h3>
								<ul class="address">
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>Ave. Máximo Gomez esq. José Contrera, Plaza Royal Suite 506, frente a Utesa.</li>
									<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:cenforsh.org.do@gmail.com">cenforsh.org.do@gmail.com</a></li>
									<li><i class="fa fa-phone" aria-hidden="true"></i>809-000-0000</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="footer_w3ls">
						<div class="container">
							<div class="footer_bottom">
								<div class="col-md-9 footer_bottom_grid">
									<div class="footer_bottom1">
										<a href="index.html">
											<h2><img src="<?= base_url('assets/images/logo.png') ?>" width='66px'> CENFORSH</h2>
										</a>
										<p style="padding-left: 76px;font-size: 10px">© CENFORSH | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
									</div>
								</div>
								<div class="col-md-3 footer_bottom_grid">
									<h6>Follow Us</h6>
									<div class="social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>

						</div>
					</div>
		<!-- //footer -->
				</div>
			</div>
		</div>
	</div>

	<footer>
		
	</footer>

	
	<!-- JAVASCRIPT -->

	<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

	<!-- <script src="<?php //echo base_url('assets/js/jquery_3.4.0.min.js') ?>"></script>
	<script src="<?php //echo base_url('assets/js/jquery.mask.min.js') ?>"></script>
	<script src="<?php //echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php //echo base_url('assets/js/sweetalert.min.js') ?>"></script>
	<script src="<?php //echo base_url('assets/js/fontawesome-all.min.js') ?>"></script>
	<script src="<?php //echo base_url('assets/js/main.js') ?>"></script> -->

</body>
</html>