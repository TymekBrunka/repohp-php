<?php
for ($i = 0; $i <= 30; $i++) {
 if (($i % 3) != 0) continue; //pomija
 echo "$i; ";
}
?>