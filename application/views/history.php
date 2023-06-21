<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<?php $this->load->view('partials/head.php') ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <?php $this->load->view('partials/navbar.php') ?>
  </header><!-- End Header -->

  <main id="main" style="margin-top: 100px">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Tanggal Pemesanan</th>
                <th scope="col">Kode Pesanan</th>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($data_pesanan->result() as $row){
                ?>
                <tr>
                <td scope="row"><?php echo $no;?>.</td>
                    <td><?php echo $row->tanggal_pesanan;?></td>
                    <td><?php echo $row->kode_pesanan;?></td>
                    <td><?php echo $row->nama_pesanan;?></td>
                    <td><?php echo $row->total_pesanan;?></td>
                    <td>
                        <a href="<?= site_url('Controller/details/');?><?= $row->kode_pesanan; ?>">
                            <button type="button" class="btn btn-outline-danger">Lihat Pesanan Lengkap</button>
                        </a>
                    </td>
                </tr>
            <?php 
            $no++;
            } ?>
        </tbody>
    </table>
    
  </main><!-- End #main -->

  
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- <div id="preloader"></div> -->

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