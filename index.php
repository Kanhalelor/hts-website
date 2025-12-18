<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="assets/css/home.css">

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-overlay">
        <h1>Windhoek Technical High School</h1>
        <p class="motto">Work and Live</p>
        <p class="address">Windhoek, Khomas Region, Namibia</p>
    </div>
</section>

<!-- SCHOOL AT A GLANCE -->
<section class="glance-section">
    <h2>Our School at a Glance</h2>

    <div class="stats-container">
        <div class="stat-card box-style">
            <img src="assets/icons/learners.png">
            <h3>1200+</h3>
            <p>Learners</p>
        </div>

        <div class="stat-card box-style">
            <img src="assets/icons/years.png">
            <h3>60+</h3>
            <p>Years Established</p>
        </div>

        <div class="stat-card box-style">
            <img src="assets/icons/staff.png">
            <h3>80+</h3>
            <p>Dedicated Staff</p>
        </div>
    </div>

    <!-- Updates -->
    <div class="updates box-style">
        <h3>Latest Updates</h3>

        <div id="updatesContainer"></div>

        <div class="slider-controls">
            <button onclick="prevUpdate()">❮</button>
            <button onclick="nextUpdate()">❯</button>
        </div>
    </div>
</section>
<script src="assets/js/updates-slider.js"></script>
<?php include('includes/footer.php'); ?>
