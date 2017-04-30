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
RUN git clone https://github.com/ThanaphonSt/BusProject.git && cd BusProject
RUN git checkout --track origin/develop

EXPOSE 80

#$ docker build -t plzpeacez/laravel .