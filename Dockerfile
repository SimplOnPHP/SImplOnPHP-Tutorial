FROM php:5.6-cli
RUN apt-get update && docker-php-ext-install pdo pdo_mysql
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./web/index.php" ]