<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farmer's Friend</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Farmer's Friend</h1>
       <?php session_start(); ?>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="equipment.php">Equipment</a></li>
        <li><a href="fertilizers.php">Fertilizers</a></li>
        <li><a href="seeds.php">Seeds</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php if (isset($_SESSION['user'])): ?>
            <li><strong><?php echo $_SESSION['user']; ?></strong> | <a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a> / <a href="signup.php">Signup</a></li>
        <?php endif; ?>
    </ul>
</nav>

    </header>
