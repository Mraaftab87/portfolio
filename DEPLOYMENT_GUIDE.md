# Deployment Guide - Portfolio

## 📁 Files Overview

### ✅ GitHub Par Upload Karo (Public Repository)

```
portfolio/
├── admin/
│   └── view_messages.php          ✅ Upload
├── assets/
│   └── css/
│       └── style.css              ✅ Upload
├── includes/
│   ├── footer.php                 ✅ Upload
│   └── header.php                 ✅ Upload
├── .htaccess                      ✅ Upload
├── .gitignore                     ✅ Upload (already exists)
├── CHANGELOG.md                   ✅ Upload
├── config.example.php             ✅ Upload
├── contact.php                    ✅ Upload
├── CONTRIBUTING.md                ✅ Upload
├── database.sql                   ✅ Upload
├── db_connect.example.php         ✅ Upload
├── index.php                      ✅ Upload
├── INSTALLATION_GUIDE.md          ✅ Upload
├── LICENSE                        ✅ Upload
├── projects.php                   ✅ Upload
├── PROJECT_STRUCTURE.md           ✅ Upload
└── README.md                      ✅ Upload
```

### ❌ GitHub Par UPLOAD MAT KARO (Sensitive Files)

```
❌ config.php              (Your personal info - passwords)
❌ db_connect.php          (Database credentials)
❌ portfolio.zip           (Backup file)
❌ .vscode/                (Editor settings)
```

**Kyun?** Ye files mein tumhare passwords aur personal info hai!

---

## 🌐 Website Live Karne Ke Liye Upload Karo

### InfinityFree/Hosting Par Upload Karo:

```
✅ ALL FILES INCLUDING:
├── admin/                 ✅ Upload
├── assets/               ✅ Upload
├── includes/             ✅ Upload
├── .htaccess             ✅ Upload
├── config.php            ✅ Upload (production settings ke saath)
├── contact.php           ✅ Upload
├── database.sql          ✅ Upload (phir import karo)
├── db_connect.php        ✅ Upload (production settings ke saath)
├── index.php             ✅ Upload
├── projects.php          ✅ Upload
└── favicon.ico           ✅ Upload (jab bana lo)
```

### ❌ Hosting Par Upload MAT KARO:

```
❌ .git/                  (Git folder)
❌ .gitignore             (Git config)
❌ README.md              (GitHub documentation)
❌ CHANGELOG.md           (GitHub documentation)
❌ CONTRIBUTING.md        (GitHub documentation)
❌ INSTALLATION_GUIDE.md  (GitHub documentation)
❌ PROJECT_STRUCTURE.md   (GitHub documentation)
❌ LICENSE                (GitHub documentation)
❌ portfolio.zip          (Backup)
❌ *.example.php          (Example files)
```

---

## 🔧 Step-by-Step Guide

### 1️⃣ GitHub Upload (Public Code)

```bash
# Terminal mein ye commands run karo:

# Git initialize (agar pehle se nahi hai)
git init

# All files add karo (except .gitignore wali)
git add .

# Commit karo
git commit -m "Portfolio with SecureVault project and improvements"

# GitHub repository se connect karo
git remote add origin https://github.com/aaftabgori/portfolio.git

# Push karo
git push -u origin main
```

**Important**: `.gitignore` file already hai, so sensitive files automatically exclude ho jayengi!

---

### 2️⃣ Website Live Karo (InfinityFree)

#### Step 1: Files Upload
1. **FileZilla** ya **File Manager** kholo
2. **htdocs** folder mein jao
3. Ye files upload karo:
   - admin/
   - assets/
   - includes/
   - All .php files (config.php, db_connect.php, etc.)
   - .htaccess

#### Step 2: Database Setup
1. **phpMyAdmin** kholo (hosting panel se)
2. Database already hai: `if0_41056400_portfolio_db`
3. **Import** karo: `database.sql` file

#### Step 3: Config Files Update
**db_connect.php** mein production settings uncomment karo:
```php
// Production settings use karo
$host = 'sql305.infinityfree.com';
$dbname = 'if0_41056400_portfolio_db';
$username = 'if0_41056400';
$password = 'aaftab2006';
```

#### Step 4: Test Karo
```
http://aaftabgori.infinityfreeapp.com
```

---

## 📋 Quick Checklist

### GitHub Upload Checklist:
- [ ] `.gitignore` file check karo
- [ ] `config.php` aur `db_connect.php` commit nahi hone chahiye
- [ ] README.md update karo (screenshots add karo)
- [ ] Repository public rakho
- [ ] Push karo

### Website Live Checklist:
- [ ] All PHP files upload
- [ ] assets/ folder upload
- [ ] Database import
- [ ] config.php production settings
- [ ] db_connect.php production settings
- [ ] .htaccess upload
- [ ] Test contact form
- [ ] Test all pages

---

## 🔒 Security Tips

### GitHub Par:
- ✅ Example files upload karo (*.example.php)
- ❌ Real config files upload mat karo
- ✅ .gitignore use karo
- ✅ README mein installation guide do

### Live Website Par:
- ✅ Admin password change karo
- ✅ Database credentials secure rakho
- ✅ HTTPS enable karo
- ✅ File permissions check karo (644 for files, 755 for folders)

---

## 📝 .gitignore File (Already Exists)

Ye files automatically exclude ho jayengi:
```
config.php
db_connect.php
.env
*.log
.vscode/
portfolio.zip
```

---

## 🎯 Summary

### GitHub (Public Code):
- ✅ Source code
- ✅ Documentation
- ✅ Example files
- ❌ Passwords/credentials

### Live Website (Production):
- ✅ All files
- ✅ Real config files
- ✅ Database
- ❌ Documentation files

---

## 💡 Pro Tips

1. **GitHub**: Code share karne ke liye, recruiters ko dikhane ke liye
2. **Live Website**: Working portfolio dikhane ke liye
3. **Backup**: `portfolio.zip` local pe rakho, upload mat karo
4. **Updates**: GitHub pe push karo, phir hosting pe upload karo

---

**Questions?** Check README.md for detailed instructions!
