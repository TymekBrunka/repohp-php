<table border>
<?php
    echo "<tr?<td> </td>";
    for ($i = 0; $i <= 10; $i++){
        echo "<tr>";
        if ($i == 0) {
            echo "<th> </th>";
            for ($j = 1; $j <= 10; $j++){
                echo "<th>$j</th>";
            }
        } else {
            echo "<th>$i</th>";
            for ($j = 1; $j <= 10; $j++){
                echo "<td>$j</td>";
            }
        }
        echo "</tr>";
    }
?>
</table>