<?php
// include connection
include "security.php";
include "conn.php";
$serv_id= $_SESSION['serv_id'];
if(isset($_POST['submit'])){

$topic=$_POST['topic'];
$text=$_POST['text'];
 // CREATING VARIBLES OF IMAGE
 $image_name = $_FILES['image']['name'];
 $image_tmp = $_FILES['image']['tmp_name'];
 
 $folder1 = "uploads/";
 $folder2 = "../uploads/";
 
 $upload1 = $folder1 . $image_name;
 $upload2 = $folder2 . $image_name;
 
    // Move to the first folder
    move_uploaded_file($image_tmp, $upload1);
    
    if(empty($text)&& empty($topic)&& empty($image_name)&& empty($upload1)){

        $_SESSION['error']="PLease Submit A Complate Form";
        $_SESSION['link']="update_service.php";
            echo include "error.php";

    }else{
        // CREATING A UPDATE QUERY
 // Copy to the second folder
 copy($upload1, $upload2);
        $read_ch=mysqli_query($conn,"SELECT * FROM our_ser where topic='$topic' AND text='$text' AND image='$image_name'");

        if(mysqli_num_rows($read_ch)>0)
        {
            $_SESSION['error']="This Services You Are All Ready Added!";
            $_SESSION['link']="update_service.php";
            echo include "error.php";

        
        }else{
// CREATING A INSET QUERY
 
$update=mysqli_query($conn,"UPDATE `our_ser` SET `topic`='$topic',`text`='$text',image='$upload1' WHERE id='$serv_id'");
if($update)
{
    $_SESSION['success']="Updated Your Services!";
    $_SESSION['link']="our_ser.php";
    echo include "success.php"; ;


}


}
    }
}
?>
