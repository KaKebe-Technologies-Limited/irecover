
<!-- Add this inside your <head> tag -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Add this before closing </body> tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>




<?php
// Database connection (replace with your database credentials)
// Database connection settings

include_once 'db.php';

// Get form data from POST request
$documentType = $_POST['documentType'];
$nameOnDocument = $_POST['nameOnDocument'];
$idNumber = $_POST['idNumber'];
$dob = $_POST['dob'];
$finderContact = $_POST['finderContact'];
$finderEmail = $_POST['finderEmail'];

// SQL query to search for the document based on ID number or Name + Date of Birth
$sql = "SELECT * FROM documents WHERE id_number = ? OR (id_name = ? AND dob = ?)";

$stmt = $conn->prepare($sql);

// Bind parameters to the SQL query
$stmt->bind_param("sss", $idNumber, $nameOnDocument, $dob);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();



// Check if a matching record is found
if ($result->num_rows > 0) {
    // A match was found, show success modal
    echo '
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Matched!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Your ID details have been successfully found.</p>
                    <p>For assistance, please call <strong>+1 234 567 890</strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Show the modal after the page loads
        var myModal = new bootstrap.Modal(document.getElementById("successModal"));
        myModal.show();
    </script>
    ';
} else {
    // No match found, show error modal
    echo '
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">No Match Found</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>The details you entered do not match any records.</p>
                    <p>If you need assistance, please call <strong>+1 234 567 890</strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Show the modal after the page loads
        var myModal = new bootstrap.Modal(document.getElementById("errorModal"));
        myModal.show();
    </script>
    ';
}


// Close the connection
$stmt->close();
$conn->close();
?>
