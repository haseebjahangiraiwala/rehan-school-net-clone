<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Facilitators - Rehan School Clone</title>
<style>
body{margin:0;font-family:Arial, sans-serif;background:#f8f9fa;color:#333;}
header{background:#0077b6;padding:20px;text-align:center;color:white;}
nav a{margin:0 15px;color:white;text-decoration:none;font-weight:bold;}
nav a:hover{text-decoration:underline;}
.container{padding:40px;max-width:1200px;margin:auto;text-align:center;}
h1{color:white;}
h2{color:#0077b6;margin-bottom:20px;}
.card{background:white;display:inline-block;width:250px;margin:15px;
      padding:20px;border-radius:10px;
      box-shadow:0 4px 12px rgba(0,0,0,0.1);
      transition:transform 0.2s;}
.card:hover{transform:translateY(-5px);}
.card img{width:100%;border-radius:10px;}
.card h3{margin:10px 0 5px 0;color:#0077b6;}
.card p{margin:0;font-size:14px;color:#555;}
footer{background:#0077b6;color:white;padding:15px;text-align:center;margin-top:40px;}
</style>
<script>
function goTo(page){ window.location.href=page; }
</script>
</head>
<body>
<header>
  <h1>Our Facilitators</h1>
  <nav>
    <a href="#" onclick="goTo('index.php')">Home</a>
    <a href="#" onclick="goTo('curriculum.php')">Curriculum</a>
    <a href="#" onclick="goTo('facilitators.php')">Facilitators</a>
    <a href="#" onclick="goTo('contact.php')">Contact</a>
  </nav>
</header>
 
<div class="container">
  <h2>Meet Our Team</h2>
  <div class="card">
    <img src="https://via.placeholder.com/250x200" alt="Ali Khan">
    <h3>Ali Khan</h3>
    <p>AI Instructor</p>
  </div>
  <div class="card">
    <img src="https://via.placeholder.com/250x200" alt="Sara Ahmed">
    <h3>Sara Ahmed</h3>
    <p>Soft Skills Coach</p>
  </div>
  <div class="card">
    <img src="https://via.placeholder.com/250x200" alt="Rehan Siddiqui">
    <h3>Rehan Siddiqui</h3>
    <p>Entrepreneurship Mentor</p>
  </div>
  <div class="card">
    <img src="https://via.placeholder.com/250x200" alt="Fatima Noor">
    <h3>Fatima Noor</h3>
    <p>Curriculum Designer</p>
  </div>
</div>
 
<footer>
  &copy; 2025 Rehan School Clone
</footer>
</body>
</html>
 
