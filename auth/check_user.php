<?php
include "conn.php";
SESSION_START();
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
   

    if(empty($email)&& (empty($password)))
    {
        $_SESSION['error']="Email And Password Are Required!";
        header("location:singin.php");
    }
    else if(empty($email))
    {
        $_SESSION['error']="Email Is Required!";
        header("location:singin.php");
    }
    else if(empty($password))
    {
        $_SESSION['error']="Password Is Required! ";
        header("location:singin.php");
    }
    else
    {
        $read_email=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND my_password='$password'");
      $row=mysqli_fetch_assoc($read_email);
        if(mysqli_num_rows($read_email)>0){
            $_SESSION['true']=true;
            $_SESSION['user_id']=$row['id'];
            header("location:../admin/");

        }
        else
        {

            $read_user=mysqli_query($conn,"SELECT * FROM users WHERE user_name='$email' AND my_password='$password'");
            $row2=mysqli_fetch_assoc($read_user);
            if(mysqli_num_rows($read_user)>0){
                $_SESSION['true']=true;
                $_SESSION['user_id']=$row2['id'];
                header("location:../admin/");
    
            } else{
            $_SESSION['error']="Incorrect Usr Name Email Or Password!";
            header("location:singin.php");
        }

    }
    }

}
?>

