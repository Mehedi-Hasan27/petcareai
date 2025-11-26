<?php
// Database connection
include 'db_connect.php';
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$user = null;
$message = "";

if(isset($_GET['mobile'])){
    $mobile = mysqli_real_escape_string($conn, $_GET['mobile']);
    $sql = "SELECT username, email, gender, address FROM users WHERE phone='$mobile'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
    } else {
        $message = "No user found with this mobile number.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Patient Search</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; font-family: 'Poppins', sans-serif; }
    .card { border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.1); }
    .btn-custom { background-color: #007bff; border: none; font-weight: 500; padding: 10px 20px; border-radius: 8px; transition: 0.3s; }
    .btn-custom:hover { background-color: #0056b3; }
    label { font-weight: 600; }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#"><img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2">PetCareAI</a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="admin-dashboard.php">Dashboard</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Search Section -->
  <div class="container d-flex justify-content-center align-items-start min-vh-100 pt-5">
    <div class="col-lg-6">
      <div class="card p-4 mb-4">
        <h3 class="text-center mb-4">Admin - Patient Search</h3>
        <form method="GET">
          <div class="mb-3">
            <label for="mobile" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter patient mobile number" value="<?php echo isset($_GET['mobile']) ? htmlspecialchars($_GET['mobile']) : ''; ?>" required>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-custom">Search</button>
          </div>
        </form>
      </div>

      <!-- Result Section -->
      <?php if($user) { ?>
        <div class="card p-4">
          <h5 class="mb-3">Patient Information</h5>
          <p><strong>Name:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
          <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
          <p><strong>Gender:</strong> <?php echo htmlspecialchars($user['gender']); ?></p>
          <p><strong>Address:</strong> <?php echo htmlspecialchars($user['address']); ?></p>
        </div>
      <?php } elseif($message) { ?>
        <div class="alert alert-warning"><?php echo $message; ?></div>
      <?php } ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
