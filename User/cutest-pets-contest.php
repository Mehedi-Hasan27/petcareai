<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cutest Pets Contest | PetCareAI</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .hero-section {
      position: relative;
      background: url('https://hips.hearstapps.com/hmg-prod/images/bengal-cat-resting-on-the-floor-in-the-living-room-royalty-free-image-1724778363.jpg?crop=0.669xw:1.00xh;0.0166xw,0&resize=980:*') center/cover no-repeat;
      height: 40vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }
    .hero-overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }
    .hero-content {
      position: relative;
      z-index: 1;
    }
    .section-title {
      font-weight: 600;
      margin-bottom: 1rem;
    }
    .contest-card img {
      border-radius: 10px;
      height: 250px;
      object-fit: cover;
    }
    .rules-list li {
      margin-bottom: 8px;
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
<section class="hero-section">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h1 class="display-4 fw-bold">Cutest Pets Contest</h1>
    <p class="lead">Enter your adorable pet and win amazing prizes!</p>
    <a href="#contestForm" class="btn btn-warning btn-lg mt-3"><i class="bi bi-trophy-fill me-1"></i>Join Now</a>
  </div>
</section>

<!-- Contest Details -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title text-center">About the Contest</h2>
    <p class="text-center text-muted mb-4">We're on the hunt for the most adorable pets! Share your pet's best photo and stand a chance to win exclusive PetCareAI goodies and gift vouchers.</p>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <h5 class="fw-semibold">Contest Rules:</h5>
        <ul class="rules-list">
          <li>Each participant can submit only one photo.</li>
          <li>The pet must be your own.</li>
          <li>No editing or filters that change the pet's appearance.</li>
          <li>Submissions close on <strong>30th September 2025</strong>.</li>
          <li>Winners will be announced on our website.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Submission Form -->
<section id="contestForm" class="bg-light py-5">
  <div class="container">
    <h2 class="section-title text-center">Submit Your Entry</h2>
    <form class="mt-4 mx-auto" style="max-width: 600px;" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Your Name</label>
        <input type="text" class="form-control" placeholder="Enter full name" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Pet's Name</label>
        <input type="text" class="form-control" placeholder="Enter pet's name" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" class="form-control" placeholder="Enter email" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Upload Pet Photo</label>
        <input type="file" class="form-control" accept="image/*" required>
      </div>
      <button type="submit" class="btn btn-primary w-100"><i class="bi bi-send-fill me-1"></i>Submit Entry</button>
    </form>
  </div>
</section>

<!-- Previous Winners -->
<section class="py-5">
  <div class="container">
    <h2 class="section-title text-center">Previous Winners</h2>
    <div class="row g-4 mt-3">
      <div class="col-md-4">
        <div class="contest-card text-center">
          <img src="https://images.unsplash.com/photo-1568572933382-74d440642117" class="w-100" alt="Winner Pet 1">
          <h5 class="mt-2">Bella</h5>
          <p class="text-muted">2024 Winner</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contest-card text-center">
          <img src="https://static.vecteezy.com/system/resources/thumbnails/051/778/475/small_2x/an-orange-kitten-sitting-on-a-blanket-photo.jpeg" class="w-100" alt="Winner Pet 2">
          <h5 class="mt-2">Tafo</h5>
          <p class="text-muted">2023 Winner</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contest-card text-center">
          <img src="https://images.unsplash.com/photo-1543852786-1cf6624b9987" class="w-100" alt="Winner Pet 3">
          <h5 class="mt-2">Luna</h5>
          <p class="text-muted">2022 Winner</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-4">
  <p class="mb-0">&copy; 2025 PetCareAI. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
