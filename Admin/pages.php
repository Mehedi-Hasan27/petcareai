<?php
include 'db_connect.php';

if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}

// Handle form submission
if(isset($_POST['submit'])){
    $title = $_POST['pageTitle'];
    $description = $_POST['pageDescription'];

    // Update the row with id=1
    $sql = "UPDATE about_system SET content='$description' WHERE id=1";

    if(mysqli_query($conn, $sql)){
        $msg = "Updated successfully!";
    } else {
        $msg = "Error updating: " . mysqli_error($conn);
    }
}

// Fetch current content
$result = mysqli_query($conn, "SELECT content FROM about_system WHERE id=1");
$about = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - About Us</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; font-family: 'Poppins', sans-serif; }
    .card { border-radius: 15px; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); }
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="admin-dashboard.php">Dashboard</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-lg-8">
      <div class="card p-4">
        <h3 class="text-center mb-4">Admin - About Us</h3>

        <?php if(isset($msg)) { ?>
          <div class="alert alert-success"><?php echo $msg; ?></div>
        <?php } ?>

        <form method="post">
          <!-- Page Title -->
          <div class="mb-3">
            <label for="pageTitle" class="form-label">Page Title</label>
            <input type="text" class="form-control" id="pageTitle" name="pageTitle" value="About Our System">
          </div>

          <!-- Page Description -->
          <div class="mb-3">
            <label for="pageDescription" class="form-label">Page Description</label>
            <textarea class="form-control" id="pageDescription" name="pageDescription" rows="7"><?php echo $about['content']; ?></textarea>
          </div>

          <!-- Submit -->
          <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-custom">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>