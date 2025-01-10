<?php
// include connection
include "security.php";
include "conn.php";
if(isset($_POST['submit'])){

$val_topic=$_POST['val_topic'];
$val_text=$_POST['val_text'];

    
    if(empty($val_text)|| empty($val_topic)){

        $_SESSION['error']="PLease Submit A Complate Form";
        $_SESSION['link']="update_val.php";
            echo include "error.php";

    }else{

        $read_ch=mysqli_query($conn,"SELECT * FROM our_val where val_topic='$val_topic' AND val_text='$val_text'");

        if(mysqli_num_rows($read_ch)>0)
        {
            $_SESSION['error']="This Value You Are All Ready Added!";
            $_SESSION['link']="update_val.php";
            echo include "error.php";

        
        }else{
// CREATING A INSET QUERY
 
$update=mysqli_query($conn,"UPDATE `our_val` SET `val_topic`='$val_topic',`val_text`='$val_text' ");
if($update)
{
    $_SESSION['success']="Updated Your Value!";
    $_SESSION['link']="our_val.php";
    echo include "success.php"; ;


}


}
    }
}
?>
