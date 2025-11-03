<?php
include 'db_connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Session Logs</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url("images/background.jpg") no-repeat center center fixed;
      background-size: cover;
      font-family: "Poppins", sans-serif;
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
    <h1>Admin | Session Logs</h1>

    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>User Type</th>
            <th>Login time</th>
            <th>Logout Time</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "
SELECT 
    s.id, s.user_id, s.doctor_id, s.user_type, s.login_time, s.logout_time,
    u.username AS user_name,
    d.name AS doctor_name
FROM session_logs s
LEFT JOIN users u ON s.user_id = u.id AND s.user_type = 'User'
LEFT JOIN doctors d ON s.doctor_id = d.id AND s.user_type = 'Doctor'
ORDER BY s.id DESC
";


          $result = mysqli_query($conn, $query);
          $sn = 1;

          while ($row = mysqli_fetch_assoc($result)) {
            $username = '';
            if ($row['user_type'] == 'User' && !empty($row['user_name'])) {
              $username = $row['user_name'];
            } elseif ($row['user_type'] == 'Doctor' && !empty($row['doctor_name'])) {
              $username = $row['doctor_name'];
            } elseif ($row['user_type'] == 'Admin') {
              $username = 'Admin';
            }

            // Logout time
            $logout_time = $row['logout_time'] ? $row['logout_time'] : '<span class="text-success">Active</span>';

            // Only display row if $username is not empty
            if ($username != '') {
              echo "<tr>
            <td>{$sn}</td>
            <td>{$username}</td>
            <td>{$row['user_type']}</td>
            <td>{$row['login_time']}</td>
            <td>{$logout_time}</td>
        </tr>";
              $sn++;
            }
          }

          ?>
        </tbody>


      </table>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>