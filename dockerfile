# Usa imagem oficial do PHP com Apache
FROM php:8.2-apache

# Copia os arquivos do projeto para o diretório raiz do Apache
COPY . /var/www/html/

# Dá permissões apropriadas
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Habilita o mod_rewrite
RUN a2enmod rewrite

# Permite que o Apache use .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Instala extensões PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql