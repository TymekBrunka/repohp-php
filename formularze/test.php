<form>
<input type="color" name="hhh" action="test.php" method="get">
<input type="submit">
</form>
<?php
@$color=$_GET['hhh'];
echo "<p>$color</p>";
?>