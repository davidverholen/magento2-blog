#!/usr/bin/env bash
curl https://getcomposer.org/composer.phar > composer.phar
/usr/bin/env php composer.phar install --no-interaction --optimize-autoloader
