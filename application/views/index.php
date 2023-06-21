<!DOCTYPE html>
<html lang="en">

<head>
 <?php $this->load->view('partials/head.php') ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url();?>">RF Nasgor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= base_url();?>">Home</a>
        <a class="nav-link" href="#menu">Menu</a>
        <a class="nav-link" href="<?= base_url();?>Controller/history/">History</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
</nav>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Nasi Goreng Kaki Lima<br>Rasa Bintang Lima</h2>
          <p data-aos="fade-up" data-aos-delay="100">Tersedia Nasi Goreng, Mie Goreng, Capcay, dan Kwetiauw dengan harga murah dan rasa tak tertandingi!</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#menu" class="btn-book-a-table">Daftar Menu</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/menu/nasi.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-6 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Cabang</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1975" data-purecounter-duration="1" class="purecounter"></span>
              <p>Sejak</p>
            </div>
          </div><!-- End Stats Item -->
        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Daftar Menu</h2>
          <p>RF <span>Nasgor</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-semua">
              <h4>Semua</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-makanan">
              <h4>Makanan</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-minuman">
              <h4>Minuman</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-semua">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Semua</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item" >
                <a href="assets/img/menu/nasi.png" class="glightbox" id="Nasi"><img src="assets/img/menu/nasi.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Goreng</h4>
                <p class="Harga">
                  Rp15000
                </p>
                <input class="btn btn-primary" type="button" value="+" id="Nasi">
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" >
                <a href="assets/img/menu/mie.png" class="glightbox"><img src="assets/img/menu/mie.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mie Goreng</h4>
                <p class="Harga">
                  Rp15000
                </p>
                <input class="btn btn-primary" type="button" value="+" id="Mie">
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" >
                <a href="assets/img/menu/kwetiau.png" class="glightbox"><img src="assets/img/menu/kwetiau.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kwetiauw</h4>
                <p class="Harga">
                  Rp18000
                </p>
                <input class="btn btn-primary" type="button" value="+" id="Kwetiauw">
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" >
                <a href="assets/img/menu/capcay.png" class="glightbox"><img src="assets/img/menu/capcay.png" class="menu-img img-fluid" alt=""></a>
                <h4>Capcay</h4>
                <p class="Harga">
                  Rp18000
                </p>
                <input class="btn btn-primary" type="button" value="+" id="Capcay">
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" >
                <a href="assets/img/menu/alpukat.png" class="glightbox"><img src="assets/img/menu/alpukat.png" class="menu-img img-fluid" alt=""></a>
                <h4>Jus Alpukat</h4>
                <p class="Harga">
                  Rp18000
                </p>
                <input class="btn btn-primary" type="button" value="+" id="Alpukat">
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-makanan">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Makanan</h3>
            </div>

            <div class="row gy-5">

            <div class="col-lg-4 menu-item" >
                <a href="assets/img/menu/nasi.png" class="glightbox" id="Nasi"><img src="assets/img/menu/nasi.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Goreng</h4>
                <p class="Harga">
                  Rp15000
                </p>
                <input class="btn btn-primary" type="button" value="+" id="Nasi">
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" >
                <a href="assets/img/menu/mie.png" class="glightbox"><img src="assets/img/menu/mie.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mie Goreng</h4>
                <p class="Harga">
                  Rp15000
                </p>
                <input class="btn btn-primary" type="button" value="+" id="Mie">
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" >
                <a href="assets/img/menu/kwetiau.png" class="glightbox"><img src="assets/img/menu/kwetiau.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kwetiauw</h4>
                <p class="Harga">
                  Rp18000
                </p>
                <input class="btn btn-primary" type="button" value="+" id="Kwetiauw">
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item" >
                <a href="assets/img/menu/capcay.png" class="glightbox"><img src="assets/img/menu/capcay.png" class="menu-img img-fluid" alt=""></a>
                <h4>Capcay</h4>
                <p class="Harga">
                  Rp18000
                </p>
                <input class="btn btn-primary" type="button" value="+" id="Capcay">
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-minuman">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Minuman</h3>
            </div>

            <div class="row gy-5">

            <div class="col-lg-4 menu-item" >
                <a href="assets/img/menu/alpukat.png" class="glightbox"><img src="assets/img/menu/alpukat.png" class="menu-img img-fluid" alt=""></a>
                <h4>Jus Alpukat</h4>
                <p class="Harga">
                  Rp18000
                </p>
                <input class="btn btn-primary" type="button" value="+" id="Alpukat">
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->
    <table class="table table-bordered" style="width:75%; margin-left:auto; margin-right:auto;">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
    </table>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Alamat</h4>
            <p>
              Jalan Geger Arum 2 No.124 <br>
              Kota Bandung, Jawa Barat<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> +6289611234985<br>
              <strong>Email:</strong> rfnasgor@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Buka</h4>
            <p>
              <strong>Senin-Sabtu : 09.00</strong> - 21.00<br>
              Minggu Tutup
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Tugas Masa Depan <strong><span>DPW 2023</span></strong>.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by Ray and Febri</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>