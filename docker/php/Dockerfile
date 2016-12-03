FROM php:5.6-fpm

# Install modules
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        libicu-dev \
        g++ \
        libxml2-dev \
        libssl-dev

RUN echo "error_reporting = E_ALL;" > /usr/local/etc/php/php.ini && \
    echo "date.timezone = Europe/london" >> /usr/local/etc/php/php.ini && \
    usermod -u 1000 www-data

RUN docker-php-ext-install mcrypt opcache pdo_mysql soap intl

