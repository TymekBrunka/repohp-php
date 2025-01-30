<?php
$data = getdate();
$dzien = $data["mday"];
$miesiac = $data["mon"];
$rok = $data["year"];
printf("Bieżąca data to: %02d-%02d-%04d r.<br>", $dzien, $miesiac, $rok); //moje fajne rozwiązanie %0 to dodanie 0 jako padding
if ($dzien < 10) $dzien = "0" . $dzien;
if ($miesiac < 10) $miesiac = "0" . $miesiac;
echo "Bieżąca data to: $dzien-$miesiac-$rok r.";

echo "<br>[<br>"; foreach (getdate() as $k => $x) { echo "&nbsp$k=>$x<br>"; } echo "]<br>";
/*
[
 seconds=>26
 minutes=>5
 hours=>11
 mday=>22
 wday=>5
 mon=>11
 year=>2024
 yday=>326
 weekday=>Friday
 month=>November
 0=>1732269926
]
*/
?>