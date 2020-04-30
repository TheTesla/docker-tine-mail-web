FROM ubuntu:18.04

RUN apt update && apt install -y wget unzip

RUN mkdir -p /var/www && cd /var/www && rm -rf * && wget -c https://getgrav.org/download/core/grav-admin/latest && unzip latest && mv grav-admin html

RUN apt update && DEBIAN_FRONTEND=noninteractive apt install -y tzdata apache2 php libapache2-mod-php php-curl php-zip php-xml php-mbstring php-gd php-fpm 

#RUN ls /var/www

#RUN a2enmod php libapache2-mod-php php-mysql

RUN cd /var/www/html && bin/plugin login newuser -u grav_admin_user -p grav_admin_passwd42L -e grav_admin_email@example.de -P b -N Administrator -t Admin, -s enabled

RUN cd /var/www/html && bin/gpm install -y gantry5 git-sync

RUN cd /var/www && chown -R www-data .

RUN a2enmod rewrite

CMD /usr/sbin/apache2ctl -D FOREGROUND


EXPOSE 80
#RUN a2ensite grav.conf



