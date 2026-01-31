# .htaccess & .gitignore Guide 📝

## ✅ Files Created

1. **`.htaccess`** - Apache server configuration (Updated)
2. **`.gitignore`** - Git ignore rules (New)

---

## 🔧 .htaccess Features

### 1. URL Rewriting
```apache
# Remove .php extension
# http://localhost/portfolio/index.php → http://localhost/portfolio/index
RewriteCond %{REQUEST_FILENAME}\.php -f
RewriteRule ^(.*)$ $1.php [L]
```

### 2. Security Headers
- **X-Frame-Options**: Prevents clickjacking
- **X-XSS-Protection**: Blocks XSS attacks
- **X-Content-Type-Options**: Prevents MIME sniffing
- **Referrer-Policy**: Controls referrer information

### 3. File Protection
```apache
# Protected files (can't access directly):
- config.php
- db_connect.php
- database.sql
- .env files
- .git files
```

### 4. PHP Settings
```apache
# Development mode (Change in production!)
display_errors = On
error_reporting = E_ALL

# File uploads
upload_max_filesize = 10M
post_max_size = 10M
```

### 5. Performance
- **Compression**: Gzip compression for faster loading
- **Browser Caching**: Images cached for 1 year, CSS/JS for 1 month
- **ETags Disabled**: Better caching control

### 6. Security Features
- Directory browsing disabled
- Bad bots blocked
- Server signature hidden

---

## 📁 .gitignore Features

### What's Ignored:

#### 1. Sensitive Files (NEVER commit!)
```
config.php          # Database credentials
db_connect.php      # Connection details
.env                # Environment variables
```

#### 2. Database Backups
```
*.sql.gz
*.sql.zip
backup/
```

#### 3. IDE Files
```
.vscode/            # VSCode
.idea/              # PhpStorm
*.sublime-*         # Sublime Text
```

#### 4. OS Files
```
.DS_Store           # macOS
Thumbs.db           # Windows
*~                  # Linux
```

#### 5. Logs & Cache
```
*.log
*.cache
error_log
cache/
tmp/
```

#### 6. Uploads (User content)
```
uploads/*
images/uploads/*
```

---

## 🚀 How to Use

### .htaccess Setup:

1. **Local Development**:
   ```apache
   # Keep these ON for debugging:
   php_flag display_errors On
   php_value error_reporting E_ALL
   ```

2. **Production (Live Server)**:
   ```apache
   # Change to OFF:
   php_flag display_errors Off
   php_value error_reporting 0
   
   # Enable HTTPS redirect:
   RewriteCond %{HTTPS} off
   RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
   ```

3. **Update RewriteBase**:
   ```apache
   # If your site is in root:
   RewriteBase /
   
   # If in subfolder:
   RewriteBase /portfolio/
   ```

### .gitignore Setup:

1. **First Time Git Init**:
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   ```

2. **If Files Already Committed**:
   ```bash
   # Remove from Git but keep locally:
   git rm --cached config.php
   git rm --cached db_connect.php
   git commit -m "Remove sensitive files"
   ```

3. **Create Template Config**:
   ```bash
   # Copy config.php to config.example.php
   cp config.php config.example.php
   
   # Edit config.example.php and remove real credentials
   # Commit the example file
   git add config.example.php
   git commit -m "Add config template"
   ```

---

## ⚠️ Important Notes

### .htaccess:

1. **Apache Required**: Won't work on Nginx (needs different config)
2. **mod_rewrite**: Must be enabled on server
3. **AllowOverride**: Must be set to "All" in Apache config
4. **Test Locally**: Always test before deploying

### .gitignore:

1. **Already Committed Files**: Won't be ignored automatically
2. **Sensitive Data**: NEVER commit passwords or API keys
3. **Team Sharing**: Share config.example.php with team
4. **Check Before Push**: Always review what you're committing

---

## 🧪 Testing .htaccess

### Test URL Rewriting:
```
# Try accessing:
http://localhost/portfolio/index
http://localhost/portfolio/projects
http://localhost/portfolio/contact

# Should work without .php extension!
```

### Test File Protection:
```
# Try accessing directly (should get 403 Forbidden):
http://localhost/portfolio/config.php
http://localhost/portfolio/db_connect.php
http://localhost/portfolio/database.sql
```

### Check PHP Settings:
```php
<?php
// Create test.php
phpinfo();
?>

# Access: http://localhost/portfolio/test
# Check: upload_max_filesize, display_errors, etc.
# DELETE test.php after checking!
```

---

## 🔒 Security Checklist

### Before Going Live:

- [ ] Change `display_errors` to `Off`
- [ ] Set `error_reporting` to `0`
- [ ] Enable HTTPS redirect
- [ ] Update `RewriteBase` if needed
- [ ] Test all protected files
- [ ] Remove test files
- [ ] Check .gitignore is working
- [ ] Don't commit config.php
- [ ] Create config.example.php
- [ ] Update admin password

---

## 📊 File Structure

```
portfolio/
├── .htaccess              ← Apache config (Updated)
├── .gitignore             ← Git ignore rules (New)
├── config.php             ← NOT in Git (ignored)
├── config.example.php     ← Template (commit this)
├── db_connect.php         ← NOT in Git (ignored)
├── index.php
├── projects.php
├── contact.php
└── ...
```

---

## 💡 Pro Tips

### 1. Create Config Template:
```php
<?php
// config.example.php
define('SITE_NAME', 'Your Portfolio');
define('SITE_URL', 'http://localhost/portfolio');
define('ADMIN_EMAIL', 'your-email@example.com');

// Database (CHANGE THESE!)
$host = 'localhost';
$dbname = 'your_database';
$username = 'your_username';
$password = 'your_password';
?>
```

### 2. Environment Variables:
```php
// Use .env file (better security)
// Install: composer require vlucas/phpdotenv

DB_HOST=localhost
DB_NAME=portfolio_db
DB_USER=root
DB_PASS=your_password
```

### 3. Git Commands:
```bash
# Check what will be committed:
git status

# See ignored files:
git status --ignored

# Remove file from Git:
git rm --cached filename

# Undo last commit (keep changes):
git reset --soft HEAD~1
```

---

## 🆘 Troubleshooting

### .htaccess Not Working?

1. **Check mod_rewrite**:
   ```bash
   # Apache
   sudo a2enmod rewrite
   sudo service apache2 restart
   ```

2. **Check AllowOverride**:
   ```apache
   # In Apache config:
   <Directory /var/www/html>
       AllowOverride All
   </Directory>
   ```

3. **Check File Permissions**:
   ```bash
   chmod 644 .htaccess
   ```

### .gitignore Not Working?

1. **Clear Git Cache**:
   ```bash
   git rm -r --cached .
   git add .
   git commit -m "Fix .gitignore"
   ```

2. **Check File Already Committed**:
   ```bash
   git ls-files | grep config.php
   # If found, remove it:
   git rm --cached config.php
   ```

---

## ✅ Summary

**`.htaccess`**:
- ✅ URL rewriting (remove .php)
- ✅ Security headers
- ✅ File protection
- ✅ Performance optimization
- ✅ PHP settings

**`.gitignore`**:
- ✅ Protects sensitive files
- ✅ Ignores IDE files
- ✅ Ignores OS files
- ✅ Ignores logs & cache
- ✅ Ignores uploads

**Ready for development & deployment!** 🚀

---

**Guide Version**: 1.0  
**Last Updated**: January 30, 2026
