<?php
// include connection
include "security.php";
include "conn.php";
if(isset($_POST['submit'])){
    $val_topic = $_POST['val_topic'];
    $icon = $_POST['icon'];
    $val_text = $_POST['val_text'];

    if(empty($val_text) || empty($val_topic)){
        $_SESSION['error'] = "Please Submit A Complete Form";
        $_SESSION['link'] = "update_impact.php";
        echo include "error.php";
    } else {
        // Using prepared statements to avoid SQL injection
        $read_ch = mysqli_prepare($conn, "SELECT * FROM impact WHERE name=? AND number=? AND icon=?");
        mysqli_stmt_bind_param($read_ch, "sss", $val_topic, $val_text, $icon);
        mysqli_stmt_execute($read_ch);
        $result = mysqli_stmt_get_result($read_ch);

        if(mysqli_num_rows($result) > 0) {
            $_SESSION['error'] = "This Impact You Are Already Added!";
            $_SESSION['link'] = "update_impact.php";
            echo include "error.php";
        } else {
            // CREATING AN UPDATE QUERY
            $update = mysqli_prepare($conn, "UPDATE `impact` SET `name`=?, `number`=?, `icon`=?");
            mysqli_stmt_bind_param($update, "sss", $val_topic, $val_text, $icon);
            mysqli_stmt_execute($update);

            if($update) {
                $_SESSION['success'] = "Updated Your Value!";
                $_SESSION['link'] = "impact.php";
                echo include "success.php";
            }
        }
    }
}
?>
