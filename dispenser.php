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
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
    }
</style>

<body class="sb-nav-fixed container mt-5">
    <div id="layoutSidenav">

        <?php require_once 'index.php'; ?>
        <div id="layoutSidenav_content">
            <?php require_once 'index.php'; ?>
            <?php

            class Dispenser
            {
                protected $volume;
                protected $hargaSegelas;
                private $volumeGelas;
                public $namaMinuman;

                function  volume($vol)
                {
                    $this->volume = $vol;
                }
            }

            class Minuman extends Dispenser
            {
                public $uang;
                function __construct($uang, $namaMinuman, $volumeGelas, $harga)
                {
                    $this->uang = $uang;
                    $this->namaMinuman = $namaMinuman;
                    $this->hargaSegelas = $harga;
                    $this->volumeGelas = $volumeGelas;
                }

                function transaksi($uang)
                {
                    $this->uang = $uang;
                    return  $this->uang - $this->hargaSegelas;
                }

                function volumeSetelahdibeli()
                {
                    $this->volume = $this->volume - $this->volumeGelas;
                    return $this->volume;
                }

                function cetak()
                {
                    echo '<h5>' . 'Selamat Datang diDrink by Nisa! ' . '</h5>';
                    echo '<hr>';
                    echo 'Nama Minuman : ' . $this->namaMinuman . "<br>";
                    echo 'Uang Saat ini : ' . $this->uang . "<br>";
                    echo 'kapasistas (volume) Dispenser : ' . $this->volume . 'ml' . "<br>";
                    echo 'Harga Bayar Segelas Minuman : Rp.  ' . $this->hargaSegelas . "<br>";
                    echo 'Volume Dispenser setelah dibeli : ' . $this->volumeSetelahDibeli() . 'ml' . "<br>";
                    echo 'Sisa uang Anda : Rp.  ' . $this->transaksi($this->uang);
                    echo '<hr>';
                    echo '<h6>' . 'Terima Kasih Atas Kunjungan Anda ' . '</h6>';

                    echo '<h7>' . 'Barang Yang Sudah Dibeli Tidak Dapat Dikembalikan Lagi ' . '</h7>';
                    echo '<hr>';
                }
            }

            $minuman = new Minuman(88000, 'EsCream', 2500, 250);
            $minuman->transaksi($minuman->uang);
            $minuman->volume(4000);
            $minuman->cetak();
