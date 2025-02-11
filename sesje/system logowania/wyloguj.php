<?php
session_start();
if (isset($_SESSION['log'])) {
unset($_SESSION['log']); // usunięcie danych logowania (bo usuwanie sesji nie usuwa danych)
} else {
header('location: loguj.php');
exit;
}
$s = session_destroy(); // usuwanie sesji
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Koniec_sesji</title>
<meta charset="UTF-8">
</head>
<body>
<p>Wylogowałeś się ze strony.</p>
<a href="loguj.php">Logowanie</a>
</body>
</html>