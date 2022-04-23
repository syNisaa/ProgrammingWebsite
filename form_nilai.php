<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai | Anisa</title>
</head>

<style>
    .container {
        font-family: 'Times New Roman', Times, serif;
    }
</style>

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <?php require_once 'index.php'; ?>
        <div id="layoutSidenav_content">

            <div class="container mt-5">

                <h5 class="text-center">Daftar Nilai Mahasiswa 2022 </h5>
                <hr>


                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                <form action="form_nilai.php" method="POST">
                    <div class="form-group row">
                        <label for="Nama " class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-8">
                            <input id="Nama " name="Nama" placeholder="Nama Lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="Bahasa inggris">Choose One</option>
                                <option value="Bahasa inggris">Bahaasa Inggris</option>
                                <option value="Jaringan Komputer">Jaringan Komputer</option>
                                <option value="ui &ux">UI & UX</option>
                                <option value="Pemrograman Website">Pemrograman Web</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Statistika">Statistika</option>
                                <option value="Ppkn">PPKN</option>
                                <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
                        <div class="col-8">
                            <input id="uas" name="uas" placeholder="Nilai UAS..." type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-8">
                            <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label>
                        <div class="col-8">
                            <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <hr>

                <?php

                $nama = @$_POST['Nama'];
                $matkul = @$_POST['matkul'];
                $uts = @$_POST['uts'];
                $uas = @$_POST['uas'];
                $tugas = @$_POST['tugas'];

                $puts = $uts * 30 / 100;
                $puas = $uas * 35 / 100;
                $ptugas = $tugas * 35 / 100;

                @$presentase = $puts + $puas + $ptugas;

                if ($presentase <= 35) {
                    $presentase = "E";
                } elseif ($presentase <= 55) {
                    $presentase = "D";
                } elseif ($presentase <= 69) {
                    $presentase = "C";
                } elseif ($presentase <= 84) {
                    $presentase = "B";
                } elseif ($presentase <= 100) {
                    $presentase = "A";
                } else {
                    $presentase = "I";
                }

                @$lulus = $puts + $puas + $ptugas;

                switch ($presentase) {
                    case "A":
                        $predikat = "Sangat memuaskan!";
                        break;
                    case "B":
                        $predikat = "Memuaskan!";
                        break;
                    case "C":
                        $predikat = "Cukup!";
                        break;
                    case "D":
                        $predikat = "Kurang!";
                        break;
                    case "E":
                        $predikat = "Sangat Kurang!";
                        break;

                    default:
                        $predikat = "Tidak Ada";
                        break;
                }

                ?>

                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">Nilai UAS</th>
                            <th scope="col">Nilai UTS</th>
                            <th scope="col">Nilai Tugas</th>
                            <th scope="col">Grade / Predikat</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo @$nama ?></td>
                            <td><?php echo @$matkul ?></td>
                            <td><?php echo @$uas ?></td>
                            <td><?php echo @$uts ?></td>
                            <td><?php echo @$tugas ?></td>
                            <td><?php echo @$presentase;
                                echo " <br> $predikat"; ?></td>
                            <td>
                                <?php
                                if ($lulus >= 55) {
                                    echo '.<button class="btn btn-outline-success">LULUS</button>.';
                                } elseif ($lulus < 55) {
                                    echo '.<button class="btn btn-outline-danger">TIDAK LULUS</button>.';
                                } else {
                                    echo '.<button class="btn btn-outline-secondary">BELUM ADA PENILAIAN</button>.';
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
</body>

</html>