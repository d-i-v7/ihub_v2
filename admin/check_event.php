<?php
// include connection
include "conn.php";
if(isset($_POST['submit'])){
// error_reporting(false);
$name=$_POST['name'];
$email=$_POST['email'];
$event=$_POST['event'];

    
    if(empty($email)|| empty($name)||empty($event)){

        $_SESSION['error']="PLease Submit A Complate Form";
        $_SESSION['link']="../index.php";
            echo include "error.php";

    }else{

        $read_ch=mysqli_query($conn,"SELECT * FROM event where name='$name' AND email='$email' and event='$event'");

        if(mysqli_num_rows($read_ch)>0)
        {
            $_SESSION['error']="This Event You Are All Ready Added!";
            $_SESSION['link']="../index.php";
            echo include "error.php";

        
        }else{
// CREATING A INSET QUERY
 // CREATING A INSET QUERY

$insert=mysqli_query($conn,"INSERT INTO event (`event`,`name`,`email`)values('$event','$name','$email')");

if($insert)
{
    $_SESSION['success']="Successfully Added Your event!";
    $_SESSION['link']="../index.php";
    echo include "success.php"; ;


}


}
    }
}
?>
