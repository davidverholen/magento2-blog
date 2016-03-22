#!/bin/sh
echo -n "waiting for mysql server..."

while ! mysqladmin -umysql ping -h 127.0.0.1 -u root -pmysql 2>/dev/null
do
  echo -n .
  sleep 1
done

echo 'ok'
