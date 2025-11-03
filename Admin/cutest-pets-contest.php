<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin | Cutest Pets Contest | PetCareAI</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }
    .section-title {
      font-weight: 600;
      margin-bottom: 1rem;
    }
    .admin-card {
      border-radius: 12px;
      transition: 0.3s ease-in-out;
      cursor: pointer;
    }
    .admin-card:hover {
      transform: scale(1.03);
      box-shadow: 0 6px 20px rgba(13, 110, 253, 0.2);
    }
    .contest-table img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 8px;
    }
    .action-btns button {
      margin-right: 5px;
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

<!-- Admin Dashboard Heading -->
<section class="py-4 bg-light container mt-4">
  <div class="container">
    <h2 class="section-title">Admin | Cutest Pets Contest Management</h2>
  </div>
</section>



<!-- Contest Entries Table -->
<section class="py-5">
  <div class="container">
    <h3 class="section-title mb-4">Submitted Entries</h3>
    <div class="table-responsive">
      <table class="table table-hover table-bordered contest-table">
        <thead class="table-primary">
          <tr>
            <th>#</th>
            <th>Participant Name</th>
            <th>Pet Name</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Alice Smith</td>
            <td>Bella</td>
            <td>alice@example.com</td>
            <td><img src="https://images.unsplash.com/photo-1568572933382-74d440642117" alt="Bella"></td>
            <td><span class="badge bg-warning">Pending</span></td>
            <td class="action-btns">
              <button class="btn btn-success btn-sm"><i class="bi bi-check-lg"></i> Approve</button>
              <button class="btn btn-danger btn-sm"><i class="bi bi-x-lg"></i> Reject</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>John Doe</td>
            <td>Max</td>
            <td>john@example.com</td>
            <td><img src="https://images.unsplash.com/photo-1543852786-1cf6624b9987" alt="Max"></td>
            <td><span class="badge bg-success">Approved</span></td>
            <td class="action-btns">
              <button class="btn btn-danger btn-sm"><i class="bi bi-x-lg"></i> Reject</button>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Emma Brown</td>
            <td>Luna</td>
            <td>emma@example.com</td>
            <td><img src="https://static.vecteezy.com/system/resources/thumbnails/051/778/475/small_2x/an-orange-kitten-sitting-on-a-blanket-photo.jpeg" alt="Luna"></td>
            <td><span class="badge bg-danger">Rejected</span></td>
            <td class="action-btns">
              <button class="btn btn-success btn-sm"><i class="bi bi-check-lg"></i> Approve</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
