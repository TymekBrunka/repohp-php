<?php
session_start();
if (!isset($_SESSION['ile'])) {
$_SESSION['ile'] = 0;
}
$_SESSION['ile']++;
echo "<p>Odwiedziłeś " . $_SESSION['ile'] . " razy nasze strony.</p>";
?>