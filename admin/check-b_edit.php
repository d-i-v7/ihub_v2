<?php
// include connection
session_start();
$b_id = $_SESSION['b_id'];
include "conn.php";
error_reporting(false);
if (isset($_POST['save-blog'])) {
    $topic = $_POST['title'];
    $con = $_POST['con1'];
    $text = $_POST['content'];
    $image_name = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $folder1 = "uploads/";
    $folder2 = "../uploads/";

    $upload1 = $folder1 . $image_name;
    $upload2 = $folder2 . $image_name;

    // Move to the first folder
    move_uploaded_file($image_tmp_name, $upload1);

    if (empty($text) || empty($topic)) {
        $_SESSION['error'] = "Please submit a complete form";
        $_SESSION['link'] = "edit-blog.php";
        echo include "error.php";
    } else {
            // Copy to the second folder
            copy($upload1, $upload2);

            // Use prepared statement to avoid SQL injection
            $update_stmt = $conn->prepare("UPDATE blog SET title=?, con1=?, content=?, image=? WHERE id=?");
            $update_stmt->bind_param("ssssi", $topic, $con, $text, $upload1, $b_id);

            if ($update_stmt->execute()) {
                $_SESSION['success'] = "Updated your blog!";
                $_SESSION['link'] = "blog.php";
                echo include "success.php";
            } else {
                $_SESSION['error'] = "Error updating blog. Please try again.";
                $_SESSION['link'] = "edit-blog.php";
                echo include "error.php";
            }

            $update_stmt->close();
        }
        $stmt->close();
    }
    $conn->close();

?>
