<?php
$napis = "napis";
//składnia heldog
//TX to przypadkowy id
$tekst = <<<TX
 Tutaj rozpoczyna się $napis
TX; //nie dajesz wcięcia w tej linii bo to wywali  (może być ale równe czemuś np 2 lini w górę)
echo $tekst;
?>