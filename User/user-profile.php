<?php
session_start();
include 'db_connect.php';



if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
$user_id = $_SESSION['user_id'];



// Fetch user info from database
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Update profile when form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Handle profile picture upload
    $imageName = $user['profile_image'] ?? null;
    if (!empty($_FILES['profile_image']['name'])) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) mkdir($targetDir);
        $imageName = time() . "_" . basename($_FILES["profile_image"]["name"]);
        move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetDir . $imageName);
    }

    // Update only the logged-in user's profile
    $update = "UPDATE users SET username=?, phone=?, address=?, profile_image=? WHERE id=?";
    $stmt = $conn->prepare($update);
    $stmt->bind_param("ssssi", $username, $phone, $address, $imageName, $user_id);
    if ($stmt->execute()) {
        echo "<script>alert('Profile updated successfully!'); window.location='user-dashboard.php';</script>";
    } else {
        echo "<script>alert('Error updating profile.');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Profile | PetCareAI</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: url("images/background.jpg") no-repeat center center fixed;
      background-size: cover;
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding-top: 70px;
    }
    .profile-container {
      width: 90%;
      max-width: 600px;
      margin: 2rem auto;
      background: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: all 0.3s ease-in-out;
    }
    .profile-container:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.15);
    }
    .profile-container h2 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: 600;
      color: #0d6efd;
    }
    .profile-pic {
      text-align: center;
      margin-bottom: 25px;
    }
    .profile-pic img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 4px solid #0d6efd;
      object-fit: cover;
    }
    .form-label {
      font-weight: 500;
      color: #333;
    }
    .form-control {
      border-radius: 8px;
      border: 1px solid #ced4da;
      box-shadow: none;
    }
    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 5px rgba(13,110,253,0.3);
    }
    .btn-save {
      background: #0d6efd;
      color: #fff;
      border: none;
      padding: 12px;
      border-radius: 8px;
      width: 100%;
      font-weight: 500;
      transition: background 0.3s ease;
    }
    .btn-save:hover {
      background: #0b5ed7;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#"><img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2">PetCareAI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="user-dashboard.php"><i class="bi bi-house-door"></i> Home</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Profile Section -->
  <div class="profile-container">
    <h2>Your Details</h2>

    <div class="profile-pic">
      <img id="profilePic" src="<?php echo !empty($user['profile_image']) ? 'uploads/'.$user['profile_image'] : 'https://cdn-icons-png.flaticon.com/512/847/847969.png'; ?>" alt="Profile Picture">
      <div class="mt-3">
        <input type="file" name="profile_image" id="uploadPic" accept="image/*" class="form-control form-control-sm w-75 mx-auto" form="profileForm">
      </div>
    </div>

    <form id="profileForm" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label">Phone Number</label>
        <input type="text" name="phone" class="form-control" value="<?php echo $user['phone']; ?>">
      </div>

      <div class="mb-3">
        <label class="form-label">Address</label>
        <textarea name="address" class="form-control" rows="2"><?php echo isset($user['address']) ? $user['address'] : ''; ?></textarea>
      </div>

      <button type="submit" class="btn-save"><i class="bi bi-save"></i> Save Profile</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
