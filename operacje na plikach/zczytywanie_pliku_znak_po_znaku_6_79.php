<?php
    if (!$p = fopen('dane.txt', 'r')) { // otwieranie do deskryptora pliku
        echo "Nie można otworzyć pliku dane.txt";
    } else {
        while (!feof($p)) {
            $w = fgets($p,100); // zczytywanie 100 ZNAKÓW(tak znakami, nie bajtami) z pliku
            echo "$w<br>";
        }
        fclose($p);
    }
?>