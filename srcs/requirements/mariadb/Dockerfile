FROM debian:buster

RUN apt-get update -y
RUN apt-get install -y mariadb-server

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/

CMD ["./tools/script.sh"]
