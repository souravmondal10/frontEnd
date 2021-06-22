FROM ubuntu

MAINTAINER Sourav Mondal "souravmondal10@gmail.com"


WORKDIR /var/www/html

RUN apt-get update
RUN apt -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php -y
RUN apt-get update
RUN apt-get install -y php8.0-fpm php-mysql php-redis nginx
RUN ufw allow 'Nginx HTTP'
RUN touch ./process_output.log

COPY ./nginx.conf /etc/nginx/sites-available/default
COPY ./index.php ./index.php
COPY ./apiCall.js ./apiCall.js

CMD ["nginx", "-g", "demon off"]
