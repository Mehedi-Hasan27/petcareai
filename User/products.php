<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PetCareAI | Other Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .product-card {
      transition: 0.3s ease-in-out;
    }
    .product-card:hover {
      transform: scale(1.03);
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand img {
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }
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

<!-- Header -->
<header class="bg-light text-center py-5">
  <div class="container">
    <h1 class="display-5 fw-bold">Pet Accessories & Toys</h1>
    <p class="lead text-muted">Quality accessories and toys to keep your pets happy and healthy.</p>
  </div>
</header>

<!-- Products Section -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">

      <!-- Product Card 1 -->
      <div class="col-md-4">
        <div class="card h-100 product-card">
          <img src="https://m.media-amazon.com/images/I/71qHrBKCIJL._AC_SL1500_.jpg" class="card-img-top" alt="Durable Chew Toy">
          <div class="card-body">
            <h5 class="card-title">Durable Chew Toy</h5>
            <p class="card-text text-muted">Keeps your dog entertained and promotes dental health.</p>
            <p class="text-primary fw-bold">$8.99</p>
            <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
          </div>
        </div>
      </div>

      <!-- Product Card 2 -->
      <div class="col-md-4">
        <div class="card h-100 product-card">
          <img src="https://m.media-amazon.com/images/I/71F32tYi5eL._AC_UF894,1000_QL80_DpWeblab_.jpg" height="450" class="card-img-top" alt="Non-Slip Pet Food Bowl">
          <div class="card-body">
            <h5 class="card-title">Non-Slip Pet Food Bowl</h5>
            <p class="card-text text-muted">Stainless steel, anti-skid, and easy to clean.</p>
            <p class="text-primary fw-bold">$14.49</p>
            <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
          </div>
        </div>
      </div>

      <!-- Product Card 3 -->
      <div class="col-md-4">
        <div class="card h-100 product-card">
          <img src="https://static-01.daraz.com.bd/p/57402d631fea1ac2e322693c868cc39c.jpg" height="450" class="card-img-top" alt="Pet Grooming Brush">
          <div class="card-body">
            <h5 class="card-title">Pet Grooming Brush</h5>
            <p class="card-text text-muted">Gently removes loose fur and prevents tangles.</p>
            <p class="text-primary fw-bold">$11.29</p>
            <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
          </div>
        </div>
      </div>

      <!-- Product Card 4 -->
      <div class="col-md-4">
        <div class="card h-100 product-card">
          <img src="https://images-eu.ssl-images-amazon.com/images/I/71sZa0z+UtL._AC_UL600_SR600,600_.jpg" height="480" class="card-img-top" alt="Cat Scratching Post">
          <div class="card-body">
            <h5 class="card-title">Tunnel Toy</h5>
            <p class="card-text text-muted">A collapsible tube that cats can run through or hide in—promotes exploration and provides a cozy space.</p>
            <p class="text-primary fw-bold">$19.99</p>
            <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
          </div>
        </div>
      </div>

      <!-- Product Card 5 -->
      <div class="col-md-4">
        <div class="card h-100 product-card">
          <img src="https://i5.walmartimages.com/asr/72ed4a09-821c-4f9b-9f0e-5425ff316b71.51129d896e29b25f8437c5f26befd30f.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" height="505" class="card-img-top" alt="Adjustable Dog Collar">
          <div class="card-body">
            <h5 class="card-title">Adjustable Dog Collar</h5>
            <p class="card-text text-muted">Comfortable and durable with a secure buckle.</p>
            <p class="text-primary fw-bold">$7.49</p>
            <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
          </div>
        </div>
      </div>

      <!-- Product Card 6 -->
      <div class="col-md-4">
        <div class="card h-100 product-card">
          <img src="https://i.pinimg.com/736x/88/3e/68/883e68b3c835a44218ec7f7ecc08a907.jpg" class="card-img-top" alt="Bird Cage Toy">
          <div class="card-body">
            <h5 class="card-title">Petstages Cat Tracks</h5>
            <p class="card-text text-muted">Well-known ball track toys that cats enjoy batting around.</p>
            <p class="text-primary fw-bold">$5.99</p>
            <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
          </div>
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

<script>
      const isLoggedIn = sessionStorage.getItem("isLoggedIn");

      document.querySelectorAll(".btn-outline-primary").forEach((button) => {
        if (!isLoggedIn) {
          button.addEventListener("click", function (e) {
            e.preventDefault();
            window.location.href = "login.html";
          });
        } else {
          button.addEventListener("click", function () {
            alert("Purchase successful!"); // or redirect to checkout
          });
        }
      });
    </script>
</body>
</html>
