<?php
include('includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mysqli_query($conn,
        "INSERT INTO messages (name,email,message)
         VALUES ('$name','$email','$message')");
}
?>

<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="assets/css/contact.css">
<link rel="stylesheet" href="assets/css/header.css">

<section class="page-banner">
    <h1>Contact Us</h1>
</section>

<form method="POST" class="contact-form box-style">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <button type="submit">Send Message</button>
</form>

<?php include('includes/footer.php'); ?>
