<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetCareAI - Premium Package</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
    
    .hero {
      background: linear-gradient(90deg, #0d6efd, #6610f2);
      color: white;
      padding: 80px 0;
      text-align: center;
    }
    .hero h1 { font-size: 2.8rem; font-weight: 700; }
    .hero p { font-size: 1.2rem; margin-top: 10px; }
    
    .pricing-card {
      border-radius: 12px;
      border: none;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .pricing-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    .badge-premium {
      position: absolute;
      top: -10px;
      right: -10px;
      background-color: #ffc107;
      color: #000;
      font-weight: 600;
      padding: 8px 12px;
      border-radius: 50px;
      font-size: 0.9rem;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    .feature-list li {
      margin: 12px 0;
      font-size: 1rem;
    }
    .btn-premium {
      background: linear-gradient(90deg, #0d6efd, #6610f2);
      color: white;
      border: none;
      transition: 0.3s ease;
    }
    .btn-premium:hover { opacity: 0.85; }
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
          <li class="nav-item"><a class="nav-link" href="user-dashboard.html">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Premium Care Package</h1>
      <p>Get the ultimate services for your beloved pets with our exclusive premium package.</p>
      <a href="#package-details" class="btn btn-warning btn-lg mt-3">View Details</a>
    </div>
  </section>

  <!-- Package Section -->
  <section class="py-5" id="package-details">
    <div class="container">
      <h2 class="text-center mb-5">What's Included in the Premium Package</h2>
      <div class="row justify-content-center g-4">
        
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card pricing-card position-relative text-center p-4">
            <div class="badge-premium">Premium</div>
            <i class="bi bi-person-badge display-4 text-primary mb-3"></i>
            <h4>Vet Consultation</h4>
            <p class="text-muted">Unlimited online vet consultations for your pet anytime.</p>
            <ul class="list-unstyled feature-list">
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>24/7 Access</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Certified Veterinarians</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Health Reports & Advice</li>
            </ul>
            <a href="#" class="btn btn-premium mt-3">Subscribe Now</a>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card pricing-card position-relative text-center p-4">
            <div class="badge-premium">Premium</div>
            <i class="bi bi-gem display-4 text-primary mb-3"></i>
            <h4>Exclusive Products</h4>
            <p class="text-muted">Premium food, supplements, and accessories for your pet.</p>
            <ul class="list-unstyled feature-list">
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>High-Quality Nutrition</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Exclusive Discounts</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i>Home Delivery</li>
            </ul>
            <a href="#" class="btn btn-premium mt-3">Subscribe Now</a>
          </div>
        </div>

        

      </div>
    </div>
  </section>

  <!-- Pricing Section -->
  <section class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="mb-4">Premium Package Pricing</h2>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card pricing-card p-4">
            <h3 class="mb-3">Monthly Plan</h3>
            <h2 class="text-primary mb-3">$49.99 <small class="text-muted">/month</small></h2>
            <p class="text-muted">Full access to premium features and priority support.</p>
            <a href="#" class="btn btn-warning btn-lg mt-3">Get Started</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card pricing-card p-4 border-primary border-2">
            <h3 class="mb-3">Yearly Plan</h3>
            <h2 class="text-primary mb-3">$499.99 <small class="text-muted">/year</small></h2>
            <p class="text-muted">Full access to best value with premium features.</p>
            <a href="#" class="btn btn-warning btn-lg mt-3">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Footer -->
<footer class="text-center text-white bg-primary py-3">
  <p class="mb-0">© 2025 PetCareAI. All rights reserved.</p>
</footer>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
