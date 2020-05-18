FROM php:7.4-fpm-alpine

# Install additional packages and PHP Extensions
RUN apk --no-cache --update add \
            libxml2-dev \
            curl-dev \
            gnupg \
            libmcrypt-dev \
            libpng-dev \
            libjpeg-turbo-dev \
            freetype-dev \
            libzip-dev \
            oniguruma-dev \
            unzip

# Cleanup
RUN rm -rf /tmp/*
RUN rm -rf /var/cache/apk/*

# Configure PHP Extensions
RUN docker-php-ext-configure zip && \
    docker-php-ext-configure mysqli && \
    docker-php-ext-configure pcntl && \
    docker-php-ext-configure gd --with-jpeg=/usr/include/ \
                                --with-freetype=/usr/include/

# Install PHP Extensions
RUN docker-php-ext-install pcntl \
            zip \
            pdo_mysql \
            mysqli \
            gd

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Override with custom settings
COPY php-dev.ini $PHP_INI_DIR/conf.d/

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

