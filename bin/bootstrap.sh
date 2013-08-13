#!/bin/bash -e
php /var/www/laravel/artisan cache:clear  
php /var/www/laravel/artisan migrate
php /var/www/laravel/artisan migrate:refresh --seed