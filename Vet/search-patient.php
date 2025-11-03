<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Search Patient | PetCareAI</title>

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
      text-align: center;
    }
    .search-card {
      max-width: 600px;
      margin: 0 auto;
      border-radius: 10px;
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

<!-- Search Form -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title">Search Patient by Mobile Number</h2>
    <div class="card shadow-sm p-4 search-card">
      <form id="searchForm">
        <div class="input-group">
          <input type="text" id="mobileNumber" class="form-control" placeholder="Enter Mobile Number" required />
          <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i> Search</button>
        </div>
      </form>
    </div>

    <!-- Search Results -->
    <div id="resultsSection" class="mt-5 d-none">
      <h4 class="mb-3">Search Results</h4>
      <div class="table-responsive shadow-sm">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Pet Name</th>
              <th>Owner Name</th>
              <th>Contact</th>
              <th>Gender</th>
              <th>Medical History</th>
              <th>Registered On</th>
            </tr>
          </thead>
          <tbody id="resultsTable">
            <!-- Data will be inserted here -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
