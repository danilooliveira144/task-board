FROM php:8.4-cli

WORKDIR /var/www

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia arquivos
COPY . .

# Instala dependências PHP
RUN composer install --no-dev --optimize-autoloader

# Laravel
RUN php artisan package:discover --ansi

# Permissões
RUN chmod -R 775 storage bootstrap/cache

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}