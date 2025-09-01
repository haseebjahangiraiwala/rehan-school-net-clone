<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>README - Rehan School Clone</title>
<style>
body{margin:0;font-family:Arial, sans-serif;background:#f4f9fd;color:#333;line-height:1.6;}
header{background:#0077b6;color:white;padding:20px;text-align:center;}
.container{padding:40px;max-width:900px;margin:auto;}
h1,h2{color:#0077b6;}
pre{background:#eee;padding:15px;border-radius:8px;overflow-x:auto;}
code{background:#ddd;padding:2px 5px;border-radius:4px;}
footer{margin-top:40px;background:#0077b6;color:white;text-align:center;padding:15px;}
</style>
<script>
function goTo(page){ window.location.href=page; }
</script>
</head>
<body>
<header>
  <h1>README - Rehan School Clone</h1>
  <nav>
    <a href="#" onclick="goTo('index.php')" style="color:white;margin:0 10px;">Home</a>
    <a href="#" onclick="goTo('curriculum.php')" style="color:white;margin:0 10px;">Curriculum</a>
    <a href="#" onclick="goTo('facilitators.php')" style="color:white;margin:0 10px;">Facilitators</a>
    <a href="#" onclick="goTo('contact.php')" style="color:white;margin:0 10px;">Contact</a>
  </nav>
</header>
 
<div class="container">
  <h2>📌 Project Overview</h2>
  <p>
    This is a functional clone of <b>RehanSchool.net</b>, built using <b>PHP, SQL, HTML, CSS, and JavaScript</b>.
    It highlights AI-enabled education, innovative curriculum, and entrepreneurial skills.
  </p>
 
  <h2>🚀 Features</h2>
  <ul>
    <li>Homepage with mission, features, stats, testimonials, and articles.</li>
    <li>Curriculum page detailing innovative learning approach.</li>
    <li>Facilitators page introducing educators and mentors.</li>
    <li>Contact page with a working form that saves into database.</li>
    <li>JavaScript navigation (no PHP redirects).</li>
    <li>Internal CSS only (no external CSS/JS files).</li>
    <li>Responsive layout for desktop & mobile.</li>
  </ul>
 
  <h2>🛠️ Setup Instructions</h2>
  <pre><code>1. Clone this repository into your server (XAMPP/WAMP/Laragon or hosting).
2. Create a database and add this table:
 
CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
 
3. Update db.php with your own DB credentials.
4. Open index.php in browser and explore!</code></pre>
 
  <h2>📢 Social Media Caption</h2>
  <pre><code>"Just completed a functional clone of RehanSchool.net! 
Explore this AI-enabled educational platform focusing on 
innovative curriculum and entrepreneurial skills. Ç"
 
👉 Clone Link: [Clone Link]  
👉 GitHub Repository: [GitHub Link]  
 
#rehancodingwithai #codingwithai #WebDevelopment #Education #AIinEducation
</code></pre>
</div>
 
<footer>
  &copy; 2025 Rehan School Clone | README Documentation
</footer>
</body>
</html>
 
