<?php
$a = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$b = trim(fgets(STDIN));
foreach ($a as $key => $value) {if($value==$b){
    echo $key+1;
}
}

?>
