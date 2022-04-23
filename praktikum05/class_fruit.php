<?php

// class fruit{
//     public $name;
//     protected $color;
//     private $weight;
// }

// $mangga = New fruit();

// $bil = 7;

// switch ($bil) {

//     case 1:
//         echo "A";
//         break;

//     case 2:
//         echo "B";
//         break;

//     case 3:
//         echo "C";
//         break;

//     default:
//         echo "D";
// }

// $x = 1;

// do {
//     echo $x . " ";
//     $x++;
// } while ($x > 2);

// for ($x = 1; $x < 10; $x++) {
//     echo $x." ";
//   }

//   function salam($nama="nurul"){

//     echo "Selamat Datang $nama";

// }

// salam();

// $nama = "anisa";
// $umur = 'hallo';

// echo $nama,$umur;

// echo "<br>";

// $x =20;

// $y =12;

// if($y>=$x){

// echo $y;

// }else{
//     echo "hahahha";
// }


class matakuliah{
    public $nama;
    public $sks;
    public $batas_lulus;

    function __construct($nama,$sks)
    {
        $this->nama = $nama;
        $this->sks = $sks;
        $this->batas_lulus = 70;
    }

    public function cetak(){
        echo 'Matakuliah : '.$this->nama;
        echo '<br> SKS : '.$this->sks;
    }

    public function kelulusan($nilai){
        $hasil = ($nilai >= $this->batas_lulus) ? "Lulus":"tidaklulus";
        return $hasil;
    }
}

$mk1 = new matakuliah("statistik","3");
$mk1->cetak();
echo $mk1->kelulusan(80);

$namasiswa = "anisa";

// echo len($namasiswa);

// count($namasiswa);

// strcount($namasiswa);

echo strlen($namasiswa);

$_umur = 18;
$status = ($_umur >= 17) ? "Dewasa" : "Anak-Anak";
echo $status;