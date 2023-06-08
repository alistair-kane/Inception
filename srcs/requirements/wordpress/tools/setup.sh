#!/bin/bash

# create directory to use in nginx container later and also to setup the wordpress conf
if [ ! -d "/var/www/html" ]; then
	mkdir -p /var/www/html 
fi

cd /var/www/html

wp core download --allow-root --version=5.8.1 --locale=en_US

wp config create --allow-root --dbname=${WP_NAME} --dbuser=${WP_ADMIN_USR} --dbpass=${WP_PASSWORD} --dbhost=${WP_HOST}

wp core install --allow-root --url=${WP_URL} --title=${WP_TITLE} --admin_user=${WP_ADMIN_USER} --admin_password=${WP_ADMIN_PASSWORD} --admin_email=${WP_ADMIN_EMAIL} --skip-email

# creates a new user account with the specified username, email address, and password. The --role option sets the user's role to author, which gives the user the ability to publish and manage their own posts.
wp user create "${WP_USER}" "${WP_EMAIL}" --role=author --user_pass="{$WP_PASSWORD}"

# installs the Astra theme and activates it for the site. The --activate flag tells WP-CLI to make the theme the active theme for the site.
wp theme install astra --activate --allow-root

chown -R nobody:nobody *
# wp plugin install redis-cache --activate --allow-root

# wp redis enable --allow-root

exec php-fpm7 -F -R
