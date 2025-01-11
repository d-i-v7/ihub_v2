
<?php
SESSION_START();
if(isset($_SESSION['true'])){



}
else
{
    header("location:../auth/singin.php");
}

?>