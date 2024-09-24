<?php
    $abc = "Hello World";

    function a()
    {
        $GLOBALS['abc'] = "Hey";
        echo $GLOBALS['abc'];
    }
    a();
    echo $abc;
 ?>