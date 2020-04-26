FROM ubuntu:18.04
#FROM debian

RUN apt update

RUN DEBIAN_FRONTEND=noninteractive apt install -y dialog apt-utils gnupg1 apt-transport-https dirmngr lsb-release tzdata

RUN DEBIAN_FRONTEND=noninteractive apt-key adv --recv-keys --keyserver keys.gnupg.net 8825FD82
 
RUN echo "deb https://packages.tine20.org/ubuntu $(lsb_release -sc) stable" > /etc/apt/sources.list.d/tine20org.list

RUN apt update

RUN apt install -y vim

#RUN DEBIAN_FRONTEND=noninteractive apt install -y mariadb-server

RUN DEBIAN_FRONTEND=noninteractive apt install -y tine20-webstack

COPY config.inc.php /etc/tine20/.


#RUN mysql -u root -p dbrootpass -h db -e "CREATE USER 'tine20'@'localhost';"
#RUN mysql -u root -p dbrootpass -h db -e "CREATE DATABASE tine20 DEFAULT CHARACTER SET 'UTF8';"
#RUN mysql -u root -p dbrootpass -h db -e "GRANT ALL PRIVILEGES ON tine20.* TO 'tine20'@'localhost' IDENTIFIED BY 'dbpass';"


#RUN service mysql start && mysql -e "CREATE USER 'tine20'@'localhost';"
#RUN service mysql start && mysql -e "CREATE DATABASE tine20 DEFAULT CHARACTER SET 'UTF8';"
#RUN service mysql start && mysql -e "GRANT ALL PRIVILEGES ON tine20.* TO 'tine20'@'localhost' IDENTIFIED BY 'dbpass';"

#CMD service mysql start && /usr/sbin/apache2ctl -D FOREGROUND
CMD /usr/sbin/apache2ctl -D FOREGROUND

