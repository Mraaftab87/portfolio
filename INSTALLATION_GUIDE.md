# Setup Guide

## What You Need

- PHP 7.4+
- MySQL 5.7+
- Apache (XAMPP works fine)

## Getting Started

**1. Download the files**

Put them in your web server folder (like `htdocs` if you're using XAMPP).

**2. Create the database**

Open phpMyAdmin or MySQL:
```bash
mysql -u root -p
CREATE DATABASE portfolio_db;
exit;
```

**3. Import the database**

```bash
mysql -u root -p portfolio_db < database.sql
```

**4. Set up your config**

Copy the example files:
```bash
cp db_connect.example.php db_connect.php
cp config.example.php config.php
```

Edit `db_connect.php` with your database info:
```php
$host = 'localhost';
$dbname = 'portfolio_db';
$username = 'root';
$password = 'your_password';
```

Edit `config.php` with your personal details:
```php
define('USER_NAME', 'Your Name');
define('USER_EMAIL', 'your@email.com');
define('GITHUB_URL', 'https://github.com/yourusername');
```

**5. Open it**

Go to `http://localhost/portfolio` in your browser.

## Admin Panel

Check messages at `/admin/view_messages.php`

Default password is `admin123` - change it in the file (line 6).

## Adding Projects

Edit `projects.php` and copy the project card format:
```html
<div class="col-md-6 mb-4">
    <div class="project-card">
        <div class="project-card-header">
            <h3 class="project-title">Your Project</h3>
            <span class="project-status status-completed">Completed</span>
        </div>
        <div class="project-card-body">
            <p class="project-description">What it does</p>
            <div class="project-technologies">
                <span class="tech-badge">Tech1</span>
                <span class="tech-badge">Tech2</span>
            </div>
        </div>
        <div class="project-card-footer">
            <a href="github-link" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-github me-1"></i>View Code
            </a>
        </div>
    </div>
</div>
```

## Troubleshooting


**Can't connect to database?**
- Check MySQL is running
- Verify credentials in `db_connect.php`

**Page is blank?**
- Check PHP errors in browser console
- Make sure all files are in the right folder

**CSS not loading?**
- Clear browser cache (Ctrl+Shift+R)
- Check file paths in `includes/header.php`

That's it. Pretty straightforward.
