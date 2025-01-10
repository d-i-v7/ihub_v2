<?php
// include connection
include "conn.php";
if(isset($_POST['submit'])){
error_reporting(false);
$name=$_POST['name'];
$coment=$_POST['coment'];
$image_name=$_FILES['image']['name'];
$image_tmp=$_FILES['image']['tmp_name'];
$folder1 = "uploads/";
    $folder2 = "../uploads/";
    
    $upload1 = $folder1 . $image_name;
    $upload2 = $folder2 . $image_name;
    
    // Move to the first folder
    move_uploaded_file($image_tmp, $upload1);
    
    if(empty($coment)|| empty($name)||empty($image_name)){

        $_SESSION['error']="PLease Submit A Complate Form";
        $_SESSION['link']="../index.php";
            echo include "error.php";

    }else{

        $read_ch=mysqli_query($conn,"SELECT * FROM p_coment where name='$name' AND coment='$coment'");

        if(mysqli_num_rows($read_ch)>0)
        {
            $_SESSION['error']="This Comment You Are All Ready Added!";
            $_SESSION['link']="../index.php";
            echo include "error.php";

        
        }else{
// CREATING A INSET QUERY
 // CREATING A INSET QUERY
 // Copy to the second folder
 copy($upload1, $upload2);
$insert=mysqli_query($conn,"INSERT INTO p_coment (`coment`,`name`,`image`)values('$coment','$name','$upload2')");

if($insert)
{
    $_SESSION['success']="Added Your Comment, Wait To Few Hours To cheack Your Coment!";
    $_SESSION['link']="../index.php";
    echo include "success.php"; ;


}


}
    }
}
?>
