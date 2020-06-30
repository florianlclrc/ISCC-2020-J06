<?php

$maximum = 100;
    function compterdizaine($maximum){
        $min = 1;
        while ($min < $maximum){
            $min - $min + 1;
            echo $min;
            echo "<br>";
                if ($min % 10 == 0){
                    echo  "Ceci est une dizaine";
                    echo "<br>";
                }
        }
    }
compterdizaine($maximum)
?>