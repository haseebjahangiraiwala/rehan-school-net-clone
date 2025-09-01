<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Rehan School Clone - Home</title>
<style>
body {margin:0;font-family:Arial, sans-serif;background:#f4f9fd;color:#333;}
header {background:#0077b6;padding:20px;text-align:center;color:white;}
nav a {margin:0 15px;color:white;text-decoration:none;font-weight:bold;}
nav a:hover {text-decoration:underline;}
.container {padding:40px;max-width:1200px;margin:auto;}
h1 {color:#0077b6;}
.features,.stats,.testimonials,.articles {margin:40px 0;}
.card {background:white;padding:20px;border-radius:10px;box-shadow:0 3px 8px rgba(0,0,0,0.1);margin:15px;display:inline-block;width:28%;vertical-align:top;}
footer {background:#0077b6;color:white;padding:15px;text-align:center;margin-top:40px;}
</style>
<script>
function goTo(page){ window.location.href = page; }
</script>
</head>
<body>
<header>
  <h1>Rehan School</h1>
  <nav>
    <a href="#" onclick="goTo('index.php')">Home</a>
    <a href="#" onclick="goTo('curriculum.php')">Curriculum</a>
    <a href="#" onclick="goTo('facilitators.php')">Facilitators</a>
    <a href="#" onclick="goTo('contact.php')">Contact</a>
  </nav>
</header>
 
<div class="container">
  <section class="intro">
    <h2>Innovating Education for the Future</h2>
    <p>Our mission is to create a generation of entrepreneurs and innovators through AI-enabled education.</p>
  </section>
 
  <section class="features">
    <h2>Our Unique Features</h2>
    <div class="card"><h3>AI-Enabled Education</h3><p>Cutting-edge tools for better learning.</p></div>
    <div class="card"><h3>Holistic Development</h3><p>Focus on academics, values, and soft skills.</p></div>
    <div class="card"><h3>Entrepreneurial Focus</h3><p>Students learn to think like entrepreneurs.</p></div>
  </section>
 
  <section class="stats">
    <h2>Our Impact</h2>
    <div class="card"><h3>50+</h3><p>Team Members</p></div>
    <div class="card"><h3>5000+</h3><p>Students</p></div>
    <div class="card"><h3>20+</h3><p>Campuses</p></div>
  </section>
 
  <section class="testimonials">
    <h2>What People Say</h2>
    <div class="card"><p>"Rehan School is shaping the future of education!"</p><b>- Visitor</b></div>
    <div class="card"><p>"My child has improved tremendously in confidence and skills."</p><b>- Parent</b></div>
    <div class="card"><p>"A platform every student deserves."</p><b>- Mentor</b></div>
  </section>
 
  <section class="articles">
    <h2>Latest Articles</h2>
    <div class="card"><h3>AI in Classrooms</h3><p>How AI is changing education.</p></div>
    <div class="card"><h3>Entrepreneurship 101</h3><p>Why kids must learn business early.</p></div>
    <div class="card"><h3>Future of Schools</h3><p>Blending tech & values in education.</p></div>
  </section>
</div>
 
<footer>
  &copy; 2025 Rehan School Clone | All Rights Reserved
</footer>
</body>
</html>
 
