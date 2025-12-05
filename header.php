<?php
  // Basic site config
  $site_title = "KU School of Management";
  $site_name  = "KU SOM";
  $base_url   = "/ku-bbis"; // Update if your folder name differs
  // Expect these set in each page:
  // $page_title, $meta_description, $canonical_path
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo htmlspecialchars($page_title ?? $site_title); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if (!empty($meta_description)): ?>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
  <?php endif; ?>
  <?php if (!empty($canonical_path)): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($base_url . $canonical_path); ?>">
  <?php endif; ?>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/style.css">
  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="<?php echo $base_url; ?>/">
      <img src="<?php echo $base_url; ?>/img/logo.jpeg" alt="KU SOM Logo" width="80" height="80">
      <span class="fw-bold ms-2">KUSOM</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navMain" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="curriculum.php"> BBIS Curriculum </a></li>
        <li class="nav-item"><a class="nav-link" href="careers.php">Careers </a></li>
        <li class="nav-item"><a class="nav-link" href="labs.php">Labs </a></li>
        <li class="nav-item"><a class="nav-link" href="research.php">Research </a></li>
        <li class="nav-item"><a class="nav-link" href="faculty.php">Faculty </a></li>
        <li class="nav-item"><a class="nav-link" href="student-life.php">Student Life </a></li>
        <li class="nav-item"><a class="btn btn-primary ms-2" href="<?php echo $base_url; ?>/admissions.php">Apply</a></li>
      
      </ul>
    </div>
  </div>
</nav>
<main class="py-4">
  <div class="container">