<?php
    $p='plik2.txt';
    if (!file_exists($p)){
        touch($p);
    }
    
    if (file_exists($p)){
        unlink($p);
    }
?>