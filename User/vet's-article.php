<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Vet's Articles - PetCareAI</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
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
        background-color: #f9f9f9;
      }

      /* Hero Section */
      .hero-articles {
        background: linear-gradient(to right, #e3f2fd, #ffffff);
        padding: 80px 0;
        text-align: center;
      }
      .hero-articles h1 {
        font-size: 2.8rem;
        font-weight: 700;
      }
      .hero-articles p {
        font-size: 1.2rem;
        color: #555;
      }

      /* Search */
      .search-bar input {
        border-radius: 50px;
        padding: 10px 20px;
        width: 100%;
        border: 1px solid #ced4da;
      }

      /* Article Cards */
      .article-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .article-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      }
      .article-card img {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        height: 200px;
        object-fit: cover;
      }
      .article-card .card-body h5 {
        font-weight: 600;
      }
      .article-card .card-body p {
        font-size: 0.9rem;
        color: #555;
      }

      /* Pagination */
      .pagination li a {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .pagination li.active a {
        background-color: #0d6efd;
        color: white;
        border-color: #0d6efd;
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
              <a class="nav-link" href="user-dashboard.html">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-articles">
      <div class="container">
        <h1>Vet's Articles</h1>
        <p>
          Trusted knowledge and tips from certified veterinarians for your pets.
        </p>
        <div class="search-bar mt-4">
          <input type="text" placeholder="Search articles..." />
        </div>
      </div>
    </section>

    <!-- Articles Section -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4">
          <!-- Example Article Card -->
          <div class="col-md-4">
            <div class="card article-card h-100 shadow-sm">
              <img
                src="https://t4.ftcdn.net/jpg/06/90/77/01/360_F_690770146_uKwpv5QhiUrcoUzhwEavhLmUwS0pTwTQ.jpg"
                alt="Article Image"
              />
              <div class="card-body">
                <h5 class="card-title">5 Tips for Healthy Pets</h5>
                <p>
                  <b>1. Provide a Balanced Diet</b><br />
                  Give your pet nutritious food suited for their species, age,
                  and health needs. Avoid overfeeding to prevent obesity.
                  <br /><br />

                  <b>2. Keep Fresh Water Available</b><br />
                  Ensure your pet always has clean, fresh water to stay
                  hydrated.
                  <br /><br />

                  <b>3. Regular Exercise</b><br />
                  Daily walks, playtime, or activities keep pets fit and prevent
                  boredom.
                  <br /><br />

                  <b>4. Routine Vet Check-ups</b><br />
                  Take your pet for regular health check-ups and vaccinations.
                  Early detection can prevent serious illnesses.
                  <br /><br />

                  <b>5. Maintain Hygiene</b><br />
                  Bathe, groom, and clean your pet's living area regularly to
                  prevent infections.
                </p>
                <a href="#" class="btn btn-primary btn-sm">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card article-card h-100 shadow-sm">
              <img
                src="https://www.petcubes.com/cdn/shop/files/WhatsApp_Image_2023-07-10_at_10.09.33.jpg?v=1688961003"
                alt="Article Image"
              />
              <div class="card-body">
                <h5 class="card-title">Nutrition Guide for Cats</h5>
                <p>
                  <b>1. Provide High-Quality Protein</b><br />
                  Cats are obligate carnivores, so their diet should include
                  high-quality animal-based proteins like chicken, turkey, or
                  fish.
                  <br /><br />

                  <b>2. Include Essential Fatty Acids</b><br />
                  Omega-3 and Omega-6 fatty acids support a healthy coat, skin,
                  and immune system. These can be found in fish oils or certain
                  meats.
                  <br /><br />

                  <b>3. Ensure Proper Hydration</b><br />
                  Cats often don't drink enough water, so include wet food in
                  their diet or provide a pet water fountain to encourage
                  drinking.
                  <br /><br />

                  <b>4. Avoid Harmful Foods</b><br />
                  Never feed cats chocolate, onions, garlic, grapes, or dog
                  food, as these can be toxic.
                  <br /><br />

                  <b>5. Portion Control and Feeding Schedule</b><br />
                  Feed your cat measured portions according to their age,
                  weight, and activity level to prevent obesity and related
                  health issues.
                </p>

                <a href="#" class="btn btn-primary btn-sm">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card article-card h-100 shadow-sm">
              <img
                src="https://thumbs.dreamstime.com/b/group-pets-various-cute-85213113.jpg"
                alt="Article Image"
              />
              <div class="card-body">
                <h5 class="card-title">Vaccination Schedule</h5>
                <p>
                  Vaccination is essential for protecting pets from serious and
                  contagious diseases. It helps boost their immune system and
                  ensures long-term health. Follow the vaccination schedule
                  recommended by your veterinarian for the best protection.
                </p>
                <a href="#" class="btn btn-primary btn-sm">Read More</a>
              </div>
            </div>
          </div>

          <!-- Repeat cards as needed -->
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
