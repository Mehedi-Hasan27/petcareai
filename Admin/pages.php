<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - About Us</title>
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



  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-lg-8">
      <div class="card p-4">
        <h3 class="text-center mb-4">Admin - About Us</h3>
        <form>
          <!-- Page Title -->
          <div class="mb-3">
            <label for="pageTitle" class="form-label">Page Title</label>
            <input type="text" class="form-control" id="pageTitle" placeholder="Enter page title" value="About Our System">
          </div>

          <!-- Page Description -->
          <div class="mb-3">
            <label for="pageDescription" class="form-label">Page Description</label>
            <textarea class="form-control" id="pageDescription" rows="7" placeholder="Write page description here...">
PetCareAI is designed to manage animal health information. It helps pet owners connect with doctors, buy medicine, request rescue, and track treatment history. It combines traditional care with modern AI-based support. Our system is user-friendly, responsive, and scalable.
            </textarea>
          </div>

          <!-- Submit -->
          <div class="d-grid">
            <button type="submit" class="btn btn-custom">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
