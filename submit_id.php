<?php
include_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $documentType = $_POST['documentType'];
    $idNumber = $_POST['idNumber'];
    $idName = $_POST['idName'];
    $dob = $_POST['dob'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    // Handle file upload
    $uploadDir = 'uploads/'; // Ensure this folder exists and is writable
    $uploadFile = $uploadDir . basename($_FILES['documentPhoto']['name']);
    if (move_uploaded_file($_FILES['documentPhoto']['tmp_name'], $uploadFile)) {
        $documentPhotoPath = $uploadFile;
    } else {
        die("File upload failed.");
    }

    // Database connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        // echo "success";
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO documents (document_type, id_number, id_name, dob, document_photo, phone_number, email) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $documentType, $idNumber, $idName, $dob, $documentPhotoPath, $phoneNumber, $email);

    <?php
        // Assuming the database operation is done, and $stmt is your prepared statement
        if ($stmt->execute()) {
            $message = "Data submitted successfully!";
            $redirect = true; // Flag to trigger redirection
        } else {
            $message = "Error: " . $stmt->error;
            $redirect = false; // No redirection
        }

        // Output the message
        echo $message;

        // Wait for 4 seconds before redirecting
        if ($redirect) {
            // Redirect after 4 seconds
            header("refresh:4; url=index.php");
        }
        ?>


    // Close connection
    $stmt->close();
    $conn->close();
}
?>
