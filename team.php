<?php
include 'db.php';
$stmt = $pdo->query("SELECT * FROM team");
$team = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Team</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
        header { background: #004aad; color: white; padding: 10px 0; text-align: center; }
        nav { background: #003087; padding: 10px; }
        nav a { color: white; text-decoration: none; margin: 0 15px; font-size: 18px; }
        nav a:hover { text-decoration: underline; }
        .content { max-width: 1200px; margin: 20px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .team-member { margin: 20px 0; padding: 10px; border-bottom: 1px solid #ddd; }
        footer { background: #004aad; color: white; text-align: center; padding: 10px 0; position: fixed; width: 100%; bottom: 0; }
        @media (max-width: 768px) { nav a { display: block; margin: 10px 0; } }
    </style>
</head>
<body>
    <header>
        <h1>Rehan School - Our Team</h1>
    </header>
    <nav>
        <a href="#" onclick="redirect('index.php')">Home</a>
        <a href="#" onclick="redirect('about.php')">About</a>
        <a href="#" onclick="redirect('curriculum.php')">Curriculum</a>
        <a href="#" onclick="redirect('team.php')">Team</a>
        <a href="#" onclick="redirect('contact.php')">Contact</a>
    </nav>
    <div class="content">
        <h2>Meet Our Team</h2>
        <?php foreach ($team as $member): ?>
            <div class="team-member">
                <h3><?php echo htmlspecialchars($member['name']); ?></h3>
                <p><strong><?php echo htmlspecialchars($member['position']); ?></strong></p>
                <p><?php echo htmlspecialchars($member['bio']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <footer>
        <p>&copy; 2025 Rehan School. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
