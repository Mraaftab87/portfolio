# Modern Portfolio Website

A clean, dark-themed portfolio built with PHP, MySQL, and Bootstrap 5. Simple, fast, and responsive.

![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=flat&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3.2-7952B3?style=flat&logo=bootstrap&logoColor=white)

## What's Inside

This is a straightforward portfolio website I built to showcase my work. It's got a dark theme with cyan accents, smooth animations, and works great on mobile.

**Key stuff:**
- Dark theme that's easy on the eyes
- "Open to Opportunities" badge (because I'm actively looking!)
- Projects and skills pulled from a MySQL database
- Contact form that actually works
- Simple admin panel to check messages
- Responsive design - looks good everywhere

## Quick Setup

You'll need PHP 7.4+, MySQL 5.7+, and a local server (XAMPP works great).

**Get it running:**

```bash
# Clone it
git clone https://github.com/yourusername/portfolio.git
cd portfolio

# Create database
mysql -u root -p
CREATE DATABASE portfolio_db;
exit;

# Import the schema
mysql -u root -p portfolio_db < database.sql

# Copy config files
cp db_connect.example.php db_connect.php
cp config.example.php config.php

# Edit with your info
nano db_connect.php  # Add your database credentials
nano config.php      # Add your personal info
```

That's it. Open `http://localhost/portfolio` and you're good to go.

## Project Structure

```
portfolio/
├── admin/              # Admin panel for messages
├── assets/css/         # Styling
├── includes/           # Header and footer
├── index.php           # Homepage
├── projects.php        # Projects page
├── contact.php         # Contact form
├── config.php          # Your settings (not in Git)
├── db_connect.php      # Database connection (not in Git)
└── database.sql        # Database schema
```

## Customization

**Change colors** - Edit `assets/css/style.css`:
```css
:root {
    --bg-dark: #1a1a2e;
    --accent-primary: #00adb5;
    --text-light: #e0e0e0;
}
```

**Add projects** - Just insert into the database:
```sql
INSERT INTO projects (title, description, technologies, status, github_url) 
VALUES ('My Project', 'What it does', 'PHP, MySQL', 'Completed', 'github.com/...');
```

**Update your info** - Edit `config.php`:
```php
define('USER_NAME', 'Your Name');
define('USER_EMAIL', 'your@email.com');
define('GITHUB_URL', 'https://github.com/yourusername');
```

## Database Tables

Three simple tables:

**projects** - Your portfolio items
- title, description, technologies, status, links, timestamps

**contact_messages** - Form submissions
- name, email, subject, message, read status, timestamp

**skills** - Your skills list
- skill name, category, proficiency level, timestamp

## Admin Panel

Check messages at `/admin/view_messages.php`

Default password is `admin123` - **change it** in `admin/view_messages.php` line 6.

## Security Notes

Before going live:
- Change the admin password
- Turn off error display in `.htaccess`
- Enable HTTPS redirect
- Update database credentials
- Check file permissions

The `.htaccess` file already has security headers and file protection set up.

## Tech Stack

- PHP (vanilla, no frameworks)
- MySQL with PDO
- Bootstrap 5 for the grid
- Custom CSS for the theme
- Vanilla JavaScript for interactions

## What's Protected

These files are in `.gitignore` and won't be committed:
- `config.php` - Your actual credentials
- `db_connect.php` - Your database password
- Any `.env` files
- Logs and cache

The `*.example.php` files are templates you can safely share.

## Contributing

Found a bug? Want to add something? Pull requests are welcome.

Just fork it, make your changes, and submit a PR. Keep the code clean and test your changes.

## License

MIT License - use it however you want.

## Author

Built by Aaftab I. Gori

- GitHub: [@aaftabgori](https://github.com/aaftabgori)
- LinkedIn: [Aaftab I. Gori](https://linkedin.com/in/aaftabgori)

Currently a final year BCA student looking for internship and junior developer opportunities.

## Deployment

Works on any PHP hosting. I've tested it on:
- Shared hosting (cPanel)
- VPS with Apache
- Local development (XAMPP, WAMP)

Just upload the files, import the database, update your config, and you're live.

## Notes

This is a real portfolio I'm actually using. The code is clean, commented, and easy to modify. No bloat, no unnecessary dependencies.

If you use this, drop me a message - I'd love to see what you build with it.
