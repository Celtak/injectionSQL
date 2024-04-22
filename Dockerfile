# FROM php:8.1.2-fpm-alpine
FROM php:8.2-fpm-alpine

RUN apk update
RUN docker-php-ext-install mysqli pdo pdo_mysql