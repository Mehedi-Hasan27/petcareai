<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin | Manage Products</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
    body { font-family: "Poppins", sans-serif; background-color: #f8f9fa; }
    .section-title { font-weight: 600; }
    .card-custom { border-radius: 12px; }
    .btn-action { margin-right: 5px; }
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

  <div class="container py-4">
    <h2 class="section-title mb-4">Manage Products</h2>

    <!-- Add Package Form -->
    <div class="card card-custom shadow-sm mb-4">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0"><i class="bi bi-plus-circle me-2"></i>Add New Product</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Product Name</label>
              <input type="text" class="form-control" placeholder="Enter package name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Price</label>
              <input type="text" class="form-control" placeholder="$99.99" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Description</label>
              <textarea class="form-control" rows="2" placeholder="Write package details"></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-success mt-3"><i class="bi bi-save me-2"></i>Save Product</button>
        </form>
      </div>
    </div>

    <!-- Manage Packages Table -->
    <div class="card card-custom shadow-sm">
      <div class="card-header bg-secondary text-white">
        <h5 class="mb-0"><i class="bi bi-box-seam me-2"></i>All Products</h5>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Durable Chew Toy</td>
              <td>$8.99</td>
              <td>Keeps your dog entertained and promotes dental health.</td>
              <td>
                <button class="btn btn-sm btn-primary btn-action"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-danger btn-action"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Non-Slip Pet Food Bowl</td>
              <td>$9.99/month</td>
              <td>Stainless steel, anti-skid, and easy to clean.</td>
              <td>
                <button class="btn btn-sm btn-primary btn-action"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-sm btn-danger btn-action"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
