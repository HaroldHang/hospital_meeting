#!/bin/sh
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan clear-compiled
