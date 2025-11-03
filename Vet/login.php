<?php
session_start();
include 'db_connect.php'; // database connection

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if email exists in doctors table
    $sql = "SELECT * FROM doctors WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $doctor = mysqli_fetch_assoc($result);

        // Verify password (use plain or hashed)
        if (password_verify($password, $doctor['password']) || $doctor['password'] == $password) {
            // store doctor info in session
            $_SESSION['doctor_id'] = $doctor['id'];
            $_SESSION['doctor_name'] = $doctor['name'];
            $_SESSION['doctor_email'] = $doctor['email'];
            $_SESSION['user_type'] = 'Doctor';

            // insert login log
            $doctor_id = $doctor['id'];
            mysqli_query($conn, "INSERT INTO session_logs (doctor_id, user_type, login_time) VALUES ('$doctor_id', 'Doctor', NOW())");
            $session_log_id = mysqli_insert_id($conn);  // এই row এর ID নাও
            $_SESSION['session_log_id'] = $session_log_id;

            // redirect to vet dashboard
            header("Location: vet-dashboard.php");
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "Doctor account not found!";
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background: url('images/LoginPhoto.png') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Poppins', sans-serif;
    }

    .login-container {
      min-height: 100vh;
    }

    .login-card {
        max-width: 420px;
        margin: auto;
        background-color: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
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
  <div class="container d-flex align-items-center justify-content-center login-container">
    <div class="card p-4 shadow login-card">
      <div class="card-body">
        <h4 class="card-title text-center mb-4">
          <i class="bi bi-person-circle me-2"></i>PetCareAI | Vet Login
        </h4>

        <?php if($error != ''): ?>
          <div class="alert alert-danger text-center"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST">
          <!-- Email -->
          <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="text" id="Email" name="email" class="form-control" placeholder="Enter your Email" required />
          </div>

          <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required />
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
