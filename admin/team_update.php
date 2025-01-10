<?php
// Include connection
include "security.php";
include "conn.php";
error_reporting(false);
$team_id = $_SESSION['team_id'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $link_1 = $_POST['link_1'];
    $link_2 = $_POST['link_2'];

    // Creating variables for image
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    $folder1 = "uploads/";
    $folder2 = "../uploads/";

    $upload1 = $folder1 . $image_name;
    $upload2 = $folder2 . $image_name;

    // Check if the file already exists in the upload folder
    $counter = 1;
    while (file_exists($upload1)) {
        $file_info = pathinfo($image_name);
        $image_name = $file_info['filename'] . '_' . $counter . '.' . $file_info['extension'];
        $upload1 = $folder1 . $image_name;
        $upload2 = $folder2 . $image_name;
        $counter++;
    }

    // Move to the first folder
    move_uploaded_file($image_tmp, $upload1);

    // Check if any of the fields is empty
    if (empty($name) || empty($role) || empty($link_1) || empty($link_2)) {
        $_SESSION['error'] = "Please Submit a Complete Form";
        $_SESSION['link'] = "our_team.php";
        include "error.php";
    } else {
        // Read old values from the database
        $read_old = mysqli_query($conn, "SELECT * FROM our_team WHERE id='$team_id'");

        if (mysqli_num_rows($read_old) > 0) {
            while ($rowka = mysqli_fetch_assoc($read_old)) {
                // Assuming these are the column names in your 'our_ser' table
                $old_name = $rowka['name'];
                $old_role = $rowka['role'];
                $old_link_1 = $rowka['link_1'];
                $old_link_2 = $rowka['link_2'];
                $old_image_name = $rowka['image'];

                // Replace empty values with old values if they are empty
                $name = empty($name) ? $old_name : $name;
                $role = empty($role) ? $old_role : $role;
                $link_1 = empty($link_1) ? $old_link_1 : $link_1;
                $link_2 = empty($link_2) ? $old_link_2 : $link_2;
                $image_name = empty($image_name) ? $old_image_name : $image_name;
            }
        }

        // Copy to the second folder if the image is updated
        if (!empty($image_name)) {
            copy($upload1, $upload2);
        }

        // Update query using prepared statement
        $update = mysqli_prepare($conn, "UPDATE `our_team` SET `name`=?, `role`=?, `link_1`=?, `link_2`=?, `image`=? WHERE id=?");

        // Bind parameters
        mysqli_stmt_bind_param($update, "sssssi", $name, $role, $link_1, $link_2, $upload1, $team_id);

        // Execute the update query
        $result = mysqli_stmt_execute($update);

        // Check if the update was successful
        if ($result) {
            $_SESSION['success'] = "Updated Your teams!";
            $_SESSION['link'] = "our_team.php";
            include "success.php";
        } else {
            // Handle the error
            $_SESSION['error'] = "Error updating team: " . mysqli_error($conn);
            $_SESSION['link'] = "our_team.php";
            include "error.php";
        }

        // Close the prepared statement
        mysqli_stmt_close($update);
    }
}
?>
