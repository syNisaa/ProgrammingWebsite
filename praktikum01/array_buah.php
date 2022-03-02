<?php

    $buah = ["Pepaya","Mangga","Apel","Jambu"];

    echo "Index ke 2". $buah[2];
    echo "<br> Jumlah Buah :". count($buah);

    echo '<ol>';
    foreach($buah as $b){
        echo '<li> '. $b .'<li>';
    }
    echo '</ol>';
    

?>