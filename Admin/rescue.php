<?php
include 'db_connect.php';

// যদি admin approve/reject ক্লিক করে
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $status = $_POST['status'];
  $conn->query("UPDATE rescue_requests SET status='$status' WHERE id=$id");
}

// সব পোস্ট লোড করা
$res = $conn->query("SELECT * FROM rescue_requests ORDER BY created_at DESC");

// Approved পোস্ট লোড করা
$approved = $conn->query("SELECT * FROM rescue_requests WHERE status='approved' ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | Rescue Requests - PetCareAI</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
  background: url("images/background.jpg") no-repeat center center fixed;
  background-size: cover;
  font-family: "Poppins", sans-serif;
  color: #212529;
}

    .card {
      border: none;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      border-radius: 15px;
      transition: 0.3s;
      height: 100%; /* সব কার্ডের উচ্চতা সমান */
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.2);
    }

    .card-img-top {
      height: 220px;
      object-fit: cover;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .card-body {
      flex-grow: 1; /* বডি অংশ সমানভাবে প্রসারিত হবে */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .section-title {
      font-weight: 600;
      color: #0d6efd;
      margin-top: 60px;
      margin-bottom: 20px;
    }

    .btn-sm {
      border-radius: 8px;
      padding: 5px 10px;
    }

    .card-text {
      font-size: 14px;
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2">PetCareAI
    </a>
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

<!-- Rescue Requests Section -->
<div class="container mt-5 pt-4">
  <h2 class="section-title">🐾 Manage Rescue Requests</h2>
  <div class="row g-4">
    <?php while($row = $res->fetch_assoc()): ?>
    <div class="col-md-6 col-lg-4">
      <div class="card h-100">
        <?php if ($row['image']): ?>
          <img src="../<?= htmlspecialchars($row['image']) ?>" class="card-img-top">
        <?php endif; ?>
        <div class="card-body">
          <div>
            <h5 class="card-title text-primary"><?= htmlspecialchars($row['animal_type']) ?></h5>
            <p class="card-text"><i class="bi bi-geo-alt-fill text-danger"></i> <?= htmlspecialchars($row['location']) ?></p>
            <p class="card-text"><i class="bi bi-calendar3"></i> <?= htmlspecialchars($row['datetime']) ?></p>
            <p class="card-text"><i class="bi bi-chat-left-text"></i> <?= htmlspecialchars($row['description']) ?></p>
            <p class="card-text"><i class="bi bi-telephone"></i> <?= htmlspecialchars($row['contact']) ?></p>
          </div>
          <div>
            <p><strong>Status:</strong>
              <span class="badge bg-<?= $row['status']=='approved'?'success':($row['status']=='rejected'?'danger':'warning') ?>">
                <?= ucfirst($row['status']) ?>
              </span>
            </p>

            <?php if ($row['status'] == 'pending'): ?>
              <form method="POST" class="d-inline">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <input type="hidden" name="status" value="approved">
                <button type="submit" class="btn btn-success btn-sm"><i class="bi bi-check-circle"></i> Approve</button>
              </form>

              <form method="POST" class="d-inline">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <input type="hidden" name="status" value="rejected">
                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i> Reject</button>
              </form>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
