<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Vet | PetCareAI</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    /* Hero Section */
    .hero {
      background: url('images/vet consult.jpg') center/cover no-repeat;
      height: 40vh;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }
    .hero h1 {
      font-weight: 700;
    }

    footer {
      background-color: #0d6efd;
      color: white;
      padding: 20px 0;
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
              <a class="nav-link" href="index.html">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <h1>Talk to Certified Vets Online Anytime</h1>
    <p class="lead">Expert advice, 24/7 — because your pet’s health can’t wait.</p>
    <a href="#book" class="btn btn-warning btn-lg mt-3"><i class="bi bi-chat-dots me-1"></i> Start</a>
  </div>
</section>




<!-- Booking Form -->
<section id="book" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Talk to Certified Vets</h2>
    <form class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">Pet Type</label>
        <select class="form-select" required>
          <option value="">Choose...</option>
          <option>Dog</option>
          <option>Cat</option>
          <option>Bird</option>
          <option>Other</option>
        </select>
      </div>
      <div class="col-md-6">
        <label class="form-label">Preferred Vet's</label>
        <select class="form-select" required>
          <option value="">Choose...</option>
          <option>Dr. Adnan Hasan</option>
          <option>Dr. Rakibul Hasan</option>
        </select>
      </div>
      <div class="col-12">
        <label class="form-label">Describe Your Pet's Problem</label>
        <textarea class="form-control" rows="4" required></textarea>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-success btn-lg"><i class="bi bi-send me-1"></i> Submit Request</button>
      </div>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="text-center">
  <div class="container">
    <p class="mb-0">© 2025 PetCareAI | Smart Solutions for Pet Lovers</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
