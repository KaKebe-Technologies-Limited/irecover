<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit ID Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #2a9d8f;
            margin-bottom: 30px;
            font-size: 2rem;
            font-weight: bold;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control,
        .form-select {
            border-radius: 10px;
            padding: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #2a9d8f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #21867a;
        }

        .card {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            background-color: #fff;
        }

        /* Popup style */
        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 600px;
        }

        #closeFormBtn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: red;
            color: white;
            border: none;
            padding: 5px;
            cursor: pointer;
        }

        #closeFormBtn:hover {
            background-color: darkred;
        }

        /* Media Queries for Mobile Responsiveness */
        @media (max-width: 576px) {
            h2 {
                font-size: 1.5rem;
            }

            .container {
                margin-top: 20px;
                padding-left: 15px;
                padding-right: 15px;
            }

            .popup-content {
                width: 90%;
                padding: 15px;
            }

            .form-control,
            .form-select {
                padding: 8px;
            }

            button {
                padding: 8px 16px;
            }

            .card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Submit Your ID Details</h2>

        <!-- Search Button -->
        <div class="text-center mt-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#searchModal">Search ID</button>
        </div>

        <!-- Modal for Searching ID -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="searchModalLabel">Search ID Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="searchForm">
                            <!-- ID Type -->
                            <div class="mb-3">
                                <label for="searchIdType" class="form-label">Choose ID Type:</label>
                                <select id="searchIdType" class="form-select" required>
                                    <option value="">Select ID Type</option>
                                    <option value="National ID">National ID</option>
                                    <option value="Driver's License">Driver's License</option>
                                    <option value="Passport">Passport</option>
                                    <option value="Voter ID">Voter ID</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <!-- ID Number -->
                            <div class="mb-3">
                                <label for="searchIdNumber" class="form-label">ID Number:</label>
                                <input type="text" id="searchIdNumber" class="form-control" required placeholder="Enter ID Number">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button to open the form -->
        <button id="openFormBtn" class="btn btn-primary">Submit ID</button>

        <!-- Popup Form -->
        <div id="popupForm" class="popup-container">
            <div class="popup-content">
                <button id="closeFormBtn" class="btn btn-danger">X</button>
                <div class="card">
                    <div class="card-body">
                        <form id="submitForm" action="submit_id.php" method="POST">
                            <!-- Name of Submitter -->
                            <div class="mb-3">
                                <label for="submitterName" class="form-label">Your Name(Submitter)</label>
                                <input type="text" id="submitterName" name="submitterName" class="form-control" required placeholder="Enter Your Name">
                            </div>

                            <!-- Phone Number -->
                            <div class="mb-3">
                                <label for="submitterPhone" class="form-label">Phone Number:</label>
                                <input type="tel" id="submitterPhone" name="submitterPhone" class="form-control" required placeholder="Enter Your Phone Number">
                            </div>

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="submitterEmail" class="form-label">Email Address (Optional):</label>
                                <input type="email" id="submitterEmail" name="submitterEmail" class="form-control" placeholder="Enter Your Email Address (Optional)">
                            </div>

                            <!-- Dropdown for ID type -->
                            <div class="mb-3">
                                <label for="idType" class="form-label">Choose ID Type:</label>
                                <select id="idType" name="idType" class="form-select" required>
                                    <option value="">Select ID Type</option>
                                    <option value="National ID">National ID</option>
                                    <option value="Driver's License">Driver's License</option>
                                    <option value="Passport">Passport</option>
                                    <option value="Voter ID">Voter ID</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <!-- ID number -->
                            <div class="mb-3">
                                <label for="idNumber" class="form-label">ID Number:</label>
                                <input type="text" id="idNumber" name="idNumber" class="form-control" required placeholder="Enter ID Number">
                            </div>

                            <!-- Name on ID -->
                            <div class="mb-3">
                                <label for="nameOnId" class="form-label">Name on ID:</label>
                                <input type="text" id="nameOnId" name="nameOnId" class="form-control" required placeholder="Enter Name on ID">
                            </div>

                            <!-- Date Found -->
                            <div class="mb-3">
                                <label for="dateFound" class="form-label">Date Found:</label>
                                <input type="date" id="dateFound" name="dateFound" class="form-control" required>
                            </div>

                            <!-- Place Found -->
                            <div class="mb-3">
                                <label for="placeFound" class="form-label">Place Found:</label>
                                <input type="text" id="placeFound" name="placeFound" class="form-control" required placeholder="Enter Place Found">
                            </div>

                            <!-- District on ID -->
                            <div class="mb-3">
                                <label for="districtOnId" class="form-label">District on ID:</label>
                                <input type="text" id="districtOnId" name="districtOnId" class="form-control" required placeholder="Enter District on ID">
                            </div>

                            <!-- Country -->
                            <div class="mb-3">
                                <label for="county" class="form-label">Country:</label>
                                <input type="text" id="county" name="county" class="form-control" required placeholder="Enter Country">
                            </div>

                            <!-- Submit button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Submit ID Details</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // Function to open form
        document.getElementById('openFormBtn').addEventListener('click', function () {
            document.getElementById('popupForm').style.display = 'flex';
        });

        // Function to close form
        document.getElementById('closeFormBtn').addEventListener('click', function () {
            document.getElementById('popupForm').style.display = 'none';
        });
    </script>
</body>

</html>
