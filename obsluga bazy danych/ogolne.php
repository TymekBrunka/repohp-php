<?php

//będzie działać w nowszej
try {
    @$connect = mysqli_connect('localhost', 'root', '', 'sklepy');
} catch (Exception $error) {
    echo "Wyłapano błędy </br>";
        echo "</pre>";
        print_r($error);
        echo "</pre>";
    echo $error->getCode() . $error->getMessage() . $error->getFile();
}
//a na razie zróbmy to w ten sposób
if (!$connect) {
    echo "Wyłapano błędy </br>";
    echo "<pre>";
    echo mysqli_connect_error();
    echo "</pre>";
    echo "</br>";
}

if (mysqli_connect_errno() == 0) {
    $sql="SELECT nazwa, opis, cena FROM podzespoly WHERE typy_id = 1";
    $query=mysqli_query($connect, $sql);
    echo "<pre>";
    print_r($query); // wypisuje strukturę zmiennej
    echo "</pre>";

    $query=mysqli_query($connect, $sql); // zwraca mysqli_result albo false
    $ile_kolumn = mysqli_field_count($connect); // z ostatniego zapytania

    $query=mysqli_query($connect, $sql); // czytanie przesuwa wskaźnik, trzeba odnawiać
    $ile_pol = mysqli_num_fields($query);

    $query=mysqli_query($connect, $sql);
    $ile_wierszy = mysqli_num_rows($query);

    $query=mysqli_query($connect, $sql);
    while ($wiersz = mysqli_fetch_row($query)) { // zczytuje wiersz z listy wierszy -> lista wyliczeniowa jak any[]
        echo($wiersz[0] . " " . $wiersz[1] . " " . $wiersz[2] . "<br>");
    }

    echo "<br>";

    $query=mysqli_query($connect, $sql);
    while ($wiersz = mysqli_fetch_assoc($query)) { // zczytuje wiersz z listy wierszy -> lista wyliczeniowa jak any[]
        echo($wiersz["nazwa"] . " " . $wiersz["opis"] . " " . $wiersz["cena"] . "<br>");
    }

    echo "<br>";

    $query=mysqli_query($connect, $sql);
    while ($wiersz = mysqli_fetch_array($query)) { // zczytuje wiersz z listy wierszy -> lista wyliczeniowa jak any[]
        echo($wiersz[0] . " " . $wiersz["opis"] . " " . $wiersz["cena"] . "<br>"); // niebywałe, nie da się tak nawet samemu
    }

    echo "<br>";

    $query=mysqli_query($connect, $sql);
    $wszystko = mysqli_fetch_all($query);
    echo "<pre>";
    print_r($wszystko); // wypisuje strukturę zmiennej <- tablica wyliczeniowa tablic wyliczeniowych, jak any[][]
    echo "</pre>";

    mysqli_close($connect);
} else {
    echo "Przecież są błędy</br>";
}

?>