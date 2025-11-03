<?php
include 'db_connect.php';

// adopt button চাপলে update হবে
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pet_id'])) {
  $pet_id = $_POST['pet_id'];
  $conn->query("UPDATE pets SET status='adopted' WHERE id=$pet_id");
  session_start();
    $_SESSION['adopt_success'] = true;
  header("Location: animal-adoption.php");
  exit();
}

// সব available pets load করা
$pets = $conn->query("SELECT * FROM pets WHERE status='available' ORDER BY id DESC");
session_start();
$adopt_success = $_SESSION['adopt_success'] ?? false;
unset($_SESSION['adopt_success']);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Animal Adoption | PetCareAI</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    

    /* Hero Section */
    .hero {
      background: url('https://images.unsplash.com/photo-1574158622682-e40e69881006') center/cover no-repeat;
      height: 60vh;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }
    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.4);
    }
    .hero-content {
      position: relative;
      z-index: 2;
    }
    .hero h1 {
      font-weight: 700;
      font-size: 2.8rem;
    }

    /* Adoption Cards */
    .pet-card {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: all 0.3s ease;
    }
    .pet-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 18px rgba(0,0,0,0.12);
    }
    .pet-card img {
      height: 220px;
      object-fit: cover;
    }

    /* Footer */
    footer {
      background: #0d6efd;
      color: white;
    }
  </style>
</head>
<body>

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#"
          ><img
            src="images/PetCare Logo.jpg"
            alt="Logo"
            width="40"
            height="40"
            class="me-2"
          />PetCareAI</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="user-dashboard.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Hero -->
<section class="hero">
  <div class="hero-content">
    <h1>Find & Adopt Your New Best Friend</h1>
    <p class="lead">Connecting loving pets with caring homes</p>
    <a href="#pets" class="btn btn-warning btn-lg mt-3"><i class="bi bi-heart"></i> View Pets</a>
  </div>
</section>

<!-- Adoption Section -->
<section id="pets" class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Available for Adoption</h2>
    <div class="row g-4">
  <?php while($row = $pets->fetch_assoc()): ?>
    <div class="col-md-4">
      <div class="pet-card">
        <?php if ($row['image']): ?>
        <img src="../<?= htmlspecialchars($row['image']) ?>" class="w-100">
        <?php endif; ?>
        <div class="p-3">
          <h5><?= htmlspecialchars($row['name']) ?></h5>
          <p class="text-muted"><?= htmlspecialchars($row['age']) ?> — <?= htmlspecialchars($row['description']) ?></p>
          
          <?php if($row['status'] === 'available'): ?>
          <form method="POST" action="">
            <input type="hidden" name="pet_id" value="<?= $row['id'] ?>">
            <button type="submit" class="btn btn-primary btn-sm">Adopt Now</button>
          </form>
          <?php else: ?>
            <button class="btn btn-secondary btn-sm" disabled>Adopted</button>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php if($adopt_success): ?>
<script>
    alert("✅ Successfully Adopted!");
</script>
<?php endif; ?>
  </div>
</section>


<!-- Footer -->
<footer class="text-center py-4">
  <p class="mb-0">© 2025 PetCareAI | Making Pet Adoption Easier</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
