<?php

    function clock(){
        $min = -1;
        while ($min < 59){
            $min = $min + 1;
            echo "00:$min";
            echo "<br>";
        }
        $heure = 0;
        while ($heure < 23){
            $heure = $heure + 1;
            echo "$heure:$min";
            echo "<br>";
        }
    }
clock();
?>