FROM debian:buster

RUN apt-get update -y
RUN apt install php-fpm php-mysql -y
RUN apt install curl -y

COPY ./tools/wp-config.php /

CMD ["./tools/script.sh"]
