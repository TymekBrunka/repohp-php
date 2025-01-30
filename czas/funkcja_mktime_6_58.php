<?php
$czas = mktime(16, 30, 0, 10, 24, 2020);
echo "Data: dzień, miesiąc, rok, godzina:minuta <br>";
echo date("d-m-Y G:i", $czas) . "<br>";
echo "Data: rok, miesiąc, dzień, godzina:minuta:sekunda <br>";
echo date("Y-m-d G:i:s", $czas);
?>