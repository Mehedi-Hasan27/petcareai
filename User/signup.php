<?php
include 'db_connect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $gender = $_POST['gender'];

  // Check if email already exists
    $check_sql = "SELECT * FROM users WHERE email='$email'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Email already exists
        echo "<script>alert('This email is already registered! Try another.'); window.location='signup.php';</script>";
    } else {
        // Generate random 6-digit OTP
        $otp = rand(100000, 999999);

        // Insert new user
        $sql = "INSERT INTO users (username, email, phone, password, gender, otp, is_verified) 
                VALUES ('$username', '$email', '$phone', '$password', '$gender', '$otp', 0)";

        if ($conn->query($sql) === TRUE) {
            // Send OTP Email
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = '20raju3@gmail.com'; // your Gmail
                $mail->Password = 'uzai txxp hhum sthi'; // Gmail app password
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom('20raju3@gmail.com', 'PetCareAI');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'PetCareAI - Email Verification';
                $mail->Body = "<p>Dear $username,</p><p>Your OTP code is <b>$otp</b></p><p>Use this to verify your account.</p>";

                $mail->send();

                echo "<script>alert('Signup successful! Check your email for OTP.'); window.location='verify_otp.php?email=$email';</script>";
            } catch (Exception $e) {
                echo "Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Signup - PetCareAI</title>

    <!-- Bootstrap CSS -->
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
        background-image: url("images/signuppic.png"); /*  image path */
        background-size: cover;
        background-position: center;
        font-family: "Poppins", sans-serif;
      }
      .signup-container {
        min-height: 100vh;
      }
      .signup-card {
        max-width: 500px;
        margin: auto;
        background-color: rgba(255, 255, 255, 0.2); /* semi-transparent white */
        backdrop-filter: blur(10px); /* optional: gives a glass effect */
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 15px;
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
      class="container d-flex align-items-center justify-content-center signup-container"
    >
      <div class="card p-4 shadow signup-card">
        <div class="card-body">
          <h4 class="card-title text-center mb-4">
            <i class="bi bi-person-plus-fill me-2"></i>PetCareAI Registration
          </h4>
          <form method="POST" action="">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
  </div>

  <div class="mb-4">
    <label class="form-label">Gender</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" value="male" required> Male
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" value="female"> Female
    </div>
  </div>

  <div class="d-grid">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>

          

          <!-- Already have account -->
          <p class="text-center mt-3">
            Already have an account?
            <a href="login.php" class="text-decoration-none text-primary"
              >Login</a
            >
          </p>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
