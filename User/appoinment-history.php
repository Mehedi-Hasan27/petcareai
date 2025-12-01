<?php
include 'db_connect.php';

// আপাতত সব appointment দেখানোর জন্য:
session_start();
$user_id = $_SESSION['user_id'];

$sql = "SELECT a.*, d.name AS doctor_name, s.specialization_name 
        FROM appointments a
        JOIN doctors d ON a.doctor_id = d.id
        JOIN doctor_specializations s ON a.specialization_id = s.id
        WHERE a.user_id = '$user_id'
        ORDER BY a.id DESC";


$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User | Appointment History</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; padding-top: 80px; }
    h1 { font-weight: 600; margin-bottom: 30px; color: #333; }
    .table-responsive { background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
    thead th { background-color: #007bff; color: #fff; font-weight: 500; padding: 12px; border: none; }
    tbody tr { background: #f1f3f5; transition: 0.2s ease; }
    tbody tr:hover { transform: translateY(-3px); box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
    tbody td { padding: 12px; vertical-align: middle; }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="images/PetCare Logo.jpg" width="40" height="40" class="me-2" />
      PetCareAI
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="user-dashboard.php">Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h1>User | Appointment History</h1>

  <div class="table-responsive">
    <table class="table align-middle">
      <thead>
        <tr>
          <th>Serial No.</th>
          <th>Doctor Name</th>
          <th>Specialization</th>
          <th>Consultancy Fee</th>
          <th>Appointment Date</th>
          <th>Created At</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <tr>
          <td><?= $row['serial_number'] ?></td>
          <td><?= $row['doctor_name'] ?></td>
          <td><?= $row['specialization_name'] ?></td>
          <td><?= $row['fees'] ?> Tk</td>
          <td><?= $row['appointment_date'] ?></td>
          <td><?= $row['created_at'] ?></td>
        </tr>
        <?php 
            }
        } else {
        ?>
        <tr>
          <td colspan="6" class="text-center text-danger">No appointment found!</td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
