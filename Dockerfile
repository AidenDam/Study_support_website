FROM ubuntu:latest

ENV TZ=Asia/Ho_Chi_Minh
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt -y update && apt install -y nginx \
    mysql-server \
    php-fpm php-mysql php-common php-gd php-zip php-mbstring php-xml \
    libmysqlclient-dev libmysql++-dev git make gcc g++

RUN /usr/sbin/useradd -m -u 1536 judge && chmod 755 /home/judge && mkdir onlinejudge

COPY ./src /home/judge/onlinejudge

WORKDIR /home/judge/onlinejudge
# COPY ./src/install.sh /home
# RUN chmod +x install.sh

# RUN ./install.sh

EXPOSE 80
