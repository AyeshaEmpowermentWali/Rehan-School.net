<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - About</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
        header { background: #004aad; color: white; padding: 10px 0; text-align: center; }
        nav { background: #003087; padding: 10px; }
        nav a { color: white; text-decoration: none; margin: 0 15px; font-size: 18px; }
        nav a:hover { text-decoration: underline; }
        .content { max-width: 1200px; margin: 20px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        footer { background: #004aad; color: white; text-align: center; padding: 10px 0; position: fixed; width: 100%; bottom: 0; }
        @media (max-width: 768px) { nav a { display: block; margin: 10px 0; } }
    </style>
</head>
<body>
    <header>
        <h1>Rehan School - About Us</h1>
    </header>
    <nav>
        <a href="#" onclick="redirect('index.php')">Home</a>
        <a href="#" onclick="redirect('about.php')">About</a>
        <a href="#" onclick="redirect('curriculum.php')">Curriculum</a>
        <a href="#" onclick="redirect('team.php')">Team</a>
        <a href="#" onclick="redirect('contact.php')">Contact</a>
    </nav>
    <div class="content">
        <h2>Our Mission & Vision</h2>
        <p>We aim to nurture students into responsible global citizens through innovative teaching methods and a supportive environment.</p>
        <h3>Our Values</h3>
        <ul>
            <li>Integrity</li>
            <li>Excellence</li>
            <li>Community</li>
        </ul>
    </div>
    <footer>
        <p>&copy; 2025 Rehan School. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
