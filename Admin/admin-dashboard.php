<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin-Dashboard</title>
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
  background: url("images/background.jpg") no-repeat center center fixed;
  background-size: cover;
  font-family: "Poppins", sans-serif;
}
      .section-title {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 1rem;
      }
      .feature-card {
        border-radius: 15px;
        transition: 0.3s ease-in-out;
      }
      .feature-card:hover {
        transform: scale(1.03);
        border: 1px solid #0d6efd;
        box-shadow: 0 6px 20px rgba(13, 110, 253, 0.2);
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
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img
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
                <span id="navbarUsername">Admin</span>
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="userDropdown"
              >
                
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

    <!-- Dashboard Features -->
    <section class="py-5">
      <div class="container">
        <h2 class="section-title">Admin | Dashboard</h2>
        <div class="row g-4 mt-4">
          <!-- Existing Features (your code) -->
          <!-- Rescue Request -->
          <div class="col-lg-3 col-md-6">
            <a href="rescue.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                  </div>
                  <h5 class="card-title">Rescue Request</h5>
                  <p class="card-text text-muted">
                    Get urgent help for animals.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- Premier Package -->
          <div class="col-lg-3 col-md-6">
            <a
              href="premium-package.php"
              class="text-decoration-none text-dark"
            >
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3"><i class="bi bi-gem"></i></div>
                  <h5 class="card-title">Premier Package</h5>
                  <p class="card-text text-muted">
                    Premium care and services for your pet.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- Products -->
          <div class="col-lg-3 col-md-6">
            <a href="products.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-bag-heart"></i>
                  </div>
                  <h5 class="card-title">Products</h5>
                  <p class="card-text text-muted">
                    Shop toys, food, and medicine.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- Animal Adoption -->
          <div class="col-lg-3 col-md-6">
            <a
              href="animal-adoption.php"
              class="text-decoration-none text-dark"
            >
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-house-heart"></i>
                  </div>
                  <h5 class="card-title">Animal Adoption</h5>
                  <p class="card-text text-muted">
                    Find and adopt your next best friend.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- Cutest Pets Contest -->
          <div class="col-lg-3 col-md-6">
            <a
              href="cutest-pets-contest.php"
              class="text-decoration-none text-dark"
            >
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-trophy"></i>
                  </div>
                  <h5 class="card-title">Cutest Pets Contest</h5>
                  <p class="card-text text-muted">
                    Enter your pet and win exciting prizes!
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- Doctors -->
          <div class="col-lg-3 col-md-6">
            <a href="add-doctor.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-person-badge"></i>
                  </div>
                  <h5 class="card-title">Doctors</h5>
                  <p class="card-text text-muted">Manage vet doctors.</p>
                </div>
              </div>
            </a>
          </div>

          <!-- Appointments -->
          <div class="col-lg-3 col-md-6">
            <a href="appointments.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-calendar-check"></i>
                  </div>
                  <h5 class="card-title">Appointments</h5>
                  <p class="card-text text-muted">
                    Manage and check appointment history.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- New Queries -->
          <div class="col-lg-3 col-md-6">
            <a href="queries.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-question-circle"></i>
                  </div>
                  <h5 class="card-title">New Queries</h5>
                  <p class="card-text text-muted">
                    View and remark to new inquiries.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- Session Logs -->
          <div class="col-lg-3 col-md-6">
            <a href="session-logs.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-clipboard-data"></i>
                  </div>
                  <h5 class="card-title">Session Logs</h5>
                  <p class="card-text text-muted">
                    Track activity and login sessions.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- Reports -->
          <div class="col-lg-3 col-md-6">
            <a href="reports.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-bar-chart-line"></i>
                  </div>
                  <h5 class="card-title">Reports</h5>
                  <p class="card-text text-muted">
                    Generate and view performance reports.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- Pages -->
          <div class="col-lg-3 col-md-6">
            <a href="pages.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-files"></i>
                  </div>
                  <h5 class="card-title">Pages</h5>
                  <p class="card-text text-muted">
                    Manage about us pages and content.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- Patient Search -->
          <div class="col-lg-3 col-md-6">
            <a
              href="patient-search.php"
              class="text-decoration-none text-dark"
            >
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-search"></i>
                  </div>
                  <h5 class="card-title">Patient Search</h5>
                  <p class="card-text text-muted">
                    Quickly search patient records.
                  </p>
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
