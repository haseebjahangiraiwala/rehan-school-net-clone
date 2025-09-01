<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact - Rehan School Clone</title>
<style>
body{margin:0;font-family:Arial;background:#eef7fb;}
header{background:#0077b6;padding:20px;text-align:center;color:white;}
nav a{margin:0 15px;color:white;text-decoration:none;font-weight:bold;}
.container{padding:40px;max-width:700px;margin:auto;}
form{background:white;padding:20px;border-radius:10px;box-shadow:0 3px 8px rgba(0,0,0,0.1);}
input,textarea{width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:5px;}
button{background:#0077b6;color:white;padding:12px;border:none;border-radius:5px;cursor:pointer;}
button:hover{background:#005f87;}
footer{background:#0077b6;color:white;padding:15px;text-align:center;margin-top:40px;}
</style>
<script>
function goTo(page){ window.location.href=page; }
</script>
</head>
<body>
<header>
  <h1>Contact Us</h1>
  <nav>
    <a href="#" onclick="goTo('index.php')">Home</a>
    <a href="#" onclick="goTo('curriculum.php')">Curriculum</a>
    <a href="#" onclick="goTo('facilitators.php')">Facilitators</a>
    <a href="#" onclick="goTo('contact.php')">Contact</a>
  </nav>
</header>
 
<div class="container">
  <h2>Get in Touch</h2>
  <p>Email: info@rehanschool.net | Phone: +92 300 1234567</p>
 
  <form method="POST" action="save_contact.php">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
    <button type="submit">Send</button>
  </form>
</div>
 
<footer>
  &copy; 2025 Rehan School Clone
</footer>
</body>
</html>
 
