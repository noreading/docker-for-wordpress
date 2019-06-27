FROM php:7.3-fpm

# Update package list
RUN apt-get update

# Install additional packages and PHP Extensions
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y --fix-missing \
        apt-utils \
        gnupg \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        default-libmysqlclient-dev \
        libbz2-dev \
        libmemcached-dev \
        libsasl2-dev \
        zlib1g-dev \
        libzip-dev \
        unzip \
        vim \
    && docker-php-ext-install mysqli pdo_mysql zip \
    && pecl install redis \
    && docker-php-ext-enable redis.so \
    && apt-get auto-remove -y
