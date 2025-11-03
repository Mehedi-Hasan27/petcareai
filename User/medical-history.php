<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User | Medical History</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      padding-top: 80px; /* Space for fixed navbar */
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
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
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
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    tbody td {
      padding: 12px;
      vertical-align: middle;
    }

    .action-btn {
      font-size: 0.9rem;
      padding: 6px 12px;
      border-radius: 5px;
    }

    .action-btn.view {
      background-color: #17a2b8;
      color: #fff;
      border: none;
    }

    .action-btn.edit {
      background-color: #ffc107;
      color: #212529;
      border: none;
    }

    .action-btn.delete {
      background-color: #dc3545;
      color: #fff;
      border: none;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2" />
      PetCareAI
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="user-dashboard.html">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h1>User | Medical History</h1>

  <div class="table-responsive">
    <table class="table align-middle">
      <thead>
        <tr>
          <th>#</th>
          <th>Patient Name</th>
          <th>Patient Contact Number</th>
          <th>Patient Gender</th>
          <th>Creation Date</th>
          <th>Updation Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>+880123456789</td>
          <td>Male</td>
          <td>2025-08-10</td>
          <td>2025-08-12</td>
          <td>
            <button class="action-btn view">View</button>
            <button class="action-btn edit">Edit</button>
            <button class="action-btn delete">Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>+880987654321</td>
          <td>Female</td>
          <td>2025-08-11</td>
          <td>2025-08-13</td>
          <td>
            <button class="action-btn view">View</button>
            <button class="action-btn edit">Edit</button>
            <button class="action-btn delete">Delete</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Sam Wilson</td>
          <td>+880112233445</td>
          <td>Male</td>
          <td>2025-08-12</td>
          <td>2025-08-14</td>
          <td>
            <button class="action-btn view">View</button>
            <button class="action-btn edit">Edit</button>
            <button class="action-btn delete">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
