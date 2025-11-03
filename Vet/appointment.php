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
        <a class="navbar-brand d-flex align-items-center" href="#"
          ><img
            src="images/PetCare Logo.jpg"
            alt="Logo"
            width="40"
            height="40"
            class="me-2"
          />PetCareAI</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="vet-dashboard.html">Home</a>
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
            <th>#</th>
            <th>Pet Owner</th>
            <th>Pet Name</th>
            <th>Appointment Date</th>
            <th>Time</th>
            <th>Reason</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="appointmentTable">
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>Max</td>
            <td>2025-08-20</td>
            <td>10:30 AM</td>
            <td>General Checkup</td>
            <td><span class="badge bg-warning">Pending</span></td>
            <td>
              <button class="btn btn-sm btn-confirm" onclick="updateStatus(this, 'Confirmed')"><i class="bi bi-check-lg"></i> Confirm</button>
              <button class="btn btn-sm btn-cancel" onclick="updateStatus(this, 'Cancelled')"><i class="bi bi-x-lg"></i> Cancel</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Sarah Lee</td>
            <td>Bella</td>
            <td>2025-08-21</td>
            <td>2:00 PM</td>
            <td>Vaccination</td>
            <td><span class="badge bg-warning">Pending</span></td>
            <td>
              <button class="btn btn-sm btn-confirm" onclick="updateStatus(this, 'Confirmed')"><i class="bi bi-check-lg"></i> Confirm</button>
              <button class="btn btn-sm btn-cancel" onclick="updateStatus(this, 'Cancelled')"><i class="bi bi-x-lg"></i> Cancel</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<script>
  function updateStatus(button, status) {
    const row = button.closest("tr");
    const statusCell = row.querySelector("td:nth-child(7)");
    if (status === "Confirmed") {
      statusCell.innerHTML = '<span class="badge bg-success">Confirmed</span>';
    } else {
      statusCell.innerHTML = '<span class="badge bg-danger">Cancelled</span>';
    }
  }
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
