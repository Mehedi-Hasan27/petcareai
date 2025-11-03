<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vet | Manage Patients</title>

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
    .btn-view {
      background-color: #0d6efd;
      color: white;
    }
    .btn-edit {
      background-color: #198754;
      color: white;
    }
    .btn-delete {
      background-color: #dc3545;
      color: white;
    }
    .btn-view:hover { background-color: #0b5ed7; }
    .btn-edit:hover { background-color: #157347; }
    .btn-delete:hover { background-color: #bb2d3b; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
        <li class="nav-item"><a class="nav-link" href="vet-dashboard.html">Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Manage Patients Section -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title">Manage Patients</h2>
    <div class="table-responsive shadow-sm rounded">
      <table class="table table-bordered table-hover align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Pet Name</th>
            <th>Owner Name</th>
            <th>Contact</th>
            <th>Gender</th>
            <th>Registered On</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Tofu</td>
            <td>John Doe</td>
            <td>+880123456789</td>
            <td>Male</td>
            <td>2025-05-10</td>
            <td>
              <button class="btn btn-sm btn-edit"><i class="bi bi-pencil-square"></i> Edit</button>
              <button class="btn btn-sm btn-delete"><i class="bi bi-trash"></i> Delete</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Bella</td>
            <td>Sarah Lee</td>
            <td>+880987654321</td>
            <td>Female</td>
            <td>2025-06-15</td>
            <td>
              <button class="btn btn-sm btn-edit"><i class="bi bi-pencil-square"></i> Edit</button>
              <button class="btn btn-sm btn-delete"><i class="bi bi-trash"></i> Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>