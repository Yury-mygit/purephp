FROM nginx:1.23.4-alpine

ARG UID
ARG GID

ENV UID=${UID}
ENV GID=${GID}

ADD ./docker/nginx/default.conf /etc/nginx/conf.d/

WORKDIR /var/www/html
COPY ./server /var/www/html/

# RUN mkdir -p /var/www/html