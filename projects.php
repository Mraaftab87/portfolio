<?php
require_once 'includes/header.php';
?>

<!-- Projects Section -->
<section class="projects-section py-5" style="padding-top: 120px !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="text-center mb-5">
                    <h1 class="section-title mb-4">My Projects</h1>
                    <p class="text-muted">Check out what I've been building</p>
                </div>

                <div class="row">
                    <!-- Project 1: Inventory Management -->
                    <div class="col-md-6 mb-4">
                        <div class="project-card">
                            <div class="project-card-header">
                                <h3 class="project-title">Inventory Management System</h3>
                                <span class="project-status status-completed">Completed</span>
                            </div>
                            <div class="project-card-body">
                                <p class="project-description">
                                    A comprehensive inventory management system built with PHP and MySQL. 
                                    Features include product tracking, stock management, supplier management, 
                                    and detailed reporting capabilities.
                                </p>
                                <div class="project-technologies">
                                    <span class="tech-badge">PHP</span>
                                    <span class="tech-badge">MySQL</span>
                                    <span class="tech-badge">Bootstrap</span>
                                    <span class="tech-badge">JavaScript</span>
                                </div>
                            </div>
                            <div class="project-card-footer">
                                <a href="https://github.com/aaftabgori/inventory-system" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-github me-1"></i>View Code
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2: AI Expense Manager -->
                    <div class="col-md-6 mb-4">
                        <div class="project-card">
                            <div class="project-card-header">
                                <h3 class="project-title">AI Expense Manager</h3>
                                <span class="project-status status-in-progress">In Progress</span>
                            </div>
                            <div class="project-card-body">
                                <p class="project-description">
                                    An Android app that helps you track expenses using AI. Built with Kotlin 
                                    and powered by Generative AI to automatically categorize spending and give 
                                    smart insights. Still working on it, adding new features regularly.
                                </p>
                                <div class="project-technologies">
                                    <span class="tech-badge">Android</span>
                                    <span class="tech-badge">Kotlin</span>
                                    <span class="tech-badge">Generative AI</span>
                                </div>
                            </div>
                            <div class="project-card-footer">
                                <a href="https://github.com/aaftabgori/ai-expense-manager" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-github me-1"></i>View Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
