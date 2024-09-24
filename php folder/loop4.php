<?php
    // $arr = array(2,3,4,5,6);
    // foreach($arr as $num)
    // {
    //     echo $num."";
    // }

    // $num = array(1,2,3,4,5,6,7,8,9,10);
    // $sum = 0;
    // foreach ($num as $num)
    // {
    //     // $sum = $sum + $num;
    //     if ($sum > 20)
    //     {
    //         // break;
    //         continue;
    //     }
    //     $sum = $sum + $num;
    // }
    // echo $sum. "" . $num;

    // $fruits  = array("apple"=>160, "pomig"=> 120, "papaya" => 40, "mango"=> 90);
    
    // foreach ($fruits as $fruit => $price)
    // {
    //     // $sum = $sum + $num;
    //     if ($price > 100)
    //     {
    //         // break;
    //         // continue;
    //         echo $fruit ."is expensive";

    //     }
    //     else if ($price < 50 )
    //     {
    //         echo $fruit ."is chip";
    //     }
        
    // }
function swap (&$a, &$b ){
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    echo $a ."" .$b ."";
    // echo $b ."";
    // echo $sum. "" . $num;

}
$a = 10;
$b = 20;
swap($a , $b);
echo $a ."" .$b;
?>