<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    $stmt = $conn->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "<h2 style='text-align:center;'>Thank you, $name!</h2><p style='text-align:center;'>We’ve received your feedback.</p>";
    } else {
        echo "<p style='text-align:center; color:red;'>There was an error. Please try again.</p>";
    }
    echo "<div style='text-align:center;'><a href='contact.php'><button>Back to Contact Page</button></a></div>";
}
?>
