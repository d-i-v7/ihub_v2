<?php

include "security.php";

if(isset($_SESSION['true'])){

unset($_SESSION['true']);
unset($_SESSION['user_name']);

header("location:../");

}

?>