FROM php:8.1.18-apache
USER root
RUN docker-php-ext-install mysqli

COPY ./src/index.php /var/www/html
COPY ./src/totaluser.php /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R o-wx /var/www/html
EXPOSE 80