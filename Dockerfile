# Utilisez une image Symfony prête à l'emploi
FROM php:7.4-apache

# Installez les dépendances nécessaires (si nécessaire)
RUN apt-get update && \
    apt-get install -y git unzip

# Créez un répertoire de travail
WORKDIR /var/www/html

# Clonez votre projet depuis GitHub
RUN git clone https://github.com/aliamedioune/theti.git .

# Installez les dépendances Symfony
RUN composer install --no-scripts --no-interaction

# Exposez le port 80 pour Apache
EXPOSE 80

# Démarrez Apache
CMD ["apache2-foreground"]
