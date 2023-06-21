<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('partials/head.php') ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <?php $this->load->view('partials/navbar.php') ?>
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