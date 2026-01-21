<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="assets/css/contact.css">
<link rel="stylesheet" href="assets/css/header.css">

<section class="page-banner">
    <h1>Contact Us</h1>
    <p>We would love to hear from you. Reach out for enquiries, admissions, or general information.</p>
</section>

<section class="contact-section">

    <!-- Contact Info -->
    <div class="contact-info box-style">
        <h2>Get in Touch</h2>

        <p>
            Windhoek Technical High School is committed to open communication with
            parents, learners, and the community.
        </p>

        <ul>
            <li><i class="bi bi-geo-alt-fill"></i> Hegel Street, Academia, Windhoek</li>
            <li><i class="bi bi-telephone-fill"></i> +264 XXX XXX</li>
            <li><i class="bi bi-envelope-fill"></i> info@wths.edu.na</li>
            <li><i class="bi bi-clock-fill"></i> Mon – Fri: 08:00 – 16:00</li>
        </ul>
    </div>

    <!-- Contact Form -->
    <form method="POST" class="contact-form box-style">
        <h2>Send Us a Message</h2>

        <input type="text" name="name" placeholder="Your Full Name" required>
        <input type="email" name="email" placeholder="Your Email Address" required>
        <textarea name="message" placeholder="Type your message here..." required></textarea>

        <button type="submit">Send Message</button>
    </form>

</section>

<?php include('includes/footer.php'); ?>
