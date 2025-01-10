<!-- IF USER VISIT THIS PAGE LOCATE A LOGIN PAGE TO CHEAK -->
<?php
SESSION_START();
if(isset($_SESSION['true'])){



}
else
{
    header("location:../auth/singin.php");
}

?>