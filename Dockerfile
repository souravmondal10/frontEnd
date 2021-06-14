FROM ubuntu:20.04

#USER root

WORKDIR /var/www/html

RUN apt-get update
RUN apt-get -y install nginx
RUN add-apt-repository ppa:ondrej/php -y
RUN apt=get -y install php7.4
RUN apt-get -y install php-mysql
RUN apt-get -y install php-redis

COPY . .

CMD ["service", "nginx", "start"]

EXPOSE 80
