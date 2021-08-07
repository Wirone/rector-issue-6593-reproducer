FROM php:7.4.22-fpm-alpine

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

