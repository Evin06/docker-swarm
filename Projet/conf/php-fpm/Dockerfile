FROM wordpress:php7.2-fpm-alpine

# Add sudo in order to run wp-cli as the www-data user 
RUN apk update && apk add less

# Add WP-CLI 
RUN curl -o /bin/wp-cli.phar https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
COPY wp-su.sh /usr/local/bin/wp
RUN chmod +x /usr/local/bin/wp && chmod +x /bin/wp-cli.phar

# Copier le script d'initialisation
COPY init-wp-config.sh /usr/local/bin/init-wp-config.sh
RUN chmod +x /usr/local/bin/init-wp-config.sh

# Permissions on /var/www
RUN chown -R www-data:www-data /var/www

# Exécutez le script d'initialisation lors du démarrage
ENTRYPOINT ["/usr/local/bin/init-wp-config.sh"]

# Test
RUN wp --info
