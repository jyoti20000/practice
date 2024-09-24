<!-- [Code for register_submit.php] -->
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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name, email, password) VALUES ('$name' '$email', '$password')";

    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo "Error:" .mysqli_error($conn);
        exit;
    }
    echo "Registration Successful";
    mysqli_close($conn);

    // echo $name . "<br/>";
    // echo $email . "<br/>";
    // echo $password . "<br/>";
?>