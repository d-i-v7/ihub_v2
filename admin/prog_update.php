<?php
// include connection
include "security.php";
include "conn.php";
$serv_id= $_SESSION['prog_id'];
if(isset($_POST['submit'])){

$topic=$_POST['topic'];
$text=$_POST['text'];

    
    if(empty($text)&& empty($topic)){

        $_SESSION['error']="PLease Submit A Complate Form";
        $_SESSION['link']="update_Program.php";
            echo include "error.php";

    }else{
        // CREATING A UPDATE QUERY

        $read_ch=mysqli_query($conn,"SELECT * FROM our_prog where topic='$topic' AND text='$text'");

        if(mysqli_num_rows($read_ch)>0)
        {
            $_SESSION['error']="This Program You Are All Ready Added!";
            $_SESSION['link']="update_Program.php";
            echo include "error.php";

        
        }else{
// CREATING A INSET QUERY
 
$update=mysqli_query($conn,"UPDATE `our_prog` SET `topic`='$topic',`text`='$text' WHERE id='$serv_id'");
if($update)
{
    $_SESSION['success']="Updated Your Program!";
    $_SESSION['link']="our_prog.php";
    echo include "success.php"; ;


}


}
    }
}
?>