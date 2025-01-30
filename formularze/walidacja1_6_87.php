<?php
if (!isset($_POST['wykszt'])) {
	echo "<br>Proszę zaznaczyć pole <b>Wykształcenie</b>";
} else {
	echo "<br>Zostało wybrane wykształcenie: {$_POST['wykszt']}.";
}
?>

<!--

na egz
<label>Cena <input type="text"></label>

inaczej
<label for="cena">Cena</label>
<input type="text" name="cena">
-->