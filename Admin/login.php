<?php
session_start();
include 'db_connect.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Prepare SQL to prevent SQL injection
  $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $admin = $result->fetch_assoc();

    // Check password (plain text here)
    if ($password === $admin['password']) {
      $_SESSION['admin'] = $admin['email'];
      // লগইন সফল হলে লগইন টাইম ডাটাবেসে সংরক্ষণ
      date_default_timezone_set('Asia/Dhaka');
      $login_time = date('Y-m-d H:i:s');
      $user_type = 'Admin';
      $log_query = "INSERT INTO session_logs (user_id, user_type, login_time) 
              VALUES (NULL, '$user_type', '$login_time')";
      mysqli_query($conn, $log_query);

      $_SESSION['log_id'] = mysqli_insert_id($conn);
      
      echo "<script>
                alert('Admin Login Successful!');
                window.location='admin-dashboard.php';
              </script>";
      exit();
    } else {
      $error = "Invalid password!";
    }
  } else {
    $error = "Admin not found!";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - PetCareAI</title>

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    rel="stylesheet" />

  <style>
    body {
      /* Replaced gradient with background image */
      background: url("images/LoginPhoto.png") no-repeat center center fixed;
      background-size: cover;
      font-family: "Poppins", sans-serif;
    }

    .login-container {
      min-height: 100vh;
    }

    .login-card {
      max-width: 420px;
      margin: auto;
      background-color: rgba(255, 255, 255, 0.2);
      /* semi-transparent white */
      backdrop-filter: blur(10px);
      /* glass effect */
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 10px;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #0d6efd;
    }

    .btn-primary {
      background-color: #0d6efd;
      border: none;
    }

    .btn-primary:hover {
      background-color: #0b5ed7;
    }
  </style>
</head>

<body>
  <div
    class="container d-flex align-items-center justify-content-center login-container">
    <div class="card p-4 shadow login-card">
      <div class="card-body">
        <h4 class="card-title text-center mb-4">
          <i class="bi bi-person-circle me-2"></i>PetCareAI | Admin Login
        </h4>
        <form method="POST" id="loginForm">
          <!-- Email -->
          <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input
              type="text"
              name="email"
              id="Email"
              class="form-control"
              placeholder="Enter your Email"
              required />
          </div>

          <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="form-control"
              placeholder="Enter your password"
              required />
          </div>

          <!-- Login Button -->
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>