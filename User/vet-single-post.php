<?php
include 'db_connect.php';

if (!isset($_GET['id'])) {
    echo "No article found!";
    exit;
}

$id = intval($_GET['id']);

$stmt = $conn->prepare("SELECT * FROM vet_posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Article not found!";
    exit;
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $row['title'] ?> - PetCareAI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        font-family: "Poppins", sans-serif;
        background-color: #f5f7fa;
    }

    .article-container {
        max-width: 900px;
        margin: auto;
        background: white;
        padding: 35px;
        border-radius: 10px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        margin-top: 80px;
        margin-bottom: 50px;
    }

    .article-title {
        font-size: 2rem;
        font-weight: 700;
        color: #0d6efd;
        margin-bottom: 20px;
    }

    .meta-info {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 25px;
    }

    .article-content {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #333;
        white-space: pre-line;
    }

    .article-img {
        border-radius: 10px;
        width: 100%;
        margin-bottom: 25px;
    }

    .back-btn {
        margin-top: 30px;
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

<!-- Article Box -->
<div class="article-container">

    <h1 class="article-title"><?= $row['title'] ?></h1>

    <div class="meta-info">
        <strong>Author:</strong> <?= $row['doctor_name'] ?> &nbsp; | &nbsp;
        <strong>Published:</strong> <?= date("F j, Y", strtotime($row['created_at'])) ?>
    </div>

    <?php if ($row['image']): ?>
        <img src="../uploads/<?= $row['image'] ?>" class="article-img shadow-sm">
    <?php endif; ?>

    <div class="article-content">
        <?= nl2br($row['content']) ?>
    </div>

    <a href="vet's-article.php" class="btn btn-danger back-btn">
        ← Back to Articles
    </a>

</div>

<footer class="text-center text-white bg-primary py-3">
  <p class="mb-0">© 2025 PetCareAI. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
