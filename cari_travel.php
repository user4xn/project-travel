<!DOCTYPE html>
<html lang="en">
<head>
     <title>Cari | Baritrans - Tour & Travel</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/newfontawesome/css/all.css">
     <link rel="stylesheet" href="css/aos.css">
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
	 
    <!-- CALL LINK -->
    <a href="#" target="_blank" class="float-top">
        <i class="fas fa-phone-square my-float-top"></i>
    </a>
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
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center" data-aos="fade-down" data-aos-delay="400">
                        <h3 class="text-white mb-4">HASIL PENCARIAN <span class="main-title">TOUR</span></h3>
                        <form>                
                        <div class="row pl-4 pr-4">
                            <div class="col-md-4 pr-1 pl-1">
                                <select class="wide mb-3">
                                  <option selected>Semua Kategori</option>
                                  <option value="Banjar Negara">Banjar Negara</option>
                                  <option value="Purbalingga">Purbalingga</option>
                                  <option value="Cilacap">Cilacap</option>
                                  <option value="Purwokerto">Purwokerto</option>
                                  <option value="Wonosobo">Wonosobo</option>
                                </select>
                            </div>
                            <div class="col-md-4 pr-1 pl-1">
                                <select class="wide mb-3">
                                  <option selected>Semua Destinasi</option>
                                  <option value="bandung">Bandung</option>
                                  <option value="jakarta">Jakarta</option>
                                  <option value="jepara">Jepara</option>
                                  <option value="jogja">Jogja</option>
                                  <option value="kudus">Kudus</option>
                                  <option value="pati">Pati</option>
                                  <option value="purwodadi">Purwodadi</option>
                                  <option value="semarang">Semarang</option>
                                  <option value="solo">Solo</option>
                                  <option value="wonosobo">Wonosobo</option>
                                </select>
                            </div>
                            <div class="col-md-4 pr-1 pl-1">
                                <select class="wide mb-3">
                                  <option selected>Semua Durasi</option>
                                  <option value="08.00">08.00</option>
                                  <option value="16.00">16.00</option>
                                  <option value="20.00">20.00</option>
                                  <option value="22.00">22.00</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" class="btn custom-btn bordered mt-3" value="Cari Tour!">
                        </form>
                    </div>
               </div>
            </div>
        </div>
    </section>

    <!-- TOUR -->
    <section class="class section" id="class">
        <div class="container">
             <div class="row">
                    <div class="col-lg-12 col-12 text-left mb-5">
                        <!-- KIE AJA KELALEN YAMAS -->
                        <h6 data-aos="fade-up"><u>6</u> hasil pencarian ditemukan!</h6>
                    </div>
                    <!-- LOOPING ,GANTI MAS YA :V -->
                    <?php for ($i=0; $i < 6; $i++) {  ?>
                    <!-- SINGLE ITEM -->
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
    <script type="text/javascript">
      $(document).ready(function(){
         $('select').niceSelect();
      });
    </script>
</body> 
</html>