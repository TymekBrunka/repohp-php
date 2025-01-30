<?php
$Imiona1 = ["Konrad", "Olaf", "Andżej", "Beata", "Karolina", "Sebastian"];
$Imiona2 = ["Konrad", "Olaf", "Andżej", "Beata", "Karolina", "Sebastian"];
$alfabet1 = array(
    "d" => 4,
    "b" => 2,
    "a" => 1,
    "c" => 3,
    "h" => 8,
);
$alfabet2 = array(
    "d" => 4,
    "b" => 2,
    "a" => 1,
    "c" => 3,
    "h" => 8,
);
$alfabet3 = array(
    "d" => 4,
    "b" => 2,
    "a" => 1,
    "c" => 3,
    "gex" => 0,
);
$alfabet4 = array(
    "d" => 4,
    "b" => 2,
    "a" => 8,
    "c" => 3,
    "zenon" => 1,
);

echo "przed posortowaniem: <br>";
echo " ["; foreach ($Imiona1 as $x) { echo "$x "; } echo "]<br>";
echo " ["; foreach ($Imiona2 as $x) { echo "$x "; } echo "]<br>";
echo " ["; foreach ($alfabet1 as $k => $x) { echo "$k=>$x "; } echo "]<br>";
echo " ["; foreach ($alfabet2 as $k => $x) { echo "$k=>$x "; } echo "]<br>";
echo " ["; foreach ($alfabet3 as $k => $x) { echo "$k=>$x "; } echo "]<br>";
echo " ["; foreach ($alfabet4 as $k => $x) { echo "$k=>$x "; } echo "]<br>";
sort($Imiona1);
rsort($Imiona2);
asort($alfabet1);  //asocjacyjnej
arsort($alfabet2); //asocjacyjnej
ksort($alfabet3);  //asocjacyjnej (wzg. klucza)
krsort($alfabet4); //asocjacyjnej (wzg. klucza)
echo "<br>po posortowaniu: <br>";
echo " ["; foreach ($Imiona1 as $x) { echo "$x "; } echo "]<br>";
echo " ["; foreach ($Imiona2 as $x) { echo "$x "; } echo "]<br>";
echo " ["; foreach ($alfabet1 as $k => $x) { echo "$k=>$x "; } echo "]<br>";
echo " ["; foreach ($alfabet2 as $k => $x) { echo "$k=>$x "; } echo "]<br>";
echo " ["; foreach ($alfabet3 as $k => $x) { echo "$k=>$x "; } echo "]<br>";
echo " ["; foreach ($alfabet4 as $k => $x) { echo "$k=>$x "; } echo "]<br>";
?>