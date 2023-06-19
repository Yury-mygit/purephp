FROM php:8.2-fpm-alpine

ARG UID
ARG GID

ENV UID=${UID}
ENV GID=${GID}

RUN mkdir -p /var/www/html

WORKDIR /var/www/html
COPY ./server /var/www/html/

RUN apk --no-cache add curl

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]