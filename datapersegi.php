<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <?php require_once 'index.php'; ?>
        <div id="layoutSidenav_content">
            <?php
            include_once('index.php');
            require_once 'praktikum04/class_persegi.php';

            $persegi1 = new persegi(10);
            $persegi2 = new persegi(4);

            echo "SISI PERSEGI 1 = 10 <br> Sisi Persegi 2 = 4<br>";
            echo "<br>Luas Persegi 1 =" . $persegi1->luas();
            echo "<br>Keliling Persegi 1 = " . $persegi1->keliling();
            echo "<br>Luas Persegi 2 = " . $persegi2->luas();
            echo "<br>Keliling PErsegi 2 =" . $persegi2->keliling();
            ?>