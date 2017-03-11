#!/bin/sh
service httpd start
service mysqld start
tail -f /var/log/lastlog
