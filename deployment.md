# Deployment Guide

This document describes how to deploy the Laravel Resume application.

## Prerequisites
- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL or compatible database
- Web server (Apache, Nginx, etc.)

## Steps

### 1. Clone the Repository
```bash
git clone https://github.com/abdohwebdev/resume.git
cd resume
```

### 2. Install PHP Dependencies
```bash
composer install --optimize-autoloader --no-dev
```

### 3. Install Node.js Dependencies
```bash
npm install
```

### 4. Build Frontend Assets
```bash
npm run build
```

### 5. Configure Environment
- Copy `.env.example` to `.env` and update database and app settings.
- Generate app key:
```bash
php artisan key:generate
```

### 6. Set Permissions
```bash
chmod -R 775 storage bootstrap/cache
```
### 7. Change CV data
Edit the `cv.json` file located in `app/private` to update your CV information.

### 8. Start the Application
- Configure your web server to point to the `public` directory.
- Or use Laravel's built-in server for testing:
```bash
php artisan serve
```

## Testing
You can run the tests using PHPUnit:
```bash
php artisan test
```