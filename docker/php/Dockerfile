FROM php:7.4-fpm-alpine

RUN apk --no-cache update \
    && apk --no-cache upgrade \
    && apk add --no-cache curl git unzip zlib-dev freetype-dev libjpeg-turbo-dev icu-dev \
    && apk add --update --no-cache autoconf g++ make \
    && pecl install redis && docker-php-ext-enable redis \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql intl \
    && apk del autoconf g++ make

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
    composer clear-cache

# Install composer plugins
RUN composer global require --optimize-autoloader \
        "hirak/prestissimo" && \
    composer global dumpautoload --optimize && \
    composer clear-cache

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN ls $PHP_INI_DIR/php.ini

WORKDIR /web
