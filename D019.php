<?php
$input_lines = trim(fgets(STDIN));
$a = explode(" ",$input_lines);
$b = substr($a[0], $a[1]-1, 1 );
echo $b;
?>
