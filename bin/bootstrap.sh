#!/bin/bash -e
php /var/www/laravel/artisan migrate
php /var/www/laravel/artisan db:seed