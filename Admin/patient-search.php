<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Patient Search</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }
    .btn-custom {
      background-color: #007bff;
      border: none;
      font-weight: 500;
      padding: 10px 20px;
      border-radius: 8px;
      transition: 0.3s;
    }
    .btn-custom:hover {
      background-color: #0056b3;
    }
    label {
      font-weight: 600;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2">PetCareAI
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="admin-dashboard.php">Dashboard</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Search Section -->
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-lg-6">
      <div class="card p-4">
        <h3 class="text-center mb-4">Admin - Patient Search</h3>
        <form action="search-patient.php" method="GET">
          <!-- Mobile Number -->
          <div class="mb-3">
            <label for="mobile" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter patient mobile number" required>
          </div>

          <!-- Submit -->
          <div class="d-grid">
            <button type="submit" class="btn btn-custom">Search</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
