<?php
// include connection
include "security.php";
include "conn.php";
// error_reporting(false);
if(isset($_POST['submit'])){

$id =1 ;

    // CREATING VARIBLES OF IMAGE
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    
    $folder1 = "uploads/";
    $folder2 = "../uploads/";
    
    $upload1 = $folder1 . $image_name;
    $upload2 = $folder2 . $image_name;
    
    // Move to the first folder
    move_uploaded_file($image_tmp, $upload1);
    
   
    
    if(empty($upload1)|| empty($image_name)||empty($image_tmp)|| empty($folder2)){

        $_SESSION['error']="PLease Submit A Complate Form";
        $_SESSION['link']="update_logo_slide.php";
            echo include "error.php";


    }else{

        $read_ch=mysqli_query($conn,"SELECT * FROM logo_slider where logo='$upload1'");

        if(mysqli_num_rows($read_ch)>0)
        {
            $_SESSION['error']="This Image You Are All Ready Added!";
            $_SESSION['link']="update_logo_slide.php";
            echo include "error.php";
        
        }else{
// CREATING A INSET QUERY
 // Copy to the second folder
 copy($upload1, $upload2);
$update=("UPDATE logo_slider set logo='$upload1' WHERE id='$id'");
$resault=mysqli_query($conn,$update);
if($resault)
{
    $_SESSION['success']="Updated Image!";
    $_SESSION['link']="setting.php";
    echo include "success.php"; ;

}else{

    echo "error baa jidha" ;
}


}
    }
}
?>