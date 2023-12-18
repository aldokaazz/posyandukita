<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- SEO Meta Tags -->
	<meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
	<meta name="author" content="Inovatik">

	<!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

	<!-- Website Title -->
	<title>Pertumbuhan - Posyandu Kita</title>

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/Backend/css/tailwind.output.css' ?>" />
	<link href="<?php echo base_url() . 'assets/Frontend/css/bootstrap.css' ?>" rel="stylesheet">
	<link href="<?php echo base_url() . 'assets/Frontend/css/fontawesome-all.css' ?>" rel="stylesheet">
	<link href="<?php echo base_url() . 'assets/Frontend/css/swiper.css' ?>" rel="stylesheet">
	<link href="<?php echo base_url() . 'assets/Frontend/css/magnific-popup.css' ?>" rel="stylesheet">
	<link href="<?php echo base_url() . 'assets/Frontend/css/styles.css' ?>" rel="stylesheet">

	<!-- Favicon  -->
	<link rel="icon" href="<?php echo base_url() . 'assets/Backend/img/logo_posyandu.png' ?>">
</head>

<body data-spy="scroll" data-target=".fixed-top">

	<!-- Preloader -->
	<div class="spinner-wrapper">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!-- end of preloader -->


	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
		<div class="container">

			<!-- Image Logo -->
			<img src="<?php echo base_url() . 'assets/Frontend/images/logoposyandu.png' ?>" width="100px" alt="">
			<!-- Text Logo - Use this if you don't have a graphic logo -->
			<a class="navbar-brand logo-text page-scroll" href="index.html">Posyandu Kita</a>

			<!-- Mobile Menu Toggle Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-awesome fas fa-bars"></span>
				<span class="navbar-toggler-awesome fas fa-times"></span>
			</button>
			<!-- end of mobile menu toggle button -->

			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link page-scroll" href="<?php echo base_url() . 'index.php/Frontend' ?>">HOME <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link page-scroll" href="<?php echo base_url() . 'index.php/Frontend/cek_hasil_gizi/' . $this->session->userdata('ses_id_ortu') . '' ?>">PERTUMBUHAN</a>
					</li>
					<!--<li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url() . 'index.php/Frontend/periksa_kemampuan_motorik' ?>">PERKEMBANGAN</a>
                    </li>-->
					<li class="nav-item">
						<a class="nav-link page-scroll" href="<?php echo base_url() . 'index.php/Frontend/cek_kemampuan_motorik' ?>">PERKEMBANGAN</a>
					</li>

					<!-- Dropdown Menu -->
					<li class="nav-item dropdown">
						<a <?php foreach ($tbl_ortu as $ortu) { ?> class="nav-link dropdown-toggle page-scroll" href="<?php echo base_url() . 'index.php/Frontend/profil_view/' . $this->session->userdata('ses_id_ortu') . '' ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" <?php } ?>>WELCOME <?php echo $this->session->userdata('ses_name') ?></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo base_url() . 'index.php/Frontend/biodata' ?>"><span class="item-text">TAMBAH DATA ANAK</span></a>
							<?php foreach ($tbl_balita as $balita) { ?>
								<div class="dropdown-items-divide-hr"></div>
								<a class="dropdown-item" href="<?php echo base_url() . 'index.php/Frontend/biodata_view/' . $balita->id_balita . '' ?>"><span class="item-text">
										<?php echo $balita->nm_balita ?><br>
									</span></a>
							<?php } ?>
						</div>
					</li>
					<!-- end of dropdown menu -->

				</ul>
				<span class="nav-item">
					<a class="btn-outline-sm" href="<?php echo base_url() . 'index.php/Login/logout' ?>">LOG OUT</a>
				</span>
			</div>
		</div> <!-- end of container -->
	</nav> <!-- end of navbar -->
	<!-- end of navigation -->


	<!-- Header -->
	<header id="header" class="ex-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Pertumbuhan</h1>
				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</header> <!-- end of ex-header -->
	<!-- end of header -->


	<!-- Breadcrumbs -->
	<div class="ex-basic-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumbs">
						<a href="<?php echo base_url() . 'index.php/Frontend' ?>">Home</a><i class="fa fa-angle-double-right"></i><span>Pertumbuhan</span>
					</div> <!-- end of breadcrumbs -->
				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of ex-basic-1 -->
	<!-- end of breadcrumbs -->


	<div class="container grid px-6 mx-auto">
		<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
			Data Pertumbuhan Balita
		</h2>

		<div class="w-full overflow-hidden rounded-lg shadow-xs">
			<div class="card-body">

				<?php foreach ($tbl_balita as $balita) { ?>

					<div class="form-row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nama Balita</label>
								<input type="text" name="nm_balita" class="form-control" readonly="readonly" value="<?php echo $balita->nm_balita ?>">
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="date" name="tgl_lahir" class="form-control" readonly="readonly" value="<?php echo $balita->tgl_lahir ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Jenis Kelamin</label><br>
								<div class="form-check form-check-inline">
									<div class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" id="custom1" name="jenis_kelamin" value="Laki-Laki" <?php if ($balita->jenis_kelamin == 'Laki-Laki') echo "checked='checked'" ?>>
										<label class="custom-control-label" for="custom1">Laki-Laki</label>
									</div>&nbsp;&nbsp;

									<div class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" id="custom2" name="jenis_kelamin" value="Perempuan" <?php if ($balita->jenis_kelamin == 'Perempuan') echo "checked='checked'" ?>>
										<label class="custom-control-label" for="custom2">Perempuan</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Berat Badan Lahir</label>
								<input type="text" name="bb_lahir" class="form-control" readonly="readonly" value="<?php echo $balita->bb_lahir ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Panjang Badan Lahir</label>
								<input type="text" name="pb_lahir" class="form-control" readonly="readonly" value="<?php echo $balita->pb_lahir ?>">
							</div>
						</div>
					</div>

				<?php } ?>

			</div>

		</div>&nbsp;&nbsp;




		<div class="w-full overflow-hidden rounded-lg shadow-xs">
			<form <?php foreach ($tbl_balita as $balita) { ?> method="POST" action="<?php echo base_url() . 'index.php/Frontend/cetak_hasil_pertumbuhan/' . $balita->id_balita . '' ?>" target="_Blank" <?php } ?>>
				<div class="w-full overflow-x-auto">
					<table class="w-full whitespace-wrap">
						<thead>
							<tr class="text-sm font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
								<th class="px-4 py-3">No</th>
								<th class="px-4 py-3">Tanggal Cek Pertumbuhan</th>
								<th class="px-4 py-3">Usia (Bulan)</th>
								<th class="px-4 py-3">Berat Badan (Kg)</th>
								<th class="px-4 py-3">Status Gizi</th>
								<th class="px-4 py-3">Saran Gizi</th>
							</tr>
						</thead>
						<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
							<?php $no = 1;
							foreach ($tbl_pertumbuhan as $pertumbuhan) {
								$trainingData = ([
									[
										"usia"      => 6,
										"berat"     => 15,
										"status"    => "Lebih"
									],
									[
										"usia"      => 14,
										"berat"     => 10,
										"status"    => "Baik"
									],
									[
										"usia"      => 24,
										"berat"     => 13,
										"status"    => "Baik"
									],
									[
										"usia"      => 10,
										"berat"     => 7,
										"status"    => "Kurang"
									],
									[
										"usia"      => 18,
										"berat"     => 6.5,
										"status"    => "Buruk"
									],
									[
										"usia"      => 12,
										"berat"     => 10,
										"status"    => "Baik"
									],
									[
										"usia"      => 5,
										"berat"     => 5.5,
										"status"    => "Baik"
									],
									[
										"usia"      => 4,
										"berat"     => 6,
										"status"    => "Baik"
									],
									[
										"usia"      => 16,
										"berat"     => 12,
										"status"    => "Baik"
									],
									[
										"usia"      => 26,
										"berat"     => 17,
										"status"    => "Lebih"
									],
									[
										"usia"      => 30,
										"berat"     => 16,
										"status"    => "Baik"
									],
									[
										"usia"      => 0,
										"berat"     => 3.5,
										"status"    => "Baik"
									],
									[
										"usia"      => 8,
										"berat"     => 6,
										"status"    => "Kurang"
									],
									[
										"usia"      => 10,
										"berat"     => 6.5,
										"status"    => "Buruk"
									],
									[
										"usia"      => 6,
										"berat"     => 10,
										"status"    => "Lebih"
									],
									[
										"usia"      => 13,
										"berat"     => 15,
										"status"    => "Lebih"
									],
									[
										"usia"      => 25,
										"berat"     => 9,
										"status"    => "Kurang"
									],
									[
										"usia"      => 23,
										"berat"     => 7,
										"status"    => "Buruk"
									],
									[
										"usia"      => 30,
										"berat"     => 6,
										"status"    => "Buruk"
									],
									[
										"usia"      => 4,
										"berat"     => 4,
										"status"    => "Kurang"
									],
									[
										"usia"      => 10,
										"berat"     => 8.5,
										"status"    => "Baik"
									],
									[
										"usia"      => 6,
										"berat"     => 7,
										"status"    => "Baik"
									],
									[
										"usia"      => 6,
										"berat"     => 5,
										"status"    => "Kurang"
									],
									[
										"usia"      => 18,
										"berat"     => 10,
										"status"    => "Baik"
									],
									[
										"usia"      => 14,
										"berat"     => 8,
										"status"    => "Kurang"
									],
								]);

								$trainingData = json_decode(json_encode($trainingData), FALSE);

								if (function_exists('hitungJarak') == FALSE) {
									function hitungJarak($usiaTraining, $beratTraining, $usia, $bb)
									{ // fungsi hitung jarak
										$pangkat_usia = pow(($usiaTraining - $usia), 2);
										$pangkat_berat = pow(($beratTraining - $bb), 2);
										$jum_pangkat = $pangkat_usia + $pangkat_berat;
										$akar_pangkat = sqrt($jum_pangkat);
										$hasil = number_format($akar_pangkat, 8, ",", ".");

										return $hasil;
									}
								}

							?>

								<?php
								$arrayHasilJarak = ([]);
								$i = 0;
								foreach ($trainingData as $training) {
									$i++;
								?>

									<?php
									$hasilJarak = hitungJarak($training->usia, $training->berat, $pertumbuhan->usia, $pertumbuhan->berat_badan);
									?>

								<?php
									array_push($arrayHasilJarak, ([
										"usia"          => $training->usia,
										"berat"         => $training->berat,
										"status"        => $training->status,
										"hasil_jarak"   => $hasilJarak,
									]));
								}
								?>
								<?php
								usort($arrayHasilJarak, function ($a, $b) { // fungsi urutkan array berdasarkan data terdekat
									return (float)$a["hasil_jarak"] - (float)$b["hasil_jarak"];
								});
								$arrayHasilJarak = json_decode(json_encode($arrayHasilJarak), FALSE);
								?>
								<?php
								$i = 0;
								foreach ($arrayHasilJarak as $hasil) {
									$i++;
								?>

								<?php
								}
								?>

								<?php
								if (function_exists('calculateMode') == FALSE) {
									function calculateMode($arr)
									{ // fungsi hitung modus
										$frequency = array_count_values($arr);
										$maxFrequency = max($frequency);
										$modes = array_keys($frequency, $maxFrequency);

										return $modes[0];
									}
								}
								?>

								<?php
								$i = 0;
								$arrayHasilStatus = ([]);
								foreach ($arrayHasilJarak as $hasil) {
									$i++;

									if ($i <= 5) :
								?>

								<?php
										array_push($arrayHasilStatus, $hasil->status);

									endif;
								}
								?>

								<?php
								$hasil = (calculateMode($arrayHasilStatus));

								if ($hasil == 'Buruk') {
									$saran = '1. Memberikan suplemen, berupa vitamin A, zat besi, dan asam folat. 2. Memberikan makanan bergizi lengkap dan seimbang sesuai kebutuhan anak. 3. Memberikan ASI eksklusif hingga usia anak 6 bulan, dilanjutkan dengan memberikan MPASI yang bergizi lengkap dan seimbang.';
								} else if ($hasil == 'Kurang') {
									$saran = '1. Memberikan suplemen, berupa vitamin A, zat besi, dan asam folat. 2. Memberikan makanan bergizi lengkap dan seimbang sesuai kebutuhan anak. 3. Memberikan ASI eksklusif hingga usia anak 6 bulan, dilanjutkan dengan memberikan MPASI yang bergizi lengkap dan seimbang.';
								} else if ($hasil == 'Lebih') {
									$saran = '1. Mengatur asupan karbohidrat, protein, lemak, vitamin dan mineral. 2. Susu diberikan 1-2 gelas per hari, dalam bentuk susu rendah lemak. 3. Memberikan makan secara teratur 3 kali sehari dengan 2 kali makanan selingan.';
								} else if ($hasil == 'Baik') {
									$saran = 'Terus jaga pola makan';
								}
								?>







								<tr class="text-gray-700 dark:text-gray-400">
									<td class="px-4 py-3">
										<div class="flex items-center text-sm">
											<!-- Avatar with inset shadow -->
											<div>
												<p class="font-semigrey"><?php echo $no++ ?></p>
											</div>
										</div>
									</td>
									<td class="px-4 py-3 text-sm">
										<?php echo $pertumbuhan->tgl_cek ?>
									</td>
									<td class="px-4 py-3 text-sm">
										<?php echo $pertumbuhan->usia ?> bulan
									</td>
									<td class="px-4 py-3 text-sm">
										<?php echo $pertumbuhan->berat_badan ?> kg
									</td>
									<td class="px-4 py-3 text-sm">
										<?= calculateMode($arrayHasilStatus) ?>
									</td>
									<td class="px-4 py-3 text-sm">
										<?php echo $saran ?>
									</td>
								</tr>

							<?php
							}
							?>
						</tbody>
					</table>

				</div>
		</div>
		<br>
		<CENTER>
			<button type="submit" class="btn-outline-reg">CETAK HASIL PERTUMBUHAN</button>
		</CENTER>
	</div>
	<br>
	<br>



	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-col first">
						<h4>Tentang PosyanduKita</h4>
						<p class="p-small">Website ini digunakan untuk membantu pemerintah dalam hal kesehatan balita dan anak serta membantu orang tua untuk memantau tumbuh kembang anaknya tanpa harus datang ke posyandu</p>
					</div>
				</div> <!-- end of col -->
				<div class="col-md-4">
					<div class="footer-col middle">
						<h4>Kerjasama</h4>
						<ul class="list-unstyled li-space-lg p-small">
							<li class="media">
								<i class="fas fa-square"></i>
								<div class="media-body">Kami bekerja sama dengan pemerintah dan juga posyandu kita</div>
							</li>
						</ul>
					</div>
				</div> <!-- end of col -->
				<div class="col-md-4">
					<div class="footer-col last">
						<h4>Hubungi Kami</h4>
						<ul class="list-unstyled li-space-lg p-small">
							<li class="media">
								<i class="fas fa-map-marker-alt"></i>
								<div class="media-body">Jl. Setia Budi, Rumbai, Pekanbaru</div>
							</li>
							<li class="media">
								<i class="fas fa-envelope"></i>
								<div class="media-body"><a class="white" href="mailto:contact@Tivo.com">posyandukita@pcr.ac.id</a> <i class="fas fa-globe"></i><a class="white" href="#your-link">www.psykt.com</a></div>
							</li>
						</ul>
					</div>
				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of footer -->
	<!-- end of footer -->


	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="p-small">Copyright © 2023 By kelompok3</a><br>
						Distributed By Politeknik Caltex Riau</a>
					</p>
				</div> <!-- end of col -->
			</div> <!-- enf of row -->
		</div> <!-- end of container -->
	</div> <!-- end of copyright -->
	<!-- end of copyright -->


	<!-- Scripts -->
	<script src="<?php echo base_url() . 'assets/Frontend/js/jquery.min.js' ?>"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
	<script src="<?php echo base_url() . 'assets/Frontend/js/popper.min.js' ?>"></script> <!-- Popper tooltip library for Bootstrap -->
	<script src="<?php echo base_url() . 'assets/Frontend/js/bootstrap.min.js' ?>"></script> <!-- Bootstrap framework -->
	<script src="<?php echo base_url() . 'assets/Frontend/js/jquery.easing.min.js' ?>"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
	<script src="<?php echo base_url() . 'assets/Frontend/js/swiper.min.js' ?>"></script> <!-- Swiper for image and text sliders -->
	<script src="<?php echo base_url() . 'assets/Frontend/js/jquery.magnific-popup.js' ?>"></script> <!-- Magnific Popup for lightboxes -->
	<script src="<?php echo base_url() . 'assets/Frontend/js/validator.min.js' ?>"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
	<script src="<?php echo base_url() . 'assets/Frontend/js/scripts.js' ?>"></script> <!-- Custom scripts -->
</body>

</html>
