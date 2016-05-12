<?php
$input_lines = trim(fgets(STDIN));
$a = explode(" ",$input_lines);
echo floor($a[0]/$a[1])." ".$a[0]%$a[1];

?>
