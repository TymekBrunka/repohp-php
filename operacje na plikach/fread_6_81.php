<?php
    if (!$p = fopen('dane.txt', 'r')) {
        echo "Nie można otworzyć pliku dane.txt";
    } else {
        while (!feof($p)) {
            $b = fread($p, 32); // zczyta 32 bajty
            echo "$b<br>";
        }
        fclose($p);
    }
?>