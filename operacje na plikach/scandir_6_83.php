<?php
    $katalog = "./";
    $tablica = scandir($katalog); //zwraca tablicę zawierającą wszystkie itp.
    foreach($tablica as $plik) {
        echo "$plik<br>";
    }
?>