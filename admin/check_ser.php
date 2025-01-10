<?php
// include connection
SESSION_START();
include "conn.php";
if(isset($_POST['submit'])){
error_reporting(false);
$topic=$_POST['topic'];
$text=$_POST['text'];
$image_name=$_FILES['image']['name'];
$image_tmp_name=$_FILES['image']['tmp_name'];
$folder1 = "uploads/";
    $folder2 = "../uploads/";
    
    $upload1 = $folder1 . $image_name;
    $upload2 = $folder2 . $image_name;
    
    // Move to the first folder
    move_uploaded_file($image_tmp_name, $upload1);
    
    if(empty($text)|| empty($topic)){

        $_SESSION['error']="PLease Submit A Complate Form";
        $_SESSION['link']="our_ser.php";
            echo include "error.php";

    }else{

        $read_ch=mysqli_query($conn,"SELECT * FROM our_ser where topic='$topic' AND text='$text'");

        if(mysqli_num_rows($read_ch)>0)
        {
            $_SESSION['error']="This Service You Are All Ready Added!";
            $_SESSION['link']="our_ser.php";
            echo include "error.php";

        
        }else{
// CREATING A INSET QUERY
 // CREATING A INSET QUERY
 // Copy to the second folder
 copy($upload1, $upload2);
$insert=mysqli_query($conn,"INSERT INTO our_ser (`text`,`topic`,`image`)values('$text','$topic','$upload1')");

if($insert)
{
    $_SESSION['success']="Added Your Service!";
    $_SESSION['link']="our_ser.php";
    echo include "success.php"; ;


}


}
    }
}
?>
