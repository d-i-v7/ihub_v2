<?php

session_start();

include "conn.php";
error_reporting(E_ERROR | E_WARNING | E_PARSE);

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
        $_SESSION['link'] = "add-blog.php";
        include "error.php";
        exit; // Stop further execution
    }

    $stmt = $conn->prepare("SELECT * FROM blog WHERE title=? AND con1=? AND content=?");
    $stmt->bind_param("sss", $topic, $con, $text);
    $stmt->execute();
    $stmt->store_result();  // Store the result set in the statement object

    if ($stmt->num_rows > 0) {
        $_SESSION['error'] = "This blog has already been added!";
        $_SESSION['link'] = "add-blog.php";
        include "error.php";
        exit; // Stop further execution
    }

    // Copy to the second folder
    copy($upload1, $upload2);

    // Use prepared statement to avoid SQL injection
    $insert_stmt = $conn->prepare("INSERT INTO blog (`content`, `title`, `con1`, `image`) VALUES (?, ?, ?, ?)");
    $insert_stmt->bind_param("ssss", $text, $topic, $con, $upload1);

    if ($insert_stmt->execute()) {
        $_SESSION['success'] = "Added your blog!";
        $_SESSION['link'] = "blog.php";
        include "success.php";
    } else {
        $_SESSION['error'] = "Error adding blog. Please try again.";
        $_SESSION['link'] = "add-blog.php";
        include "error.php";
    }

    $stmt->close();
    $insert_stmt->close();
    $conn->close();
}

?>
