<?php
include('projectUTS/classbmi.php');
$umur = @$_POST['umur'];
$tinggi = @$_POST['tinggi'];
$berat = @$_POST['berat'];

@$mTinggi = @$tinggi / 100;
@$hasilbmi = @$berat / (@$mTinggi * @$mTinggi);

$bmi = new Bmi($berat, $tinggi);
$hitungbmi = $bmi->hitungbmi();


// $data1 = ['tgl' => 01 - 01 - 2021, 'kode' => 'P01', 'nama' => "Ahmad", 'gender' => "Laki-Laki", 'berat' => 69, 'tinggi' => 169, 'nilai' => 24.7, 'status' => "Kelebihan Berat Badan"];
// $data2 = ['tgl' => 02 - 01 - 2021, 'kode' => 'P02', 'nama' => "Rina", 'gender' => "Perempuan", 'berat' => 55, 'tinggi' => 165, 'nilai' => 20.3, 'status' => "Normal"];
// $data3 = ['tgl' => 03 - 01 - 2021, 'kode' => 'P03', 'nama' => "Luthfi", 'gender' => "Laki-Laki", 'berat' => 45, 'tinggi' => 171, 'nilai' => 15.4, 'status' => "Kekurangan Berat Badan"];

// array_push($data4, $nama,$berat,$nama,$berat,$nama,$berat,$nama,$berat);

// $ar_data = [$data1, $data2, $data3];


// $nomor = 1;
// foreach ($ar_data as $ns) {
//     echo '<tr><td>' . $nomor . '</td>';
//     echo '<td>' . $ns['tgl'] . '</td>';
//     echo '<td>' . $ns['kode'] . '</td>';
//     echo '<td>' . $ns['nama'] . '</td>';
//     echo '<td>' . $ns['gender'] . '</td>';
//     echo '<td>' . $ns['berat'] . '</td>';
//     echo '<td>' . $ns['tinggi'] . '</td>';
//     echo '<td>' . $ns['nilai'] . '</td>';
//     echo '<td>' . $ns['status'] . '</td>';
//     echo '<tr/>';
//     $nomor++;
// }


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

    .container {
        display: grid;
        grid-template-columns: 56% auto;
        padding: 4em 1em;
    }

    .form {
        padding: 20px;
        display: block;
        margin: auto;
        background-color: transparent;
        box-shadow: 5px 3px 30px 7px #131212;
        opacity: 0.8;
        border-radius: 20px;
    }
</style>

<body>
    <div class="container">
        <div class="col-md-6">
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
        </div>

        <div class="">
            <h3>BMI Anda Adalah : <b><?php echo number_format($hasilbmi); ?></b></h3>
            <hr>

            

        </div>
    </div>

</body>


</html>