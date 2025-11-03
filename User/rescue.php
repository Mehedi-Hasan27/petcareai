<?php
include 'db_connect.php';
session_start();

// When form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $animal = $_POST['animalType'];
  $location = $_POST['location'];
  $datetime = $_POST['datetime'];
  $description = $_POST['description'];
  $contact = $_POST['contact'];

  // Image Upload
  $imagePath = '';
  if (!empty($_FILES['animalImage']['name'])) {
    $targetDir = "../uploads/";
    if (!is_dir($targetDir)) mkdir($targetDir);
    $fileName = time() . "_" . basename($_FILES["animalImage"]["name"]);
    $targetFile = $targetDir . $fileName;
    if (move_uploaded_file($_FILES["animalImage"]["tmp_name"], $targetFile)) {
      $imagePath =  "uploads/" . $fileName;
    }
  }

  // Insert Data
  $sql = "INSERT INTO rescue_requests (animal_type, location, datetime, description, image, contact)
          VALUES ('$animal', '$location', '$datetime', '$description', '$imagePath', '$contact')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('✅ Thank you! Your rescue request has been submitted successfully. Our team will review it soon.');</script>";
  } else {
    echo "<script>alert('❌ Error submitting your request. Please try again.');</script>";
  }
}

// Approved posts
$res = $conn->query("SELECT * FROM rescue_requests WHERE status='approved' ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Rescue Requests - PetCareAI</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>

  <style>
    body {
  background: url("images/background.jpg") no-repeat center center fixed;
  background-size: cover;
  font-family: "Poppins", sans-serif;
}
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s ease-in-out;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card-img-top {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }
    .section-title {
      font-weight: 600;
      color: #0d6efd;
      border-left: 5px solid #0d6efd;
      padding-left: 10px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#"><img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2">PetCareAI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="user-dashboard.php"><i class="bi bi-house-door"></i> Home</a></li>
      </div>
    </div>
  </nav>

<div class="container mt-5 pt-4">
  
  <!-- 🐾 Form Section -->
  <h3 class="section-title">Submit a Rescue Request</h3>
  <form method="POST" enctype="multipart/form-data" class="border p-4 bg-white rounded-3 shadow-sm mb-5">
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Animal Type</label>
        <select name="animalType" class="form-select" required>
          <option value="">Select</option>
          <option>Dog</option>
          <option>Cat</option>
          <option>Bird</option>
        </select>
      </div>
      <div class="col-md-6">
        <label class="form-label">Location</label>
        <input type="text" name="location" class="form-control" placeholder="Enter location" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">Date & Time</label>
        <input type="datetime-local" name="datetime" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">Contact Number</label>
        <input type="text" name="contact" maxlength="11" class="form-control" placeholder="e.g. 017xxxxxxxx" required>
      </div>
      <div class="col-12">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" rows="3" placeholder="Describe the rescue situation..." required></textarea>
      </div>
      <div class="col-12">
        <label class="form-label">Upload Image</label>
        <input type="file" name="animalImage" class="form-control">
      </div>
      <div class="col-12 text-center mt-3">
        <button type="submit" class="btn btn-primary px-4">Submit Rescue Request</button>
      </div>
    </div>
  </form>

  <!--  Approved Posts -->
  <h3 class="section-title">Approved Rescue Posts</h3>
  <div class="row">
    <?php if ($res->num_rows > 0): ?>
      <?php while($row = $res->fetch_assoc()): ?>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100">
            <?php if ($row['image']): ?>
              <img src="../<?= htmlspecialchars($row['image']) ?>" class="card-img-top" style="height:220px;object-fit:cover;">
            <?php endif; ?>
            <div class="card-body">
              <h5 class="card-title text-primary"><?= htmlspecialchars($row['animal_type']) ?></h5>
              <p class="mb-1"><strong>📍 Location:</strong> <?= htmlspecialchars($row['location']) ?></p>
              <p class="mb-1"><strong>📅 Date:</strong> <?= htmlspecialchars($row['datetime']) ?></p>
              <p class="mb-1"><strong>📝 Details:</strong> <?= htmlspecialchars($row['description']) ?></p>
              <p class="mb-0"><strong>📞 Contact:</strong> <?= htmlspecialchars($row['contact']) ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p class="text-muted">No approved posts yet.</p>
    <?php endif; ?>
  </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
