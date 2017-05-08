FROM ubuntu:14.04

RUN apt-get update && \
apt-get install -y nginx git curl php5-cli php5-mcrypt wget nano
RUN mv /etc/nginx/sites-available/default /etc/nginx/sites-available/default1
# COPY default /etc/nginx/sites-available/

RUN echo '\
server {\
    listen 80;\
    server_name example.com;\
    location / {\
        proxy_pass http://localhost:8000;\
        proxy_http_version 1.1;\
        proxy_set_header Upgrade $http_upgrade;\
        proxy_set_header Connection 'upgrade';\
        proxy_set_header Host $host;\
        proxy_cache_bypass $http_upgrade;\
    }\
}\
'\
> /etc/nginx/sites-available/default
RUN service nginx restart
RUN php5enmod mcrypt
RUN curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
RUN git clone https://github.com/ThanaphonSt/BusProject.git && cd BusProject && composer install
WORKDIR /BusProject
RUN git checkout --track origin/develop

#install mysql
# RUN apt-get install -y mysql-server
# RUN mysql_install_db
# apt-get install php5-mysql    #####<<< PDO DRIVER
# mysqladmin -p -u root version
# mysql -u root -p
# mysql> CREATE DATABASE allbus;
RUN wget https://raw.githubusercontent.com/ThanaphonSt/BusProject/develop/allbus2.sql
# mysql -u root -p1234 allbus < allbus2.sql

EXPOSE 80
CMD [ "php", "artisan", "serve" ]

#$ docker build -t plzpeacez/laravel .
#$ docker run -dit -p 80:80 --name laravel plzpeacez/laravel
