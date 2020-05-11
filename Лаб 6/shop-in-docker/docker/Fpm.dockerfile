FROM php:7.4.5-fpm

RUN apt-get update \
&& docker-php-ext-install pdo pdo_mysql && \
pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  docker-php-ext-enable redis