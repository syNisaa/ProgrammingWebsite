<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Praktikum 2 - Belanja </title>

<form method="POST" action="form_belanja.php">
    <input type="text" name="customer" id="customer">
    <button>Login</button>
    </div>
</form>
<?php # membuka tag PHP

$customer = @$_POST['customer'];
$jumlah = $_POST['jumlah'];
$produk = $_POST['produk'];

echo $customer, $jumlah, $produk;
?>