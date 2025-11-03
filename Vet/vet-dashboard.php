<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Vet-Dashboard</title>
    <!-- Google Fonts -->
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
        background-color: #f8f9fa;
      }
      .section-title {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 1rem;
      }
      .feature-card:hover {
        transform: scale(1.03);
        transition: 0.3s ease-in-out;
        border: 1px solid #0d6efd;
      }
      .feature-icon {
        font-size: 2.5rem;
        color: #0d6efd;
        transition: 0.3s ease-in-out;
      }
      .feature-icon:hover {
        color: #6610f2;
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

        <!-- Toggler for mobile -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Right Side -->
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavDropdown"
        >
          <ul class="navbar-nav">
            <!-- User Dropdown -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle d-flex align-items-center"
                href="#"
                id="userDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-circle me-2"></i>
                <span id="navbarUsername">User</span>
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="userDropdown"
              >
                <li>
                  <a class="dropdown-item" href="vet-profile.php"
                    ><i class="bi bi-person-fill me-2"></i>Profile</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="logout.php" id="logoutBtn"
                    ><i class="bi bi-box-arrow-right me-2"></i>Logout</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <section class="py-5">
      <div class="container">
        <h2 class="section-title">Vet | Dashboard</h2>
        <div class="row g-4 mt-4">
          <!-- Feature 1 - Rescue Request with uniform icon placement -->
          <div class="col-lg-3 col-md-6">
            <a href="appointment.html" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-calendar-check"></i>
                  </div>
                  <h5 class="card-title">Appointments</h5>
                  <p class="card-text text-muted">Appointments States</p>
                </div>
              </div>
            </a>
          </div>
          <!-- Feature 2 -->
          <div class="col-lg-3 col-md-6">
            <a
              href="manage-patient.html"
              class="text-decoration-none text-dark"
            >
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-person-gear"></i>
                  </div>
                  <h5 class="card-title">Patients</h5>
                  <p class="card-text text-muted">Manage Patients</p>
                </div>
              </div>
            </a>
          </div>
          <!-- Feature 3 -->
          <div class="col-lg-3 col-md-6">
            <a
              href="search-patient.html"
              class="text-decoration-none text-dark"
            >
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-search"></i>
                  </div>
                  <h5 class="card-title">Search</h5>
                  <p class="card-text text-muted">Search Patient.</p>
                </div>
              </div>
            </a>
          </div>

          <!-- Feature 4 -->
          <div class="col-lg-3 col-md-6">
            <a href="vet-article.html" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-journal-richtext"></i>
                  </div>
                  <h5 class="card-title">Vet's Articles</h5>
                  <p class="card-text text-muted">Articles of Vet</p>
                </div>
              </div>
            </a>
          </div>
          <!-- Feature 5 -->
          <div class="col-lg-3 col-md-6">
            <a href="#" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-chat-dots"></i>
                  </div>
                  <h5 class="card-title">Contact User</h5>
                  <p class="card-text text-muted">Talk to user online</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
