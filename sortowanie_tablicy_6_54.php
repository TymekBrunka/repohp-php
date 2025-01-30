<?php
$tab = array(3, 2, 5, 7, 9, 0, 1, 4);
echo "Zawartość tablicy przed sortowaniem: <br>";
foreach ($tab as $x) {
    echo "$x ";
}
sort($tab); //działa tylko na tablicach indeksowanych (rsort aby posortować malejąco)
echo "<br>Zawartość tablicy po sortowaniu: <br>";
foreach ($tab as $x) {
    echo "$x ";
}
?>