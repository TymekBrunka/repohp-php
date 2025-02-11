stary:

if (!isset($conn)){
    die("mesarz ".mysqli_connect_error());
}

nowy:

try {
    ...
} catch (Exception $error ) {
    print_r($error);
    ...
}

if(mysqli_connect_errno() != 0) {
    echo "Wystąpił błąd, nie jesteśmy zgubieni.</br>"
}

znak @ - wyłączenie komunikatów z danej operacji np @new

phpinfo();