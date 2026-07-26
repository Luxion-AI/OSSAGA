FROM node:22-alpine AS frontend

WORKDIR /build

COPY package.json package-lock.json ./
RUN npm ci --no-audit --no-fund

COPY vite.config.js ./
COPY resources/css/ ./resources/css/
COPY resources/js/ ./resources/js/
COPY resources/views/ ./resources/views/
COPY public/ ./public/

RUN npm run build

FROM dunglas/frankenphp:php8.4-alpine AS base

RUN apk add --no-cache \
    git \
    unzip \
    ca-certificates \
    libzip-dev \
    postgresql-dev \
    icu-dev \
    zlib-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    freetype-dev \
    linux-headers \
    ${PHPIZE_DEPS}

RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install \
        pdo_pgsql \
        pgsql \
        zip \
        intl \
        gd \
        pcntl \
        bcmath \
        opcache

RUN apk del ${PHPIZE_DEPS}

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . /app
COPY --from=frontend /build/public/build/ /app/public/build/

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN rm -rf /app/bootstrap/cache/*.php \
    && php artisan package:discover --ansi \
    && php artisan event:cache \
    && php artisan storage:link

RUN chown -R www-data:www-data /app \
    && chmod -R ug+w /app/storage /app/bootstrap/cache

RUN mkdir -p /app/storage/logs /app/storage/framework/views /app/storage/framework/cache /app/storage/framework/sessions

ENV APP_ENV=production
ENV APP_DEBUG=false
ENV OCTANE_SERVER=frankenphp

CMD php artisan octane:start --server=frankenphp --host=0.0.0.0 --port=${PORT:-8080} --admin-port=2019
