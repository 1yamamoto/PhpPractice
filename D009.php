<?php
$input_lines = trim(fgets(STDIN));

$a = explode(" ",$input_lines);
echo $a[1]-$a[0];

?>
