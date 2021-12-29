<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Civic Source Back-end (Laravel Setup)

## Requirements:
- PostgreSQL or MySQL Database
- Composer

## To use this project in your machine, you need to run these following commands in your terminal.

### Project setup
```
composer install
```

### To generate default data
```
php artisan migrate
```

```
php artisan db:seed --class=PropertySeeder
```

```
php artisan db:seed --class=BidSeeder
```

### Optimize the files first before running the server
```
php artisan optimize
```

### Compiles for development
```
php artisan serve
```
