#!/usr/bin/env bash
if [ ! -f composer.phar ]; then
    curl https://getcomposer.org/composer.phar > composer.phar
fi
/usr/bin/env php composer.phar update --no-interaction --optimize-autoloader
sudo docker-compose up -d
