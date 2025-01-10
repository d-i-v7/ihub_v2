<!-- connection -->
<?php
include "security.php";
include 'conn.php';

if(isset($_POST['puplic'])){



$name=$_POST['name'];
$image=$_POST['image'];
$coment=$_POST['coment'];

$read=mysqli_query($conn,"SELECT * FROM current_coment where name='$name' and coment='$coment'");

if(mysqli_num_rows($read)>0){


    $_SESSION['error']="This Comment Is All Ready Post! ";
    $_SESSION['link']="p_comment.php";
    echo include "error.php";

}else{

$insert=mysqli_query($conn,"INSERT INTO current_coment (name,image,coment) VALUES('$name','$image','$coment')");



if($insert)
{

    $delate =mysqli_query($conn,"DELETE FROM p_coment WHERE name='$name'or coment='$coment'");
    if($delate){
    $_SESSION['success']="Successfully Puplic!";
    $_SESSION['link']="active_comment.php";
    echo include "success.php"; ;
}

}else{

    $_SESSION['error']="We Get Error Contact Code Builder <a href='https://wa.link/10ydm8'></a> ";
    $_SESSION['link']="p_comment.php";
    echo include "error.php";
}
}
}

?>