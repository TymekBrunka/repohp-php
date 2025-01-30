<?php
    $katalog = "./";
    if ($deskr = opendir($katalog)) { //tworzy deskryptor folderu
        while (($plik = readdir($deskr)) !== false) { //przesuwamy wskaźnik za każdym odczytem
            echo "$plik<br>";
        }
        closedir();
    } else {
        echo "Nie można otworzyć katalogu";
    }
?>