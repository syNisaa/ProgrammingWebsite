<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #d9edff;
        }
    </style>
    <title>Praktikum 2 - Belanja </title>
</head>

<body>

    <div class="container mt-5">
        <b>
            <h5>Belanja Online | <small>NF MART</small></h5>
        </b>
        <hr>
        <div class="row">
            <form method="POST" class="col-md-8">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input value="" id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci">
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>


                </div>

                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah Barang..." type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Kirim </button>
                    </div>
                </div>

            </form>





            <div class="list-group col-md-4">
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Daftar Harga
                </button>
                <button type="button" class="list-group-item list-group-item-action">TV : 4.200.000</button>
                <button type="button" class="list-group-item list-group-item-action">Kulkas : 3.100.000</button>
                <button type="button" class="list-group-item list-group-item-action">MesinCuci : 3.800.000</button>

                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Daftar Harga Dapat Berubah
                </button>
            </div>

        </div>

        <hr>

        <?php


        $customer = @$_POST['customer'];
        $jumlah = @$_POST['jumlah'];
        $produk = @$_POST['produk'];


        if ($produk == "TV") {
            $total = $jumlah * 4200000;
        } else if ($produk == "kulkas") {
            $total = $jumlah * 3100000;
        } else if($produk == "mesincuci"){
            $total = $jumlah * 3800000;
        }
        ?>

        <div class="card" style="width: 18rem; background-color:#ccdeed;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $produk ?></h5><hr>
                <p class="card-text">Nama Customer : <?php echo $customer ?></p>
                <p class="card-text">Jumlah Quantity : <?php echo $jumlah ?></p>
                <b>
                    <p class="card-text">Total Harga : Rp. <?php echo @$total ?></p>
                </b>
            </div>
        </div>

    </div>



</body>

</html>