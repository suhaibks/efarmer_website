<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, dob, email, address, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $dob, $email, $address, $password);
    $stmt->execute();

    echo "<div class='success-msg'>Registration successful! <a href='login.php'>Login</a></div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup - Farmer's Friend</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f8f4;
            margin: 0;
            padding: 0;
        }

        .auth-form {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #2e7d32;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #c8e6c9;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #388e3c;
        }

        .success-msg {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            background-color: #d0f0c0;
            color: #2e7d32;
            border: 1px solid #a5d6a7;
            border-radius: 8px;
            text-align: center;
        }

        a {
            color: #2e7d32;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: 40px;
            text-align: center;
            font-size: 14px;
            color: #666;
            background-color: #f1f1f1;
            padding: 15px 0;
        }
    </style>
</head>
<body>

<form method="post" class="auth-form">
    <h2>Signup</h2>
    <input type="text" name="username" placeholder="Username" required>
    <input type="date" name="dob" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="address" placeholder="Address" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Signup</button>
    <p>Already have an account? <a href="login.php"> Login</a></p>
</form>

</body>
</html>
