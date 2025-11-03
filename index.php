<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PetCareAI - Smart Pet Solutions</title>
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
      .feature-icon {
        font-size: 2rem;
        color: #0d6efd;
      }
      body {
  background: url("images/background.jpg") no-repeat center center fixed;
  background-size: cover;
}
      .hero {
        background: linear-gradient(to right, #e3f2fd, #f8f9fa);
        padding: 80px 0;
      }
      .section-title {
        font-size: 2.2rem;
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

      .icon-circle {
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 1.8rem;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background-color: #dc3545; /* red */
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
      }

      .img-cover {
        object-fit: cover;
        width: 100%;
        height: 100%;
      }

      footer {
        background-color: #0d6efd;
        color: white;
      }
      .gallery-img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
      }



    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#"><img src="images/PetCare Logo.jpg" alt="PetCareAI Logo" width="40" height="40" class="me-2"><span>PetCareAI</span></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <div class="d-flex ms-lg-3 mt-3 mt-lg-0">
            <a href="User/login.php" target="_blank" class="btn btn-outline-light me-2"
              ><i class="bi bi-person-circle me-1"></i>Login</a>
            <a href="User/signup.php" target="_blank" class="btn btn-warning text-dark">Sign Up</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Hero Section with Background Carousel -->
<section class="position-relative overflow-hidden" style="height: 50vh;">
  <!-- Carousel Background -->
  <div id="heroCarousel" class="carousel slide carousel-fade position-absolute w-100 h-100" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner h-100">
      <div class="carousel-item active h-100">
        <img src="images/slide1.webp" class="d-block w-100 h-100 img-cover" alt="Dog looking happy">
      </div>
      <div class="carousel-item h-100">
        <img src="images/slide2.jpg" class="d-block w-100 h-100 img-cover" alt="Cat relaxing at home">
      </div>
      <div class="carousel-item h-100">
        <img src="images/slide3.webp" class="d-block w-100 h-100 img-cover" alt="Pet care at vet clinic">
      </div>
    </div>
  </div>

  <!-- Overlay Content -->
  <div class="container text-center text-white position-relative z-2" style="top: 50%; transform: translateY(-50%);">
    <h1 class="display-4 fw-bold">Welcome to Animal Care Platform</h1>
    <p class="lead">Your one-stop solution for pet health, wellness, adoption, and more.</p>
    <a href="#" class="btn btn-warning btn-lg mt-3">Consult a Vet Now</a>
  </div>

  <!-- Overlay for text readability -->
  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50" style="z-index: 1;"></div>
</section>

  <!-- Login Cards -->
  <section class="bg-light py-5">
    <div class="container text-center my-4">
      <h2 class="section-title text-center">Logins</h2>
        <div class="row g-3 justify-content-center">
          <div class="col-sm-4">
            <div class="card p-3">
              <img src="images/UserLogin.png" alt="Pet Owner">
                <h5>Petter Login</h5>
                  <a href="User/login.php" target="_blank" class="btn btn-success btn-sm">Login</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card p-3">
              <img src="images/DoctorLogin.jpg" alt="Doctor">
                <h5>Doctor Login</h5>
                  <a href="Vet/login.php" target="_blank" class="btn btn-success btn-sm">Login</a>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card p-3">
              <img src="images/AdminLogin.jpg" alt="Admin">
                <h5>Admin Login</h5>
                  <a href="Admin/login.php" target="_blank" class="btn btn-success btn-sm">Login</a>
            </div>
          </div>
        </div>
    </div>
  </section>

    <!-- Features Section -->
    <section class="py-5">
      <div class="container">
        <h2 class="section-title text-center">Our Key Features</h2>
        <div class="row g-4 mt-4">
          <!-- Feature 1 - Rescue Request with uniform icon placement -->
          <div class="col-lg-3 col-md-6">
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

          <!-- Feature 4 -->
          <div class="col-lg-3 col-md-6">
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

          <!-- Feature 5 -->
          <div class="col-lg-3 col-md-6">
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

          <!-- Feature 6 -->
          <div class="col-lg-3 col-md-6">
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

          <!-- Feature 7 -->
          <div class="col-lg-3 col-md-6">
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

          <!-- Feature 8 -->
          <div class="col-lg-3 col-md-6">
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
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-light py-5">
     <!-- About Section -->
<div class="container my-5">
  <div class="row align-items-center">
    
    <!-- Left Side Image -->
    <div class="col-md-6">
      <img src="images/AboutUs.jpg" alt="About PetCareAI" class="img-fluid rounded shadow">
    </div>
    
    <!-- Right Side Text -->
    <div class="col-md-6">
      <h2 class="section-title">About Our System</h2>
      <p>
        PetCareAI is designed to manage animal health information. It helps pet owners connect with doctors, buy medicine, request rescue, and track treatment history. It combines traditional care with modern AI-based support. Our system is user-friendly, responsive, and scalable.
      </p>
    </div>
    
  </div>
</div>

    </section>

<!-- Gallery -->
<section class="py-5">
  <div class="container mt-4">
    <h2 class="text-center mb-3">Our Gallery</h2><br>

    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 mb-3 text-center">
        <img src="images/g1.jpg" alt="G1" class="gallery-img">
      </div>
      <div class="col-md-4 col-sm-6 mb-3 text-center">
        <img src="images/g2.jpg" alt="G2" class="gallery-img">
      </div>
      <div class="col-md-4 col-sm-6 mb-3 text-center">
        <img src="images/g3.jpg" alt="G3" class="gallery-img">
      </div>
      <div class="col-md-4 col-sm-6 mb-3 text-center">
        <img src="images/g4.jpg" alt="G4" class="gallery-img">
      </div>
      <div class="col-md-4 col-sm-6 mb-3 text-center">
        <img src="images/g5.jpg" alt="G5" class="gallery-img">
      </div>
      <div class="col-md-4 col-sm-6 mb-3 text-center">
        <img src="images/g6.jpg" alt="G6" class="gallery-img">
      </div>
    </div>
  </div>
</section>

<!-- Contact Form -->
<section id="contact_us" class="contact-us-single py-5" style="background:#f9f9f9;">
  <div class="container-fluid p-0">
    <form method="post" novalidate style="background:#fff; padding:20px; border-radius:4px; width:100%;">
      <h5 class="mb-4 fw-bold">Contact Form</h5>

      <div class="row mb-3 align-items-center">
        <label for="fullname" class="col-lg-2 col-md-3 col-sm-4 col-form-label">Enter Name :</label>
        <div class="col-lg-10 col-md-9 col-sm-8">
          <input type="text" id="fullname" name="fullname" placeholder="Enter Name" class="form-control" required>
        </div>
      </div>

      <div class="row mb-3 align-items-center">
        <label for="emailid" class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email Address :</label>
        <div class="col-lg-10 col-md-9 col-sm-8">
          <input type="email" id="emailid" name="emailid" placeholder="Enter Email Address" class="form-control" required>
        </div>
      </div>

      <div class="row mb-3 align-items-center">
        <label for="mobileno" class="col-lg-2 col-md-3 col-sm-4 col-form-label">Mobile Number:</label>
        <div class="col-lg-10 col-md-9 col-sm-8">
          <input type="tel" id="mobileno" name="mobileno" placeholder="Enter Mobile Number" class="form-control" required>
        </div>
      </div>

      <div class="row mb-4 align-items-start">
        <label for="description" class="col-lg-2 col-md-3 col-sm-4 col-form-label">Enter Message:</label>
        <div class="col-lg-10 col-md-9 col-sm-8">
          <textarea id="description" name="description" rows="5" placeholder="Enter Your Message" class="form-control" required></textarea>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4"></div>
        <div class="col-lg-10 col-md-9 col-sm-8">
          <button type="submit" name="submit" class="btn btn-success">Send Message</button>
        </div>
      </div>
    </form>
  </div>
</section>


    <!-- Footer -->
    <footer class="text-center py-4">
      <div class="footer text-center">
        <div class="container">
          
              <h5>Contact Us</h5>
                <p>House 26, Road 02, Banani, Dhaka 1212, Bangladesh<br/>
                   Phone: 8801712345678<br/>
                   Email: support@petcareai.com<br/>
                   Timing: 9 am To 8 Pm
                </p>
            </div>
          </div>
          <p class="mt-3">PetCareAI - Smart Solutions for Pet Lovers</p>
        </div>
    </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
