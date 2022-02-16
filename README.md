#создаем каталог
mkdir /var/www/laravel_notebook

#скачиваем проект в каталог
https://github.com/Olerg/lara_api.git

#собираем проект
docker-compose build

#запускаем проект
docker-compose up -d

#создаем таблицы
php artisan migrate

#заполняем таблицы тестовыми данными
php artisan db:seed --class DatabaseSeeder

#для опреления IP в DB_HOST файл .env
docker inspect -f '{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)





