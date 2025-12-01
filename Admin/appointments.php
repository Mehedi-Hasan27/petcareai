<?php
include 'db_connect.php';

// Fetch all appointments + doctor + specialization
$sql = "SELECT a.*, d.name AS doctor_name, s.specialization_name
        FROM appointments a
        JOIN doctors d ON a.doctor_id = d.id
        JOIN doctor_specializations s ON a.specialization_id = s.id
        ORDER BY a.id DESC";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Appointment History</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
    h1 { font-weight: 600; margin-bottom: 30px; color: #333; }

    .table-responsive {
      background: #fff; padding: 20px; border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    table { width: 100%; border-collapse: separate; border-spacing: 0 10px; }
    tbody tr { background: #f1f3f5; transition: 0.2s ease; }
    tbody tr:hover { transform: translateY(-3px); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
    tbody td { padding: 12px; vertical-align: middle; }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="images/PetCare Logo.jpg" width="40" height="40" class="me-2">
      PetCareAI
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="admin-dashboard.php">Dashboard</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h1>Admin | Appointment History</h1>

  <div class="table-responsive">
    <table class="table align-middle">
      <thead>
        <tr>
          <th>#</th>
          <th>Doctor Name</th>
          <th>Patient Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Specialization</th>
          <th>Fees</th>
          <th>Appointment Date</th>
          <th>Symptoms</th>
          <th>Serial</th>
          <th>Created At</th>
        </tr>
      </thead>

      <tbody>
        <?php 
        if ($result->num_rows > 0) {
            $count = 1;
            while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
          <td><?= $count++ ?></td>
          <td><?= $row['doctor_name'] ?></td>
          <td><?= $row['patient_name'] ?></td>
          <td><?= $row['email'] ?></td>
          <td><?= $row['phone'] ?></td>
          <td><?= $row['address'] ?></td>
          <td><?= $row['specialization_name'] ?></td>
          <td><?= $row['fees'] ?> Tk</td>
          <td><?= $row['appointment_date'] ?></td>
          <td><?= $row['symptoms'] ?></td>
          <td><?= $row['serial_number'] ?></td>
          <td><?= $row['created_at'] ?></td>
        </tr>
        <?php 
            }
        } else {
        ?>
        <tr>
          <td colspan="12" class="text-center text-danger">No Appointments Found!</td>
        </tr>
        <?php } ?>
      </tbody>

    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
