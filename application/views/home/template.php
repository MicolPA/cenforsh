<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome-all.min.css') ?>">

</head>
<body>
	
	<div class="container-fluid bg-blue">
		<div class="container">
			<div class="row p-1 pt-2 pb-2 pl-4 text-white display-7" >
				<div class="col-lg-3">
					<i class="fas fa-home mr-1"></i> Ave. Máximo Gomez esq. José Contrera, Plaza Royal Suite 506, frente a Utesa.
				</div>
				<div class="col-lg-2">
					<i class="fas fa-phone-alt mr-1"></i> 809-000-0000
				</div>
				<div class="col-lg-3">
					<i class="fas fa-envelope mr-1"></i> cenforsh.org.do@gmail.com
				</div>
				<div class="col-lg-4 text-center">
					
					<!-- <a href="" class="mr-4 p-1 " style="background: white"><img src="<?php echo base_url('assets/images/icon/facebook-icon.png') ?>" width='20px' alt=""></a>
					<a href="" class="mr-4 p-1 " style="background: white"><img src="<?php echo base_url('assets/images/icon/instagram-icon.png') ?>" width='20px' alt=""></a>
					<a href="" class="mr-4 p-1 " style="background: white"><img src="<?php echo base_url('assets/images/icon/twitter-icon.png') ?>" width='20px' alt=""></a> -->
					<a href="" target="_blank" class="mr-4 p-1"><img src="<?php echo base_url('assets/images/icon/facebook-icon-white.png') ?>" width='35px' alt="" style='border-radius: 5px'></a>
								<a href="https://www.instagram.com/Cenforshrd/" target="_blank" class="mr-4 p-1"><img src="<?php echo base_url('assets/images/icon/instagram-icon.png') ?>" width='35px' alt=""></a>
								<a href="https://twitter.com/CenforshRD" target="_blank" class="mr-4 p-1"><img src="<?php echo base_url('assets/images/icon/twitter-icon.png') ?>" width='35px' alt=""></a>	
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-4 text-center">
				<a href="<?php echo base_url('home') ?>"><img src="<?php echo base_url('assets/images/logo-vertical.png') ?>" width='330px' class='p-2'></a>
				<!-- <div style="float: right;">18 <br>Años</div> -->
			</div>
			<div class="col-md-9">
				
			</div>
		</div>
		<div class="">
			<div class="row">
			<!-- <div class="col-md-2 bg-light">
				<ul class="list-unstyled bg-light">
				  <li class="bg-light pt-2 pb-2"><a href="">Actividades</a></li>
				  <li class="bg-light pt-2 pb-2"><a href="">Convenios</a></li>
				  <li class="bg-light pt-2 pb-2"><a href="">Programas</a></li>
				</ul>
			</div> -->
			<div class="col-md-12 p-0">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
 					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  					</button>

					<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
					    <ul class="navbar-nav">
					      <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link" href="<?php echo base_url('home/nosotros') ?>"><?php echo strtoupper('QUIENES SOMOS') ?></a>
					      </li>
					     <!--  <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link" href="<?php //echo base_url('home/servicios') ?>"><?php //echo strtoupper('Servicios') ?></a>
					      </li> -->
					      <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link" href="<?php echo base_url('home/articulos') ?>"><?php echo strtoupper('Articulos y Publicaciones') ?></a>
					      </li>
					      <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link" href="#"><?php echo strtoupper('Actividades') ?></a>
					      </li>
					      <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link font-weight-bold" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EFTN85RYKQGQA&source=url" target="_blank"><?php echo strtoupper('Donar') ?></a>
					      </li>
					      <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link" href="<?php echo base_url('home/programas') ?>"><?php echo strtoupper('Programas') ?></a>
					      </li>
					      <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link" href="<?php echo base_url('home/eventosInternacionales') ?>"><?php echo strtoupper('Eventos Internacionales') ?></a>
					      </li>
					    </ul>
					</div>
				</nav>
				<?php $this->load->view($view);?>


				<footer class="col-md-12 bg-dark pb-5 pt-5 mt-5">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p class=" text-white" style="font-size: 24px">Nosotros</p>
								<hr class="text-white">
								<ul class="list-unstyled text-white" style="font-size: 14px">
									<li><i class="fas fa-home mr-1"></i> Dirección</li>
									<p>Ave. Máximo Gomez esq. José Contrera, Plaza Royal Suite 506, frente a Utesa.</p>
									<li><i class="fas fa-phone-alt mr-1"></i> Teléfono</li>
									<p>809-000-0000</p>
									<li><i class="fas fa-envelope mr-1"></i> Email</li>
									<p>cenforsh.org.do@gmail.com</p>
								</ul>
							</div>

							<div class="col-md-6">
								<p class=" text-white" style="font-size: 24px">Redes</p>
								<hr class="text-white">
								<!-- <a href="" class="mr-4 display-4 text-primary"><i class="fab fa-facebook-f"></i></a>
								<a href="" class="mr-4 display-4 text-white"><i class="fab fa-twitter"></i></a>
								<a href="" class="mr-4 display-4 text-danger"><i class="fab fa-instagram"></i></a> -->

								<a href="" target="_blank" class="mr-4 p-1"><img src="<?php echo base_url('assets/images/icon/facebook-icon.png') ?>" width='35px' alt=""></a>
								<a href="https://www.instagram.com/Cenforshrd/" target="_blank" class="mr-4 p-1"><img src="<?php echo base_url('assets/images/icon/instagram-icon.png') ?>" width='35px' alt=""></a>
								<a href="https://twitter.com/CenforshRD" target="_blank" class="mr-4 p-1"><img src="<?php echo base_url('assets/images/icon/twitter-icon.png') ?>" width='35px' alt=""></a>	
							</div>
						</div>
					</div>
				</footer>

			</div>
		</div>
		</div>
	</div>

	<footer>
		
	</footer>

	<!-- loading view -->
	<div class="container">
	</div>
	
	<!-- JAVASCRIPT -->
	<script src="<?php echo base_url('assets/js/jquery_3.4.0.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.mask.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/fontawesome-all.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</body>
</html>