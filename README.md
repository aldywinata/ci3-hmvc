# CI3 HMVC Starter (PHP 8+ Ready)

A modernized **CodeIgniter 3 + HMVC boilerplate** designed to run smoothly on **PHP 8.1 – 8.5** with modern development practices such as environment-based configuration and Composer support.

This project is intended to extend the life of CodeIgniter 3 by making it compatible with modern PHP versions while keeping the lightweight nature of CI3.

---

## 🎯 Why this project exists

CodeIgniter 3 is still widely used but officially outdated and incompatible with modern PHP versions (8.1+ issues like dynamic property deprecation).

This starter solves that problem by:

- Making CI3 compatible with PHP 8.1 – 8.5
- Adding HMVC modular architecture for scalable apps
- Introducing `.env` based configuration (modern workflow)
- Supporting Composer-based system updates
- Keeping CI3 lightweight and familiar

---

## 📦 Features

- CodeIgniter 3.1.14 core
- HMVC Modular Extensions (Wiredesignz)
- PHP 8.1 – 8.5 compatibility fixes
- `.env` support using `vlucas/phpdotenv`
- Dual system mode:
  - Manual system replacement (`system/`)
  - Composer-based system (`vendor/pocketarc/codeigniter`)
- Modular folder structure (HMVC-ready)
- Works on Laragon / XAMPP / WAMP
- Clean bootstrap setup
- Development-friendly structure

---

## 🧰 Requirements

- PHP 8.1 – 8.5
- Apache / Nginx
- Composer (recommended)
- MySQL / MariaDB

---

## 📁 Project Structure

```
application/
  modules/
    example_module/
      controllers/
      models/
      views/
  config/
  controllers/
  models/
  views/

system/ (optional - can be replaced via composer)
vendor/
.env
index.php
composer.json
```

---

## ⚙️ Installation

### 1. Clone repository

```bash
git clone https://github.com/aldywinata/ci3-hmvc.git
cd ci3-hmvc
```

---

### 2. Install dependencies

```bash
composer install
```

If `.env` support is not installed yet:

```bash
composer require vlucas/phpdotenv
```

---

### 3. Setup environment file

```bash
cp .env.example .env
```

---

### 4. Configure `.env`

```env
MODE_ENV=development

DB_HOST=127.0.0.1
DB_PORT=3306
DB_NAME=yourname_db
DB_USER=root
DB_PASS=
```

---

## 🔐 Environment Configuration (.env)

This project uses **phpdotenv** for environment variable management.

### Loader setup (index.php)

```php
$dotenv = Dotenv\Dotenv::createImmutable(FCPATH);
$dotenv->load();
```

### Support Abstraction layer

```php
$_ENV['DB_HOST']
```
to
```php
env('DB_HOST')
```

### Access variables

```php
env('DB_HOST')
env('DB_NAME')
env('DB_USER')
```

---

## 🚀 Running the Project

Place the project inside your local server directory:

- Laragon → `C:/laragon/www/`
- XAMPP → `C:/xampp/htdocs/`
- WAMP → `C:/wamp64/www/`

Then open:

```
http://localhost/ci3-hmvc/
```

---

## 🛠 HMVC Structure

Modules are self-contained:

```
modules/
  auth/
    controllers/
    models/
    views/
  dashboard/
  users/
```

---

## 🔄 System Update Modes

### Manual Mode

Replace `system/` folder manually with updated CI fork.

### Composer Mode (Recommended)

```
vendor/pocketarc/codeigniter/system
```

---

## 🧪 PHP Compatibility Notes

Tested on:

- ✅PHP 8.1.x
- ✅PHP 8.2.x
- ✅PHP 8.3.x
- ✅PHP 8.4.x
- ✅PHP 8.5.x

Fixes include:

- Dynamic property deprecation fixes
- HMVC MX core updates
- CI3 compatibility patches for PHP 8+

---

## ⚠️ Known Limitations

- CodeIgniter 3 is no longer actively maintained
- Some third-party libraries may not support PHP 8+
- HMVC depends on Wiredesignz implementation
- Not intended for modern enterprise-scale applications

---

## 🚫 Git Ignore

```
.env
/vendor
/system
```

---

## 🙏 Credits

- CodeIgniter 3.1.14
- Wiredesignz HMVC Modular Extensions
- Pocketarc CodeIgniter fork (PHP 8+ support)
- vlucas/phpdotenv

---

## 📌 Notes

This project is intended for:

- Starter boilerplate
- Learning purposes
- Legacy CI3 modernization
- Modular application development

Not a replacement for modern frameworks like Laravel or CodeIgniter 4, but a bridge for legacy systems.

---

## 🔥 Future Improvements (Roadmap)

- CLI Migrations
- REST API starter module
- Admin dashboard template
```
