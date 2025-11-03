<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $otp = $_POST['otp'];

  $sql = "SELECT * FROM users WHERE email='$email' AND otp='$otp'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Mark as verified
    $update = "UPDATE users SET is_verified=1, otp=NULL WHERE email='$email'";
    $conn->query($update);
    echo "<script>alert('Email verified successfully! You can now login.'); window.location='login.php';</script>";
  } else {
    echo "<script>alert('Invalid OTP. Please try again.');</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Verify OTP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="height:100vh; background:#f2f2f2;">
  <div class="card p-4" style="width:400px;">
    <h4 class="text-center mb-3">Verify Email</h4>
    <form method="POST">
      <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
      <div class="mb-3">
        <label class="form-label">Enter OTP</label>
        <input type="text" name="otp" class="form-control" placeholder="6-digit code" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Verify</button>
    </form>
  </div>
</body>
</html>
