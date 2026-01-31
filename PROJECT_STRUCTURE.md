# Project Structure Documentation

## Overview
This document provides a detailed breakdown of the portfolio website's architecture, file organization, and design decisions.

## Architecture

### Design Pattern
- **MVC-inspired**: Separation of concerns with modular PHP files
- **Database-driven**: Dynamic content from MySQL
- **Component-based**: Reusable header/footer includes

### Technology Stack
```
Frontend:
├── HTML5 (Semantic markup)
├── CSS3 (Custom variables, animations, transitions)
├── Bootstrap 5.3.2 (Grid system, utilities)
├── JavaScript (Vanilla - smooth scrolling, active nav)
└── Google Fonts (Poppins)

Backend:
├── PHP 7.4+ (Vanilla, no frameworks)
├── PDO (Database abstraction)
└── MySQL 5.7+ (Relational database)

Server:
└── Apache (.htaccess for URL rewriting, security)
```

## File Structure Breakdown

### Root Level Files

#### `index.php`
**Purpose**: Homepage with hero, about, and skills sections
**Key Features**:
- Hero section with animated content
- About cards with hover effects
- Dynamic skills display grouped by category
- Fetches skills from database
**Dependencies**: `db_connect.php`, `config.php`, `header.php`, `footer.php`

#### `projects.php`
**Purpose**: Showcase all projects from database
**Key Features**:
- Dynamic project cards with hover effects
- Status badges (Completed, In Progress, Planned)
- Technology tags
- Links to GitHub and live demos
**Database Query**: `SELECT * FROM projects ORDER BY created_at DESC`

#### `contact.php`
**Purpose**: Contact form with validation and database storage
**Key Features**:
- Form validation (server-side)
- Email validation
- Success/error messages
- Contact information display
**Database Insert**: Stores messages in `contact_messages` table

#### `config.php`
**Purpose**: Centralized configuration
**Contains**:
- Site constants (name, URL, email)
- User information (name, role, contact)
- Social media links
**Usage**: Included in header.php for global access

#### `db_connect.php`
**Purpose**: Database connection using PDO
**Features**:
- PDO with prepared statements (SQL injection prevention)
- Error mode set to exceptions
- UTF-8 charset
- Fetch mode set to associative arrays

#### `database.sql`
**Purpose**: Database schema and sample data
**Tables**:
1. `projects` - Project portfolio items
2. `contact_messages` - Contact form submissions
3. `skills` - Skills and technologies
**Sample Data**: Includes 2 projects and 10 skills

#### `.htaccess`
**Purpose**: Apache server configuration
**Features**:
- URL rewriting (remove .php extension)
- Directory browsing prevention
- File protection (config.php, db_connect.php)
- Compression and caching
- Security headers

### Includes Directory

#### `includes/header.php`
**Purpose**: Navigation and HTML head
**Contains**:
- DOCTYPE and meta tags
- Google Fonts import
- Bootstrap CSS
- Bootstrap Icons
- Custom CSS
- Responsive navigation bar
**Dynamic**: Active nav link highlighting

#### `includes/footer.php`
**Purpose**: Footer and closing scripts
**Contains**:
- Footer with copyright
- Social media links
- Bootstrap JS bundle
- Custom JavaScript (smooth scrolling, active nav)

### Assets Directory

#### `assets/css/style.css`
**Purpose**: Custom styling and theme
**Structure**:
```css
1. Root Variables (colors, spacing)
2. Global Styles (body, links)
3. Navigation (navbar, nav-links)
4. Hero Section (animations, buttons)
5. Sections (about, skills, projects, contact)
6. Components (cards, pills, badges)
7. Footer (social links)
8. Alerts (success, error, info)
9. Responsive (media queries)
10. Utilities (scrollbar, text)
```

**Key Features**:
- CSS custom properties for theming
- Smooth transitions (0.3s ease)
- Hover effects with transform and box-shadow
- Keyframe animations (fadeInUp, bounce, pulse)
- Responsive breakpoints (768px, 576px)

### Admin Directory

#### `admin/view_messages.php`
**Purpose**: Admin panel for contact messages
**Features**:
- Simple password authentication
- View all messages
- Mark messages as read
- Delete messages
- Session management
**Security**: Change default password before production!

## Color Scheme

### Primary Colors
```css
--bg-dark: #1a1a2e        /* Main background - Dark navy */
--bg-darker: #16213e      /* Darker sections */
--text-light: #e0e0e0     /* Primary text - Off-white */
--text-muted: #a0a0a0     /* Secondary text - Gray */
--accent-primary: #00adb5 /* Neon cyan - Primary accent */
--accent-hover: #00d4dd   /* Lighter cyan - Hover state */
--accent-glow: rgba(0, 173, 181, 0.4) /* Glow effect */
--card-bg: #0f3460        /* Card background - Blue-gray */
```

### Status Colors
```css
--status-completed: #00ff88  /* Green - Completed projects */
--status-progress: #ffa500   /* Orange - In progress */
--status-planned: #ff6b6b    /* Red - Planned projects */
```

## Database Schema

### projects Table
```sql
id              INT AUTO_INCREMENT PRIMARY KEY
title           VARCHAR(255) NOT NULL
description     TEXT NOT NULL
technologies    VARCHAR(255) NOT NULL (comma-separated)
status          ENUM('Completed', 'In Progress', 'Planned')
image_url       VARCHAR(255) (optional)
project_url     VARCHAR(255) (optional - live demo)
github_url      VARCHAR(255) (optional - repository)
created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP
updated_at      TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
```

### contact_messages Table
```sql
id              INT AUTO_INCREMENT PRIMARY KEY
name            VARCHAR(100) NOT NULL
email           VARCHAR(100) NOT NULL
subject         VARCHAR(200) NOT NULL
message         TEXT NOT NULL
created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP
is_read         BOOLEAN DEFAULT FALSE
```

### skills Table
```sql
id              INT AUTO_INCREMENT PRIMARY KEY
skill_name      VARCHAR(100) NOT NULL
category        VARCHAR(50) NOT NULL
proficiency     INT DEFAULT 50 (0-100 scale)
created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP
```

## Key Design Decisions

### Why Dark Theme?
- Modern, tech-focused aesthetic
- Reduces eye strain
- Makes neon accents pop
- Popular in developer portfolios

### Why Neon Cyan (#00adb5)?
- High contrast against dark background
- Energetic and modern
- Associated with technology and innovation
- Creates striking visual hierarchy

### Why Vanilla PHP?
- No framework overhead
- Easy to understand and modify
- Fast performance
- Suitable for small-scale portfolio
- Easy deployment on shared hosting

### Why PDO over mysqli?
- More secure (prepared statements)
- Database-agnostic (easier to switch DB)
- Better error handling
- Object-oriented approach

### Why Bootstrap 5?
- Rapid development
- Responsive grid system
- Pre-built components
- Wide browser support
- No jQuery dependency

## Performance Optimizations

1. **CSS**: Single stylesheet, minified in production
2. **JavaScript**: Minimal vanilla JS, no heavy libraries
3. **Images**: Lazy loading recommended for project images
4. **Caching**: Browser caching via .htaccess
5. **Compression**: Gzip compression enabled
6. **Database**: Indexed primary keys, efficient queries

## Security Measures

1. **SQL Injection**: PDO prepared statements
2. **XSS**: `htmlspecialchars()` on all output
3. **CSRF**: Consider adding tokens for forms
4. **File Protection**: .htaccess blocks direct access
5. **Password**: Change admin password
6. **Validation**: Server-side form validation
7. **Headers**: Security headers in .htaccess

## Browser Compatibility

### Tested Browsers
- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile Safari (iOS 14+)
- Chrome Mobile (Android 10+)

### CSS Features Used
- CSS Grid (95%+ support)
- Flexbox (98%+ support)
- CSS Variables (95%+ support)
- Transforms (98%+ support)
- Transitions (98%+ support)

## Future Enhancements

### Potential Features
1. Blog section with CMS
2. Project filtering by technology
3. Dark/light theme toggle
4. Multi-language support
5. Resume download
6. Testimonials section
7. Analytics integration
8. Email notifications for contact form
9. Image upload for projects
10. Advanced admin panel with CRUD operations

### Performance Improvements
1. Image optimization and WebP format
2. CSS/JS minification
3. CDN integration
4. Service worker for offline access
5. Database query caching

## Maintenance

### Regular Tasks
- Update skills as you learn new technologies
- Add new projects to showcase
- Review and respond to contact messages
- Update social media links
- Keep dependencies updated (Bootstrap, PHP)
- Backup database regularly

### Security Updates
- Change admin password periodically
- Update PHP version
- Review .htaccess rules
- Monitor for SQL injection attempts
- Keep Bootstrap updated for security patches

## Deployment Checklist

- [ ] Update database credentials in `db_connect.php`
- [ ] Change admin password in `admin/view_messages.php`
- [ ] Update personal information in `config.php`
- [ ] Test all forms and validation
- [ ] Verify responsive design on multiple devices
- [ ] Enable HTTPS (update .htaccess)
- [ ] Set up database backups
- [ ] Test contact form email delivery
- [ ] Optimize images
- [ ] Set up analytics (Google Analytics)
- [ ] Submit sitemap to search engines
- [ ] Test cross-browser compatibility

## Support & Documentation

For questions or issues:
1. Check this documentation
2. Review code comments
3. Test in local environment first
4. Use browser developer tools for debugging
5. Check PHP error logs

---

**Last Updated**: January 2026
**Version**: 1.0
**Author**: Aaftab I. Gori
