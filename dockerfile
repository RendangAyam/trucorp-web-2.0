FROM php:7.4-apache

# melakukan copy index dan phpinfo
COPY test.php /var/www/html
COPY index.php /var/www/html
COPY newindex.php /var/www/html

# mengubah kepemilikan dan permission
RUN chmod -R 744 /var/www/html/
RUN chown -R www-data:www-data /var/www/html/

# menginstall mysqli
RUN docker-php-ext-install mysqli

EXPOSE 80:6000