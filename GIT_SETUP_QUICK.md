# Git Setup - Quick Guide 🚀

## ✅ Files Created

1. **`.gitignore`** - Git ignore rules
2. **`.htaccess`** - Apache configuration (Updated)
3. **`config.example.php`** - Config template
4. **`db_connect.example.php`** - Database template

---

## 🎯 Quick Setup (3 Steps)

### Step 1: Initialize Git
```bash
git init
git add .
git commit -m "Initial commit - Portfolio website"
```

### Step 2: Add Remote (GitHub/GitLab)
```bash
# GitHub
git remote add origin https://github.com/yourusername/portfolio.git
git branch -M main
git push -u origin main

# OR GitLab
git remote add origin https://gitlab.com/yourusername/portfolio.git
git push -u origin main
```

### Step 3: For Team Members (Clone & Setup)
```bash
# Clone repository
git clone https://github.com/yourusername/portfolio.git
cd portfolio

# Copy example files
cp config.example.php config.php
cp db_connect.example.php db_connect.php

# Edit with your credentials
nano config.php
nano db_connect.php

# Import database
mysql -u root -p < database.sql
```

---

## 📁 What's Committed vs Ignored

### ✅ Committed (Safe to share):
- All PHP files (index.php, projects.php, etc.)
- CSS/JS files
- HTML templates
- .htaccess
- .gitignore
- config.example.php ← Template
- db_connect.example.php ← Template
- database.sql ← Schema only
- README.md
- Documentation files

### ❌ Ignored (NOT committed):
- config.php ← Your actual credentials
- db_connect.php ← Your actual DB settings
- .env files
- Logs (*.log)
- Cache files
- IDE files (.vscode, .idea)
- OS files (.DS_Store, Thumbs.db)
- Uploads folder
- Backups

---

## 🔒 Security Checklist

Before pushing to Git:

- [ ] config.php is in .gitignore
- [ ] db_connect.php is in .gitignore
- [ ] No passwords in committed files
- [ ] config.example.php has placeholder values
- [ ] database.sql has no real user data
- [ ] Admin password is changed
- [ ] .env files are ignored

---

## 💡 Common Git Commands

```bash
# Check status
git status

# See what's ignored
git status --ignored

# Add all files
git add .

# Commit changes
git commit -m "Your message"

# Push to remote
git push

# Pull latest changes
git pull

# Create new branch
git checkout -b feature-name

# Switch branch
git checkout main

# Merge branch
git merge feature-name

# View commit history
git log --oneline
```

---

## 🆘 If You Accidentally Committed Sensitive Files

```bash
# Remove from Git but keep locally
git rm --cached config.php
git rm --cached db_connect.php

# Commit the removal
git commit -m "Remove sensitive files"

# Push changes
git push

# IMPORTANT: Change passwords immediately!
# The old passwords are still in Git history
```

---

## 🌐 .htaccess Quick Settings

### For Local Development:
```apache
RewriteBase /portfolio/
php_flag display_errors On
```

### For Production:
```apache
RewriteBase /
php_flag display_errors Off

# Enable HTTPS
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

---

## ✅ Done!

Your portfolio is now:
- ✅ Git-ready
- ✅ Secure (sensitive files ignored)
- ✅ Team-friendly (example configs)
- ✅ Production-ready (.htaccess configured)

**Happy coding!** 🎯

---

**Quick Guide Version**: 1.0  
**Last Updated**: January 30, 2026
