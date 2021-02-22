FROM	debian:buster
LABEL	maintainer="mamaquig@student.42.fr"

COPY	srcs /srcs/
ENV		AUTOINDEX=on

RUN	apt-get update && apt-get install -y \
	wget \
	default-mysql-server \
	php-fpm \
	php-mysql \
	nginx \
	vim

RUN	wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-english.tar.gz -O /srcs/phpmyadmin.tar.gz && \
	tar -xf /srcs/phpmyadmin.tar.gz --one-top-level=/srcs/phpmyadmin --strip-components 1 && \
	mv /srcs/phpmyadmin /var/www/html && \
	mv /srcs/config.inc.php /var/www/html/phpmyadmin

RUN	wget https://fr.wordpress.org/latest-fr_FR.tar.gz -O /srcs/wordpress.tar.gz && \
	tar -xf /srcs/wordpress.tar.gz -C /var/www/html && \
	mv /srcs/wp-config.php /var/www/html/wordpress && \
	mv /srcs/nginx-conf /etc/nginx/sites-available && \
	ln -s /etc/nginx/sites-available/nginx-conf /etc/nginx/sites-enabled && \
	rm /etc/nginx/sites-enabled/default
	
RUN	cp /srcs/info.php /var/www/html

EXPOSE 80
EXPOSE 443
CMD ["/bin/bash","/srcs/start.sh"]
