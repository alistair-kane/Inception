FROM alpine:3.14

RUN apk update && \
        apk add vsftpd

COPY ./conf/vsftpd.conf /etc/vsftpd/vsftpd.conf

RUN adduser -D -h /var/ftp ftp_user && \
    echo "ftp_user:root" | chpasswd && \
    mkdir -p /var/ftp && \
    chown -R ftp_user:ftp_user /var/ftp && \
    chmod 755 /var/ftp
    
CMD ["vsftpd", "/etc/vsftpd/vsftpd.conf"]