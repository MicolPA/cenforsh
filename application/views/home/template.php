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
					<i class="fas fa-home mr-1"></i> Direccion Lorem ipsum dolor sit amet.
				</div>
				<div class="col-lg-2">
					<i class="fas fa-phone-alt mr-1"></i> 809-000-0000
				</div>
				<div class="col-lg-2">
					<i class="fas fa-envelope mr-1"></i> correo@correo.com
				</div>
				<div class="col-lg-5 text-center">
					
					<!-- <a href="" class="mr-4 p-1 " style="background: white"><img src="<?php echo base_url('assets/images/icon/facebook-icon.png') ?>" width='20px' alt=""></a>
					<a href="" class="mr-4 p-1 " style="background: white"><img src="<?php echo base_url('assets/images/icon/instagram-icon.png') ?>" width='20px' alt=""></a>
					<a href="" class="mr-4 p-1 " style="background: white"><img src="<?php echo base_url('assets/images/icon/twitter-icon.png') ?>" width='20px' alt=""></a> -->
					<a href="" class="mr-4"><i class="fab fa-facebook-f"></i></a>
					<a href="" class="mr-4"><i class="fab fa-twitter"></i></a>
					<a href="" class="mr-4"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-2 text-center">
				<img src="<?php echo base_url('assets/images/logo.png') ?>" width='140px' alt="">
			</div>
			<div class="col-md-10">
				
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
					        <a class="nav-link" href="#"><?php echo strtoupper('Nosotros') ?></a>
					      </li>
					      <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link" href="#"><?php echo strtoupper('Servicios') ?></a>
					      </li>
					      <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link" href="#"><?php echo strtoupper('Articulos') ?></a>
					      </li>
					      <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link" href="#"><?php echo strtoupper('Actividades') ?></a>
					      </li>
					      <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link" href="#"><?php echo strtoupper('Donaciones') ?></a>
					      </li>
					      <li class="nav-item active mr-3 enlaces-menu">
					        <a class="nav-link" href="#"><?php echo strtoupper('Programar') ?></a>
					      </li>
					      <li class="nav-item active mr-3 dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo strtoupper('Dropdown') ?></a>
					        <div class="dropdown-menu" aria-labelledby="dropdown08">
					          <a class="dropdown-item" href="#">Nosotros</a>
					          <a class="dropdown-item" href="#">Servicios</a>
					          <a class="dropdown-item" href="#">Articulos</a>
					          <a class="dropdown-item" href="#">Actividades</a>
					          <a class="dropdown-item" href="#">Donaciones</a>
					          <a class="dropdown-item" href="#">Programar</a>
					        </div>
					      </li>
					    </ul>
					</div>
				</nav>
				<?php $this->load->view($view);?>

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