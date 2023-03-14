<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tugas Praktikum</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Praktikum 02</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Logic PHP -->
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

                            <!-- Isi dari Html -->
                            <div class="container1" style="flex-direction: row; display: flex;">
                                <div class="col-sm-8">
                                    <h1>Belanja Online</h1>
                                    <hr>
                                    <form method="POST" action="praktikum02.php">
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
                            
                            <!-- Tampilan Checkout -->
                            <div class="container3">
                                <p>
                                    Nama Customer : <?= $customer; ?> <br>
                                    Produk Pilihan : <?= $produk; ?> <br>
                                    Jumlah Beli : <?= $jumlah; ?> <br>
                                    Total Belanja : Rp.<?= number_format($total, 0, ",", ".") ?>,-
                                </p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>