<!DOCTYPE html>
<html lang="en">
<head>
     <title>Detail Tour | Baritrans - Tour & Travel</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/newfontawesome/css/all.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/steplist.css">
     <link rel="stylesheet" href="css/h_image.css">
     <link rel="stylesheet" href="nice-select/css/nice-select.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
     <style type="text/css">
       ul.list{
        max-height: 200px !important;
        overflow-y: scroll !important;
        z-index: 2;
       }
     </style>
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

	<!-- WHATSAPP LINK -->
    <a href="https://wa.me/+6281227082077?text=Halo%20Saya%20Ingin%20Pesan%20Travel" target="_blank" class="float">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><span class="text-color">B</span>aritrans.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link smoothScroll">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="cari_travel.php" class="nav-link smoothScroll">Cari Travel</a>
                    </li>
                    <li class="nav-item">
                        <a href="tentang_kami.php" class="nav-link smoothScroll">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="feature pt-4 pb-4 mt-5" id="feature">
        <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-10 col-12 text-left">
                    <h1 class="text-white">Detail <span class="bg-color">Tour</span></h1>
                     <span class="blockquote-footer mt-2">
                         Informasi serta persayaratan lengkap untuk tour & travel dengan kami
                    </span>
               </div>
            </div>
        </div>
    </section>

	<!-- TOUR -->
	<section class="class section pt-3" id="class">
	    <div class="container">
	        <div class="col-lg-12 p-0 col-12 text-left mb-5">
	         	<div class="row">
	                 <div class="col-md-5">
	                 	<img src="images/class/travel_car.jpg" class="img-fluid rounded" alt="Class" style="max-height: 100%">
	                 </div>
	                 <div class="col-md-7">
	                 	<h3 class="mb-3 mt-3">Purbalingga Jogja Solo (PP)</h3>
	                 	<span class="text-color"><i class="fas fa-map-marker-alt"></i> Purbalingga - <i class="fas fa-clock"></i> 08.00</span>
	                 	<p class="text-black mt-3"><b>Rp 300.000</b>/kursi</p>
	                 	<!-- WHASAPP LINK & TEXT MAS -VARIABLE -->
	                 	<a href="https://wa.me/+6281227082077?text=Halo%20Saya%20Ingin%20Pesan%20Travel%20Yang%20Ini" class="btn custom-btn bordered" style="text-transform: none;"><i class="fas fa-share"></i> Pesan Via Whatsapp</a>
	                 </div>
	         	</div>
	         	<div class="row">
	         		<div class="col-md-12">
	         			<p class="h5 mt-4">Benefit dan Persyaratan :</p>
						<ul class="list-ic vertical">
						  <li>
						    <span>1</span>
						    <a href="#" style="position:absolute;margin-left: 10px;margin-top: 25px">Menggunakan mobil pribadi dengan berkapasitas 5 penumpang terbaru.</a>
						  </li>
						  <li>
						    <span>2</span>
						    <a href="#" style="position:absolute;margin-left: 10px;margin-top: 25px">Travel dengan Sistem antar jemput, penumpang di jemput langsung ke alamat.</a>
						  </li>
						  <li>
						    <span>3</span>
						    <a href="#" style="position:absolute;margin-left: 10px;margin-top: 25px">Hp pelanggan selalu aktif pada 1 jam guna penjemputan sopir ke alamat</a>
						  </li>
						  <li>
						    <span>4</span>
						    <a href="#" style="position:absolute;margin-left: 10px;margin-top: 25px">Apabila pada saat penjemputan dan hp susah dihubungi sopir maka bukan menjadi tanggung jawab kami</a>
						  </li>
						  <li>
						    <span>5</span>
						    <a href="#" style="position:absolute;margin-left: 10px;margin-top: 25px">Yang sudah melakukan DP atau Lunas apabila travel tidak menjemput maka uang akan dikembalikan utuh 100% ke pelanggan.</a>
						  </li>
						  <!-- TINGGAL TAMBAH LAANJUT NEK KURANG -->
						</ul>
	         		</div>
	         	</div>
	        </div>
	    </div>
	</section>

	<!-- TOUR -->
    <section class="class section pt-0" id="class">
      	<div class="container">
      	    <div class="row">
      	        <div class="col-lg-12 col-12 text-left mb-5">
      	            <h6 data-aos="fade-up">Travel serupa lainnya :</h6>
      	        </div>
      	        <?php for ($i=0; $i < 3; $i++) {  ?>
      	        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="100">
      	            <div class="class-thumb">
      	                <div class="c_img">
      	                  <img src="images/class/travel_car.jpg" class="img-fluid" alt="Class">
      	                  <div class="overlay">
      	                    <!-- LINK -->
      	                    <a class="text btn btn-outline-warning btn-sm" href="detail_tour.php">Lihat Detail</a>
      	                  </div>
      	                </div>
      	                <div class="class-info pr-0 pl-0">
      	                    <strong class="text-dark">
      	                        <h4 class="mb-1">Purbalingga - Jogja - Solo (PP)</h4>
      	                    </strong>
      	                    <span class="text-color"><i class="fas fa-map-marker-alt"></i> Purbalingga - <i class="fas fa-clock"></i> 08.00</span>
      	                    <p class="mt-3"><b>Rp 300.000</b>/kursi</p>
      	                </div>
      	            </div>
      	        </div>
      	        <?php } ?>
      	    </div>
      	</div>
    </section>


	<!-- FOOTER -->
	<section class="schedule section pt-3 pb-2" id="schedule">
	          <div class="container">
	               <div class="row">
	                   <div class=" col-lg-12 col-md-12 text-center">
	                       <p class="copyright-text">Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> Baritrans</p>
	                   </div>
	               </div>
	          </div>
	</section>


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="nice-select/js/jquery.js"></script>
    <script src="nice-select/js/jquery.nice-select.js"></script>
</body> 
</html>