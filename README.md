1. cp .env.example .env 
2. composer install --no-dev --optimize-autoloader
2. chmod -R 777 storage bootstrap/cache
3. php artisan key:generate
4. php artisan migrate




4. docker compose exec php bash
