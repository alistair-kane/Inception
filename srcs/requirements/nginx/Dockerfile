FROM debian:buster

RUN apt-get update -y
RUN apt install -y nginx && apt install openssl -y

COPY ./conf/default /etc/nginx/sites-available/

CMD ["./tools/script.sh"]
