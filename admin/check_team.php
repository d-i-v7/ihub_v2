<?php
// Include connection
SESSION_START();
include "conn.php";
error_reporting(false);
if (isset($_POST['submit'])) {
    // Error reporting disabled, consider enabling for debugging
    // error_reporting(false);

    $name = $_POST['name'];
    $role = $_POST['role'];
    $link_1 = $_POST['link_1'];
    $link_2 = $_POST['link_2'];
    $image_name = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    
    $folder1 = "uploads/";
    $folder2 = "../uploads/";
    
    $upload1 = $folder1 . $image_name;
    $upload2 = $folder2 . $image_name;

    // Check if the file already exists in the uploads folder
    $counter = 1;
    while (file_exists($upload1)) {
        $info = pathinfo($image_name);
        $image_name = $info['filename'] . '_' . $counter . '.' . $info['extension'];
        $upload1 = $folder1 . $image_name;
        $upload2 = $folder2 . $image_name;
        $counter++;
    }

    // Move to the first folder
    move_uploaded_file($image_tmp_name, $upload1);

    if (empty($role) || empty($name) || empty($link_1) || empty($link_2)) {
        $_SESSION['error'] = "Please Submit A Complete Form";
        $_SESSION['link'] = "our_team.php";
        echo include "error.php";
    } else {
        // Use prepared statement to prevent SQL injection
        $stmt = mysqli_prepare($conn, "SELECT * FROM our_team WHERE `name`=? AND `role`=?");
        mysqli_stmt_bind_param($stmt, "ss", $name, $role);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            $_SESSION['error'] = "This Member You Are Already Added!";
            $_SESSION['link'] = "our_team.php";
            echo include "error.php";
        } else {
            // Copy to the second folder
            copy($upload1, $upload2);

            // Creating an insert query
            $stmt = mysqli_prepare($conn, "INSERT INTO our_team (`role`, `name`, `image`, `link_1`, `link_2`) VALUES (?, ?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sssss", $role, $name, $upload1, $link_1, $link_2);
            $insert = mysqli_stmt_execute($stmt);

            if ($insert) {
                $_SESSION['success'] = "Added Your Member!";
                $_SESSION['link'] = "our_team.php";
                echo include "success.php";
            }
        }
    }
}
?>
