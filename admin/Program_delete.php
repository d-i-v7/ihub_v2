<?php
// Connect to your database here
include "security.php";
include  'conn.php';


    if(isset($_POST["id"])) {
        $id = $_POST["id"];

        // Perform the deletion query based on the $id
         $sql = "DELETE FROM our_prog WHERE id = $id";

        // Execute your query and handle deletion
$resault=mysqli_query($conn,$sql);
        // Assuming deletion was successful
        if($resault){
        echo "success";
        }else{

echo $conn->error;

        }
    }

?>
