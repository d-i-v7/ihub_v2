<?php
// include connection
SESSION_START();
include "conn.php";
if(isset($_POST['submit'])){

$val_topic=$_POST['val_topic'];
$val_text=$_POST['val_text'];

    
    if(empty($val_text)|| empty($val_topic)){

        $_SESSION['error']="PLease Submit A Complate Form";
        $_SESSION['link']="our_val.php";
            echo include "error.php";

    }else{

        $read_ch=mysqli_query($conn,"SELECT * FROM our_val where val_topic='$val_topic' AND val_text='$val_text'");

        if(mysqli_num_rows($read_ch)>0)
        {
            $_SESSION['error']="This Value You Are All Ready Added!";
            $_SESSION['link']="our_val.php";
            echo include "error.php";

        
        }else{
// CREATING A INSET QUERY
 
$insert=mysqli_query($conn,"INSERT INTO our_val (`val_text`,`val_topic`)values('$val_text','$val_topic')");

if($insert)
{
    $_SESSION['success']="Added Your Value!";
    $_SESSION['link']="our_val.php";
    echo include "success.php"; ;


}


}
    }
}
?>
