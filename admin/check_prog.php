<?php
// include connection
SESSION_START();
include "conn.php";
if(isset($_POST['submit'])){
error_reporting(false);
$topic=$_POST['topic'];
$text=$_POST['text'];

    
    if(empty($text)|| empty($topic)){

        $_SESSION['error']="PLease Submit A Complate Form";
        $_SESSION['link']="our_prog.php";
            echo include "error.php";

    }else{

        $read_ch=mysqli_query($conn,"SELECT * FROM our_prog where topic='$topic' AND text='$text'");

        if(mysqli_num_rows($read_ch)>0)
        {
            $_SESSION['error']="This Program You Are All Ready Added!";
            $_SESSION['link']="our_ser.php";
            echo include "error.php";

        
        }else{
// CREATING A INSET QUERY
 // CREATING A INSET QUERY
 // Copy to the second folder

$insert=mysqli_query($conn,"INSERT INTO our_prog (`text`,`topic`)values('$text','$topic')");

if($insert)
{
    $_SESSION['success']="Added Your Program!";
    $_SESSION['link']="our_prog.php";
    echo include "success.php"; ;


}


}
    }
}
?>
