#!/bin/bash
echo "Setting file permissions..."
chmod -R 755 /var/www/html
chown -R apache:apache /var/www/html

