<?php
// Database connection
$servername = "localhost"; // Change this to your database server
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "id_submission"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and get form inputs
    $submitterName = $conn->real_escape_string(trim($_POST['submitterName']));
    $submitterPhone = $conn->real_escape_string(trim($_POST['submitterPhone']));
    $submitterEmail = isset($_POST['submitterEmail']) ? $conn->real_escape_string(trim($_POST['submitterEmail'])) : null;
    $idType = $conn->real_escape_string(trim($_POST['idType']));
    $idNumber = $conn->real_escape_string(trim($_POST['idNumber']));
    $nameOnId = $conn->real_escape_string(trim($_POST['nameOnId']));
    $dateFound = $conn->real_escape_string(trim($_POST['dateFound']));
    $placeFound = $conn->real_escape_string(trim($_POST['placeFound']));
    $districtOnId = $conn->real_escape_string(trim($_POST['districtOnId']));
    $county = $conn->real_escape_string(trim($_POST['county']));

    // Prepare the SQL query to insert data
    $sql = "INSERT INTO id_submissions (submitter_name, submitter_phone, submitter_email, id_type, id_number, name_on_id, date_found, place_found, district_on_id, county)
            VALUES ('$submitterName', '$submitterPhone', '$submitterEmail', '$idType', '$idNumber', '$nameOnId', '$dateFound', '$placeFound', '$districtOnId', '$county')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect to a success page or display a success message
        echo "Record submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
