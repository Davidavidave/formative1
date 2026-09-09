FROM php:8.2-apache

# Install PHP extensions required by CodeIgniter
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-install intl mysqli pdo pdo_mysql \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Set Apache document root to CodeIgniter's public directory
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri \
    -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

COPY . /var/www/html

# Allow CodeIgniter to write logs/cache/session files
RUN chown -R www-data:www-data /var/www/html/writable \
    && chmod -R 775 /var/www/html/writable

EXPOSE 80
