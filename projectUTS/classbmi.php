<?php 

    class Bmi{
        public $berat;
        public $tinggi;
        public $bmi;

        function __construct($berat,$tinggi)
        {
            $this->berat = $berat;
            $this->tinggi = $tinggi;
        }

        function hitungbmi()
        {
            @$mTinggi = $this->tinggi / 100;
            @$bmi = $this->berat / (@$mTinggi * @$mTinggi);
            // echo $mTinggi."<br>";
            // echo $this->tinggi. "<br>";
            // echo $this->berat. "<br>";
            // echo number_format($bmi);
            return $bmi;

            if ($bmi < 18.5){
                echo '<img src="kurangbobot.png">';
                $statusBmi = "Berat kamu Kurang... Yuk Semangat!";
            }else if($bmi >= 18.5 and $bmi <= 24.9){
                echo '<img src="sehat.png">';
                $statusBmi = "Wahh.. Pertahankan terus yaa!";
            }else if($bmi >= 25.0 and $bmi <= 29.9){
                echo '<img src="kelebihanbobot.png">';
                $statusBmi = "Udah mulai kelebihan nih.. Tetep Semangat Ya!";
            }else if($bmi  <= 30){
                echo '<img src="obesitas.png">';
                $statusBmi = "Semangat! Pasti Bisa!";
            }else{
                echo '<img src="timbang.png">';
                $statusBmi = "Yuk Cek Kesehatan mu";
            }
            echo $statusBmi;
        }
    }

    class BmiPasien{
        public function pasien(){
            
        }

        
    }
?>