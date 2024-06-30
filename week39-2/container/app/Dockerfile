FROM php:7.4-fpm

COPY ./php/php.ini /usr/local/etc/php/php.ini

RUN apt-get update \
  && apt-get install -y libzip-dev zlib1g-dev unzip libpq-dev \
  && docker-php-ext-install zip

RUN apt-get update \
  && apt-get install -y libicu-dev libonig-dev locales \
  && docker-php-ext-install pdo_mysql

# COMPOSER
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www/html
