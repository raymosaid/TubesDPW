<!DOCTYPE html>
<html lang="en" >
 
<head>
    
<?php $this->load->view('partials/head.php') ?>
 
  <style>
@media print {
    .page-break { display: block; page-break-before: always; }
}
      #invoice-POS {
        font-family: "Times New Roman", Times, serif;
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding: 2mm;
  margin: 0 auto;
  width: 44mm;
  background: #FFF;
}
#invoice-POS ::selection {
  background: #f31544;
  color: #FFF;
}
#invoice-POS ::moz-selection {
  background: #f31544;
  color: #FFF;
}
#invoice-POS h1 {
  font-size: 1.5em;
  color: #222;
}
#invoice-POS h2 {
  font-size: .9em;
}
#invoice-POS h3 {
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
#invoice-POS p {
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}
#invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot {
  /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}
#invoice-POS #top {
  min-height: 100px;
}
#invoice-POS #mid {
  min-height: 80px;
}
#invoice-POS #bot {
  min-height: 50px;
}

#invoice-POS .info {
  display: block;
  margin-left: 0;
}
#invoice-POS .title {
  float: right;
}
#invoice-POS .title p {
  text-align: right;
}
#invoice-POS table {
  width: 100%;
  border-collapse: collapse;
}
#invoice-POS .tabletitle {
  font-size: .5em;
  background: #EEE;
}
#invoice-POS .service {
  border-bottom: 1px solid #EEE;
}
#invoice-POS .item {
  width: 24mm;
}
#invoice-POS .itemtext {
  font-size: .5em;
}
#invoice-POS #legalcopy {
  margin-top: 5mm;
}


    </style>
 
  <script>
  window.console = window.console || function(t) {};
</script>
 
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
 
 
</head>
 
<body translate="no" >
 
 
  <div id="invoice-POS">
 
      <center div class="info"> 
        <p ><b>RF Nasgor</b></p>
        <p style="font-size:6px; text-align:right;;">Jalan Geger Arum No.124</p>
      <center /div><!--End Info-->
      <p style="font-size:8px;text-align:left;">Nama: <?php echo $data_pesanan['nama_pesanan']; ?></p>
      <p style="font-size:8px;text-align:left;">Kode Pesanan: <?php echo $data_pesanan['kode_pesanan']; ?></p>
      <p style="font-size:8px;text-align:left;">Tanggal: <?php echo $data_pesanan['tanggal_pesanan']; ?></p>

    <div id="bot">
 
      <div id="table">
          <table>
            <tr class="tabletitle">
                <th class="Hours"><h2>No.</h2></th>
                <th class="item"><h2>Nama Menu</h2></th>
                <th class="Rate"><h2>Harga Satuan</h2></th>
                <th class="Hours"><h2>Quantity</h2></th>
                <th class="Rate"><h2>Total</h2></th>
            </tr>
              <?php
              $no = 1;
              foreach($detail_pesanan->result() as $row){
                  ?>
                  <tr class="service">
                  <td class="tableitem"><p class="itemtext"><?php echo $no;?>.</p></td>
                      <td class="tableitem"><p class="itemtext"><?php echo $row->nama_menupesanan;?></p></td>
                      <td class="tableitem"><p class="itemtext"><?php echo $row->hargasatuan_menupesanan;?></p></td>
                      <td class="tableitem"><p class="itemtext"><?php echo $row->qty_menupesanan;?></p></td>
                      <td class="tableitem"><p class="itemtext"><?php echo $row->total_menupesanan;?></p></td>
                  </tr>
              <?php 
              $no++;
              } ?>
              <tr class="tabletitle">
                  <td colspan=4  class="Rate"><h2>Total</h2></td>
                  <td class="payment"><h2><?php echo $data_pesanan['total_pesanan']; ?></h2></td>
              </tr>
          </table>
 
          </table>
      </div><!--End Table-->
 
      <div id="legalcopy">
          <p class="legal"><strong>Terimakasih!</strong>
          </p>
      </div>
 
                </div><!--End InvoiceBot-->
  </div><!--End Invoice-->
 
</body>
 
</html>