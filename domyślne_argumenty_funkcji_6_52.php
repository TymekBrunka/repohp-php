<?php
    function styl($tekst, $kolor = "red") {
        echo "<p style=\"color: $kolor\">" . $tekst . "</p>";
    }
    styl("Tytuł", "blue");
    styl("Rozdział 1.", "green");
    styl("Treść");
?>