# Usa imagem oficial do PHP com Apache
FROM php:8.2-apache

# Copia os arquivos do projeto para o diretório raiz do Apache
COPY . /var/www/html/

# Dá permissões apropriadas
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Habilita módulos do Apache se necessário
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expondo a porta padrão do Apache
EXPOSE 80