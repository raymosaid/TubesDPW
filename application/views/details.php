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

  <main id="main" style="margin-top: 100px">
  <table class="table table-bordered" id="details">
        <tbody>
          <tr>
              <td scope="col" style="width:20%;">Nama Pemesan</td>
              <td scope="col"><?php echo $data_pesanan['nama_pesanan']; ?></td>
          </tr>
          <tr>
              <td scope="col" style="width:20%;">Kode Pemesanan</td>
              <td scope="col"><?php echo $data_pesanan['kode_pesanan']; ?></td>
          </tr>
          <tr>
              <td scope="col" style="width:20%;">Tanggal Pemesanan</td>
              <td scope="col"><?php echo $data_pesanan['tanggal_pesanan']; ?></td>
          </tr>
        </tbody>
    </table>

  <table class="table table-bordered" id="details"">
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
                <td scope="row"><?php echo $no;?>.</td>
                    <td><?php echo $row->nama_menupesanan;?></td>
                    <td><?php echo $row->hargasatuan_menupesanan;?></td>
                    <td><?php echo $row->qty_menupesanan;?></td>
                    <td><?php echo $row->total_menupesanan;?></td>
                </tr>
            <?php 
            $no++;
            } ?>
            <tr>
                <th scope="col" colspan=4>Total</th>
                <th scope="col"><?php echo $data_pesanan['total_pesanan']; ?></th>
            </tr>
        </tbody>
    </table>

    <a href="<?= site_url('Controller/struk/');?><?= $detail_pesanan->result()[0]->kode_menupesanan; ?>">
        <button type="button" class="btn btn-danger">Lihat Pesanan Lengkap</button>
    </a>
    
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