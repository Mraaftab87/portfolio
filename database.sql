-- Create database
DROP DATABASE portfolio_db;
CREATE DATABASE IF NOT EXISTS portfolio_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE portfolio_db;

-- Projects table
CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    technologies VARCHAR(255) NOT NULL,
    status ENUM('Completed', 'In Progress', 'Planned') DEFAULT 'Completed',
    image_url VARCHAR(255),
    project_url VARCHAR(255),
    github_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Contact messages table
CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_read BOOLEAN DEFAULT FALSE
);

-- Skills table
CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(100) NOT NULL,
    category VARCHAR(50) NOT NULL,
    proficiency INT DEFAULT 50,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample projects
INSERT INTO projects (title, description, technologies, status, github_url) VALUES
('Inventory Management System', 'A comprehensive inventory management system built with PHP and MySQL. Features include product tracking, stock management, supplier management, and detailed reporting capabilities.', 'PHP, MySQL, Bootstrap, JavaScript', 'Completed', 'https://github.com/aaftabgori/inventory-system'),
('AI Expense Manager', 'An intelligent expense tracking application powered by AI. Uses machine learning to categorize expenses automatically and provides insights on spending patterns.', 'Python, Flask, TensorFlow, MySQL', 'In Progress', 'https://github.com/aaftabgori/ai-expense-manager');

-- Insert skills
INSERT INTO skills (skill_name, category, proficiency) VALUES
('Python', 'Programming', 85),
('HTML5', 'Frontend', 90),
('CSS3', 'Frontend', 85),
('JavaScript', 'Frontend', 80),
('Bootstrap', 'Frontend', 85),
('PHP', 'Backend', 75),
('WordPress', 'CMS', 70),
('Prompt Engineering', 'AI/ML', 80),
('Git', 'Tools', 85),
('MySQL', 'Database', 75);
