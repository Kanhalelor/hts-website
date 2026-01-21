<?php $pageTitle = "Home"; ?>
<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="assets/css/home.css">
<link rel="stylesheet" href="assets/css/header.css">


<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-slides">
        <span class="slide slide1"></span>
        <span class="slide slide2"></span>
        <span class="slide slide3"></span>
        <span class="slide slide4"></span>
    </div>

    <div class="hero-overlay">
        <h1 class="sch-name">Windhoek Technical High School</h1>
        <p class="motto">Work and Live</p>
        <p class="address">Hegel Street, Academia, Windhoek, Namibia</p>
    </div>
</section>


<!-- SCHOOL AT A GLANCE -->
<section class="glance-section">
    <h2>Our School at a Glance</h2>

    <div class="stats-container">
        <div class="stat-card box-style">
            <i class="bi bi-people-fill stat-icon"></i>
            <h3 class="counter" data-target="800">0</h3>
            <p>Learners</p>
        </div>

        <div class="stat-card box-style">
            <i class="bi bi-calendar-event stat-icon"></i>
            <h3 class="counter" data-target="30">0</h3>
            <p>Years Established</p>
        </div>

        <div class="stat-card box-style">
            <i class="bi bi-person-badge-fill stat-icon"></i>
            <h3 class="counter" data-target="45">0</h3>
            <p>Dedicated Staff</p>
        </div>
    </div>
</section>

<!-- UPDATES AND SPONSORS SECTION -->
<section class="updates-sponsors-section">

    <!-- Updates -->
    <h2> Latest News and Updates</h2>
    <div class="updates box-style">
        <!-- Updates will be dynamically loaded here -->
        <div class="updates-grid" id="updatesContainer">

    <div class="update-card box-style">
        <img src="assets/images/updates/culture.jpeg" alt="School Science Fair">
        <h4>HTS Wins Regional Science Fair</h4>
        <p>
            Windhoek Technical High School emerged victorious at the Khomas Regional
            Science Fair, showcasing innovation and excellence from our learners.
        </p>

        <a href="#" class="read-more">Read more →</a>
    </div>

    <div class="update-card box-style">
        <img src="assets/images/updates/napc-2025.jpeg" alt="Sports Day">
        <h4>Annual Sports Day Highlights</h4>
        <p>
            Our annual sports day brought together learners, staff, and parents in
            a celebration of teamwork, discipline, and school spirit.
        </p>

        <a href="#" class="read-more">Read more →</a>
    </div>

    <div class="update-card box-style">
        <img src="assets/images/updates/history.jpg" alt="Coding Workshop">
        <h4>Coding & Robotics Workshop</h4>
        <p>
            Learners participated in a hands-on coding and robotics workshop aimed
            at building problem-solving and digital skills.
        </p>

        <a href="#" class="read-more">Read more →</a>
    </div>

    <div class="update-card box-style">
        <img src="assets/images/updates/profile.jpeg" alt="New Intake">
        <h4>2025 Grade 8 Intake Orientation</h4>
        <p>
            New learners were welcomed during the Grade 8 orientation, introducing
            them to school culture, values, and academic expectations.
        </p>

        <a href="#" class="read-more">Read more →</a>
    </div>

</div>

</section>
<section class="updates-sponsors-section">
    <!-- Sponsors -->
    <div class="sponsors box-style">
        <h3>Our Sponsors</h3>
        <!-- Sponsors will be dynamically loaded here -->
        <div class="sponsors-grid" id="sponsorContainer">

    <div class="sponsor-card box-style">
        <img src="assets/images/sponsors/sponsor1.png" alt="Sponsor 1">
    </div>

    <div class="sponsor-card box-style">
        <img src="assets/images/sponsors/sponsor2.png" alt="Sponsor 2">
    </div>

    <div class="sponsor-card box-style">
        <img src="assets/images/sponsors/sponsor3.png" alt="Sponsor 3">
    </div>

    <div class="sponsor-card box-style">
        <img src="assets/images/sponsors/sponsor4.png" alt="Sponsor 4">
    </div>
        <div class="slider-controls">
            <button onclick="prevSponsor()">❮</button>
            <button onclick="nextSponsor()">❯</button>
        </div>
    </div>
</section>
<script src="assets/js/updates-slider.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/counter.js"></script>
<?php include('includes/footer.php'); ?>
