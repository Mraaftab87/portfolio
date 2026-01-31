<?php
require_once 'db_connect.php';
require_once 'includes/header.php';

// Fetch skills from database
try {
    $stmt = $pdo->query("SELECT * FROM skills ORDER BY category, proficiency DESC");
    $skills = $stmt->fetchAll();
} catch(PDOException $e) {
    $skills = [];
}
?>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <!-- Open to Work Badge -->
                    <div class="open-to-work-badge">
                        <span class="pulse-dot"></span>
                        <span class="badge-text">Open to Opportunities</span>
                    </div>
                    
                    <h1 class="hero-title">Hi, I'm <span class="accent-text"><?php echo USER_NAME; ?></span></h1>
                    <h2 class="hero-subtitle"><?php echo USER_ROLE; ?></h2>
                    
                    <!-- Opportunity Statement -->
                    <div class="opportunity-statement">
                        <p class="statement-text">
                            <i class="bi bi-rocket-takeoff me-2"></i>
                            Actively seeking <strong>Internship & Junior Developer</strong> opportunities to bring my skills in 
                            <strong>Python, PHP & Web Development</strong> to a real-world team.
                        </p>
                    </div>
                    
                    <p class="hero-description">
                        Passionate about building innovative solutions and learning cutting-edge technologies. 
                        Currently exploring the intersection of AI and web development, with hands-on experience 
                        in full-stack projects.
                    </p>
                    <div class="hero-buttons">
                        <a href="projects.php" class="btn btn-primary btn-lg me-3">
                            <i class="bi bi-folder2-open me-2"></i>View My Work
                        </a>
                        <a href="contact.php" class="btn btn-outline-primary btn-lg">
                            <i class="bi bi-envelope me-2"></i>Let's Connect
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="section-title text-center mb-5">About Me</h2>
                <div class="about-content">
                    <p class="lead text-center mb-4">
                        I'm a final-year BCA student with a passion for technology and problem-solving. 
                        My journey in software development has been driven by curiosity and a genuine love for coding. 
                        I thrive on turning ideas into functional applications and I'm eager to contribute my skills 
                        to a dynamic team where I can grow and make an impact.
                    </p>
                    <div class="row mt-5">
                        <div class="col-md-4 mb-4">
                            <div class="about-card">
                                <div class="about-icon">
                                    <i class="bi bi-code-slash"></i>
                                </div>
                                <h4>Full Stack Development</h4>
                                <p>Building responsive web applications using modern technologies and best practices.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="about-card">
                                <div class="about-icon">
                                    <i class="bi bi-robot"></i>
                                </div>
                                <h4>AI & Automation</h4>
                                <p>Exploring AI integration and prompt engineering to create intelligent solutions.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="about-card">
                                <div class="about-icon">
                                    <i class="bi bi-lightbulb"></i>
                                </div>
                                <h4>Continuous Learning</h4>
                                <p>Always eager to learn new technologies and improve my development skills.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="section-title text-center mb-5">Skills & Technologies</h2>
                <div class="skills-container">
                    <?php
                    $categories = [];
                    foreach ($skills as $skill) {
                        $categories[$skill['category']][] = $skill;
                    }
                    
                    foreach ($categories as $category => $categorySkills):
                    ?>
                    <div class="skill-category mb-4">
                        <h4 class="category-title"><?php echo htmlspecialchars($category); ?></h4>
                        <div class="skills-pills">
                            <?php foreach ($categorySkills as $skill): ?>
                            <span class="skill-pill">
                                <?php echo htmlspecialchars($skill['skill_name']); ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
