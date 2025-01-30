<?php
//4ty argument oznacza czy wymysić cięcie słów jeśli są dłuższe niż podana szerokość
$tekst = "Potrzebne informacje znajdują się pod adresem: ";
$tekst .= "http://helion.pl/kategorie/
podreczniki-szkolne/technik-informatyk";
echo wordwrap($tekst, 40, "<br>\n", true);
?>
