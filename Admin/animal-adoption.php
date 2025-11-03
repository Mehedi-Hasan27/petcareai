<?php
include 'db_connect.php'; // তোমার DB connection ফাইল

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $age = $_POST['age'];
  $description = $_POST['description'];

  // Image upload
  $imagePath = '';
  if (!empty($_FILES['image']['name'])) {
    $targetDir = "../uploads/";
    if (!is_dir($targetDir)) mkdir($targetDir);
    $fileName = time() . "_" . basename($_FILES["image"]["name"]);
    $targetFile = $targetDir . $fileName;
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
      $imagePath = "uploads/" . $fileName;
    }
  }

  // Insert into database
  $sql = "INSERT INTO pets (name, age, description, image) VALUES ('$name', '$age', '$description', '$imagePath')";
  
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('✅ Thank you! Pet added successfully!');</script>";
  } else {
    echo "<script>alert('❌ Error submitting your request. Please try again.');</script>";
  }
}

// Fetch existing pets
$pets = $conn->query("SELECT * FROM pets ORDER BY id DESC");
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin | Animal Adoption Management</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
  background: url("images/background.jpg") no-repeat center center fixed;
  background-size: cover;
  font-family: "Poppins", sans-serif;
}


    /* Section Titles */
    .section-title {
      font-weight: 600;
      margin-bottom: 1rem;
    }

    /* Pet Cards */
    .pet-card {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: all 0.3s ease;
      background: white;
    }
    .pet-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 18px rgba(0,0,0,0.12);
    }
    .pet-card img {
      height: 200px;
      object-fit: cover;
      width: 100%;
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

  <div class="container py-5">
    <h2 class="section-title text-center">Manage Animal Adoption</h2>

    <!-- Add Pet Form -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h5 class="card-title mb-3"><i class="bi bi-plus-circle"></i> Add New Pet</h5>
        <form id="addPetForm" enctype="multipart/form-data" method="POST">
  <div class="row g-3">
    <div class="col-md-4">
      <label class="form-label">Pet Name</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="col-md-4">
      <label class="form-label">Age</label>
      <input type="text" class="form-control" name="age" required>
    </div>
    <div class="col-md-12">
      <label class="form-label">Description</label>
      <textarea class="form-control" name="description" rows="2" required></textarea>
    </div>
    <div class="col-md-6">
      <label class="form-label">Upload Image</label>
      <input type="file" class="form-control" name="image" accept="image/*" required>
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary w-100 mt-2"><i class="bi bi-upload"></i> Add Pet</button>
    </div>
  </div>
</form>

      </div>
    </div>

    <!-- Pet List -->
    <h4 class="mb-3">Existing Pets</h4>
<div class="row g-4">
  <?php while($row = $pets->fetch_assoc()): ?>
    <div class="col-md-4">
      <div class="pet-card">
        <img src="../<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
        <div class="p-3">
  <h5><?= htmlspecialchars($row['name']) ?></h5>
  <p class="text-muted"><?= htmlspecialchars($row['age']) ?> — <?= htmlspecialchars($row['description']) ?></p>
  <?php if($row['status'] === 'available'): ?>
    <span class="badge bg-success">Available</span>
  <?php else: ?>
    <span class="badge bg-secondary">Adopted</span>
  <?php endif; ?>
</div>

      </div>
    </div>
  <?php endwhile; ?>
</div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
