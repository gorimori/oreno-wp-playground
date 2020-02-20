#!/usr/bin/env bash

docker pull mysql

docker run -d --name oreno-wp-db \
  -e MYSQL_DATABASE=oreno-wp-db \
  -e MYSQL_RANDOM_ROOT_PASSWORD=yes \
  -e MYSQL_USER=ore \
  -e MYSQL_PASSWORD=oreno-wp-password \
  --mount="type=bind,src=$(realpath ./db),dst=/docker-entrypoint-initdb.d" \
  -p 3306:3306 mysql

