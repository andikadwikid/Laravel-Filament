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
php artisan make:filament-resource Department --generate
php artisan make:filament-resource Position --generate
