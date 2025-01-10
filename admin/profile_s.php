<?php
// include connection
include "security.php";
include "conn.php";
// error_reporting(false);
if(isset($_POST['submit'])){

$id =$_SESSION['user_id'];

    

    $f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];


    // Move to the first folder

    
   
    
  if(empty($f_name)|| empty($l_name)|| empty($phone)||empty($email))
  {

    $_SESSION['error']="Please Submit A Complate Form!";
    $_SESSION['link']="profile_s.php";
    echo include "error.php"; 

  }else{

     
// CREATING A INSET QUERY
 // Copy to the second folder

$update=("UPDATE users set f_name='$f_name',l_name='$l_name',email='$email',phone='$phone'  WHERE id='$id'");
$resault=mysqli_query($conn,$update);
if($resault)
{
    $_SESSION['success']="Updated Successfully!";
    $_SESSION['link']="profile.php";
    echo include "success.php"; 

}else{

    echo "error baa jidha" ;
}


}
    
}
?>
