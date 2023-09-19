<?php


function printFibonacci($n) {
    $x = 0;
    $y = 1;

    echo "First $n Fibonacci numbers:\n";

    for ($i = 0; $i < $n; $i++) {
        echo $x . " ";

        $next = $x + $y;
        $x = $y;
        $y = $next;
    }
}


printFibonacci(15);


?>