<?php
header('Content-Type: application/json');

// Check if the file was uploaded without errors
if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/'; // Use the /uploads directory for storing the uploaded images
    $uploadedFile = $uploadDir . basename($_FILES['file']['name']);

    // Move the uploaded file to the desired directory
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFile)) {
        // Return the URL of the uploaded image
        echo json_encode(['location' => $uploadedFile]);
    } else {
        // Return an error message if the file move operation fails
        echo json_encode(['error' => 'File move operation failed']);
    }
} else {
    // Return an error message if the file upload encountered an error
    echo json_encode(['error' => 'File upload failed']);
}
?>
