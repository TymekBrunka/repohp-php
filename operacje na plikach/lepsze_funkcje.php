<?php
    $przeczytano = readfile('dane.txt'); //od razu wypisuje
    echo "<br><br>Przeczytano $przeczytano bajtów.<br><br>";

    echo file_get_contents('dane.txt'); //zwraca string | false

    file('nazwa_pliku'); // zwraca cały plik jako tablicę wierszy
    /* Argumentem jest nazwa
odczytywanego pliku. Funkcja może mieć drugi opcjonalny argument, który może
przyjmować jedną z wartości:
q FILE_USE_INCLUDE_PATH — po nazwie opcji powinny zostać wymienione katalogi, które zostaną przeszukane, jeżeli wskazanego pliku nie będzie w bieżącym
katalogu.
q FILE_IGNORE_NEW_LINES — opcja ignoruje znaki końca linii.
q FILE_SKIP_EMPTY_LINES — opcja ignoruje puste linie. */

?>