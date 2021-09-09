FROM php:7.4-cli-buster as base

RUN set -e; \
    apt-get update; \
    apt-get install -y --no-install-recommends git zip unzip wget libffi-dev software-properties-common build-essential lsb-release ca-certificates gnupg; \
    docker-php-ext-configure ffi; \
    docker-php-ext-install -j$(nproc) ffi pcntl; \
    apt-get autoremove -y; \
    rm -rf /var/lib/apt/lists/*; \
    rm -rf /tmp/*;

ARG XDEBUG_VERSION=stable
RUN pecl install xdebug-${XDEBUG_VERSION}; \
    docker-php-ext-enable xdebug;

ENV COMPOSER_HOME /tmp
ENV COMPOSER_ALLOW_SUPERUSER 1
COPY --from=composer /usr/bin/composer /usr/bin/composer

# see https://apt.llvm.org/
RUN wget -q https://apt.llvm.org/llvm.sh; \
    chmod +x llvm.sh; \
    ./llvm.sh 9; \
    rm llvm.sh;

RUN set -e; \
    apt-get update; \
    apt-get install -y --no-install-recommends libclang-9-dev; \
    apt-get autoremove -y; \
    rm -rf /var/lib/apt/lists/*; \
    rm -rf /tmp/*;

RUN useradd -Ms /bin/bash --user-group --uid 2000 phpdev; \
    mkdir /app; \
    chown phpdev -R /app; \
    chown phpdev -R /tmp;

USER phpdev

WORKDIR /app
