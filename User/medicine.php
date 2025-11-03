<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PetCareAI | Medicine Products</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Poppins", sans-serif;
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
        <h1 class="display-5 fw-bold">Pet Medicine Products</h1>
        <p class="lead text-muted">
          Trusted, vet-recommended medicines and supplements for your pet's
          health.
        </p>
      </div>
    </header>

    <!-- Products Section -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4">
          <!-- Product Card 1 -->
          <div class="col-md-4">
            <div class="card h-100 product-card">
              <img
                src="https://cobasi.vteximg.com.br/arquivos/ids/1011402/929603--1-.jpg?v=638137877720930000"
                class="card-img-top"
                alt="Product 1"
              />
              <div class="card-body">
                <h5 class="card-title">Frontline Spray</h5>
                <p class="card-text text-muted">
                  Effective tick and flea control for dogs and cats. 100ml
                  bottle.
                </p>
                <p class="text-primary fw-bold">$12.99</p>
                <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
              </div>
            </div>
          </div>

          <!-- Product Card 2 -->
          <div class="col-md-4">
            <div class="card h-100 product-card">
              <img
                src="https://nutreats.co.nz/cdn/shop/files/Nutreats_Premium_Probotics_for_Dogs.jpg?v=1694495315"
                class="card-img-top"
                alt="Product 2"
              />
              <div class="card-body">
                <h5 class="card-title">PetProbiotic Chews</h5>
                <p class="card-text text-muted">
                  Digestive support chews for dogs and cats. 60-count pack.
                </p>
                <p class="text-primary fw-bold">$17.99</p>
                <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
              </div>
            </div>
          </div>

          <!-- Product Card 3 -->
          <div class="col-md-4">
            <div class="card h-100 product-card">
              <img
                src="https://www.vetlive.in/wp-content/uploads/2024/10/multi-star-pet-300x300.jpg"
                class="card-img-top"
                alt="Product 3"
              />
              <div class="card-body">
                <h5 class="card-title">Multivitamin Syrup</h5>
                <p class="card-text text-muted">
                  Boosts immunity and supports healthy growth for pets.
                </p>
                <p class="text-primary fw-bold">$9.49</p>
                <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
              </div>
            </div>
          </div>

          <!-- Product Card 4 -->
          <div class="col-md-4">
            <div class="card h-100 product-card">
              <img
                src="https://cdn4.volusion.store/qxyca-qbdtq/v/vspfiles/photos/10752-3.jpg?v-cache=1657699370"
                class="card-img-top"
                alt="Product 4"
              />
              <div class="card-body">
                <h5 class="card-title">Calcium Supplement</h5>
                <p class="card-text text-muted">
                  Calcium supplements support pets bones and teeth, used under
                  vet advice.
                </p>
                <p class="text-primary fw-bold">$10.99</p>
                <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
              </div>
            </div>
          </div>

          <!-- Product Card 5 -->
          <div class="col-md-4">
            <div class="card h-100 product-card">
              <img
                src="https://kenoravet.com/cdn/shop/files/Large.jpg?v=1708457499"
                class="card-img-top"
                alt="Product 5"
              />
              <div class="card-body">
                <h5 class="card-title">Vetoquinol Ear Cleanser</h5>
                <p class="card-text text-muted">
                  Vetoquinol Ear Cleansert gently cleans and deodorizes pets'
                  ears.
                </p>
                <p class="text-primary fw-bold">$45.99</p>
                <a href="#" class="btn btn-outline-primary w-100">Buy Now</a>
              </div>
            </div>
          </div>

          <!-- Product Card 6 -->
          <div class="col-md-4">
            <div class="card h-100 product-card">
              <img
                src="https://citypet.in/cdn/shop/products/77f1995c-5690-4bc9-921b-255d830871bd.jpg?v=1682059415"
                class="card-img-top"
                alt="Product 6"
              />
              <div class="card-body">
                <h5 class="card-title">WormTrap Deworming Tablets</h5>
                <p class="card-text text-muted">
                  WormTrap Tablets remove intestinal worms to keep pets healthy.
                </p>
                <p class="text-primary fw-bold">$45.56</p>
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
