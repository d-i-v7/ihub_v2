<?php
include("security.php");
include 'conn.php';

header('Content-Type: application/json'); // Ensure JSON response
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateId'])) {
    $updateId = mysqli_real_escape_string($conn, $_POST['updateId']);

    $query = "SELECT * FROM courses WHERE id = '$updateId'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $course = mysqli_fetch_assoc($result);
        echo json_encode($course);
    } else {
        echo json_encode(["error" => "Course not found"]);
    }
} else {
    echo json_encode(["error" => "Invalid request"]);
}
?>
