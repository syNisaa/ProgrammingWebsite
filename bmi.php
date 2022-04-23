<?php
include('projectUTS/classbmi.php');
$umur = @$_POST['umur'];
$tinggi = @$_POST['tinggi'];
$berat = @$_POST['berat'];

@$mTinggi = @$tinggi / 100;
@$hasilbmi = @$berat / (@$mTinggi * @$mTinggi);

$bmi = new Bmi($berat, $tinggi);
$hitungbmi = $bmi->hitungbmi();


$data1 = ['tgl' => 01 - 01 - 2021, 'kode' => 'P01', 'nama' => "Ahmad", 'gender' => "Laki-Laki", 'berat' => 69, 'tinggi' => 169, 'nilai' => 24.7, 'status' => "Kelebihan Berat Badan"];
$data2 = ['tgl' => 02 - 01 - 2021, 'kode' => 'P02', 'nama' => "Rina", 'gender' => "Perempuan", 'berat' => 55, 'tinggi' => 165, 'nilai' => 20.3, 'status' => "Normal"];
$data3 = ['tgl' => 03 - 01 - 2021, 'kode' => 'P03', 'nama' => "Luthfi", 'gender' => "Laki-Laki", 'berat' => 45, 'tinggi' => 171, 'nilai' => 15.4, 'status' => "Kekurangan Berat Badan"];

$ar_data = [$data1, $data2, $data3];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI INDONESIA | Anisa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<style>
    body {
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
    }



    .form {
        padding: 20px;
        width: 400px;
        display: block;
        margin: auto;
        background-color: transparent;
        box-shadow: 5px 3px 30px 7px #131212;
        opacity: 0.8;
        border-radius: 20px;
    }
</style>


<body class="sb-nav-fixed container mt-5">
    <div id="layoutSidenav">

        <?php require_once 'index.php'; ?>
        <div id="layoutSidenav_content">
            <?php require_once 'index.php'; ?>
            <form method="POST" class="form">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Kamu</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Gender</label>
                    <input type="text" name="gender" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Berapa Usia Anda ? ( Tahun )</label>
                    <input type="text" name="umur" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Berapa Tinggi Anda ? ( CM )</label>
                    <input type="text" name="tinggi" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Berapa Berat Anda ? ( KG )</label>
                    <input type="text" name="berat" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Hitung</button>
                </div>
            </form>
            <br><br>
            
            <div class="">
                <h3 style="text-align: center;">BMI Anda Adalah : <b><?php echo number_format($hasilbmi); ?></b></h3>
                <hr>

                <?php
                if ($hasilbmi < 18.5) {
                    echo '<img src="projectUTS/kurangbobot.png" >';
                    $statusBmi = "<br>Berat kamu Kurang... Yuk Semangat!";
                    $stat = "Kurang Bobot";
                } else if ($hasilbmi >= 18.5 and $hasilbmi <= 24.9) {
                    echo '<img src="projectUTS/sehat.png">';
                    $statusbmi = "<br>Wahh.. Pertahankan terus yaa!";
                    $stat = "Sehat";
                } else if ($hasilbmi >= 25.0 and $hasilbmi <= 29.9) {
                    echo '<img src="projectUTS/kelebihanbobot.png">';
                    $statusBmi = "<br>Udah mulai kelebihan nih.. Tetep Semangat Ya!";
                    $stat = "kelebihan Bobot";
                } else if ($hasilbmi  <= 30) {
                    echo '<img src="projectUTS/obesitas.png">';
                    $statusBmi = "<br>Semangat! Pasti Bisa!";
                    $stat = "Obesitas";
                } else {
                    echo '<img src="projectUTS/timbang.png">';
                    $statusBmi = "<br>Yuk Cek Kesehatan mu";
                }

                ?>

                <?php
                $array = [$data1, $data2, $data3];

                


                ?>
                <br><br><table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>tanggal</th>
                            <th>kode</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Berat</th>
                            <th>Tinggi</th>
                            <th>Nilai BMI</th>
                            <th>Status BMI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($ar_data as $ns) {
                            echo '<tr><td>' . $nomor . '</td>';
                            echo '<td>' . $ns['tgl'] . '</td>';
                            echo '<td>' . $ns['kode'] . '</td>';
                            echo '<td>' . $ns['nama'] . '</td>';
                            echo '<td>' . $ns['gender'] . '</td>';
                            echo '<td>' . $ns['berat'] . '</td>';
                            echo '<td>' . $ns['tinggi'] . '</td>';
                            echo '<td>' . $ns['nilai'] . '</td>';
                            echo '<td>' . $ns['status'] . '</td>';
                            echo '<tr/>';
                            $nomor++;
                        }

                        $id = 4;
                        $nama = $_POST['nama'];
                        $tmp_lahir = "Depok";
                        $tgl_lahir = "2000-09-09";
                        $gender = $_POST['gender'];
                        $berat = (int)$_POST['berat'];
                        $tinggi = $_POST['tinggi'] / 100;

                        ?>

                        <td>4</td>
                        <td>2000-09-09</td>
                        <td><?php echo "P04" ?></td>
                        <td><?php echo @$nama ?></td>
                        <td><?php echo @$gender ?></td>
                        <td><?php echo @$berat ?></td>
                        <td><?php echo @$tinggi ?></td>
                        <td><?php echo number_format(@$hasilbmi)?></td>
                        <td><?php echo @$stat?></td>
                    </tbody>
                </table>
            </div>


        </div>
    </div>

</body>


</html>