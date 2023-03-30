<?php
require_once 'dbkoneksi.php';
if (!empty($_GET['idedit'])) {
  $edit = $_GET['idedit'];
  // Nampilin data pakai select
  $sql = "SELECT * FROM produk WHERE id=?";
  $st = $dbh->prepare($sql);
  // Menjalankan
  $st->execute([$edit]);
  // Menampilkan baris di setiap data
  $row = $st->fetch();
} else {
  // Jalanin fungsi create (buat data baru)
  $row = [];
};

?>

<form method="POST" action="proses_produk.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div>
        <input id="kode" name="kode" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="nama" name="nama" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div>
        <input id="harga_beli" name="harga_beli" value="" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div>
        <input id="stok" name="stok" value="" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div>
        <input id="min_stok" name="min_stok" value="" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
    <div class="col-8">
      <?php
      $sqljenis = "SELECT * FROM jenis_produk";
      $rsjenis = $dbh->query($sqljenis);
      ?>
      <select id="jenis" name="jenis" class="custom-select">
        <?php
        foreach ($rsjenis as $rowjenis) {
        ?>
          <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
        <?php
        }
        ?>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <!-- Validasi -->
      <?php
      $button = (empty($edit)) ? "Simpan" : "Update";
      ?>
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
      <input type="hidden" name="idedit" value="<?= $edit; ?>" />
    </div>
  </div>
</form>