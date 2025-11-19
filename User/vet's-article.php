<?php
include 'db_connect.php';

// Get search query if exists
$search = isset($_GET['search']) ? trim($_GET['search']) : "";

// Prepare query
if ($search != "") {
    $stmt = $conn->prepare("SELECT * FROM vet_posts WHERE title LIKE ? ORDER BY id DESC");
    $search_param = "%".$search."%";
    $stmt->bind_param("s", $search_param);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = $conn->query("SELECT * FROM vet_posts ORDER BY id DESC");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Vet's Articles - PetCareAI</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

<style>
body { font-family: "Poppins", sans-serif; background-color: #f9f9f9; }

/* Hero Section */
.hero-articles {
    background: linear-gradient(to right, #e3f2fd, #ffffff);
    padding: 80px 0;
    text-align: center;
}
.hero-articles h1 { font-size: 2.8rem; font-weight: 700; }
.hero-articles p { font-size: 1.2rem; color: #555; }
.search-bar input { border-radius: 50px; padding: 10px 20px; width: 70%; border: 1px solid #ced4da; }
.search-bar button { border-radius: 50px; padding: 10px 20px; }

/* Article Cards */
.article-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
.article-card:hover { transform: translateY(-5px); box-shadow: 0 8px 20px rgba(0,0,0,0.1); }
.article-card img { border-top-left-radius: 8px; border-top-right-radius: 8px; height: 200px; object-fit: cover; }
.article-card .card-body h5 { font-weight: 600; }
.article-card .card-body p { font-size: 0.9rem; color: #555; }
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2">PetCareAI
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="user-dashboard.php">Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-articles">
  <div class="container">
    <h1>Vet's Articles</h1>
    <p>Trusted knowledge and tips from certified veterinarians for your pets.</p>
    <div class="search-bar mt-4">
        <form method="GET" action="">
            <input type="text" name="search" placeholder="Search articles..." value="<?= htmlspecialchars($search) ?>" />
            <button type="submit" class="btn btn-primary btn-sm">Search</button>
        </form>
    </div>
  </div>
</section>

<!-- Articles Section -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="col-md-4">
          <div class="card article-card h-100 shadow-sm">
            <img src="../uploads/<?= $row['image'] ?>" class="w-100" height="200">
            <div class="card-body">
              <h5 class="card-title"><?= $row['title'] ?></h5>
              <p><?= substr($row['content'], 0, 120) ?>...</p>
              <a href="vet-single-post.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Read More</a>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      <?php else: ?>
        <div class="col-12">
          <p class="text-center text-muted">No articles found matching your search.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="text-center text-white bg-primary py-3">
  <p class="mb-0">© 2025 PetCareAI. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
