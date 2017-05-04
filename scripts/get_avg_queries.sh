#!/bin/bash
#

while [ "true" ]
do
  exec "./check_mongodb.py -H 172.26.30.201 -A queries_per_second -P 27017 -W 200 -C 150 -q query > /var/www/html/plataformas/avg_queries.log"
  sleep 2
done