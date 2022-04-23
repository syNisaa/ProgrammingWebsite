<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
</style>

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <?php require_once 'index.php'; ?>
        <div id="layoutSidenav_content">
            <div class="container mt-5 text-center">
                <?php
                $ns1 = ['id' => 1, 'nim' => '0110121101', 'uts' => 90, 'uas' => 94, 'tugas' => 88];
                $ns2 = ['id' => 2, 'nim' => '0110121102', 'uts' => 80, 'uas' => 80, 'tugas' => 98];
                $ns3 = ['id' => 3, 'nim' => '0110121103', 'uts' => 90, 'uas' => 96, 'tugas' => 80];
                $ns4 = ['id' => 4, 'nim' => '0110121104', 'uts' => 90, 'uas' => 81, 'tugas' => 82];

                $ar_nilai = [$ns1, $ns2, $ns3, $ns4];

                ?>

                <h3><b>Daftar Nilai Mahasiswa 2022</b></h3>

                <hr>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>Tugas</th>
                            <th>Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($ar_nilai as $ns) {
                            echo '<tr><td>' . $nomor . '</td>';
                            echo '<td>' . $ns['nim'] . '</td>';
                            echo '<td>' . $ns['uts'] . '</td>';
                            echo '<td>' . $ns['uas'] . '</td>';
                            echo '<td>' . $ns['tugas'] . '</td>';
                            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                            echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                            echo '<tr/>';
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>

                <div class="alert alert-dark" role="alert">
                    Anisa - Sistem Informasi 05 - 0110121108
                </div>


            </div>
        </div>
    </div>

</body>

