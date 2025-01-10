<?php
// include connection
include "security.php";
include "conn.php";
$link_id= 1;
error_reporting(false);
if(isset($_POST['submit'])){

$fb=$_POST['fb_link'];
$in=$_POST['in_link'];
$tw=$_POST['tw_link'];


    
    if(empty($fb)&& empty($in)&& empty($tw)){

        $_SESSION['error']="PLease Submit A Complate Form";
        $_SESSION['link']="setting.php";
            echo include "error.php";

    }else{
        // CREATING A UPDATE QUERY

        $read_ch=mysqli_query($conn,"SELECT * FROM footer where fb_link='$fb' AND in_link='$in' AND tw_link='$tw'");

        if(mysqli_num_rows($read_ch)>0)
        {
            $_SESSION['error']="This Link You Are All Ready Added!";
            $_SESSION['link']="setting.php";
            echo include "error.php";

        
        }else{
// CREATING A INSET QUERY
 
$update=mysqli_query($conn,"UPDATE `footer` SET `fb_link`='$fb',`tw_link`='$tw' ,`in_link`='$in' WHERE id='$link_id'");
if($update)
{
    $_SESSION['success']="Updated Your Link!";
    $_SESSION['link']="setting.php";
    echo include "success.php"; ;


}


}
    }
}
?>
