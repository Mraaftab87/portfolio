# Modern Portfolio Website - Aaftab I. Gori

A sleek, dark-themed portfolio website built with vanilla PHP, MySQL, and Bootstrap 5. Features smooth animations, interactive hover effects, and a modern neon cyan accent color scheme.

## Features

- **Modern Dark Theme** with high contrast (#1a1a2e background, #e0e0e0 text, #00adb5 neon cyan accents)
- **"Open to Opportunities" Badge** with pulsating live indicator - clearly shows availability for internships
- **Professional Opportunity Statement** with warm, confident copy highlighting skills and readiness
- **Interactive Hover Effects**: Project cards lift and glow, skill pills transform with smooth transitions
- **Fully Responsive** design that works seamlessly on all devices
- **Dynamic Content**: Projects and skills fetched from MySQL database
- **Animated Status Badges**: "In Progress" projects pulse with orange glow
- **Contact Form** with database storage and validation
- **Admin Panel** to view and manage contact messages
- **Clean Modular Code** with separated concerns and best practices
- **SEO Friendly** with proper meta tags and semantic HTML

## Folder Structure

```
portfolio/
├── admin/
│   └── view_messages.php      # Admin panel for viewing contact messages
├── assets/
│   └── css/
│       └── style.css          # Custom CSS with dark theme and animations
├── includes/
│   ├── header.php             # Navigation and HTML head
│   └── footer.php             # Footer and scripts
├── index.php                  # Homepage (Hero, About, Skills)
├── projects.php               # Projects showcase page
├── contact.php                # Contact form
├── config.php                 # Site configuration
├── db_connect.php             # Database connection
├── database.sql               # Database schema and sample data
├── .htaccess                  # Apache configuration
└── README.md                  # This file
```

## Installation & Setup

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server (XAMPP, WAMP, or LAMP)

### Step 1: Clone or Download
Download the portfolio folder to your web server's root directory (e.g., `htdocs` for XAMPP).

### Step 2: Create Database
1. Open phpMyAdmin or MySQL command line
2. Import the `database.sql` file or run the SQL queries manually
3. This will create the `portfolio_db` database with sample data

### Step 3: Configure Database Connection
Open `db_connect.php` and update the database credentials if needed:
```php
$host = 'localhost';
$dbname = 'portfolio_db';
$username = 'root';  // Your MySQL username
$password = '';      // Your MySQL password
```

### Step 4: Update Configuration
Open `config.php` and update your personal information, social links, and site details.

### Step 5: Access the Website
Open your browser and navigate to:
```
http://localhost/portfolio/
```

### Step 6: Admin Panel (Optional)
- Access: `http://localhost/portfolio/admin/view_messages.php`
- Default password: `admin123` (⚠️ Change this in `admin/view_messages.php`)
- View, mark as read, and delete contact messages

## Pages

1. **Home (index.php)**: Hero section, About Me, and Skills showcase
2. **Projects (projects.php)**: Dynamic project listings from database
3. **Contact (contact.php)**: Contact form with database integration

## Database Tables

### projects
- `id`: Primary key
- `title`: Project name
- `description`: Project details
- `technologies`: Comma-separated tech stack
- `status`: 'Completed', 'In Progress', or 'Planned'
- `image_url`: Project image (optional)
- `project_url`: Live demo link (optional)
- `github_url`: GitHub repository link (optional)
- `created_at`: Timestamp
- `updated_at`: Timestamp

### contact_messages
- `id`: Primary key
- `name`: Sender name
- `email`: Sender email
- `subject`: Message subject
- `message`: Message content
- `is_read`: Read status (boolean)
- `created_at`: Timestamp

### skills
- `id`: Primary key
- `skill_name`: Name of the skill
- `category`: Category (e.g., Frontend, Backend, Tools)
- `proficiency`: Skill level (0-100)
- `created_at`: Timestamp

## Customization

### Update Personal Information
Edit `config.php` to update your details:
- Name, role, email, phone
- Social media links (GitHub, LinkedIn, Twitter)
- Site metadata

### Add New Projects
Insert new projects directly into the database via phpMyAdmin:
```sql
INSERT INTO projects (title, description, technologies, status, github_url, project_url) 
VALUES ('Project Name', 'Description here', 'PHP, MySQL, Bootstrap', 'Completed', 'github-url', 'live-url');
```

### Add New Skills
Add skills to showcase your expertise:
```sql
INSERT INTO skills (skill_name, category, proficiency) 
VALUES ('React', 'Frontend', 85);
```

### Modify Colors
Update CSS variables in `assets/css/style.css`:
```css
:root {
    --bg-dark: #1a1a2e;           /* Main background */
    --accent-primary: #00adb5;     /* Neon cyan accent */
    --text-light: #e0e0e0;         /* Text color */
    --card-bg: #0f3460;            /* Card background */
}
```

## Key Design Features

### Interactive Hover Effects
- **Project Cards**: Lift up 10px with glowing cyan shadow on hover
- **Skill Pills**: Transform and glow when hovered
- **Buttons**: Smooth color transitions and elevation
- **Navigation Links**: Animated underline effect
- **Social Icons**: Rotate 360° on hover with glow

### Status Badges
- **Completed**: Green badge with static styling
- **In Progress**: Orange badge with pulsing animation (highlights active work)
- **Planned**: Red badge for future projects

### Typography
- **Font Family**: Poppins (Google Fonts) for modern, clean look
- **Font Weights**: 300-700 for hierarchy
- **High Contrast**: Off-white text on dark background for readability

## Technologies Used

- **Backend**: PHP (Vanilla) with PDO
- **Database**: MySQL 5.7+
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework**: Bootstrap 5.3.2
- **Icons**: Bootstrap Icons 1.11.1
- **Fonts**: Google Fonts (Poppins)
- **Server**: Apache with .htaccess

## Security Notes

⚠️ **Important Security Measures:**
- Change the admin password in `admin/view_messages.php` (default: `admin123`)
- Use prepared statements (already implemented with PDO)
- Keep `db_connect.php` and `config.php` secure
- Consider adding HTTPS in production
- Implement proper session management for admin panel
- Update `.htaccess` to protect sensitive files

## Browser Support

- Chrome (latest) ✓
- Firefox (latest) ✓
- Safari (latest) ✓
- Edge (latest) ✓
- Mobile browsers ✓

## Author

**Aaftab I. Gori**
- BCA Student (Final Year)
- Aspiring Developer
- Open to Internship & Junior Developer Opportunities

## License

This project is open source and available for personal and educational use.
