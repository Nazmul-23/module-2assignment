<?php 
           //using for loop
function printEvanNumberFor($start,$end,$step){

    for($i=$start;$i<=$end;$i++){

        if($i%2==0){
            echo $i." ";
        }
    }
}

printEvanNumberFor(1,20,2);


  echo PHP_EOL;

                //using while loop

function printEvanNumberWhile($start, $end, $step)
{

    $x=$start;
while($x<=$end){
    if($x%2==0){
        echo $x." ";
    }
    $x++;
}

}

printEvanNumberWhile(1,20,2);
  echo PHP_EOL;


        //using doWhile loop



 function printEvanNumberDoWhile($start,$end,$step){

       $x=$start;

     do{
        if($x%2==0){
            echo $x." ";
        }

        $x++;
     }  
     while($x<=$end);

 }

 printEvanNumberDoWhile(1,20,2);



?>