<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Setitik Film</title>

	<!-- Loading third party fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>/asset/admin/images/logos/logo.png" />
	<link href="<?php echo base_url() ?>fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	<style>
		body {
			font-family: 'Poppins';
		}
	</style>

	<!-- Loading main css file -->
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/komentar.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/responsive.css">

	<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

</head>


<body>
	<div id="site-content">
		<header class="site-header">
			<div class="container">
				<a href="home" id="branding">
					<img src=" <?php echo base_url() ?>asset/images/logo.png" alt="" class="logo">
					<div class="logo-copy">
						<h1 class="site-title">Setitik Film</h1>
						<small class="site-description">Warnai Harimu</small>
					</div>
				</a> <!-- #branding -->
				<div class="main-navigation">
					<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
					<ul class="menu">
						<li class="menu-item"><?php echo anchor('home', 'Home'); ?></li>
						<!--<li class="menu-item"><?php echo anchor('news', 'News'); ?></li>-->
						<li class="menu-item"><?php echo anchor('movie', 'Kategori FIlm'); ?></li>
						<li class="menu-item"><?php echo anchor('join', 'Theater'); ?></li>
						<li class="menu-item"><?php echo anchor('about', 'About'); ?></li>
						<div class="menu-item dropdown bg-warning">
							<a class="dropdown-toggle" data-bs-toggle="dropdown">
								<?php echo anchor('login', 'Log In'); ?>
							</a>
							<div class="dropdown-menu bg-dark">
								<li class="menu-item"><?php echo anchor('profil', 'Profil'); ?></li>
								<!--<li class="menu-item"><?php echo anchor('voucher', 'Voucher Saya'); ?></li>-->
								<li class="menu-item"><?php echo anchor('riwayat', 'Riwayat Transaksi'); ?></li>
							</div>
						</div>

					</ul> <!-- .menu -->
				</div> <!-- .main-navigation -->

				<div class="mobile-navigation"></div>
			</div>
		</header>
		<!--Konten-->
		<?php echo $konten; ?>
		<!--Konten-->



		<footer class="site-footer">
			<div class="container">
				<div class="row">
<div class="col-md-2">
						<div class="widget">
							<h3 class="widget-title">Alternative link</h3>
							<ul class="no-bullet">
								<li class="menu-item"><?php echo anchor('home', 'Home'); ?></li>
								<li class="menu-item"><?php echo anchor('movie', 'Kategori FIlm'); ?></li>
								<li class="menu-item"><?php echo anchor('join', 'Theater'); ?></li>
								<li class="menu-item"><?php echo anchor('about', 'About'); ?></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="widget">
							<h3 class="widget-title">Social Media</h3>
							<ul class="no-bullet">
								<li><a href="">Facebook</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Instagram</a></li>
								<li><a href="#">Pinterest</a></li>
							</ul>
						</div>
					</div><?php echo $this->session->flashdata("message"); ?>

					<div class="col-md-2">
						<div class="widget">
							<h3 class="widget-title">Kirim Komentar</h3>
							<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>
							<?php
							$attributes = array('autocomplete' => 'off');
							echo form_open_multipart("admin/komentar/add", $attributes);
							?>

							<input name="komentar_name" type="text" id="komentar_name" placeholder="Nama" value="<?php echo set_value("komentar_name"); ?>" required>
							<input name="email" type="text" id="email" placeholder="Email" value="<?php echo set_value("email"); ?>" required>
							<input name="pesan" type="text" id="pesan" placeholder="Pesan" value="<?php echo set_value("pesan"); ?>" required>
							<input class="btn btn-primary" type="submit" name="submit" value="simpan">
						</div>
					</div>
				</div> <!-- .row -->

				<center>
					<div class="colophon">2022 SETITIK FILM - PT ORANG DALAM. ALL RIGHTS RESERVED.</div>
				</center>
			</div> <!-- .container -->

		</footer>
	</div>
	<!-- Default snippet for navigation -->



	<script src="<?php echo base_url() ?>asset/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url() ?>asset/komentar.js"></script>
	<script src="<?php echo base_url() ?>asset/js/plugins.js"></script>
	<script src="<?php echo base_url() ?>asset/js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>