FROM php:8.2-cli

RUN composer install --no-dev --optimize-autoloader

RUN php artisan key:generate || true
RUN php artisan config:clear || true

# IMPORTANT: avoid DB-based cache crash
RUN mkdir -p database
RUN touch database/database.sqlite

RUN php artisan cache:clear || true
RUN php artisan storage:link || true