<?php
session_start();
include 'db_connect.php';

// ------------------ Delete Doctor ------------------
if (isset($_GET['delete_id'])) {
  $doctor_id = intval($_GET['delete_id']);
  $delete = mysqli_query($conn, "DELETE FROM doctors WHERE id='$doctor_id'");
  if ($delete) {
    header("Location: add-doctor.php?msg=Doctor+deleted+successfully");
    exit();
  } else {
    header("Location: add-doctor.php?msg=Error+deleting+doctor");
    exit();
  }
}


// Fetch all specializations for dropdown
$spec_result = mysqli_query($conn, "SELECT * FROM doctor_specializations ORDER BY specialization_name ASC");

// Register Doctor
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
  $specialization_id = mysqli_real_escape_string($conn, $_POST['specialization_id']);
  $fees = mysqli_real_escape_string($conn, $_POST['fees']);

  if ($password !== $confirm_password) {
    $error = "Passwords do not match!";
  } else {
    $check = mysqli_query($conn, "SELECT * FROM doctors WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
      $error = "Email already registered!";
    } else {
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $insert = mysqli_query($conn, "INSERT INTO doctors (name,email,phone,specialization_id,fees,password) VALUES ('$name','$email','$phone','$specialization_id','$fees','$hashed_password')");
      if ($insert) {
        $success = "Doctor registered successfully!";
      } else {
        $error = "Database error!";
      }
    }
  }
}

// Fetch all doctors with specialization name
$doctors = mysqli_query($conn, "SELECT d.*, s.specialization_name FROM doctors d LEFT JOIN doctor_specializations s ON d.specialization_id = s.id ORDER BY d.created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | Manage Doctors</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    /* Original CSS */
    body {
      background: url("images/background.jpg") no-repeat center center fixed;
      background-size: cover;
      font-family: "Poppins", sans-serif;
      padding-top: 80px;
    }

    h1,
    h2 {
      font-weight: 600;
      color: #333;
    }

    .form-container,
    .table-responsive {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      margin-bottom: 40px;
    }

    .action-btn {
      font-size: 0.9rem;
      padding: 6px 12px;
      border-radius: 5px;
      margin: 2px;
    }

    .action-btn.edit {
      background-color: #17a2b8;
      color: #fff;
      border: none;
    }

    .action-btn.delete {
      background-color: #dc3545;
      color: #fff;
      border: none;
    }

    thead th {
      background-color: #007bff;
      color: #fff;
      font-weight: 500;
      border: none;
      text-align: center;
    }

    tbody td {
      vertical-align: middle;
      text-align: center;
    }

    tbody tr {
      background: #f1f3f5;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    tbody tr:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    a.action-btn {
      text-decoration: none;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="admin-dashboard.php"><img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2" />PetCareAI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="admin-dashboard.php">Dashboard</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <!-- Add Doctor Form -->
    <div class="form-container">
      <h2>Add New Doctor</h2>
      <?php if (isset($error)) {
        echo "<div class='alert alert-danger'>$error</div>";
      } ?>
      <?php if (isset($success)) {
        echo "<div class='alert alert-success'>$success</div>";
      } ?>
      <form method="POST">
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Doctor Specialization</label>
            <select name="specialization_id" class="form-select" required>
              <option value="" disabled selected>Select specialization</option>
              <?php while ($spec = mysqli_fetch_assoc($spec_result)) { ?>
                <option value="<?php echo $spec['id']; ?>"><?php echo $spec['specialization_name']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label">Doctor Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter full name" required />
          </div>
          <div class="col-md-6">
            <label class="form-label">Consultancy Fees</label>
            <input type="number" name="fees" class="form-control" placeholder="Enter fees" required />
          </div>
          <div class="col-md-6">
            <label class="form-label">Contact Number</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter contact number" required />
          </div>
          <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" required />
          </div>
          <div class="col-md-6">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required />
          </div>
          <div class="col-md-6">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password" required />
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-plus-circle-fill me-1"></i>Add Doctor</button>
      </form>
    </div>

    <!-- Manage Doctor Table -->
    <div class="table-responsive">
      <h2>Manage Doctors</h2>
      <table class="table align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Doctor Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Specialization</th>
            <th>Fees</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;
          while ($doc = mysqli_fetch_assoc($doctors)) { ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $doc['name']; ?></td>
              <td><?php echo $doc['email']; ?></td>
              <td><?php echo $doc['phone']; ?></td>
              <td><?php echo $doc['specialization_name']; ?></td>
              <td><?php echo $doc['fees']; ?></td>
              <td>
                <a href="add-doctor.php?delete_id=<?php echo $doc['id']; ?>" class="action-btn delete" onclick="return confirm('Are you sure?');">
                  <i class="bi bi-trash-fill"></i> Delete
                </a>

              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>