<?php
try {
    @$connect = new mysqli('localhost', 'root', '', 'sklepy');
} catch (Exception $error) {
    echo "Wyłapano błędy </br>";
        echo "</pre>";
        print_r($error);
        echo "</pre>";
    echo $error->getCode() . $error->getMessage() . $error->getFile();
}

if (mysqli_connect_errno() == 0) {
    echo "Wyszystko działa";
    $connect->close();
} else {
    echo "<p>Wystąpił błąd połączenia ale pracuję dalej </br>";
    echo mysqli_connect_error();
    echo "</p>";
}
?>