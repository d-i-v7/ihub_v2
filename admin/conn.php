<?php

$host_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "ihub_v2";

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