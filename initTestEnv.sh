#!/usr/bin/env bash
if [ ! -f composer.phar ]; then
    curl https://getcomposer.org/composer.phar > composer.phar
fi
/usr/bin/env php composer.phar update --no-interaction --optimize-autoloader
sudo docker-compose up -d
mysql -uroot -pmysql -h 127.0.0.1 -P 33306 -e "CREATE DATABASE IF NOT EXISTS magento"
