<?php
$input_lines = trim(fgets(STDIN));
$n = $input_lines;
$a = $n%2;
if($a == 0){
    echo "even";
}
else{
    echo "odd";
}
?>
