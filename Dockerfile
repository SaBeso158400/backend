FROM php:8.2-cli

WORKDIR /app

# Cài thư viện hệ thống
RUN apt-get update && apt-get install -y \
    unzip git curl libzip-dev zip libpng-dev libonig-dev libxml2-dev

# PHP extensions cơ bản
RUN docker-php-ext-install pdo pdo_mysql zip

# ✅ Cài MongoDB extension (QUAN TRỌNG)
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy code
COPY . .

# Cài dependency Laravel
RUN composer install --no-dev --optimize-autoloader

# Port Railway
EXPOSE 8080

# ✅ chạy server đúng chuẩn Railway
CMD php artisan serve --host=0.0.0.0 --port=${PORT}