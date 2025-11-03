<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User | Appointment History</title>
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

    .status {
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 0.9rem;
      color: #fff;
      display: inline-block;
    }

    .status-confirmed {
      background-color: #28a745;
    }

    .status-pending {
      background-color: #ffc107;
      color: #212529;
    }

    .status-cancelled {
      background-color: #dc3545;
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

    .action-btn.cancel {
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
          <a class="nav-link active" aria-current="page" href="user-dashboard.html">Home</a>
        </li>
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
          <th>#</th>
          <th>Doctor Name</th>
          <th>Specialization</th>
          <th>Consultancy Fee</th>
          <th>Appointment Date / Time</th>
          <th>Appointment Creation Date</th>
          <th>Current Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Dr. John Doe</td>
          <td>Cardiology</td>
          <td>$100</td>
          <td>2025-08-20 / 10:00 AM</td>
          <td>2025-08-10</td>
          <td><span class="status status-confirmed">Confirmed</span></td>
          <td>
            <button class="action-btn view">View</button>
            <button class="action-btn cancel">Cancel</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Dr. Jane Smith</td>
          <td>Dermatology</td>
          <td>$80</td>
          <td>2025-08-22 / 02:00 PM</td>
          <td>2025-08-12</td>
          <td><span class="status status-pending">Pending</span></td>
          <td>
            <button class="action-btn view">View</button>
            <button class="action-btn cancel">Cancel</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Dr. Sam Wilson</td>
          <td>Neurology</td>
          <td>$120</td>
          <td>2025-08-25 / 11:30 AM</td>
          <td>2025-08-13</td>
          <td><span class="status status-cancelled">Cancelled</span></td>
          <td>
            <button class="action-btn view">View</button>
            <button class="action-btn cancel">Cancel</button>
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
