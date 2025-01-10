<?php
// include connection
include "security.php";
include "conn.php";
error_reporting(false);
// User id 
$id=$_SESSION['user_id'];

// Reading Old Password
$read_old_pass=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");

if(mysqli_num_rows($read_old_pass)>0){


$row=mysqli_fetch_assoc($read_old_pass);

$old_password=$row['my_password'];

}

if(isset($_POST['submit'])){

$enter_old_password=$_POST['old_password'];
$user_name=$_POST['user_name'];
$email=$_POST['email'];
$new_password =$_POST['new_password'];

// Assuming $old_password is already defined

if (empty($new_password)) {
    $new_password = $old_password;
} else {
    $new_password = isset($_POST['new_password']) ? $_POST['new_password'] : $new_password;
}

// Now $new_password is updated according to your conditions


if(empty($enter_old_password)||empty($user_name)|| empty($email)){

    $_SESSION['error']="PLease Submit A Complate Form";
    $_SESSION['link']="account.php";
        echo include "error.php";
}else if($enter_old_password==$old_password){

$update=mysqli_query($conn,"UPDATE users Set my_password='$new_password',user_name='$user_name',email='$email'");

if($update){

    $_SESSION['success']="Updated Successfully!";
    $_SESSION['link']="account.php";
    echo include "success.php"; ;


}


}else{

    $_SESSION['error']="Incorrect Old Password!";
    $_SESSION['link']="account.php";
        echo include "error.php"; 

}
}



?>
