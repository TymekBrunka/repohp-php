<?php
    function c2($a, $b) {
        return ($a * $a) + ($b * $b);
    }

    function czyDaSieZrobicTrojkatProstokatny($a, $b, $c) {
        return c2($a, $b) == ($c * $c) || c2($a, $c) == ($b * $b) || c2($c, $b) == ($a * $a);
    } 

    printf("Czy da się zrobić trójkąt prostokątny z boków długości 3, 4 i 5 (0 - nie, 1 - tak): %b<br>", czyDaSieZrobicTrojkatProstokatny(3,4,5));
    printf("Czy da się zrobić trójkąt prostokątny z boków długości 5, 3 i 4 (0 - nie, 1 - tak): %b<br>", czyDaSieZrobicTrojkatProstokatny(5,3,4));
    printf("Czy da się zrobić trójkąt prostokątny z boków długości 4, 3 i 5 (0 - nie, 1 - tak): %b<br>", czyDaSieZrobicTrojkatProstokatny(4,3,5));
    printf("Czy da się zrobić trójkąt prostokątny z boków długości 1, 2 i 3 (0 - nie, 1 - tak): %b<br>", czyDaSieZrobicTrojkatProstokatny(1,2,3));
?>