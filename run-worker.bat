@echo off
REM Change directory to Laravel project root
cd /d c:\xampp\htdocs\test-laravel

REM Run Laravel queue worker
php artisan queue:work
