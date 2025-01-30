<?php
$p = 'plik.txt';
if (is_file($p)) {
    echo "To jest plik<br>";
    echo filesize($p);
}
?>