<table border>
<?php
$oceny = array(
    "J. polski" => "2",
    "Matematyka" => "4",
    "Geografia" => "3",
    "Historia" => "5",
    "J. angielski" => "5"
);

foreach( $oceny as $k => $v ){
    echo "<tr><td>$k</td><td>$v</td></tr>";
}
?>
</table>