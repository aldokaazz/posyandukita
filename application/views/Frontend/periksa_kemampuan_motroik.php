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
  <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Periksa Kemampuan - Posyandu Kita</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/Backend/css/tailwind.output.css'?>" />
    <link href="<?php echo base_url().'assets/Frontend/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/Frontend/css/fontawesome-all.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/Frontend/css/swiper.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/Frontend/css/magnific-popup.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/Frontend/css/styles.css'?>" rel="stylesheet">
  
  <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
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
            <img src="<?php echo base_url().'assets/Frontend/images/logoposyandu.png'?>" width="100px" alt=""> 
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
                        <a class="nav-link page-scroll" href="<?php echo base_url().'index.php/Frontend'?>">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url().'index.php/Frontend/hasil_status_gizi'?>">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#details">PERKEMBANGAN</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="index.html#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">WELCOME <?php echo $this->session->userdata('ses_name')?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="article-details.html"><span class="item-text">ARTICLE DETAILS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->
                    
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="<?php echo base_url().'index.php/Login/logout'?>">LOG OUT</a>
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
                        <a href="<?php echo base_url().'index.php/Frontend'?>">Home</a><i class="fa fa-angle-double-right"></i><span>Pertumbuhan</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Data Kemampuan Motorik Balita
            </h2>
            
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >

              <form method="POST" action="" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Usia</label>
                                <select name="usia" class="form-control">
                                    <option>~Pilih Usia</option>
                                    <?php foreach ($tbl_kemampuan_motorik as $kemampuan_motorik) { ?>
                                    <option value="<?php echo $kemampuan_motorik->id_kemampuan_motorik ?>"><?php echo $kemampuan_motorik->usia ?></option>    

                                    <?php } ?>
                                </select>
                            </div>
                            <center>
                                <div class="form-group mt-4 mb-0">
                                <input type="submit" name="proses" class="btn btn-primary" value="Open Kemampuan Motorik">
                                 </div>
                            </center>
                        </div>
                        
                        <label>
                            <?php foreach ($tbl_kemampuan_motorik as $kemampuan_motorik) { ?>
                            <input type='checkbox' name="kemampuan_motorik" value="<?php echo $kemampuan_motorik->id_kemampuan_motorik ?>">
                            <?php echo $kemampuan_motorik->kemampuan_motorik ?>

                            <?php } ?>
                        </label>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Kemampuan Motorik</label>
                                <select name="kemampuan_motorik" class="form-control">
                                    <option>~Pilih Kemampuan Motorik</option>
                                    <?php foreach ($tbl_kemampuan_motorik as $kemampuan_motorik) { ?>
                                    <option value="<?php echo $kemampuan_motorik->id_kemampuan_motorik ?>"><?php echo $kemampuan_motorik->kemampuan_motorik ?></option>    

                                    <?php } ?>
                                </select>
                            </div>
                        </div>


              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      
                      <th class="px-4 py-3">Kemampuan Motorik</th>
                      <th class="px-4 py-3">Pilih</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    <?php foreach ($tbl_kemampuan_motorik as $kemampuan_motorik) { ?>
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3 text-sm">
                        <?php echo $kemampuan_motorik->kemampuan_motorik ?>
                      </td>
                      <td class="px-4 py-3">

                        <input type="checkbox" name="id_kemampuan_motorik[]" value="<?php echo $kemampuan_motorik->id_kemampuan_motorik ?>">
                      </td>
                    </tr>
                  <?php } ?>

                    
                  </tbody>
                </table>
              </div>
            
              
            </div>
        </div>


                    <center>
                        <div class="form-group mt-4 mb-0">
                            <input type="submit" name="proses" class="btn btn-primary" value="Update Data Kemampuan Motorik">
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>
                    </center>

                </form>

            </div>
          </div>&nbsp;&nbsp;

          

            


    
    
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
							<li class="media">
								<i class="fas fa-square"></i>
								<div class="media-body">Read our <a class="white" href="terms-conditions.html">Terms & Conditions</a>, <a class="white" href="privacy-policy.html">Privacy Policy</a></div>
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
								<div class="media-body">Jl.Setia budi, Rumbai, Pekanbaru </div>
							</li>
							<li class="media">
								<i class="fas fa-envelope"></i>
								<div class="media-body"><a class="white" href="mailto:posyandukita@pcr.ac.id">posyandukita@pcr.ac.id</a> <i class="fas fa-globe"></i><a class="white" href="#your-link">www.psykt.com</a></div>
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
					<p class="p-small">Copyright © 2023 by kelompok3<br>
						Distributed By Politeknik Caltex Riau</a>
					</p>
				</div> <!-- end of col -->
			</div> <!-- enf of row -->
		</div> <!-- end of container -->
	</div> <!-- end of copyright -->
	<!-- end of copyright -->
    
      
    <!-- Scripts -->
    <script src="<?php echo base_url().'assets/Frontend/js/jquery.min.js'?>"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?php echo base_url().'assets/Frontend/js/popper.min.js'?>"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?php echo base_url().'assets/Frontend/js/bootstrap.min.js'?>"></script> <!-- Bootstrap framework -->
    <script src="<?php echo base_url().'assets/Frontend/js/jquery.easing.min.js'?>"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?php echo base_url().'assets/Frontend/js/swiper.min.js'?>"></script> <!-- Swiper for image and text sliders -->
    <script src="<?php echo base_url().'assets/Frontend/js/jquery.magnific-popup.js'?>"></script> <!-- Magnific Popup for lightboxes -->
    <script src="<?php echo base_url().'assets/Frontend/js/validator.min.js'?>"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?php echo base_url().'assets/Frontend/js/scripts.js'?>"></script> <!-- Custom scripts -->
</body>
</html>
