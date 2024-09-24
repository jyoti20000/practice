<?php
    function get_max($a, $b)
    {
        if($a > $b)
        {
            return $a;
        }
        else
        {
            return $b;
        }
    }
    $max = get_max(5, 10);
    echo "The maximum value is ". $max."\n";

    function get_min($a, $b = 5)
    {
        if($a > $b)
        {
            return $a;
        }
        else 
        {
            return $b;
        }
    }
    $min = get_min(2) . "";
    echo "The minimum value is ". $min;
?>