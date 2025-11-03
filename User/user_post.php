<?php
session_start();
include 'db_connect.php';

// ধরো ইউজার লগইন করা আছে
// (এখানে তোমার সিস্টেম অনুযায়ী session থেকে user id নাও)
$_SESSION['user_id'] = 1; // ডেমো ইউজার আইডি
$user_id = $_SESSION['user_id'];

// --- POST SUBMIT ---
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['title'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = "";

    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) mkdir($targetDir);
        $fileName = time() . "_" . basename($_FILES['image']['name']);
        $targetFile = $targetDir . $fileName;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
        $image = $fileName;
    }

    $stmt = $conn->prepare("INSERT INTO posts (user_id, title, content, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $title, $content, $image);
    $stmt->execute();
    $stmt->close();
    header("Location: user_post.php");
    exit();
}

// --- COMMENT SUBMIT ---
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['comment'])) {
    $post_id = $_POST['post_id'];
    $comment = $_POST['comment'];
    $stmt = $conn->prepare("INSERT INTO comments (post_id, user_id, comment) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $post_id, $user_id, $comment);
    $stmt->execute();
    $stmt->close();
    header("Location: user_post.php");
    exit();
}

// --- FETCH POSTS ---
$posts = $conn->query("SELECT posts.*, users.username, users.profile_image 
                       FROM posts 
                       JOIN users ON posts.user_id = users.id 
                       ORDER BY posts.id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PetCareAI | Posts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>

  <style>
    body {
      background: url("images/background.jpg") no-repeat center center fixed;
      background-size: cover;
      font-family: "Poppins", sans-serif;
      padding-top: 70px;
    }
    .container-box {
      max-width: 800px;
      margin: auto;
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    .post-card {
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 25px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }
    .post-card img {
      width: 20%;
      border-radius: 10px;
      margin-top: 10px;
    }
    .comment-box {
      margin-top: 10px;
    }
    .comment {
      background: #f8f9fa;
      border-radius: 10px;
      padding: 8px 12px;
      margin-top: 5px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="images/PetCare Logo.jpg" alt="Logo" width="40" height="40" class="me-2 rounded-circle">
      PetCareAI
    </a>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="user-dashboard.php"><i class="bi bi-house"></i> Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-box">
  <h3 class="mb-4 text-center text-primary">🐾 Share Your Pet Story</h3>

  <!-- Post Form -->
  <form method="POST" enctype="multipart/form-data" class="mb-4">
    <input type="text" name="title" class="form-control mb-2" placeholder="Post Title" required>
    <textarea name="content" class="form-control mb-2" rows="4" placeholder="Write something..." required></textarea>
    <input type="file" name="image" class="form-control mb-2" accept="image/*">
    <button type="submit" class="btn btn-primary w-100"><i class="bi bi-send"></i> Post</button>
  </form>

  <!-- Show Posts -->
  <div class="posts">
    <?php while($row = $posts->fetch_assoc()): ?>
      <div class="post-card">
  <div class="d-flex align-items-start mb-2">
    <!-- Left: Profile Icon -->
    <img 
      src="<?php echo $row['profile_image'] ? 'uploads/'.$row['profile_image'] : 'https://cdn-icons-png.flaticon.com/512/847/847969.png'; ?>" 
      class="rounded-circle me-3"
      width="10" height="10"
      style="object-fit: cover;">
    
    <!-- Right: Username + Time -->
    <div>
      <strong><?php echo htmlspecialchars($row['username']); ?></strong><br>
      <small class="text-muted"><?php echo date("d M, Y h:i A", strtotime($row['created_at'])); ?></small>
    </div>
  </div>

  <!-- Post Content -->
  <h5 class="mt-2"><?php echo htmlspecialchars($row['title']); ?></h5>
  <p><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
  <?php if ($row['image']): ?>
    <img src="uploads/<?php echo $row['image']; ?>" alt="Post Image">
  <?php endif; ?>

  <!-- Comments Section -->
  <div class="comment-box mt-3">
    <?php
    $post_id = $row['id'];
    $commentRes = $conn->query("SELECT comments.*, users.username, users.profile_image 
                                FROM comments 
                                JOIN users ON comments.user_id = users.id 
                                WHERE post_id=$post_id 
                                ORDER BY comments.id ASC");
    while($c = $commentRes->fetch_assoc()):
    ?>
      <div class="d-flex align-items-start mb-1">
        <img src="<?php echo $c['profile_image'] ? 'uploads/'.$c['profile_image'] : 'https://cdn-icons-png.flaticon.com/512/847/847969.png'; ?>" 
             class="rounded-circle me-2" width="35" height="35" style="object-fit: cover;">
        <div class="comment p-2">
          <b><?php echo htmlspecialchars($c['username']); ?>:</b> <?php echo htmlspecialchars($c['comment']); ?>
        </div>
      </div>
    <?php endwhile; ?>

    <!-- Add Comment -->
    <form method="POST" class="mt-2">
      <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
      <div class="input-group">
        <input type="text" name="comment" class="form-control" placeholder="Write a comment..." required>
        <button class="btn btn-outline-primary" type="submit"><i class="bi bi-chat"></i></button>
      </div>
    </form>
  </div>
</div>

    <?php endwhile; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
