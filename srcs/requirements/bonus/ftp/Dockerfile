FROM alpine:3.14

RUN apk update && \
        apk add vsftpd

COPY ./conf/vsftpd.conf /etc/vsftpd/vsftpd.conf

ARG FTP_USER
ARG FTP_PASSWORD

RUN adduser -D -h /var/ftp ${FTP_USER} && \
    echo "${FTP_USER}:${FTP_PASSWORD}" | chpasswd && \
    mkdir -p /var/ftp && \
    chown -R ${FTP_USER}:${FTP_USER} /var/ftp && \
    chmod 755 /var/ftp
    
CMD ["vsftpd", "/etc/vsftpd/vsftpd.conf"]
