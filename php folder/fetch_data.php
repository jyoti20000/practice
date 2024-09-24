<?php
    $db_hostname = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "test1";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if(!$conn)
    {
        echo "Connection Failed! ".mysqli_connect_error();
        exit;
    }

    $sql = "SELECT *FROM users";

    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo "Error:" .mysqli_error($conn);
        exit;
    }

    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['name'] . "<br/>";
    }
    mysqli_close($conn);

    // echo $name . "<br/>";
    // echo $email . "<br/>";
    // echo $password . "<br/>";
?>