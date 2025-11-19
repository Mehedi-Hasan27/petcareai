<?php
session_start();
include 'db_connect.php';

$msg = "";

// doctor name session থেকে নিচ্ছি
$doctor_name = $_SESSION['doctor_name'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $content = $_POST['content'];

    // image upload
    $image_name = null;
    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . "_" . $_FILES['image']['name'];
        $target = "../uploads/" . $image_name;
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }

    // INSERT doctor name instead of doctor_id
    $stmt = $conn->prepare("
        INSERT INTO vet_posts (doctor_name, title, content, image) 
        VALUES (?, ?, ?, ?)
    ");

    $stmt->bind_param("ssss", $doctor_name, $title, $content, $image_name);

    if ($stmt->execute()) {
        $msg = "Article published successfully!";
    } else {
        $msg = "Error publishing article!";
    }
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vet | Post Article</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
  body {
    font-family: "Poppins", sans-serif;
    background-color: #f8f9fa;
    padding-top: 80px;
  }

  .section-title {
    font-size: 1.8rem;
    font-weight: 600;
    margin-bottom: 1rem;
  }

  .card {
    border-radius: 10px;
    border: none;
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
          <li class="nav-item"><a class="nav-link active" href="vet-dashboard.php"><i class="bi bi-house-door"></i> Home</a></li>
      </div>
    </div>
  </nav>

<section class="py-5">
  <div class="container">

    <!-- SUCCESS MESSAGE -->
    <?php if ($msg != ""): ?>
      <div class="alert alert-info"><?= $msg ?></div>
    <?php endif; ?>

    <h2 class="section-title">Write a New Article</h2>
    <div class="card shadow-sm p-4">

      <form method="POST" enctype="multipart/form-data">

        <div class="mb-3">
          <label class="form-label fw-semibold">Article Title</label>
          <input type="text" class="form-control" name="title" required>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Article Content</label>
          <textarea class="form-control" rows="8" name="content" required></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Upload Image</label>
          <input type="file" class="form-control" name="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">
          <i class="bi bi-upload me-1"></i> Publish
        </button>

      </form>

    </div>
  </div>
</section>

</body>
</html>
