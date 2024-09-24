<?php
    define('num', 2);
    $num = readline("Enter your number\n...");
    echo "\n";
    for($n = 1; $n <= 10; $n++)
    {
        echo $n*$num;
        echo "\n";
    }

    for ($i=1; $i<5; $i++)
    {
        echo "a";
    }
    echo $i;

    foreach( range('Z', 'A') as $elements)
    {
    echo $elements. ",";
    }
?>