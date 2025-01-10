<?php
// include connection
session_start();
include "conn.php";
if (isset($_POST['submit'])) {
    $val_topic = $_POST['val_topic'];
    $val_text = $_POST['val_text'];
    $icon = $_POST['icon'];

    if (empty($val_text) || empty($val_topic)) {
        $_SESSION['error'] = "Please Submit A Complete Form";
        $_SESSION['link'] = "impact.php";
        echo include "error.php";
    } else {
        // Using prepared statements to avoid SQL injection
        $read_ch = mysqli_prepare($conn, "SELECT * FROM impact WHERE name=? AND number=?");
        mysqli_stmt_bind_param($read_ch, "ss", $val_topic, $val_text);
        mysqli_stmt_execute($read_ch);
        $result = mysqli_stmt_get_result($read_ch);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['error'] = "This Impact You Are Already Added!";
            $_SESSION['link'] = "impact.php";
            echo include "error.php";
        } else {
            // CREATING AN INSERT QUERY
            $insert = mysqli_prepare($conn, "INSERT INTO impact (`name`, `number`, `icon`) VALUES (?, ?, ?)");
            mysqli_stmt_bind_param($insert, "sss", $val_topic, $val_text, $icon);
            mysqli_stmt_execute($insert);

            if ($insert) {
                $_SESSION['success'] = "Added Your Impact!";
                $_SESSION['link'] = "impact.php";
                echo include "success.php";
            }
        }
    }
}
?>
