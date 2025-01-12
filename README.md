# Laravel Filament

# Blueprint
## install blueprint
composer require -W --dev laravel-shift/blueprint
## membuat blueprint
php artisan blueprint:new

# Filament
## install filament
composer require filament/filament:"^3.2" -W
php artisan filament:install --panels

## buat service
--generate dapat membuat kolom input secara otomatis menyesuaikan kolom yang di model
--simple dapat membuat fungsi create dan update menggunakan Modal tanpa harus berpindah ke halaman lain

php artisan make:filament-page Statistic

php artisan make:filament-resource Department --generate
or
php artisan make:filament-resource Department --generate --simple

php artisan make:filament-resource Position --generate
php artisan make:filament-resource Employee --generate
php artisan make:filament-resource LeaveRequest --generate
php artisan make:filament-resource Salary --generate
