<?php
$a = trim(fgets(STDIN));
$b = trim(trim(fgets(STDIN)));
for($i=0; $i<$b; $i++){
    $c[$i] = trim(trim(trim(fgets(STDIN))));
}
for($i=0; $i<$b; $i++)
if(strstr($c[$i],$a)){
    $d[$i] = array($c[$i]);

}
else{
     echo $c[$i]."\n";

}
$count = count($d);
if($count==$b){
     echo "none";
}
?>
