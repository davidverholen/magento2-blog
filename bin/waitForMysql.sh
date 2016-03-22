#!/bin/sh
echo -n "waiting for mysql server..."

while ! mysqladmin -umysql ping -h $1 -P $2 -u root -pmysql 2>/dev/null
do
  echo -n .
  sleep 1
done

echo 'ok'
