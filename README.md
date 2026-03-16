# CI3-HMVC Starter

A **CodeIgniter 3 + HMVC** boilerplate ready to use, compatible with the latest PHP versions.  

This project uses **CodeIgniter 3.1.14** as the core and implements **HMVC (Hierarchical Model-View-Controller)** to keep modules organized and maintainable.  

To support modern PHP versions, this project is compatible with the **CodeIgniter fork by [pocketarc/codeigniter](https://github.com/pocketarc/codeigniter)**.  

---

## 📦 Features

- **Core CI3**: CodeIgniter 3.1.14  
- **HMVC**: Modular Extensions by Wiredesignz  
- **PHP 8.1 → 8.5 compatible**: Patched for dynamic property deprecation notices  
- **Dual system mode**:
  - **Manual system replacement**: Replace the `system/` folder with the latest fork  
  - **Composer system**: Use `vendor/pocketarc/codeigniter/system` for easy updates  
- Ready to run on Laragon / XAMPP / WAMP  

---

## ⚙️ PHP Compatibility

Tested & compatible with:

- ✅`php-8.1.10-Win32-vs16-x64`  
- ✅`php-8.2.30-Win32-vs16-x64`  
- ✅`php-8.3.30-Win32-vs16-x64`  
- ✅`php-8.4.19-Win32-vs17-x64`  
- ✅`php-8.5.4-Win32-vs17-x64`  

> All `Creation of dynamic property` warnings have been resolved with patched MX/Base.php and MX/Controller.php.

---

## 🔧 Installation

### 1. Clone the project

```bash
git clone https://github.com/aldywinata/ci3-hmvc.git
```

### 2. Manual or / Download the project
- download and extract to web server directory

Example:

- Laragon  : C:/laragon/www/
- XAMPP    : C:/xampp/htdocs/
- WAMP     : C:/wamp64/www/

---

## 🚀 Running the Project
1. Make sure the PHP version is compatible and Laragon / XAMPP / WAMP is running
2. Open the browser:

```bash
http://localhost/ci3-hmvc/
```

---
## 🛠 Development Notes

This starter includes fixes for:

- PHP 8.2 dynamic property deprecation
- Compatibility with modern PHP engines
- Modular HMVC architecture
