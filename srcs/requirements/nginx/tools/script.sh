#!/bin/bash

openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/C=DE/L=Wolfsburg/O=42/OU=student/CN=[alkane.42.de](http://alkane.42.de/)"

nginx -g daemon off;
