FROM php:8.4-apache

WORKDIR /var/www/html

COPY . .

RUN apt update -y && apt install iputils-ping vim-tiny -y

RUN sed -i "s/set compatible/set nocp/" /etc/vim/vimrc.tiny \
&& echo 'export "PS1=\e[1;32m\u\e[0m@\e[0;36m\h\e[0m:\e[1;34m\w\e[0m# \e[0m"' >> /root/.bashrc	


