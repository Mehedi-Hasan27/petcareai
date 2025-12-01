<?php
include 'db_connect.php';

$appointments = [];
$message = "";

if(isset($_GET['mobile'])){
    $mobile = mysqli_real_escape_string($conn, $_GET['mobile']);

    // appointments table theke data ana
    $sql = "SELECT patient_name, email, phone, address, appointment_date, symptoms, serial_number, fees 
            FROM appointments 
            WHERE phone='$mobile'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $appointments[] = $row;
        }
    } else {
        $message = "No patient found with this mobile number.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin | Patient Search</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body { background-color: #f8f9fa; font-family: 'Poppins', sans-serif; }
    .card { border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.1); }
    .btn-custom { background-color: #007bff; border: none; font-weight: 500; padding: 10px 20px; border-radius: 8px; }
    .btn-custom:hover { background-color: #0056b3; }
    label { font-weight: 600; }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="images/PetCare Logo.jpg" width="40" height="40" class="me-2">
        PetCareAI
      </a>

      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="admin-dashboard.php">Dashboard</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Search Section -->
  <div class="container pt-5">
    <div class="col-lg-6 mx-auto">
      <div class="card p-4 mb-4">
        <h3 class="text-center mb-4">Admin - Patient Search</h3>

        <form method="GET">
          <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="text" class="form-control" name="mobile"
              placeholder="Enter patient mobile number"
              value="<?php echo isset($_GET['mobile']) ? htmlspecialchars($_GET['mobile']) : ''; ?>" required>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-custom">Search</button>
          </div>
        </form>
      </div>

      <!-- Results -->
      <?php if(count($appointments) > 0) { ?>
        <div class="card p-4">
          <h5 class="mb-3">Patient Appointment Records</h5>

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Appointment Date</th>
                <th>Symptoms</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($appointments as $app) { ?>
                <tr>
                  <td><?php echo htmlspecialchars($app['patient_name']); ?></td>
                  <td><?php echo htmlspecialchars($app['email']); ?></td>
                  <td><?php echo htmlspecialchars($app['appointment_date']); ?></td>
                  <td><?php echo htmlspecialchars($app['symptoms']); ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

      <?php } elseif($message) { ?>
        <div class="alert alert-warning text-center"><?php echo $message; ?></div>
      <?php } ?>
    </div>
  </div>

</body>
</html>
