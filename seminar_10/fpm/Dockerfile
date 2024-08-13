FROM php:8.2-fpm

COPY php.ini /usr/local/etc/php/conf.d/php-custom.ini

COPY . /app/mysite.local

RUN apt-get update && apt-get install -y zip unzip

WORKDIR /data/mysite.local

ENV COMPOSER_ROOT_VERSION=dev-master