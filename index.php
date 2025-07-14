<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto', Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
        header { background: #004aad; color: white; padding: 10px 0; text-align: center; }
        nav { background: #003087; padding: 10px; }
        nav a { color: white; text-decoration: none; margin: 0 15px; font-size: 18px; }
        nav a:hover { text-decoration: underline; }
        .hero { 
            background: linear-gradient(135deg, #001f5f, #003087); /* Solid dark gradient */
            text-align: center; 
            padding: 120px 20px; 
        }
        .hero h1, .hero p { 
            color: #00FF00; /* Bright lime green for visibility */
            text-shadow: 0 0 20px #FFFFFF, 0 0 15px #00FF00; /* Strong glow effect */
            background: #000000; /* Solid black text background */
            padding: 25px 35px; /* Large padding for text box */
            border-radius: 12px; /* Rounded corners */
            display: inline-block; 
            margin: 15px auto; 
        }
        .hero h1 { 
            font-size: 70px; /* Extra large for prominence */
            font-weight: 900; 
        }
        .hero p { 
            font-size: 35px; /* Extra large for readability */
            font-weight: bold; 
        }
        .content { max-width: 1200px; margin: 20px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        footer { background: #004aad; color: white; text-align: center; padding: 10px 0; position: fixed; width: 100%; bottom: 0; }
        @media (max-width: 768px) {
            nav a { display: block; margin: 10px 0; }
            .hero h1 { font-size: 45px; }
            .hero p { font-size: 24px; }
        }
    </style>
</head>
<body>
    <header>
        <h1>Rehan School</h1>
    </header>
    <nav>
        <a href="#" onclick="redirect('index.php')">Home</a>
        <a href="#" onclick="redirect('about.php')">About</a>
        <a href="#" onclick="redirect('curriculum.php')">Curriculum</a>
        <a href="#" onclick="redirect('team.php')">Team</a>
        <a href="#" onclick="redirect('contact.php')">Contact</a>
    </nav>
    <div class="hero">
        <h1>Welcome to Rehan School</h1>
        <p>Empowering Future Leaders with Quality Education</p>
    </div>
    <div class="content">
        <h2>Our Mission</h2>
        <p>At Rehan School, we are committed to providing a holistic education that fosters academic excellence, creativity, and ethical values.</p>
    </div>
    <footer>
        <p>© 2025 Rehan School. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
