<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include 'db_connect.php'; 
$username = $_SESSION['username'];


$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();


$profilePic = (!empty($user['profile_image']))
    ? 'uploads/' . $user['profile_image']
    : 'https://cdn-icons-png.flaticon.com/512/847/847969.png';

$stmt->close();
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User-Dashboard</title>
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
          />PetCareAI</a>
      
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
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
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

<img 
  src="<?php echo htmlspecialchars($profilePic); ?>" 
  alt="Profile" 
  width="35" 
  height="35" 
  class="rounded-circle me-2 border border-2 border-white"
  style="object-fit: cover;"
>
<span id="navbarUsername" class="fw-semibold"><?php echo htmlspecialchars($username); ?></span>


          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="user-profile.php"><i class="bi bi-person-fill me-2"></i>Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php" id="logoutBtn"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>



    <section class="py-5">
      <div class="container">
        <h2 class="section-title">User | Dashboard</h2>
        <div class="row g-4 mt-4">
          <!-- Feature 1 - Rescue Request with uniform icon placement -->
          <div class="col-lg-3 col-md-6">
            <a href="rescue.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                  </div>
                  <h5 class="card-title">Rescue Request</h5>
                  <p class="card-text text-muted">
                    Get urgent help for animals in distress.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <!-- Feature 2 -->
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
          <!-- Feature 3 -->
          <div class="col-lg-3 col-md-6">
            <a
              href="consult-vet.php"
              class="text-decoration-none text-dark"
            >
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3"><i class="bi bi-person-badge"></i></div>
                  <h5 class="card-title">Consalt Vet</h5>
                  <p class="card-text text-muted">
                    Services for your pet.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <!-- Feature 4 -->
          <div class="col-lg-3 col-md-6">
            <a
              href="appoinment-history.php"
              class="text-decoration-none text-dark"
            >
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3"><i class="bi bi-calendar-check"></i></div>
                  <h5 class="card-title">My Appointments</h5>
                  <p class="card-text text-muted">
                     View Appointment History.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <!-- Feature 5 -->
          <div class="col-lg-3 col-md-6">
            <a
              href="medical-history.php"
              class="text-decoration-none text-dark"
            >
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3"><i class="bi bi-journal-medical"></i></div>
                  <h5 class="card-title">Medical History</h5>
                  <p class="card-text text-muted">
                     View Medical History.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <!-- Feature 6 -->
          <div class="col-lg-3 col-md-6">
            <a href="medicine.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-capsule"></i>
                  </div>
                  <h5 class="card-title">Medicine Product</h5>
                  <p class="card-text text-muted">
                    Order trusted medicines & supplements.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <!-- Feature 7 -->
          <div class="col-lg-3 col-md-6">
            <a href="products.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-bag-heart"></i>
                  </div>
                  <h5 class="card-title">Other Product</h5>
                  <p class="card-text text-muted">
                    Shop toys, food, and accessories.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <!-- Feature 8 -->
          <div class="col-lg-3 col-md-6">
            <a href="vet's-article.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-journal-richtext"></i>
                  </div>
                  <h5 class="card-title">Vet's Articles</h5>
                  <p class="card-text text-muted">
                    Trusted knowledge from veterinarians.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <!-- Feature 9 -->
          <div class="col-lg-3 col-md-6">
            <a href="contact-vet.php" class="text-decoration-none text-dark">
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-chat-dots"></i>
                  </div>
                  <h5 class="card-title">Contact Vet</h5>
                  <p class="card-text text-muted">
                    Talk to certified vets online anytime.
                  </p>
                </div>
              </div>
            </a>
          </div>
          <!-- Feature 10 -->
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
          <!-- Feature 11 -->
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
          <!-- Feature 12 -->
          <div class="col-lg-3 col-md-6">
            <a
              href="user_post.php"
              class="text-decoration-none text-dark"
            >
              <div class="card text-center h-100 shadow-sm feature-card">
                <div class="card-body">
                  <div class="feature-icon mb-3">
                    <i class="bi bi-pencil"></i>
                  </div>
                  <h5 class="card-title">Post Something</h5>
                  <p class="card-text text-muted">
                    Post whatever you want
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