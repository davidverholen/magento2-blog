FROM php:7-apache
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        libxslt1.1 \
        libxslt1-dev \
        libicu52 \
        libicu-dev \
    && docker-php-ext-install -j$(nproc) \
        iconv \
        mcrypt \
        xsl \
        intl \
        mbstring \
        zip \
        pdo_mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && a2enmod rewrite
