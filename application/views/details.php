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

  <main id="main" style="margin-top: 150px">
  <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($detail_pesanan->result() as $row){
                ?>
                <tr>
                <th scope="row"><?php echo $no;?></th>
                    <td><?php echo $row->nama_menupesanan;?></td>
                    <td><?php echo $row->hargasatuan_menupesanan;?></td>
                    <td><?php echo $row->qty_menupesanan;?></td>
                    <td><?php echo $row->total_menupesanan;?></td>
                </tr>
            <?php 
            $no++;
            } ?>
        </tbody>
    </table>
    
  </main><!-- End #main -->

  
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