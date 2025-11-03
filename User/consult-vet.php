<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User | Book Appointment</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f7f8fc;
    }
    .appointment-card {
      max-width: 600px;
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .appointment-card h2 {
      margin-bottom: 25px;
      font-weight: 600;
      color: #333;
    }
    .form-label {
      font-weight: 500;
    }
    .btn-primary {
      width: 100%;
      padding: 10px;
      font-weight: 500;
    }
    .time-input {
      max-width: 150px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#"
          ><img
            src="images/PetCare Logo.jpg"
            alt="Logo"
            width="40"
            height="40"
            class="me-2"
          />PetCareAI</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="user-dashboard.html">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



  <div class="appointment-card">
    <h2><i class="bi bi-calendar-check"></i> Book Appointment</h2>
    
    <form>
      <!-- Doctor Specialization -->
      <div class="mb-3">
        <label for="specialization" class="form-label">Doctor Specialization</label>
        <select class="form-select" id="specialization" required>
          <option selected disabled>Select Specialization</option>
          <option>Cardiologist</option>
          <option>Dentiest</option>
          <option>Medicine</option>
          <option>Orthopedic</option>
        </select>
      </div>

      <!-- Doctors -->
      <div class="mb-3">
        <label for="doctor" class="form-label">Doctors</label>
        <select class="form-select" id="doctor" required>
          <option selected disabled>Select Doctor</option>
          <option>Dr. John Doe</option>
          <option>Dr. Jane Smith</option>
          <option>Dr. Richard Roe</option>
        </select>
      </div>

      <!-- Consultancy Fees -->
      <div class="mb-3">
        <label for="fees" class="form-label">Consultancy Fees</label>
        <input type="text" class="form-control" id="fees" placeholder="$50" readonly>
      </div>

      <!-- Date -->
      <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" required>
      </div>

      <!-- Time -->
      <div class="mb-3">
        <label for="time" class="form-label">Time</label>
        <input type="time" class="form-control time-input" id="time" value="23:30" required>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Book Appointment</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
