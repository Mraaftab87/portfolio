# 📤 Upload Guide - Simple & Clear

## 🎯 Quick Answer

### GitHub Par (Public Code):
```
✅ Sab kuch upload karo EXCEPT:
   ❌ config.php
   ❌ db_connect.php
   ❌ portfolio.zip
```

### Website Live (InfinityFree):
```
✅ Sab kuch upload karo INCLUDING:
   ✅ config.php (production settings)
   ✅ db_connect.php (production settings)
```

---

## 📁 File List

| File/Folder | GitHub | Live Website | Notes |
|-------------|--------|--------------|-------|
| admin/ | ✅ | ✅ | Admin panel |
| assets/ | ✅ | ✅ | CSS, images |
| includes/ | ✅ | ✅ | Header, footer |
| .htaccess | ✅ | ✅ | Security rules |
| .gitignore | ✅ | ❌ | Git config only |
| CHANGELOG.md | ✅ | ❌ | Documentation |
| config.php | ❌ | ✅ | Sensitive! |
| config.example.php | ✅ | ❌ | Template |
| contact.php | ✅ | ✅ | Contact page |
| CONTRIBUTING.md | ✅ | ❌ | Documentation |
| database.sql | ✅ | ✅ | Database schema |
| db_connect.php | ❌ | ✅ | Sensitive! |
| db_connect.example.php | ✅ | ❌ | Template |
| index.php | ✅ | ✅ | Homepage |
| INSTALLATION_GUIDE.md | ✅ | ❌ | Documentation |
| LICENSE | ✅ | ❌ | License file |
| portfolio.zip | ❌ | ❌ | Backup only |
| projects.php | ✅ | ✅ | Projects page |
| PROJECT_STRUCTURE.md | ✅ | ❌ | Documentation |
| README.md | ✅ | ❌ | Documentation |

---

## 🚀 Commands

### GitHub Upload:
```bash
# 1. Git initialize (agar nahi hai)
git init

# 2. Files add karo (.gitignore automatically exclude karega)
git add .

# 3. Commit karo
git commit -m "Portfolio website with improvements"

# 4. GitHub se connect karo
git remote add origin https://github.com/aaftabgori/portfolio.git

# 5. Push karo
git push -u origin main
```

### Website Live (FileZilla):
```
1. FileZilla kholo
2. Connect karo: aaftabgori.infinityfreeapp.com
3. htdocs folder mein jao
4. Drag & drop all files (except .git, .md files)
5. Database import karo phpMyAdmin se
```

---

## ✅ Done!

**GitHub**: Code recruiters ko dikhane ke liye  
**Live Website**: Working portfolio dikhane ke liye

Simple! 🎉
