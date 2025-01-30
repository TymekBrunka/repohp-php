<?php
    function fib($pierwszy, $ile) {
        $o1 = 1;
        $o2 = 1;
        $suma = 0;
        for ($i = 3; $i < $pierwszy; $i++) {
            $suma = $o1 + $o2;
            $o1 = $o2;
            $o2 = $suma;
        }
        $end = $pierwszy + $ile;
        for ($i = $pierwszy; $i < $end; $i++) {
            $suma = $o1 + $o2;
            if ($suma > 50) { return; }
            $o1 = $o2;
            $o2 = $suma;
            echo "fibbonaci: element: $i, wartość: $suma<br>";
        }
    }
    fib(4, 7);
?>