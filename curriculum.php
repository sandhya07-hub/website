<?php
$page_title = "KU BBIS Curriculum | KU School of Management";
$meta_description = "Explore the KU BBIS curriculum: integrated management + information systems, semester-wise courses, skills mapping, career relevance, and capstone pathways.";
$canonical_path = "/bbis/curriculum";
include 'header.php';




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $meta_description; ?>">
  <link rel="canonical" href="<?php echo $canonical_path; ?>">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
<h1>BBIS curriculum at KU School of Management</h1>
<p class="text-muted"> See how management and information systems combine to build employable skills.</p>


<section class="mb-4">
 <h2><i class="fas fa-lightbulb me-2"></i> Philosophy: integrated management and information systems</h2>
  <p>BBIS blends business management with core information systems. Students learn how organizations design, build, and use technology to create value—balancing technical depth with managerial decision-making. The curriculum is structured to move from foundations to specialized applied learning, ensuring readiness for Nepal’s and global job markets.</p>
</section>

<section class="mb-4">
 <h2><i class="fas fa-book-open me-2"></i> Curriculum overview: semester by semester</h2>
  <p>Below is a clean semester-wise view. Each course is marked as technical, managerial, or analytical to help evaluation.</p>

  <div class="table-responsive">
    <table class="table table-bordered align-middle">
      <thead>
        <tr>
          <th>Semester</th>
          <th>Course title</th>
          <th>Cluster</th>
        </tr>
      </thead>
      <tbody>
        <!-- Sem 1–2 Foundations -->
        <tr><td>Sem 1</td><td>Introduction to Information Systems</td><td><span class="badge badge-ana">Analytical</span></td></tr>
        <tr><td>Sem 1</td><td>Structured Programming</td><td><span class="badge badge-tech">Technical</span></td></tr>
        <tr><td>Sem 1</td><td>Financial Accounting</td><td><span class="badge badge-mgr">Managerial</span></td></tr>
        <tr><td>Sem 2</td><td>Object Oriented Programming</td><td><span class="badge badge-tech">Technical</span></td></tr>
        <tr><td>Sem 2</td><td>Business Management</td><td><span class="badge badge-mgr">Managerial</span></td></tr>
        <tr><td>Sem 2</td><td>Digital Logic</td><td><span class="badge badge-ana">Analytical</span></td></tr>

        <!-- Sem 3–4 Core IS + Business Integration -->
        <tr><td>Sem 3</td><td>Operations System</td><td><span class="badge badge-ana">Analytical</span></td></tr>
        <tr><td>Sem 3</td><td>Data Structures and Algorithms</td><td><span class="badge badge-tech">Technical</span></td></tr>
        <tr><td>Sem 3</td><td> Managerial Communication</td><td><span class="badge badge-mgr">Managerial</span></td></tr>
        <tr><td>Sem 4</td><td>Computer Networks and Data Communication</td><td><span class="badge badge-tech">Technical</span></td></tr>
        <tr><td>Sem 4</td><td>Data Management Systems & SQL</td><td><span class="badge badge-tech">Technical</span></td></tr>
        <tr><td>Sem 4</td><td>Operations & Process Management</td><td><span class="badge badge-mgr">Managerial</span></td></tr>

        <!-- Sem 5–6 Specializations + Tools -->
        <tr><td>Sem 5</td><td>Digital Marketing</td><td><span class="badge badge-mgr">Managerial</span></td></tr>
        <tr><td>Sem 5</td><td> Web Technology</td><td><span class="badge badge-tech">Technical</span></td></tr>
        <tr><td>Sem 5</td><td>Organizational Behaviour</td><td><span class="badge badge-mgr">Managerial</span></td></tr>
        <tr><td>Sem 6</td><td>Operations Management</td><td><span class="badge badge-ana">Analytical</span></td></tr>
        <tr><td>Sem 6</td><td>Cloud Computing</td><td><span class="badge badge-tech">Technical</span></td></tr>
        <tr><td>Sem 6</td><td>Artificial Intelligence</td><td><span class="badge badge-tech">Technical</span></td></tr>

        <!-- Sem 7–8 Capstone + Internship -->
        <tr><td>Sem 7</td><td>Information Security</td><td><span class="badge badge-ana">Analytical</span></td></tr>
        <tr><td>Sem 7</td><td>International Business</td><td><span class="badge badge-mgr">Managerial</span></td></tr>
        <tr><td>Sem 7</td><td>System Analysis and Design</td><td><span class="badge badge-tech">Technical</span></td></tr>
        <tr><td>Sem 8</td><td>Industry Internship</td><td><span class="badge badge-soft">Soft</span></td></tr>
        <tr><td>Sem 8</td><td>Human Resource Management</td><td><span class="badge badge-mgr">Managerial</span></td></tr>
      </tbody>
    </table>
  </div>

  <p class="small text-muted">Note: This is a representative structure. Refer to official KU SOM documentation for exact offerings.</p>
  <a href="<?php echo $base_url; ?>/bbis/course-descriptions" class="btn btn-outline-primary">Explore detailed course descriptions</a>
</section>

<section class="mb-4">
 <h2><i class="fas fa-cogs me-2"></i> Core topics and electives</h2>
  <div class="row g-3">
    <div class="col-md-6">
      <h3>Compulsory core</h3>
      <ul>
        <li><strong>Technical:</strong> Programming, Databases, Web Tech, Analytics I–II</li>
        <li><strong>Managerial:</strong> Business Management, Project Management, human resource management</li>
        <li><strong>Analytical:</strong> Statistics,quantitative techniques, digital logic</li>
        <li><strong>Professional:</strong> Communication, Collaboration, Internship</li>
      </ul>
    </div>
    <div class="col-md-6">
      <h3>Electives for specialization</h3>
      <ul>
        <li><strong>Business Analytics:</strong> Data Warehouse and Data Mining,  Decision Support and Expert Systems,Human–Computer Information Systems</li>
        <li><strong>Systems & Architecture:</strong> Mobile Computing, Knowledge Engineering,Technology Management, Service Management </li>
        <li><strong>Digital Strategy & Product:</strong>Technology Management, Productivity and Quality Management, E-Commerce </li>
      </ul>
    </div>
  </div>
</section>

<section class="mb-4">
  <h2><i class="fas fa-chart-line me-2"></i> Skills mapping</h2>
  <div class="row g-3">
    <div class="col-md-6">
     
      <div class="skills-section">
  <h3>Technical Skills</h3>
  <ul>
    <li><i class="fas fa-code text-primary me-2"></i> Programming: C++, Java, PHP</li>
    <li><i class="fas fa-database text-info me-2"></i> SQL & Data Modeling</li>
    <li><i class="fas fa-chart-line text-success me-2"></i> Statistics & Data Analysis</li>
    <li><i class="fas fa-project-diagram text-warning me-2"></i> Project Planning & HR Management</li>
  </ul>

  <h3>Soft Skills</h3>
  <ul>
    <li><i class="fas fa-comments text-primary me-2"></i> Communication</li>
    <li><i class="fas fa-users text-info me-2"></i> Teamwork</li>
    <li><i class="fas fa-balance-scale text-success me-2"></i> Ethics</li>
    <li><i class="fas fa-lightbulb text-warning me-2"></i> Critical Thinking</li>
  </ul>
</div>

    <div class="col-md-6">
      <div class="cta-bar p-3">
        <p class="mb-2"><strong>Career relevance:</strong> Fit for roles like Business Analyst, Data Analyst, Systems Analyst, Project Manager.</p>
        <a class="btn btn-outline-primary me-2" href="<?php echo $base_url; ?>/careers">See how BBIS prepares you for real careers</a>
        <a class="btn btn-outline-secondary" href="<?php echo $base_url; ?>/research">Learn about capstone & internship pathways</a>
      </div>
    </div>
  </div>
</section>


<section class="mb-4">
  <h2><i class="fas fa-layer-group me-2"></i> How the curriculum builds semester by semester</h2>
  <div class="row g-3">
    <div class="col-md-6">
      <h3>Sem 1–2: Foundations</h3>
      <p>Students begin with the basics of programming (structured and object-oriented), financial accounting, and business management. Analytical courses like digital logic and introductory information systems build problem-solving capacity, while communication and professional practice are introduced early.</p>
    </div>
    <div class="col-md-6">
      <h3>Sem 3–4: Core IS + Business Integration</h3>
      <p>Core technical courses such as data structures, operating systems, computer networks, and SQL-based data management are paired with managerial communication and operations management. This stage connects technology with organizational processes, preparing students to analyze and design systems that support business outcomes.</p>
    </div>
    <div class="col-md-6">
      <h3>Sem 5–6: Specializations & Tools</h3>
      <p>Applied courses like web technology, cloud computing, artificial intelligence, and digital marketing expand technical and strategic skills. Managerial subjects such as organizational behaviour and operations management balance the technical depth. Students also begin choosing electives to specialize in analytics, systems architecture, or digital strategy.</p>
    </div>
    <div class="col-md-6">
      <h3>Sem 7–8: Capstone & Internship</h3>
      <p>Advanced courses in information security, international business, and system analysis and design prepare students for leadership roles. The program culminates in a capstone project and an industry internship, where students apply their technical, analytical, managerial, and soft skills to real-world challenges, demonstrating career readiness.</p>
    </div>
  </div>
</section>

<section class="mb-4">
<h2><i class="fas fa-balance-scale me-2"></i> Compare BBIS with alternatives</h2>
  <ul>
    <li><strong>BBIS vs CSIT:</strong> BBIS adds management and business process depth to technical learning; CSIT is more pure-tech.</li>
    <li><strong>BBIS vs BBA:</strong> BBIS includes IS, data, and programming alongside business; BBA is management-focused.</li>
    <li><strong>BBIS vs BIM/BScIT:</strong> BBIS emphasizes applied IS for organizations, analytics, and managerial decision-making.</li>
  </ul>
</section>

<section class="mb-4">
<h2><i class="fas fa-forward me-2"></i> Next steps</h2>
  <div class="d-flex flex-wrap gap-2">

    <a class="btn btn-primary" href="<?php echo $base_url; ?>admissions.php">
  <i class="fas fa-user-plus me-1"></i> Review the admissions process
</a>
<a class="btn btn-outline-primary" href="<?php echo $base_url; ?>careers.php">
  <i class="fas fa-briefcase me-1"></i> See career opportunities after BBIS
</a>
<a class="btn btn-outline-secondary" href="<?php echo $base_url; ?>labs.php">
  <i class="fas fa-flask me-1"></i> Explore the labs and tools used
</a>
  </div>
</section>
</body>
</html>
<?php include 'footer.php'; ?>