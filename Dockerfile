# ONLY FOR DEV : this file is overrided in production mode
FROM php:8.2-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

RUN apt-get update && apt-get install -y libxml2-dev \
    && docker-php-ext-install dom

RUN apt-get update && apt-get install -y libxml2 libxml2-dev
RUN docker-php-ext-install dom && docker-php-ext-enable dom

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    npm \
    libpq-dev \
    libzip-dev \
    libicu-dev \
    libxml2-dev \
    libxslt1-dev \
    libjpeg-dev \
    libfreetype6-dev

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath zip intl xsl soap \
    && docker-php-ext-install pdo pdo_pgsql pgsql dom

# Installer et activer Redis
RUN pecl install redis \
    && docker-php-ext-enable redis

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Créer un utilisateur système
RUN useradd -G www-data,root -u $uid -d /home/$user $user \
    && mkdir -p /home/$user/.composer \
    && chown -R $user:$user /home/$user

# Définir le répertoire de travail
WORKDIR /var/www

USER $user
