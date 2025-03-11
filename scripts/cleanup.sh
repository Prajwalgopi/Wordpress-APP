#!/bin/bash
echo "Deleting /var/www/html before deployment..."
rm -rf /var/www/html/*  # Deletes all visible files
rm -rf /var/www/html/.*  # Deletes all hidden files (including .htaccess)
mkdir -p /var/www/html
chown apache:apache /var/www/html
chmod 755 /var/www/html
echo "Cleanup complete."

