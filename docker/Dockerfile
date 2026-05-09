FROM php:8.2-cli

WORKDIR /var/www

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia arquivos
COPY . .

# Instala dependências
RUN composer install --no-dev --optimize-autoloader

# Comandos Laravel
RUN php artisan package:discover --ansi

# Permissões
RUN chmod -R 775 storage bootstrap/cache

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}