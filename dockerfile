#Define a imagem do php a ser usada;
FROM php:8.0-apache

# Define a pasta src com o a pasta a ser hospedada pelo web-server;
COPY src/ /var/www/html/

#Garante que o servidor tenha permissão de ler o arquivos na pasta src;
RUN chown -R www-data:www-data /var/www/html/