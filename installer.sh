#!/bin/bash
# -*- ENCODING: UTF-8 -*-

#Intalacion de Archivos
git clone https://github.com/GrupoValor/clinica_app.git
cd clinica_app
composer update

#IConfiguracion de Base de datos y de Permisos
echo "<?php try { \$db = new PDO( 'mysql:host=localhost;dbname=cobarcom_clinicadb;charset=utf8', 'root', 'iVmZ5K' ); } catch(Exception \$e) { echo 'An error has occurred'; }?>">/var/www/clinica_app/public/php-includes/connect.inc.php

printf "APP_ENV=local \nAPP_KEY=base64:zgOA8oDkieDykv6V9eIG95OBuDOb0ydvfQaJq/NxXsY=\nAPP_DEBUG=true\nAPP_LOG_LEVEL=debug\nAPP_URL=http://localhost\nDB_CONNECTION=mysql\nDB_HOST=l$MAIL_USERNAME=null\nMAIL_PASSWORD=null\nMAIL_ENCRYPTION=null\nPUSHER_APP_ID=\nPUSHER_KEY=\nPUSHER_SECRET=" > /var/www/clinica_app/.env

printf "<IfModule mod_rewrite.c>\n   RewriteEngine On\n   RewriteBase /\n   RewriteCond %%{REQUEST_FILENAME} !-f\n   RewriteCond %%{REQUEST_FILENAME} !-d\n RewriteRule ^(.+)$ /index.php/$1 [L,QSA]\n</IfModule>">/var/www/clinica_app/public/.htaccess

# Instalacion Base de datos
echo "MySql root@localhost :"
mysql_config_editor set --login-path=local --host=localhost --user=root --password
mysql --login-path=local -e "create database cobarcom_clinicadb";
mysql --login-path=local cobarcom_clinicadb</var/www/clinica_app/data.sql

#Permisos de acceso Publicos
sudo chmod -R 775 /var/www/clinica_app/bootstrap/cache
sudo chown -R :www-data /var/www/clinica_app

sudo chmod -R 775 /var/www/clinica_app/storage
sudo chmod -R 777 /var/www/clinica_app/public/assets/images/noticias/
sudo chmod -R 777 /var/www/clinica_app/public/assets/images/eventos/

exit
