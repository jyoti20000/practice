<?php
    $abc = "Hello Jyoti";
    $namaste = "Sharma";

    function a()
    {
        $abc = "Hey"; //upr hmne $abc = hello jyoti ko as a gloable variable difine kiya h
        echo $abc;    // but ab yha hmne function ke andar phir se same $abc naam ka variable bnaya hai
    }            // jo as a local and new variable ki trh kaam krega aur usme hmne value "hey" di h.
    // to ye function "hey" ko print krega.

    function b()
    {
        echo $abc . "\n"; // ye undefined variable ko print krega.
    }

    function c()
    {
        global $namaste; // yha hmne global variable ko access kiya using "global keyword"
        $namaste = "Vish"; // ab agr hm yha new variable bnaye same name se to ye function new variable create nhi krega.
        echo $namaste. "\n";  // and global variable ko hi refer krega but variable ke value ko replave kr dega.
    }

    a();  // yha pr hmne function "a" and function "b" ko call kiya hai. 
    b();
    c();
    echo $abc;  //aur yha pr hmara gloable variable print hoga.
    echo $namaste;


?>