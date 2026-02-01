# Project Structure

## File Organization

```
portfolio/
├── admin/
│   └── view_messages.php      # Check contact form submissions
├── assets/
│   └── css/
│       └── style.css          # All the styling
├── includes/
│   ├── header.php             # Navigation bar
│   └── footer.php             # Footer with scripts
├── .htaccess                  # Apache config
├── .gitignore                 # Git ignore rules
├── config.php                 # Your personal info (not in Git)
├── config.example.php         # Template for config
├── db_connect.php             # Database connection (not in Git)
├── db_connect.example.php     # Template for database
├── database.sql               # Database schema
├── index.php                  # Homepage
├── projects.php               # Projects page
├── contact.php                # Contact form
├── README.md                  # Main documentation
├── INSTALLATION_GUIDE.md      # Setup instructions
├── CHANGELOG.md               # Version history
├── LICENSE                    # MIT License
└── CONTRIBUTING.md            # How to contribute
```

## What Each File Does

**index.php** - Homepage with:
- Hero section (name, role, "Open to Opportunities" badge)
- About section
- Skills section (pulled from database)

**projects.php** - Shows all your projects from the database with:
- Project cards
- Status badges (Completed, In Progress)
- Tech stack tags
- Links to GitHub/live demos

**contact.php** - Contact form that:
- Validates input
- Saves to database
- Shows success/error messages

**admin/view_messages.php** - Simple admin panel to:
- View contact form submissions
- Mark messages as read
- Delete messages
- Password protected (change the default!)

## Database Tables

**projects**
- Stores your portfolio projects
- Fields: title, description, technologies, status, links

**contact_messages**
- Stores form submissions
- Fields: name, email, subject, message, read status

**skills**
- Stores your skills
- Fields: skill name, category, proficiency level

## Configuration Files

**config.php** - Your personal info:
- Name, email, phone
- Social media links
- Site settings

**db_connect.php** - Database credentials:
- Host, database name
- Username, password

Both have `.example.php` versions you can share safely.

## Styling

**style.css** - Everything's in one file:
- Dark theme colors
- Animations (pulsing badge, hover effects)
- Responsive breakpoints
- All component styles

Uses CSS variables for easy color changes.

## Security

**.htaccess** - Protects:
- config.php (can't access directly)
- db_connect.php (can't access directly)
- database.sql (can't download)

Also handles URL rewriting (removes .php extension).

**.gitignore** - Keeps out of Git:
- config.php (your credentials)
- db_connect.php (your password)
- Logs and cache files
- IDE files

## Tech Stack

- PHP (vanilla, no frameworks)
- MySQL with PDO
- Bootstrap 5 (grid and utilities)
- Custom CSS (all the styling)
- Vanilla JavaScript (smooth scrolling, nav highlighting)

No build process needed. Just upload and go.
