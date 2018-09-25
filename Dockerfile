FROM php:7.2-apache

RUN docker-php-ext-install \
    pdo_mysql \
    && a2enmod \
    rewrite

RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip unzip curl

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer

COPY ./composer.json /var/www/html

COPY ./composer.lock /var/www/html

RUN composer install --no-scripts --no-autoloader

COPY ${APP_PATH_HOST} /var/www/html

RUN composer dump-autoload --optimize && \
	composer run-script post-install-cmd

WORKDIR /var/www/html

RUN chmod 777 ./web/assets