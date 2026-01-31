# Installation Guide - Portfolio Website

## 🚀 Quick Start (5 Minutes)

### Prerequisites
- ✅ XAMPP, WAMP, or LAMP installed
- ✅ PHP 7.4 or higher
- ✅ MySQL 5.7 or higher
- ✅ Web browser (Chrome, Firefox, Safari, Edge)

---

## Step-by-Step Installation

### Step 1: Download & Extract
1. Download the portfolio files
2. Extract to your web server directory:
   - **XAMPP**: `C:\xampp\htdocs\portfolio`
   - **WAMP**: `C:\wamp64\www\portfolio`
   - **LAMP**: `/var/www/html/portfolio`

### Step 2: Create Database
1. Open **phpMyAdmin** in your browser:
   - URL: `http://localhost/phpmyadmin`
   
2. Click **"New"** in the left sidebar

3. Create database:
   - Database name: `portfolio_db`
   - Collation: `utf8mb4_unicode_ci`
   - Click **"Create"**

4. Import SQL file:
   - Click on `portfolio_db` in left sidebar
   - Click **"Import"** tab at top
   - Click **"Choose File"** and select `database.sql`
   - Click **"Go"** at bottom
   - ✅ You should see "Import has been successfully finished"

### Step 3: Configure Database Connection
1. Open `db_connect.php` in a text editor

2. Update these lines if needed:
   ```php
   $host = 'localhost';        // Usually 'localhost'
   $dbname = 'portfolio_db';   // Database name
   $username = 'root';         // MySQL username (usually 'root')
   $password = '';             // MySQL password (usually empty for local)
   ```

3. Save the file

### Step 4: Update Personal Information
1. Open `config.php` in a text editor

2. Update your details:
   ```php
   define('USER_NAME', 'Your Name');
   define('USER_EMAIL', 'your.email@example.com');
   define('USER_PHONE', '+91 XXXXX XXXXX');
   define('GITHUB_URL', 'https://github.com/yourusername');
   define('LINKEDIN_URL', 'https://linkedin.com/in/yourusername');
   define('TWITTER_URL', 'https://twitter.com/yourusername');
   ```

3. Save the file

### Step 5: Change Admin Password
1. Open `admin/view_messages.php` in a text editor

2. Find this line (around line 6):
   ```php
   $admin_password = 'admin123'; // Change this!
   ```

3. Change to a secure password:
   ```php
   $admin_password = 'YourSecurePassword123!';
   ```

4. Save the file

### Step 6: Access Your Portfolio
1. Start your web server (XAMPP/WAMP/LAMP)

2. Open your browser and go to:
   ```
   http://localhost/portfolio
   ```

3. ✅ You should see your portfolio with the "Open to Opportunities" badge!

---

## 🎨 Customization (Optional)

### Add Your Own Projects
1. Open phpMyAdmin: `http://localhost/phpmyadmin`
2. Click on `portfolio_db` → `projects` table
3. Click **"Insert"** tab
4. Fill in the form:
   - **title**: Your project name
   - **description**: Project details
   - **technologies**: Comma-separated (e.g., "PHP, MySQL, Bootstrap")
   - **status**: Choose "Completed", "In Progress", or "Planned"
   - **github_url**: Your GitHub repo URL (optional)
   - **project_url**: Live demo URL (optional)
5. Click **"Go"** to save

### Add Your Skills
1. In phpMyAdmin, go to `skills` table
2. Click **"Insert"** tab
3. Fill in:
   - **skill_name**: Skill name (e.g., "React")
   - **category**: Category (e.g., "Frontend", "Backend", "Tools")
   - **proficiency**: Number 0-100
4. Click **"Go"** to save

### Change Colors
1. Open `assets/css/style.css`
2. Find the `:root` section at the top
3. Change color values:
   ```css
   :root {
       --bg-dark: #1a1a2e;           /* Main background */
       --accent-primary: #00adb5;     /* Change to your color */
       --text-light: #e0e0e0;         /* Text color */
   }
   ```
4. Save and refresh browser

---

## 🔧 Troubleshooting

### Problem: "Connection failed" error
**Solution**:
1. Check MySQL is running in XAMPP/WAMP control panel
2. Verify database credentials in `db_connect.php`
3. Make sure `portfolio_db` database exists

### Problem: Page shows blank/white screen
**Solution**:
1. Check PHP is running (XAMPP/WAMP control panel)
2. Enable error reporting: Add to top of `index.php`:
   ```php
   error_reporting(E_ALL);
   ini_set('display_errors', 1);
   ```
3. Check browser console for errors (F12)

### Problem: CSS not loading (no styling)
**Solution**:
1. Check file path: `assets/css/style.css` exists
2. Clear browser cache (Ctrl+Shift+R)
3. Verify `header.php` has correct CSS link

### Problem: Projects not showing
**Solution**:
1. Check database has projects: phpMyAdmin → `portfolio_db` → `projects`
2. Verify database connection in `db_connect.php`
3. Check for PHP errors in browser console

### Problem: Contact form not working
**Solution**:
1. Check database connection
2. Verify `contact_messages` table exists
3. Check form action points to `contact.php`

### Problem: Admin panel won't login
**Solution**:
1. Check password in `admin/view_messages.php`
2. Clear browser cookies
3. Try incognito/private browsing mode

---

## 📱 Testing Checklist

After installation, test these:

- [ ] Homepage loads correctly
- [ ] "Open to Opportunities" badge appears and pulses
- [ ] Projects page shows your projects
- [ ] Contact form submits successfully
- [ ] Admin panel login works
- [ ] Mobile view is responsive (resize browser)
- [ ] All links work (navigation, social media)
- [ ] Skills display correctly
- [ ] Hover effects work on cards

---

## 🌐 Deploy to Live Server

### Using cPanel
1. **Upload Files**:
   - Login to cPanel
   - Go to File Manager
   - Upload all files to `public_html` folder

2. **Create Database**:
   - Go to MySQL Databases in cPanel
   - Create new database
   - Create database user
   - Add user to database with all privileges

3. **Import SQL**:
   - Go to phpMyAdmin in cPanel
   - Select your database
   - Import `database.sql`

4. **Update Config**:
   - Edit `db_connect.php` with live database credentials
   - Update `config.php` with live site URL

5. **Set Permissions**:
   - Set folders to 755
   - Set files to 644

### Using FTP
1. Connect via FTP client (FileZilla)
2. Upload all files to web root
3. Follow database steps above
4. Update configuration files

---

## 🔒 Security Checklist

Before going live:

- [ ] Change admin password from default
- [ ] Update database credentials
- [ ] Remove any test data
- [ ] Enable HTTPS (SSL certificate)
- [ ] Set proper file permissions
- [ ] Backup database regularly
- [ ] Keep PHP and MySQL updated

---

## 📊 Optional Enhancements

### Add Google Analytics
1. Get tracking code from Google Analytics
2. Add to `includes/footer.php` before `</body>`:
   ```html
   <!-- Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=YOUR-ID"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'YOUR-ID');
   </script>
   ```

### Add Favicon
1. Create favicon.ico (16x16 or 32x32 pixels)
2. Place in root directory
3. Add to `includes/header.php`:
   ```html
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   ```

### Enable Email Notifications
1. Install PHPMailer: `composer require phpmailer/phpmailer`
2. Update `contact.php` to send emails
3. Configure SMTP settings

---

## 📞 Need Help?

### Common Resources
- **PHP Documentation**: https://www.php.net/docs.php
- **Bootstrap Docs**: https://getbootstrap.com/docs/5.3/
- **MySQL Tutorial**: https://dev.mysql.com/doc/

### Check These Files
- `README.md` - General overview
- `UPDATE_SUMMARY.md` - Recent changes
- `QUICK_REFERENCE.md` - Quick customization guide
- `OPEN_TO_WORK_FEATURE.md` - Feature details

---

## ✅ Installation Complete!

Your portfolio is now ready! 🎉

**Next Steps**:
1. Add your own projects to database
2. Update skills list
3. Customize colors if desired
4. Test on different devices
5. Share with recruiters!

---

**Installation Guide Version**: 1.0  
**Last Updated**: January 30, 2026  
**Estimated Setup Time**: 5-10 minutes
