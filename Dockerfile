FROM php:7-apache
LABEL maintainer="Henry Mutegeki" email="henrymutegeki117@gmail.com"

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY start-apache /usr/local/bin
RUN a2enmod rewrite

# Copy application source
COPY . /var/www/
RUN chown -R www-data:www-data /var/www

CMD ["start-apache"]
