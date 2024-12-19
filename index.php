<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iRecover - Document Recovery Platform</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .accordion-button:focus {
      box-shadow: none;
    }
    .form-label {
      font-weight: bold;
    }
    .container {
      max-width: 1200px;
    }
    .card-body {
      background-color: #f8f9fa;
      padding: 1rem;
      border-radius: 5px;
    }
    button {
      margin-top: 10px;
    }

    /* Hero Section Background */
    header {
      background-image: url('img/bg.jpg'); /* Replace with your image URL */
      background-size: cover;
      background-position: center;
      color: white;
      text-align: center;
      padding: 80px 0; /* Adjust padding for more space */
    }

    header h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    header p {
      font-size: 1.2rem;
      font-weight: 500;
    }
  </style>
</head>
<body class="bg-light">

  <!-- Hero Section -->
  <header>
    <h1>iRecover</h1>
    <p>Document Recovery Platform</p>
  </header>

  <div class="container my-5">
    <div class="row g-4">

    <form action="submit_id.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
          <h4 class="mb-3 text-primary">Report Lost Document</h4>
          <div class="accordion" id="accordionOne">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Click to Report
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
                <div class="accordion-body">
                  <div class="mb-3">
                    <label for="documentType" class="form-label">Document Type</label>
                    <select id="documentType" name="documentType" class="form-select" required>
                      <option value="academicDocument">Academic Document</option>
                      <option value="drivingPermit">Driving Permit</option>
                      <option value="nationalID">National ID</option>
                      <option value="studentID">Student ID</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="idNumber" class="form-label">ID Number</label>
                    <input type="text" name="idNumber" class="form-control" id="idNumber" placeholder="Enter ID Number" required>
                  </div>
                  <div class="mb-3">
                    <label for="idName" class="form-label">Name on Document</label>
                    <input type="text" name="idName" class="form-control" id="idName" placeholder="Enter Name" required>
                  </div>
                  <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" id="dob" required>
                  </div>
                  <div class="mb-3">
                    <label for="documentPhoto" class="form-label">Upload a photo of Lost Document</label>
                    <input type="file" name="documentPhoto" class="form-control" id="documentPhoto" required>
                  </div>
                  <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number</label>
                    <input type="tel" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="Enter Phone Number" required>
                  </div>
                  <div class="mb-3">
                    <label for="images" class="form-label">Image of Lost Document</label>
                    <input type="submit" name="email" class="form-control" id="email" placeholder="Enter Email" required>
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <!-- Second Accordion -->
      <form action="submit_id.php" method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
          <h4 class="mb-3 text-primary">Submit Lost Documents</h4>
          <div class="accordion" id="accordionTwo">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Click to submit
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
                <div class="accordion-body">
                  <div class="mb-3">
                    <label for="documentType" class="form-label">Document Type</label>
                    <select id="documentType" name="documentType" class="form-select" required>
                      <option value="academicDocument">Academic Document</option>
                      <option value="drivingPermit">Driving Permit</option>
                      <option value="nationalID">National ID</option>
                      <option value="studentID">Student ID</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="idNumber" class="form-label">ID Number</label>
                    <input type="text" name="idNumber" class="form-control" id="idNumber" placeholder="Enter ID Number" required>
                  </div>
                  <div class="mb-3">
                    <label for="documentPhoto" class="form-label">Upload a photo of Lost Document</label>
                    <input type="file" name="documentPhoto" class="form-control" id="documentPhoto" required>
                  </div>
                  <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" id="dob" required>
                  </div>
                  <div class="mb-3">
                    <label for="documentPhoto" class="form-label">Upload a photo of Found Document</label>
                    <input type="file" name="documentPhoto" class="form-control" id="documentPhoto" required>
                  </div>
                  <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number</label>
                    <input type="tel" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="Enter Phone Number" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>

      <!-- Third Accordion -->
      <div class="col-md-6">
        <h4 class="mb-3 text-primary">Search Found Documents</h4>
        <div class="accordion" id="accordionThree">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                Click to search
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionTwo">
              <div class="accordion-body">
                <form action="search_id.php" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="foundDocType" class="form-label">Document Type</label>
                    <select id="foundDocType" name="documentType" class="form-select">
                      <option value="academicDocument">Academic Document</option>
                      <option value="drivingPermit">Driving Permit</option>
                      <option value="nationalID">National ID</option>
                      <option value="studentID">Student ID</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="foundIDName" class="form-label">Name on Document</label>
                    <input type="text" name="nameOnDocument" class="form-control" id="foundIDName" placeholder="Enter Name">
                  </div>
                  <div class="mb-3">
                    <label for="foundIDNumber" class="form-label">Your ID Number</label>
                    <input type="text" name="idNumber" class="form-control" id="foundIDNumber" placeholder="Enter ID Number">
                  </div>
                  <div class="mb-3">
                    <label for="dob" class="form-label">Your Date of Birth</label>
                    <input type="date" name="dob" class="form-control" id="dob" placeholder="Enter Date of Birth">
                  </div>
                  <div class="mb-3">
                    <label for="finderContact" class="form-label">Your Phone Number</label>
                    <input type="tel" name="finderContact" class="form-control" id="finderContact" placeholder="Enter Phone Number">
                  </div>
                  <div class="mb-3">
                    <label for="finderEmail" class="form-label">Your Email</label>
                    <input type="email" name="finderEmail" class="form-control" id="finderEmail" placeholder="Enter Email">
                  </div>
                  <button type="submit" class="btn btn-success w-100">Submit Document</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
