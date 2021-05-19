FROM ubuntu:latest

RUN apt update && apt upgrade -y && DEBIAN_FRONTEND=noninteractive apt install -y apache2 php php-mysql nano 
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip
	
RUN a2enmod ssl
RUN a2enmod rewrite

RUN ln -s /etc/apache2/sites-available/portefolio.conf /etc/apache2/sites-enabled

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY portefolio.conf /etc/apache2/sites-available

RUN a2dissite 000-default.conf
RUN a2ensite portefolio.conf

EXPOSE 80 443
CMD apachectl -DFOREGROUND
