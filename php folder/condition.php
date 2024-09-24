<?php
    //  😂😂if-else condition code
    $a = 10;
    if($a%2 == 0) 
    {
        echo "It is an even number\n";
    }
    else
    {
        echo "It is an Odd number\n";
    }
    echo "Thank you...";

    // 😊 if-elseif-else condition code😊

    $marks = 95;
    if ($marks > 95)
    {
        echo "Exellent";
    }
    elseif ($marks > 80)
    {
        echo "A";
    }
    elseif ($marks > 70)
    {
        echo "B";
    }
    elseif ($marks > 60)
    {
        echo "C";
    }
    elseif ($marks > 50)
    {
        echo "D";
    }
    else
    {
        echo "FAIL";
    }

    // ❤️😍 SWITCH statement❤️😍

    $b = 20;
    $c = 10;
    $operation = "+";
    
    switch ($operation)
    {
        case "+":
            echo $b + $c;
            break;
        
        case "-":
            echo $b - $c;
            break;
        
        case "*":
            echo $b * $c;
            break;

        case "/":
            echo $b / $c;
            break;

        case "%":
            echo $b % $c;
            break;
            
        default:
            echo "This operation is not yes supporeted...";


    }

    // 😍QUESTION😍

    $i = 0;
    while ($i < 5)
    {
        $i++;
        echo $i."";
    }


?>