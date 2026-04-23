FROM php:8.2-cli

# System dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev

# Install PHP extensions
RUN docker-php-ext-install zip

# Install Composer (IMPORTANT FIX)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel setup safety
RUN php artisan key:generate || true
RUN php artisan config:clear || true

# Prevent SQLite crash (if used)
RUN mkdir -p database
RUN touch database/database.sqlite

RUN php artisan cache:clear || true
RUN php artisan storage:link || true

EXPOSE 10000

CMD php -S 0.0.0.0:10000 -t public