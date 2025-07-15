
FROM php:7.3-apache
RUN apt-get update && apt-get upgrade -y
RUN apt-get update && apt-get --no-install-recommends install -y \
    curl \
    git \
    unzip \
    wget \
    zip \
    nano
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /var/cache/apt/archives/*
RUN docker-php-ext-install \
        pdo \
        pdo_mysql \
        mysqli
RUN docker-php-ext-enable \
        pdo \
        pdo_mysql \
        mysqli
RUN a2enmod rewrite
RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer && chmod +x /usr/bin/composer && composer self-update