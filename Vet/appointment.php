<?php
session_start();
include 'db_connect.php';

// Check login
if (!isset($_SESSION['doctor_id'])) {
  header("Location: doctor-login.php");
  exit();
}

$doctor_id = $_SESSION['doctor_id'];

// Fetch appointments for logged-in doctor, serial_number based sorting
$sql = "SELECT * FROM appointments WHERE doctor_id=? ORDER BY serial_number ASC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $doctor_id);
$stmt->execute();
$result = $stmt->get_result();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vet | Appointments</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f8f9fa;
    }

    .section-title {
      font-size: 1.8rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .table th {
      background-color: #0d6efd;
      color: white;
      text-align: center;
    }

    .table td {
      vertical-align: middle;
      text-align: center;
    }

    .btn-confirm {
      background-color: #198754;
      color: white;
    }

    .btn-cancel {
      background-color: #dc3545;
      color: white;
    }

    .btn-confirm:hover {
      background-color: #157347;
    }

    .btn-cancel:hover {
      background-color: #bb2d3b;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#"><img
          src="images/PetCare Logo.jpg"
          alt="Logo"
          width="40"
          height="40"
          class="me-2" />PetCareAI</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-end"
        id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="vet-dashboard.php">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Appointments Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="section-title">Manage Appointments</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Serial</th>
              <th>Patient Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Appointment Date</th>
              <th>Symptoms</th>
              <th>Created At</th>
            </tr>
          </thead>

          <tbody id="appointmentTable">
            <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['serial_number']) . "</td>";
                echo "<td>" . htmlspecialchars($row['patient_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                echo "<td>" . htmlspecialchars($row['appointment_date']) . "</td>";
                echo "<td>" . htmlspecialchars($row['symptoms']) . "</td>";
                echo "<td>" . htmlspecialchars($row['created_at']) . "</td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='9'>No appointments found!</td></tr>";
            }
            ?>
          </tbody>

        </table>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>