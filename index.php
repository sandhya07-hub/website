<?php
$page_title = "KU SOM — BBIS Program";
$meta_description = "Discover KU School of Management's BBIS: integrated management + information systems, curriculum, labs, careers, and admissions.";
$canonical_path = "/";
include 'header.php';

?>

<section class="hero mb-4">
  <h1 class="mb-2">Bachelor in Business Information Systems (BBIS)</h1>
  <p class="lead mb-3">A rigorous blend of management and information systems, designed to build employable skills across four years.</p>
  <div>
    <a class="btn btn-primary me-2"  href="curriculum.php" >View BBIS Curriculum </a>
    <a class="btn btn-outline-primary" href="<?php echo $base_url; ?>admissions.php">Apply / Admissions</a>
  <style>
    .hero {
  min-height: 80vh; /* makes it tall, 80% of viewport height */
  display: flex;
  flex-direction: column;
  justify-content: center; /* centers content vertically */
  align-items: center; /* centers content horizontally */
  text-align: center;
  background: url('img/bbis.png') no-repeat center center;
  background-size: cover; /* ensures image covers entire section */
  color: #fff; /* text color for contrast */
  position: relative;
}

.hero::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(0,0,0,0.4); /* overlay for readability */
}
.hero h1, .hero p, .hero div {
  position: relative; /* ensures text is above overlay */
}

  </style>
  </div>
</section>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<div class="row text-center feature-row">
  <div class="col-md-4 feature-box">
    <i class="bi bi-journal-bookmark-fill feature-icon"></i>
    <h3>Curriculum</h3>
    <p>See semester-by-semester courses, skill mapping, and pathways to projects and internships.</p>
    <a href="curriculum.php" class="btn btn-primary">View BBIS Curriculum →</a>
  </div>
  <div class="col-md-4 feature-box">
    <i class="bi bi-tools feature-icon"></i>
    <h3>Labs & Tools</h3>
    <p>Hands-on labs and software used across analytics, databases, and project collaboration.</p>
    <a href="<?php echo $base_url; ?>labs.php" class="btn btn-primary">Explore labs →</a>
  </div>
  <div class="col-md-4 feature-box">
    <i class="bi bi-briefcase-fill feature-icon"></i>
    <h3>Careers</h3>
    <p>See how BBIS prepares for Business Analyst, Data Analyst, Systems Analyst, and PM roles.</p>
    <a href="careers.php" class="btn btn-primary">See career outcomes →</a>
    </div>
     <div class="col-md-4 feature-box">
    <i class="bi bi-people-fill feature-icon"></i>
    <h3>Student Life</h3>
    <p>Discover clubs, events, sports, and vibrant campus experiences that enrich your journey.</p>
    <a href="studentlife.php" class="btn btn-primary">Explore student life →</a>
  </div>


    <style>.feature-row {
  margin-top: 40px;
}

.feature-box {
  padding: 20px;
  border: 1px solid #e0e0e0;
  border-radius: 8px;
  background: #fff;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.feature-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 12px rgba(0,0,0,0.1);
}

.feature-icon {
  font-size: 40px;
  color: #0d6efd; /* Bootstrap primary color */
  margin-bottom: 15px;
}
</style>
  
</div>


<?php include 'footer.php'; ?>