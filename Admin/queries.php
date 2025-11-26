<?php
include 'db_connect.php';
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Fetch all queries
$result = mysqli_query($conn, "SELECT * FROM query ORDER BY id DESC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Queries</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }

    h1 {
      font-weight: 600;
      margin-bottom: 30px;
      color: #333;
    }

    .table-responsive {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0 10px;
    }

    thead th {
      background-color: #007bff;
      color: #fff;
      font-weight: 500;
      border: none;
      padding: 12px;
    }

    tbody tr {
      background: #f1f3f5;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    tbody tr:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    tbody td {
      padding: 12px;
      vertical-align: middle;
    }

    .action-btn {
      font-size: 0.9rem;
      padding: 6px 12px;
      border-radius: 5px;
      border: none;
      color: #fff;
    }

    .action-btn.view {
      background-color: #17a2b8;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#"><img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2">PetCareAI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="admin-dashboard.php">Dashboard</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1>Admin | Queries</h1>

    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact No.</th>
            <th>Message</th>
            <th>Query Date & Time</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sl = 1;
          while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><?php echo $sl++; ?></td>
              <td><?php echo $row['fullname']; ?></td>
              <td><?php echo $row['emailid']; ?></td>
              <td><?php echo $row['mobileno']; ?></td>
              <td><?php echo $row['description']; ?></td>
              <td><?php echo $row['created_at']; ?></td>
            </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>