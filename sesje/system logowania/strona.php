<?php
session_start();
if (!isset($_SESSION['log'])) {
header('location: loguj.php'); //przekierowywuje
exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Strona główna</title>
<meta charset="UTF-8">
</head>
<body>
<?php
$imie = ucfirst($_SESSION['log']); //zamiana jak tYMeK na Tymek
echo "Witaj " . $imie;
?>
<p>Jesteś na stronie głównej.</p>
<p>Przed opuszczeniem strony wyloguj się!</p>
<a href="wyloguj.php">Wyloguj</a>
</body>
</html>

<!--
site
blockquote
q
-->