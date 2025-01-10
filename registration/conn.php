<?php

$host_name = "localhost";
$user_name = "himilo_ihub2";
$password = "KXDFez8Tw;cE";
$db_name = "himilo_ihub2";

$conn=new mysqli($host_name,$user_name,$password,$db_name);

if($conn->connect_error)
{
    echo $conn->error;
}
else
{
    // echo "Waa Guul";
}

?>