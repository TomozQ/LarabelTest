FROM php:8.1-fpm-buster

# コンテナ内のサーバー環境変数
ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

# apt-get update ... インストール可能なパッケージの「一覧」を更新。実際のパッケージのインストールやアップグレードは行われない。
RUN apt-get update && \
  apt-get -y install --no-install-recommends git unzip libzip-dev libicu-dev libonig-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-install intl pdo_mysql zip bcmath
# docker-php-ext-install intl pdo_mysql zip bcmath ... PHPの拡張ライブラリをインストール

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /data