<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
  
    <!-- Basic -->
	<title>SMK Is We | Home</title>
    
    <!-- Define Charset -->
	<meta charset="utf-8">
    
    <!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- hal Description and Author -->
    <meta name="description" content="IPComp - Software Developer">
    <meta name="author" content="ZoOm Arts">
  
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    
    
    <!-- Bootstrap CSS  -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
  
    <!-- Revolution Banner CSS -->
    <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
  
    <!-- Venda CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
  
    <!-- Responsive CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
    
    <!-- Css3 Transitions Styles  -->
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
  
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />
  
    <!-- Fontello Icons CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/fontello.css" media="screen">
    <!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
    
    
    <!-- Venda JS  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
    <script type="text/javascript" src="js/modernizrr.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/count-to.js"></script>
    <script type="text/javascript" src="js/jquery.textillate.js"></script>
    <script type="text/javascript" src="js/jquery.lettering.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<!--<script type="text/javascript" src="js/contact.form.js"></script>-->

	<script type="text/javascript" src="js/script.js"></script>

	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAl8o1EIZiDNpnOq7vjhmF93ccG36LmGA&callback=initMap"
  type="text/javascript"></script>


	<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
</head>
<body>

	<!-- Container -->
	<div id="container">
		
        <!-- Start Header -->
		<div class="hidden-header"></div>
        <header class="clearfix">
            
            <?php
			include('contact.php');
			?>
          
			<!-- Start Header ( Logo & Naviagtion ) -->
			<div class="navbar navbar-default navbar-top">
				<div class="container">
					<div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="icon-menu-1"></i>
						</button>
                        <!-- End Toggle Nav Link For Mobiles -->
						<a class="navbar-brand" href="."><img alt="" src="images/venda.png"></a>
					</div>
					<div class="navbar-collapse collapse">
                        <!-- Stat Search -->
                    	<div class="search-side">
                            <a href="#" class="show-search"><i class="icon-search-1"></i></a>
                            <div class="search-form">
                               <form action="index.php?hal=search" method="POST">
								<input type="search" name="cari" placeholder="Enter Keywords..." />
                                <button class="search-btn" type="submit" name="submit"><i class="icon-search-1"></i></button>
							</form>
                            </div>
                        </div>
                        <!-- End Search -->
                        <!-- Start Navigation List -->
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#" id="dashboard" onclick="load('dashboard')">Home</a>
							</li>
							<li>
								<a href="#">Profil</a>
								<ul class="dropdown">
									<li><a href="#" onclick="load('profil')">Profil</a></li>
									<li><a href="#" onclick="load('struktur')">Struktur Organisasi</a></li>
									<li><a href="#" onclick="load('guru')">Tentang Pengajar</a></li>
                                    <li><a href="#" onclick="load('sarana')">Sarana Prasarana</a></li>
									
								</ul>
							
							</li>
                            <li>
								<a href="#">Program Keahlian</a>
								<ul class="dropdown">
									<li><a href="#" onclick="load('tkr')">Teknik Kendaraan Ringan</a></li>
                                    <li><a href="#" onclick="load('rpl')">Rekayasa Perangkat Lunak</a></li>
									
								</ul>
							</li>
							<!--<li>
								<a href="#">OSIS</a>
								<ul class="dropdown">
                                    <li><a href="index.php?hal=pramuka">Pramuka</a></li>
									<li><a href="index.php?hal=mm">Multimedia</a></li>
                                    <li><a href="sindex.php?hal=kuri">Olahraga</a></li>
									<li><a href="index.php?hal=pa">Pecinta Alam</a></li>
									<li><a href="index.php?hal=bakti">Bakti Masyarakat</a></li>
								</ul>
							</li>-->
							<li>
								<a href="#">My Apps</a>
								<ul class="dropdown">
									<li><a href="#" onclick="load('absen')">Absen Online</a></li>
                                    <li><a href="#" onclick="load('sinos')">Nilai Online</a></li>
                                    <li><a href="#" onclick="load('eperpus')">E-Library</a></li>
									<li><a href="#" onclick="load('modol')">Modul Online</a></li>
									
								</ul>
							</li>
                            <li>
								<a href="#" onclick="load('galery')">Galery</a>
							</li>
							
							<li>
								<a href="#" onclick="load('loker')">Loker</a>
								
							</li>
							<li><a href="#" onclick="load('testimoni')">Testimoni</a></li>
						</ul>
                        <!-- End Navigation List -->
					</div>
				</div>
			</div>
            <!-- End Header ( Logo & Naviagtion ) -->
          
		</header>
		<!-- End Header -->
      
      
      
  
      

		<!-- Start Content -->
		<div id="content">
			<div class="container">

            
				<?php
		 function load(page) {

          $('#dashboard').prop('class','');
          $('#profil').prop('class','');
          $('#struktur').prop('class','');
          $('#karyawan').prop('class','');
          $('#rpl').prop('class','');
          $('#tkr').prop('class','');
          $('#galery').prop('class','');
          $('#testimoni').prop('class','');
          $('#pesan').prop('class','');
          $('#user').prop('class','');
          $('#berita').prop('class','');
          $('#akun').prop('class','');
          $('#fb').prop('class','');

          $('#page-content').load('page/'+page+'.php');
          $('#'+page).prop('class', 'active');
        }
        load('dashboard');
            ?>
			<div class="hr1" style="margin-top:25px; margin-bottom:25px;"></div>
                
                <!-- Start Call Action -->
                <div class="call-action call-action-boxed call-action-style1 clearfix">
                    <!-- Call Action Button -->
                    <div class="button-side" style="margin-top:4px;"><a href="http://ppdb.smkiswe.id/" class="btn-system btn-large" target="_blank">Gabung bersama kami</a></div>
                    <!-- Call Action Text -->
                    <h2 class="primary"><strong>SMK I</strong> Sekolah terbaik untuk masa <strong>depan mu!</strong></h2>
                    <p>Ayooo Segera daftarkan diri anda.... dengan kami, kita bersama melangkah meraih masa depan yang gemilang.</p>
                </div>
                <!-- End Call Action -->
                         
			</div>
		</div>
		<!-- End content -->
      
        


		<!-- Start Footer -->
		<?php
	  include('footer.php');
	  ?>
		<!-- End Footer -->
      
	</div>
	<!-- End Container -->
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="icon-up-open-1"></i></a>
	
	<div id="loader">
    	<div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
    </div>
  
</body>
</html>