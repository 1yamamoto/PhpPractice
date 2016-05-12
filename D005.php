<?php
$input_lines = trim(fgets(STDIN));

$a = explode(" ",$input_lines);

for($i = 0; $i < 10; $i++){
    if( $i < 9 )
        {echo $a[0]+$a[1]*$i. " ";}
    }
for($i = 1; $i < 10; $i++){
    if( $i = 9 )
        {echo $a[0]+$a[1]*$i;}
}
?>
