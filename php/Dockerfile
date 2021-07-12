FROM php:7.2-fpm
COPY php.ini /usr/local/etc/php/
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN docker-php-ext-install pdo_mysql && \
    apt-get update && \
    apt-get -y install unzip git