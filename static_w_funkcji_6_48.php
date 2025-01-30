<?php
    function funk() {
        static $i = 1; //static działa jak w oop (jest przypisany do 'klasy' funkcji)
        echo "Funkcja wywołana $i raz(y) <br>";
        $i++;
    }
    funk();
    funk();
    funk();
?>