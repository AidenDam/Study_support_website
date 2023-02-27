FROM ubuntu:18.04

ENV TZ=Asia/Ho_Chi_Minh
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt -y update && apt install -y nginx \
    mysql-server \
    php-fpm php-mysql php-common php-gd php-zip php-mbstring php-xml \
    libmysqlclient-dev libmysql++-dev git make gcc g++

RUN /usr/sbin/useradd -m -u 1536 judge && chmod -R 755 /home/judge && mkdir onlinejudge

COPY ./src /home/judge/onlinejudge

WORKDIR /home/judge/onlinejudge

EXPOSE 80

ENTRYPOINT [ "/bin/bash", "/home/judge/onlinejudge/install.sh" ]
