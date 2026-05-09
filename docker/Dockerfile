FROM php:8.4.6-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libsqlite3-dev

# Extensões PHP necessárias
RUN docker-php-ext-install pdo pdo_sqlite zip

# Composer
COPY --from=composer:2.9.7 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN php artisan package:discover --ansi

# Permissões
RUN chmod -R 775 storage bootstrap/cache