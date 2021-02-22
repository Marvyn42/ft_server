#!/bin/bash

if [[ "$AUTOINDEX" == "off" ]]
then
	sed -i 's/autoindex on/autoindex off/g' /etc/nginx/sites-available/nginx-conf
fi
service nginx start
service php7.3-fpm start
service mysql start
mysql -u root < /srcs/configmysql
bash
