<?php
$proses = $_POST["proses"];
$customer = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];


// logic total
$total;

if ($produk == "Televisi") {
  $total = 4200000 * $jumlah;
} elseif ($produk == "Kulkas") {
  $total = 3100000 * $jumlah;
} else {
  $total = 3800000 * $jumlah;
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Form Belanja</title>
</head>

<body>
  <div class="container1" style="flex-direction: row; display: flex;">
    <div class="col-sm-8">
      <h1>Belanja Online</h1>
      <hr>
      <form method="POST" action="form_belanja.php">
        <div class="form-group row">
          <label for="customer" class="col-4 col-form-label">Customer</label>
          <div class="col-8">
            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4" for="produk">Pilih Produk</label>
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Televisi">
              <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
              <label for="produk_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
              <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
          <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-sm-4">
      <div class="container2">
        <ul class="list-group">
          <li class="list-group-item active" aria-current="true">Daftar Harga</li>
          <li class="list-group-item">TV : Rp.4.200.000</li>
          <li class="list-group-item">Kulkas : Rp.3.100.000</li>
          <li class="list-group-item">Mesin Cuci : Rp.3.800.000</li>
          <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
        </ul>
      </div>
    </div>
  </div>
  <hr>
  <div class="container3">
    <p>
      Nama Customer : <?= $customer; ?> <br>
      Produk Pilihan : <?= $produk; ?> <br>
      Jumlah Beli : <?= $jumlah; ?> <br>
      Total Belanja : Rp.<?= number_format($total, 0, ",", ".") ?>,-
    </p>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>