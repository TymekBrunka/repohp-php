<?php
strtoupper(argument); // działają tylko na ascii
strtolower(argument); // działają tylko na ascii
mb_strtoupper(argument, {kodowanie}); // działają na UTF-8 lecz trzeba podać kodowanie
mb_strtolower(argument, {kodowanie}); // działają na UTF-8 lecz trzeba podać kodowanie

ucfirst(argument); // pierwszy znak na duży
ucwords(argument); // pierwsze litery wyrazów na duże

trim();
ltrim();
rtrim();

strlen(argument); // działa tylko na ascii
mb_strlen(argument); // działa na UTF-8

strstr(argument1, argument2); // sprawdza czy argument2 jest zawarty w argument1 -> (false, cziąg od wystąpienia argument2)
stristr(argument1, argument2); // sprawdza czy argument2 jest zawarty w argument1 -> (false, cziąg od wystąpienia argument2) (ignoruje wielkość znaków)

strpos(argument1, argument2, argument3(opcjonalny)); // zwraca położenie argument2 w argument1 zaczynając od argument3 -> (false, pozycja)

substr(argument1, pocz, ile(opcjonalny)); // zwraca podciąg z argument1 o długości ile zaczynając pocz znaków od lewej dla pocz >= 0 a -pocz znaków od prawej dla pocz < 0

strtok(argument1(opcjonalny po 1. użyciu), argument2); // zwraca podciąg z argument1 podzielony za pomocą ciągu argument2 (zwraca false jeśli nie może go podzielić) (zapisuje wskaźnik z ostatniego użycia funkcji)
//^nie zwraca ciągu dzielącego
strcmp(str1, str2); // porównuje ciągi jak liczby (0 jeśli są równe) jeżeli str1 < str2 to -> return < 0 (Nie uwzględnia wielkości znaków)
strcasecmp(str1, str2); // porównuje ciągi jak liczby (0 jeśli są równe) jeżeli str1 < str2 to -> return < 0 (Uwzględnia wielkości znaków)
?>
