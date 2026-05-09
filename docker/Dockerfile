FROM php:8.4-cli

WORKDIR /var/www

# Dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia projeto
COPY . .

# Instala dependências PHP
RUN composer install --no-dev --optimize-autoloader

# Cria pastas necessárias do Laravel
RUN mkdir -p \
    storage/framework/views \
    storage/framework/cache \
    storage/framework/sessions \
    storage/logs \
    bootstrap/cache

# Permissões
RUN chmod -R 775 storage bootstrap/cache

# Cache Laravel
RUN php artisan package:discover --ansi
RUN php artisan migrate --force

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}