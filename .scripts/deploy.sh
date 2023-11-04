#!/bin/bash
set -e

echo "Deployment started ..."

# Turn ON Maintenance Mode or return true
# if already is in maintenance mode
(php artisan down) || true

# Pull the latest version of the app
# git pull

git fetch origin main
git reset --hard origin/main

# allow composer for root
export COMPOSER_ALLOW_SUPERUSER=1;

# Install composer dependencies
composer install

# Install npm dependencies
npm install

# Clearing Cache
php artisan cache:clear
php artisan config:clear

# Recreate cache
php artisan optimize

# Run database migrations
#php artisan migrate --force

# Turn OFF Maintenance mode
php artisan up

echo "Deployment finished!"
