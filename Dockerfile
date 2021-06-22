FROM ubuntu

MAINTAINER Sourav Mondal "souravmondal10@gmail.com"


WORKDIR /var/www/html

RUN apt-get update
RUN apt -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php -y
RUN apt-get update
RUN apt-get install -y php7.4-fpm php7.4-mysql php-redis nginx vim curl supervisor
COPY ./nginx.conf /etc/nginx/sites-available/default
COPY ./index.php ./index.php
COPY ./apiCall.js ./apiCall.js

CMD service php7.4-fpm start && nginx -g 'daemon off;' && bash
