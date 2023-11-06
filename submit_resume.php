<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Handle file upload
    if (isset($_FILES["resume"])) {
        $uploadDirectory = "uploads/"; // Directory to save uploaded files
        $uploadedFile = $uploadDirectory . basename($_FILES["resume"]["name"]);
        
        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $uploadedFile)) {
            // File uploaded successfully
            // Store user data and file location in the database (if applicable)
            // Send notifications (if applicable)
            echo "Resume submitted successfully!";
        } else {
            // File upload failed
            echo "File upload failed.";
        }
    } else {
        // Resume file not found
        echo "Resume file not provided.";
    }
} else {
    // Invalid request method
    echo "Invalid request method.";
}
?>
