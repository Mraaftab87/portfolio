<?php
require_once 'db_connect.php';
require_once 'includes/header.php';

// Fetch projects from database
try {
    $stmt = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
    $projects = $stmt->fetchAll();
} catch(PDOException $e) {
    $projects = [];
    $error = "Unable to fetch projects. Please try again later.";
}
?>

<!-- Projects Section -->
<section class="projects-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="section-title text-center mb-2">My Projects</h1>
                <p class="text-center text-muted mb-5">Explore my latest work and ongoing developments</p>
                
                <?php if (isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
                <?php endif; ?>

                <div class="row">
                    <?php if (empty($projects)): ?>
                    <div class="col-12">
                        <div class="alert alert-info text-center">
                            No projects found. Check back soon!
                        </div>
                    </div>
                    <?php else: ?>
                        <?php foreach ($projects as $project): ?>
                        <div class="col-md-6 mb-4">
                            <div class="project-card">
                                <div class="project-card-header">
                                    <h3 class="project-title"><?php echo htmlspecialchars($project['title']); ?></h3>
                                    <span class="project-status status-<?php echo strtolower(str_replace(' ', '-', $project['status'])); ?>">
                                        <?php echo htmlspecialchars($project['status']); ?>
                                    </span>
                                </div>
                                <div class="project-card-body">
                                    <p class="project-description">
                                        <?php echo htmlspecialchars($project['description']); ?>
                                    </p>
                                    <div class="project-technologies">
                                        <?php
                                        $techs = explode(',', $project['technologies']);
                                        foreach ($techs as $tech):
                                        ?>
                                        <span class="tech-badge"><?php echo trim(htmlspecialchars($tech)); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="project-card-footer">
                                    <?php if (!empty($project['github_url'])): ?>
                                    <a href="<?php echo htmlspecialchars($project['github_url']); ?>" 
                                       target="_blank" 
                                       class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-github me-1"></i>View Code
                                    </a>
                                    <?php endif; ?>
                                    <?php if (!empty($project['project_url'])): ?>
                                    <a href="<?php echo htmlspecialchars($project['project_url']); ?>" 
                                       target="_blank" 
                                       class="btn btn-sm btn-primary">
                                        <i class="bi bi-box-arrow-up-right me-1"></i>Live Demo
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
