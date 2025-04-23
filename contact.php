<?php include("header.php"); ?>
<style>
    main {
        font-family: Arial, sans-serif;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        margin: 20px auto;
        max-width: 900px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        color: #2c3e50;
        border-bottom: 2px solid #27ae60;
        padding-bottom: 10px;
        margin-top: 30px;
    }
    p {
        color: #555;
        margin: 8px 0;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
    }
    input, textarea {
        width: 100%;
        max-width: 600px;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        box-sizing: border-box;
    }
    button {
        padding: 10px 20px;
        background-color: #27ae60;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    button:hover {
        background-color: #219150;
    }
</style>

<main>
    <h2>Contact Us</h2>
    <p><strong>Name:</strong> Imran M S</p>
    <p><strong>Email:</strong> support@efarm.com</p>
    <p><strong>Phone:</strong> +91 7019854781</p>
    <p><strong>Address:</strong> Chowdlu</p>

    <h2>Feedback Form</h2>
    <p style="text-align:center;">We’d love to hear your thoughts! Fill out the form below to send us your feedback or queries.</p>

    <form method="post" action="contact_submit.php">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message / Feedback" rows="5" required></textarea>
        <button type="submit">Send Feedback</button>
    </form>
</main>
<?php include("footer.php"); ?>
