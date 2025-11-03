<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Between Dates Report</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
      border-radius: 12px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
    }
    .card-header {
      background: linear-gradient(135deg, #0d6efd, #0dcaf0);
      color: white;
      font-size: 18px;
      font-weight: 600;
      border-radius: 12px 12px 0 0;
    }
    .form-control {
      border-radius: 8px;
    }
    .btn-custom {
      background: #0d6efd;
      border: none;
      border-radius: 8px;
      color: white;
      font-weight: 500;
      padding: 10px 20px;
      transition: 0.3s;
    }
    .btn-custom:hover {
      background: #0b5ed7;
    }
  </style>
</head>
<body>
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




  <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header text-center">
          Between Dates Reports
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="fromDate" class="form-label">From Date:</label>
              <input type="date" id="fromDate" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="toDate" class="form-label">To Date:</label>
              <input type="date" id="toDate" class="form-control" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-custom">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
