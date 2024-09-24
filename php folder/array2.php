<?php
    $years = array("Bill" => 1991, "George" => 2001);
    $students = array(
        "Amit" => array(
            "Physics" => 77,
            "Chemistry" => 86,
            "Math" => 84),
        
        "Chirag" => array(
            "Physics" => 86,
            "Chemistry" => 87,
            "Math" => 80),
        
        "Vandana" => array(
            "Physics" => 90,
            "Chemistry" => 98,
            "Math" => 99),
    );
    
    foreach($years as $name => $years)
    {
        echo $name." was first elected in ". $years. "\n";
    }

    foreach($students as $student => $subjects)
    {
        foreach($subjects as $subject => $mark)
        {
            echo $student . " has scored " . $mark . " in " . $subject . "\n";
        }
    }
?>

