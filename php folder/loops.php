<?php
    
    $n = 1;
    // $n = readline("Enter your number..\n");
    while ($n <= 10)
    {
        // echo $n*2;
        $n++;
        if($n == 5)
        {
            // break;
            continue; 
        }
        // $n++;
        echo $n*2;
        // ++$n;
    }
    // echo "Its is out from range";
?>