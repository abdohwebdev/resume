# Laravel Resume Application

This is a Laravel-based resume/CV generator and viewer. It supports PDF generation, Tailwind CSS, and Vite for modern frontend development.

## Features
- Resume/CV display and download
- PDF generation using Spatie Laravel PDF
- Tailwind CSS for styling
- Vite for asset bundling and hot reload
- Caching and storage for CV data
- PHPUnit integration for backend tests
- Example test cases included for resume features

## Requirements
- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL or compatible database

## Installation
1. **Clone the repository:**
   ```bash
   git clone https://github.com/abdohwebdev/resume.git
   cd resume
   ```
2. **Install PHP dependencies:**
   ```bash
   composer install
   ```
3. **Install Node.js dependencies:**
   ```bash
   npm install
   ```
4. **Build frontend assets:**
   ```bash
   npm run build
   ```
5. **Copy and configure .env:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
6. **Change CV data:**
Edit the `cv.json` file located in `app/private` to update your CV information.

7. **Start the development server:**
   ```bash
   php artisan serve
   npm run dev
   ```

## Testing
You can run the tests using PHPUnit:
```bash
php artisan test
```
## Deployment Guide
For detailed deployment instructions, please refer to the [deployment.md](deployment.md) file.
