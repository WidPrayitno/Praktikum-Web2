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
                            <h3 class="card-title">Praktikum 03</h3>

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
                            <!-- PHP -->
                            <?php

                            $nim = $_POST['nim'];
                            $nama = $_POST['nama'];
                            $jk = $_POST['jk'];
                            $prodi = $_POST['prodi'];
                            $skill = $_POST['skill'];
                            $domisili = $_POST['domisili'];
                            $email = $_POST['email'];
                            $skor = 0;

                            // Buat logic menentukan skor dari skill
                            foreach ($skill as $s) {
                                // cek skill
                                switch ($s) {
                                    case 'html':
                                        $skor = $skor + 10;
                                        // $skor += 10; Opsional
                                        break;
                                    case 'css':
                                        $skor = $skor + 10;
                                        // $skor += 10; Opsional
                                        break;
                                    case 'javascript':
                                        $skor = $skor + 20;
                                        // $skor += 10; Opsional
                                        break;
                                    case 'bootstrap':
                                        $skor = $skor + 20;
                                        // $skor += 10; Opsional
                                        break;
                                    case 'php':
                                        $skor = $skor + 30;
                                        // $skor += 10; Opsional
                                        break;
                                    case 'python':
                                        $skor = $skor + 30;
                                        // $skor += 10; Opsional
                                        break;
                                    case 'java':
                                        $skor = $skor + 50;
                                        // $skor += 10; Opsional
                                        break;
                                    default:
                                        $skor = 0;
                                        break;
                                }
                            }

                            // Buat logic katergori skill
                            function predikat($skor)
                            {
                                if ($skor >= 1 && $skor <= 40) {
                                    return "Kurang";
                                }
                                if ($skor >= 40 && $skor <= 60) {
                                    return "Cukup";
                                }
                                if ($skor >= 60 && $skor <= 100) {
                                    return "Baik";
                                }
                                if ($skor >= 100 && $skor <= 170) {
                                    return "Sangat Baik";
                                } else {
                                    return "Tidak Memadai";
                                }
                            }
                            $predikat = predikat($skor);

                            ?>

                            <!-- HTML -->
                            <div class="container">
                                <h1>Form Registrasi IT Club Data Science</h1>
                                <form method="POST" action="praktikum03.php">
                                    <div class="form-group row">
                                        <label for="nim" class="col-4 col-form-label">NIM</label>
                                        <div class="col-8">
                                            <input id="nim" name="nim" type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Jenis Kelamin</label>
                                        <div class="col-8">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                                                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                                                <label for="jk_1" class="custom-control-label">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                                        <div class="col-8">
                                            <select id="prodi" name="prodi" class="custom-select">
                                                <option value="Teknik Informatika">Teknik Informatika</option>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Bisnis Digital">Bisnis Digital</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Skill Web & Programing</label>
                                        <div class="col-8">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html">
                                                <label for="skill[]_0" class="custom-control-label">HTML</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css">
                                                <label for="skill[]_1" class="custom-control-label">CSS</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="javascript">
                                                <label for="skill[]_2" class="custom-control-label">Javascript</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="bootstrap">
                                                <label for="skill[]_3" class="custom-control-label">Bootstrap</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php">
                                                <label for="skill[]_4" class="custom-control-label">PHP</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="python">
                                                <label for="skill[]_5" class="custom-control-label">Python</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java">
                                                <label for="skill[]_6" class="custom-control-label">Java</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
                                        <div class="col-8">
                                            <select id="domisili" name="domisili" class="custom-select">
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="Bogor">Bogor</option>
                                                <option value="Depok">Depok</option>
                                                <option value="Tanggerang">Tanggerang</option>
                                                <option value="Bekasi">Bekasi</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email</label>
                                        <div class="col-8">
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>NIM</td>
                                            <td>:</td>
                                            <td><?= $nim ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><?= $nama ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>:</td>
                                            <td><?= $jk ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Domisili</td>
                                            <td>:</td>
                                            <td><?= $domisili ?></td>
                                        </tr>
                                        <tr>
                                            <td>Program Studi</td>
                                            <td>:</td>
                                            <td><?= $prodi ?></td>
                                        </tr>
                                        <tr>
                                            <td>Skill</td>
                                            <td>:</td>
                                            <td><?php foreach ($skill as $s) {
                                                    echo $s . ", ";
                                                } ?></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Skill</td>
                                            <td>:</td>
                                            <td><?= $skor ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori Skill</td>
                                            <td>:</td>
                                            <td><?= $predikat ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td><?= $email ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Code php di bawah ini digunakan di saat praktikum dan di ubah ke dalam tabel agar lebih rapih -->
                                <!-- <?php
                                        echo "NIM    : " . $nim . "<br>";
                                        echo "Nama Lengkap  : " . $nama . "<br>";
                                        echo "Jenis Kelamin : " . $jk . "<br>";
                                        echo "Program Studi : " . $prodi . "<br>";
                                        echo "Email : " . $email . "<br>";
                                        echo "Skill  : ";
                                        foreach ($skill as $s) {
                                            echo $s . ", ";
                                        }
                                        echo "<br> Tempat Domisili : " . $domisili . "<br>";
                                        echo "Skor : " . $skor;
                                        ?> -->
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