FROM php:8.0.7-fpm

RUN apt-get update && apt-get install -y libpq-dev libldap2-dev libonig-dev openssl locales libzip-dev zip nodejs npm\
    && pecl install redis && docker-php-ext-enable redis \
    && docker-php-ext-install gettext pdo pdo_mysql pdo_pgsql mbstring mysqli bcmath zip ldap \
    && apt-get install curl gnupg -yq \
    && curl -sL https://deb.nodesource.com/setup_12.x | bash \
    && apt-get install nodejs -yq

RUN curl -sS https://getcomposer.org/installer | \
php -- --install-dir=/usr/bin/ --filename=composer
