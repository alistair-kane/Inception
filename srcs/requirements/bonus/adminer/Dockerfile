FROM debian:buster

RUN apt -y update

COPY ./tools/script.sh /

RUN chmod +x /script.sh

RUN apt install wget -y && apt install php php-mysql -y

CMD ["/script.sh"]
