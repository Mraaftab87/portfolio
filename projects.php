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
                    <!-- Project 1: SecureVault Password Manager -->
                    <div class="col-md-6 mb-4">
                        <div class="project-card">
                            <div class="project-card-header">
                                <div class="project-icon">
                                    <i class="bi bi-shield-lock-fill"></i>
                                </div>
                                <div class="project-header-content">
                                    <h3 class="project-title">SecureVault Password Manager</h3>
                                    <span class="project-status status-completed">Completed</span>
                                </div>
                            </div>
                            <div class="project-card-body">
                                <p class="project-description">
                                    Full-featured password manager with military-grade AES-256-GCM encryption 
                                    and Argon2id hashing. Features zero-knowledge architecture, 2FA authentication, 
                                    breach detection, and secure password generation. Built with security-first approach.
                                </p>
                                <div class="project-technologies">
                                    <span class="tech-badge">PHP</span>
                                    <span class="tech-badge">MySQL</span>
                                    <span class="tech-badge">Bootstrap</span>
                                    <span class="tech-badge">JavaScript</span>
                                    <span class="tech-badge">OpenSSL</span>
                                    <span class="tech-badge">Argon2id</span>
                                </div>
                            </div>
                            <div class="project-card-footer">
                                <a href="https://github.com/aaftabgori" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-github me-1"></i>View Code
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2: Inventory Management -->
                    <div class="col-md-6 mb-4">
                        <div class="project-card">
                            <div class="project-card-header">
                                <div class="project-icon">
                                    <i class="bi bi-box-seam-fill"></i>
                                </div>
                                <div class="project-header-content">
                                    <h3 class="project-title">Inventory Management System</h3>
                                    <span class="project-status status-completed">Completed</span>
                                </div>
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
                                <a href="https://github.com/Mraaftab87/college_project" 
                                   target="_blank" 
                                   class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-github me-1"></i>View Code
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3: AI Expense Manager -->
                    <div class="col-md-6 mb-4">
                        <div class="project-card">
                            <div class="project-card-header">
                                <div class="project-icon">
                                    <i class="bi bi-wallet2"></i>
                                </div>
                                <div class="project-header-content">
                                    <h3 class="project-title">AI Expense Manager</h3>
                                    <span class="project-status status-in-progress">In Progress</span>
                                </div>
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
                                <a href="https://github.com/aaftabgori/expense-manager" 
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
