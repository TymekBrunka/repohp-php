<?php
if (!$p = fopen('dane.txt', 'r')) {
	exit("Nie można otworzyć pliku dane.txt"); // jest jeszcze die co można stosować zamiennie
	// można wprowadzić komunikat lub kod wyjścia z zakresu 0-254 (255 jest zarezerwowany dla php)
}
else {
	// wykonanie działań na danych
}
?>