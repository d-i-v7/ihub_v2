<?php

session_start();
include("conn.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $_SESSION['name'] = $name;
    $nameka = $_SESSION['name'];
    $phone = $_POST['phone'];
    $_SESSION['phone'] = $phone;
    $sex = $_POST['sex'];
    $_SESSION['sex'] = $sex;
    $address = $_POST['adress'];
    $_SESSION['address'] = $address;

    if (empty($name) || empty($phone) || empty($sex) || empty($address)) {
        $_SESSION['aff_error'] = "Please submit a complete form";
        header("location:./");
    } else {
        $read = mysqli_query($conn, "SELECT * FROM students WHERE phone ='$phone' AND name='$name'");
       
        if ($read && mysqli_num_rows($read)) {
            $_SESSION['aff_error'] = "$name, you are already registered. Please wait for 24 hours. We will message you. Thanks $name";
            header("location:./");
        } else {
            $insert = mysqli_prepare($conn, "INSERT INTO students (name, phone, sex, address) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($insert, 'ssss', $name, $phone, $sex, $address);
            mysqli_stmt_execute($insert);

            if ($insert) {
                $_SESSION['aff_success'] = "$name, registered successfully. Please wait for 24 hours. We will message you. Thanks $name";
                header("location:./");
            } else {
                $_SESSION['aff_error'] = "There was an error. Please contact us at Whatsapp Number +252615546003!";
                header("location:./");
            }
        }
    }
}
?>
