<?php
    if (!$p = fopen('dane.txt', 'r')) {
        echo "Nie można otworzyć pliku dane.txt";
    } else {
        while (($z=fgetc($p)) !== false) { //pobieranie pojedynczego ZNAKU(nie bajtu)
            echo $z;
        }
        fclose($p);
    }
?>