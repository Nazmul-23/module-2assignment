<?php 

$x=0;
$y=1;

for($i=0;$i<10;$i++){

    if($x>100){
        break;
    }

    echo $x." ";
     
    $next=$x+$y;
    $x=$y;
    $y=$next;
}
?>