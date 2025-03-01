FROM php:8.2-fpm

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip \
    unzip \
    git \
    curl

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_pgsql

# Installer Composer globalement
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le dossier de travail
WORKDIR /var/www/html

# Installer les dépendances PHP sans copier les fichiers dans le conteneur
# Les fichiers seront montés via le volume dans docker-compose
RUN composer global require laravel/installer

# Exposer le port utilisé par le serveur PHP intégré
EXPOSE 8000