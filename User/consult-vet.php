<?php
// consult-vet.php
include 'db_connect.php';

//user_id dawa hoica different user r jnno appoinment histoy save raka
session_start();
$user_id = $_SESSION['user_id'];


$success_msg = "";
$serial_number = "";

// Handle form submission
if(isset($_POST['action']) && $_POST['action'] == 'book_appointment') {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $address = $_POST['address'];
    $specialization_id = $_POST['specialization_id'];
    $doctor_id = $_POST['doctor_id'];
    $fees   = $_POST['fees'];
    $date   = $_POST['date'];
    $symptoms = $_POST['symptoms'];

    // Count how many appointments exist for this doctor on this date
    $check = "SELECT COUNT(*) AS total FROM appointments WHERE appointment_date='$date' AND doctor_id='$doctor_id'";
    $result = $conn->query($check);
    $row = $result->fetch_assoc();
    
    if($row['total'] >= 5) {
        echo json_encode(['status'=>'full', 'message'=>'Sorry, no slots available for this doctor on the selected date.']);
        exit;
    }

    // New Serial = total + 1
    $serial_number = $row['total'] + 1;

    // Insert appointment
    $sql = "INSERT INTO appointments (user_id, patient_name, email, phone, address, doctor_id, specialization_id, appointment_date, symptoms, serial_number, fees) 
            VALUES ('$user_id','$name','$email','$phone','$address','$doctor_id','$specialization_id','$date','$symptoms','$serial_number', '$fees')";

    if($conn->query($sql)) {
        echo json_encode(['status'=>'success', 'message'=>"Appointment Booked! Your Serial Number is: $serial_number"]);
    } else {
        echo json_encode(['status'=>'error', 'message'=>$conn->error]);
    }
    exit;
}

// Fetch doctors & specializations for form
$spec_result = $conn->query("SELECT * FROM doctor_specializations");
$specs = [];
while($row = $spec_result->fetch_assoc()) $specs[] = $row;

$doc_result = $conn->query("SELECT * FROM doctors");
$doctors = [];
while($row = $doc_result->fetch_assoc()) $doctors[] = $row;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User | Book Appointment</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<style>
body { font-family: 'Poppins', sans-serif; background-color: #eef1f7; }
.appointment-card { max-width: 650px; margin: 50px auto; background: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
.appointment-card:hover { box-shadow:0 15px 35px rgba(0,0,0,0.15); }
.appointment-card h2 { font-weight:600; color:#333; text-align:center; margin-bottom:30px; }
.input-group-text { background:#f0f2f5; border-right:none; }
.form-control { border-left:none; }
.btn-primary { width:100%; padding:12px; font-size:17px; border-radius:8px; font-weight:600; }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container-fluid">
<a class="navbar-brand d-flex align-items-center" href="#">
<img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2">PetCareAI</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
<ul class="navbar-nav"><li class="nav-item"><a class="nav-link" href="user-dashboard.php">Home</a></li></ul>
</div></div></nav>

<div class="appointment-card">
<h2><i class="bi bi-calendar-check me-2"></i>Book Appointment</h2>

<div id="message"></div>

<form id="appointmentForm">

<!-- Patient Name -->
<div class="mb-3"><label class="form-label">Patient Name</label>
<div class="input-group"><span class="input-group-text"><i class="bi bi-person-fill"></i></span>
<input type="text" name="name" class="form-control" required></div></div>

<!-- Email -->
<div class="mb-3"><label class="form-label">E-mail</label>
<div class="input-group"><span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
<input type="email" name="email" class="form-control" required></div></div>

<!-- Phone -->
<div class="mb-3"><label class="form-label">Mobile Number</label>
<div class="input-group"><span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
<input type="text" name="phone" class="form-control" required></div></div>

<!-- Address -->
<div class="mb-3"><label class="form-label">Address</label>
<div class="input-group"><span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
<input type="text" name="address" class="form-control" required></div></div>

<!-- Doctor Specialization -->
<div class="mb-3"><label class="form-label">Doctor Specialization</label>
<div class="input-group"><span class="input-group-text"><i class="bi bi-heart-pulse-fill"></i></span>
<select class="form-select" name="specialization_id" id="specialization" required>
<option disabled selected>Select Specialization</option>
<?php foreach($specs as $s){ ?>
<option value="<?= $s['id'] ?>"><?= $s['specialization_name'] ?></option>
<?php } ?>
</select></div></div>

<!-- Doctor -->
<div class="mb-3"><label class="form-label">Doctor</label>
<div class="input-group"><span class="input-group-text"><i class="bi bi-person-badge-fill"></i></span>
<select class="form-select" name="doctor_id" id="doctor" required>
<option disabled selected>Select Doctor</option>
</select></div></div>

<!-- Consultancy Fees -->
<div class="mb-3"><label class="form-label">Consultancy Fees</label>
<div class="input-group"><span class="input-group-text"><i class="bi bi-cash-coin"></i></span>
<input type="text" name="fees" id="fees" class="form-control" readonly></div></div>

<!-- Date -->
<div class="mb-3"><label class="form-label">Date</label>
<div class="input-group"><span class="input-group-text"><i class="bi bi-calendar-event-fill"></i></span>
<input type="date" name="date" class="form-control" required></div></div>

<!-- Symptoms -->
<div class="mb-3"><label class="form-label">Symptoms Observed</label>
<div class="input-group"><span class="input-group-text"><i class="bi bi-clipboard-plus-fill"></i></span>
<textarea name="symptoms" class="form-control" rows="3" required></textarea></div></div>

<button type="submit" class="btn btn-primary"><i class="bi bi-check-circle me-1"></i> Book Appointment</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
let doctors = <?php echo json_encode($doctors); ?>;

$('#specialization').change(function(){
    let specId = $(this).val();
    $('#doctor').html('<option disabled selected>Select Doctor</option>');
    let filtered = doctors.filter(d => d.specialization_id == specId);
    filtered.forEach(d => {
        $('#doctor').append('<option value="'+d.id+'" data-fees="'+d.fees+'">'+d.name+'</option>');
    });
    $('#fees').val('');
});

$('#doctor').change(function(){
    let fee = $('#doctor option:selected').data('fees');
    $('#fees').val(fee);
});

$('#appointmentForm').submit(function(e){
    e.preventDefault();
    let formData = $(this).serialize() + '&action=book_appointment';
    $.post('consult-vet.php', formData, function(response){
        let res = JSON.parse(response);
        if(res.status=='success') $('#message').html('<div class="alert alert-success">'+res.message+'</div>');
        else if(res.status=='full') $('#message').html('<div class="alert alert-warning">'+res.message+'</div>');
        else $('#message').html('<div class="alert alert-danger">'+res.message+'</div>');
        $('#appointmentForm')[0].reset();
        $('#doctor').html('<option disabled selected>Select Doctor</option>');
        $('#fees').val('');
    });
});
</script>

</body>
</html>
