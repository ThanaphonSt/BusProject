FROM ubuntu:14.04

RUN apt-get update && \
apt-get install -y nginx git curl wget nano
RUN mv /etc/nginx/sites-available/default /etc/nginx/sites-available/default1
COPY default /etc/nginx/sites-available/
RUN service nginx restart

EXPOSE 80
