<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="assets/css/academics.css">
<link rel="stylesheet" href="assets/css/header.css">

<!-- HERO SECTION -->
<section class="academics-hero">
    <div class="academics-hero-overlay">
        <h1>Academics at Windhoek Technical High School</h1>
        <p>Shaping Innovators, Thinkers, and Leaders</p>
    </div>
</section>

<!-- ACADEMIC PHILOSOPHY -->
<section class="academics-philosophy">
    <div class="academics-philosophy-content">
        <h2>Our Approach to Learning</h2>
        <p>
            At Windhoek Technical High School, we focus on a balanced education that blends
            technical expertise, creativity, and critical thinking. Our curriculum is designed
            to prepare learners for real-world challenges while nurturing their curiosity
            and innovation.
        </p>
    </div>
</section>

<!-- DEPARTMENTS -->
<section class="academics-departments">
    <h2>Our Departments</h2>
    <div class="departments-grid">

        <!-- Math & Sciences -->
        <div class="department-card box-style">
            <i class="bi bi-calculator department-icon"></i>
            <h3>Math & Sciences</h3>
            <p>Explore analytical thinking, problem solving, and scientific inquiry.</p>
            <button class="view-subjects-btn" onclick="toggleSubjects('math-sciences')">View Subjects</button>
            <ul class="subjects-list" id="math-sciences">
                <li>Mathematics</li>
                <li>Physics</li>
                <li>Chemistry</li>
                <li>Biology</li>
            </ul>
        </div>

        <!-- Social Sciences -->
        <div class="department-card box-style">
            <i class="bi bi-people-fill department-icon"></i>
            <h3>Social Sciences</h3>
            <p>Understanding society, culture, and human behavior.</p>
            <button class="view-subjects-btn" onclick="toggleSubjects('social-sciences')">View Subjects</button>
            <ul class="subjects-list" id="social-sciences">
                <li>History</li>
                <li>Geography</li>
                <li>Economics</li>
                <li>Life Skills</li>
            </ul>
        </div>

        <!-- Technical -->
        <div class="department-card box-style">
            <i class="bi bi-gear-fill department-icon"></i>
            <h3>Technical</h3>
            <p>Hands-on technical skills and engineering concepts for practical application.</p>
            <button class="view-subjects-btn" onclick="toggleSubjects('technical')">View Subjects</button>
            <ul class="subjects-list" id="technical">
                <li>Computer Science</li>
                <li>Engineering Graphics & Design</li>
                <li>Electrical Technology</li>
                <li>Woodwork / Metalwork</li>
            </ul>
        </div>

        <!-- Languages -->
        <div class="department-card box-style">
            <i class="bi bi-journal-text department-icon"></i>
            <h3>Languages</h3>
            <p>Develop communication skills in multiple languages.</p>
            <button class="view-subjects-btn" onclick="toggleSubjects('languages')">View Subjects</button>
            <ul class="subjects-list" id="languages">
                <li>English</li>
                <li>Afrikaans</li>
                <li>German</li>
                <li>Other Electives</li>
            </ul>
        </div>

    </div>
</section>

<!-- ACADEMIC SUPPORT & RESOURCES -->
<section class="academics-support">
    <h2>Academic Support & Resources</h2>
    <div class="support-grid">

        <div class="support-card box-style">
            <i class="bi bi-flask"></i>
            <h4>Science & Tech Labs</h4>
            <p>Fully-equipped labs for practical experiments and innovation projects.</p>
        </div>

        <div class="support-card box-style">
            <i class="bi bi-book"></i>
            <h4>Library & Study Hubs</h4>
            <p>Quiet spaces and resources for learners to excel in research and study.</p>
        </div>

        <div class="support-card box-style">
            <i class="bi bi-laptop"></i>
            <h4>ICT Integration</h4>
            <p>Access to computers, coding labs, and software for technical proficiency.</p>
        </div>

        <div class="support-card box-style">
            <i class="bi bi-people"></i>
            <h4>Workshops & Clubs</h4>
            <p>Extra-curricular sessions to foster creativity, teamwork, and leadership.</p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="academics-cta">
    <div class="cta-content">
        <h2>Ready to Join Our Academic Programs?</h2>
        <a href="#" class="cta-button">Download Full Curriculum</a>
        <a href="#" class="cta-button">Apply for Admission</a>
    </div>
</section>

<!-- FAQ -->
<section class="academics-faq">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-container">

        <div class="faq-card">
            <div class="faq-question">
                <i class="bi bi-question-circle"></i>
                <span>What is the admission process for new learners?</span>
                <i class="bi bi-chevron-down toggle-icon"></i>
            </div>
            <div class="faq-answer">
                <p>
                    Learners must complete the admission form, submit academic records,
                    and attend an interview. Detailed instructions are provided in the
                    “Apply for Admission” section.
                </p>
            </div>
        </div>

        <div class="faq-card">
            <div class="faq-question">
                <i class="bi bi-question-circle"></i>
                <span>Can learners combine subjects across departments?</span>
                <i class="bi bi-chevron-down toggle-icon"></i>
            </div>
            <div class="faq-answer">
                <p>
                    Yes, learners can choose subjects from multiple departments
                    within the curriculum guidelines.
                </p>
            </div>
        </div>

        <div class="faq-card">
            <div class="faq-question">
                <i class="bi bi-question-circle"></i>
                <span>Do you offer extra classes for technical subjects?</span>
                <i class="bi bi-chevron-down toggle-icon"></i>
            </div>
            <div class="faq-answer">
                <p>
                    Yes, we provide after-school support classes and workshops
                    for technical and scientific subjects.
                </p>
            </div>
        </div>

    </div>
</section>

<script>
// Toggle subjects list per department
function toggleSubjects(deptId) {
    const list = document.getElementById(deptId);
    list.classList.toggle('active');
}

// FAQ toggle
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const card = question.parentElement;
        card.classList.toggle('active');
    });
});
</script>

<?php include('includes/footer.php'); ?>
