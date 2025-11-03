<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vet | Post Article</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f8f9fa;
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
    .form-control:focus {
      box-shadow: none;
      border-color: #0d6efd;
    }
    .btn-publish {
      background-color: #0d6efd;
      color: white;
    }
    .btn-draft {
      background-color: #6c757d;
      color: white;
    }
    .btn-publish:hover { background-color: #0b5ed7; }
    .btn-draft:hover { background-color: #5c636a; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2" />
      PetCareAI
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="vet-dashboard.html">Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Article Post Form -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title">Write a New Article</h2>
    <div class="card shadow-sm p-4">
      <form id="articleForm">
        <!-- Title -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Article Title</label>
          <input type="text" class="form-control" placeholder="Enter article title" required>
        </div>

        <!-- Article Content -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Article Content</label>
          <textarea class="form-control" rows="8" placeholder="Write your article here..." required></textarea>
        </div>

        <!-- Image Upload -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Upload Image</label>
          <input type="file" class="form-control" accept="image/*">
        </div>

        <!-- Buttons -->
        <div class="d-flex gap-2">
          <button type="submit" class="btn btn-publish"><i class="bi bi-upload me-1"></i> Publish</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.getElementById("articleForm").addEventListener("submit", function(e){
    e.preventDefault();
    alert("Article published successfully!");
    // Here you can add AJAX to save the article to the database
  });
</script>

</body>
</html>