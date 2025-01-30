<?php
    function napis() {
        echo "<h2>Programuj w PHP!</h2>";
    }

    napis();
?>

<?php
    function dodaj($a, $b) {
        $c = $a + $b;
        echo "Wynik dodawania $a i $b to " . $c;
    }

    dodaj(15, 37);
?>