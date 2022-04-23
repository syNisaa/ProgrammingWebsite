<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
    }
</style>
<body class="sb-nav-fixed container mt-5">
    <div id="layoutSidenav">
        
        <?php require_once 'index.php'; ?>
        <div id="layoutSidenav_content">
        <?php require_once 'index.php'; ?>

            <h4>Daftar Akun Bank</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NO.</th>
                        <th scope="col">No.Account</th>
                        <th scope="col">Saldo</th>
                        <th scope="col">Pemilik</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>C001</td>
                        <td>6000000</td>
                        <td>Ahmad</td>
                    <tr>
                    <tr>
                        <td>2</td>
                        <td>C002</td>
                        <td>5350000</td>
                        <td>Budi</td>
                    <tr>
                    <tr>
                        <td>3</td>
                        <td>C003</td>
                        <td>2500000</td>
                        <td>Kurniawan</td>
                    <tr>
                </tbody>
            </table>
            <?php
            include_once('index.php');
            require_once 'praktikum05/Akun_Bank/class_akunBank.php';
            require_once 'praktikum05/Akun_Bank/class_akun.php';

            echo '';

            $ab1 = new BankAccount('C001', 6000000, 'Ahmad');
            $ab2 = new BankAccount('C002', 5350000, 'Budi');
            $ab3 = new BankAccount('C003', 2500000, 'Kurniawan');

            
            echo '<hr>';
            echo '<h5>Ahmad Menabung Rp.1.000.000</h5>';
            echo '<hr width=40%>';
            $ab1->cetak();
            $ab1->deposit(1000000);
            echo '<br><hr><h5>Setelah Menabung</h5>';
            $ab1->cetak();
            echo '<hr width=40%>';
            echo '<h5>Ahmad Transfer ke Budi Rp.500.000 dan Kurniawan Rp.1.500.000</h5>';
            $ab1->transfer($ab2, 500000);
            $ab1->transfer($ab3, 1500000);
            echo '*Biaya Transfer Rp.6.000';
            echo '<br><h5><hr>Sesudah transfer</h5>';
            echo '<h6>Akun Ahmad</h6>';
            $ab1->cetak();
            echo '<hr width=40%>';
            echo '<h6>Akun Budi</h6>';
            $ab2->cetak();
            echo '<hr width=40%>';
            echo '<h6>Akun Kurniawan</h6>';
            $ab3->cetak();
            echo '<hr width=40%>';
            echo '<h3>Budi Tarik Uang Rp.2.500.000</h3>';
            $ab2->cetak();
            $ab2->TarikUang(2500000);
            echo '<br><hr><h5>Sesudah Tarik Uang</h5>';
            $ab2->cetak();
            echo '<hr>';

            ?>