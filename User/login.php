<?php
include 'db_connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['username'] = $row['username'];

      // লগইন সফল হলে লগইন টাইম ডাটাবেসে সংরক্ষণ
      date_default_timezone_set('Asia/Dhaka');
      $login_time = date('Y-m-d H:i:s');
      $user_id = $row['id'];
      $user_type = 'User';
      $log_query = "INSERT INTO session_logs (user_id, user_type, login_time) 
              VALUES ('$user_id', '$user_type', '$login_time')";
      mysqli_query($conn, $log_query);

      echo "<script>alert('Login successful!'); window.location='user-dashboard.php';</script>";
    } else {
      echo "<script>alert('Invalid password');</script>";
    }
  } else {
    echo "<script>alert('No user found with that email');</script>";
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
          <i class="bi bi-person-circle me-2"></i>PetCareAI | User Login
        </h4>
        <form method="POST" action="">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Enter your Email" required>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>


        <!-- Sign-up link -->
        <p class="text-center mt-3">
          Don't have an account?
          <a href="signup.php" class="text-decoration-none text-primary">Sign up</a>
        </p>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>