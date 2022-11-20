FROM php:7.2-fpm

RUN apt-get update && apt-get upgrade -y && \
   apt-get install -y --no-install-recommends \
   vim \
   git \
   libmemcached-dev \
   libz-dev \
   libpq-dev \
   libjpeg-dev \
   libfreetype6-dev \
   libssl-dev \
   libmcrypt-dev

    RUN apt-get install -y apt-utils
    RUN apt-get install -y libmcrypt-dev
    RUN apt install -y libxslt-dev
    RUN apt install -y curl
#    RUN apt install -y libcurl3
 #   RUN apt install -y libcurl3-dev
    RUN apt install -y libcurl4-gnutls-dev

    RUN apt-get install -y libzip-dev zip && docker-php-ext-configure zip --with-libzip

    #RUN docker-php-ext-install -j$(nproc) intl
 #   RUN docker-php-ext-install mysqli pdo pdo_mysql mcrypt json mbstring curl xml zip


    RUN apt-get install -y libwebp-dev libjpeg62-turbo-dev libpng-dev libxpm-dev \
    libfreetype6-dev

#    RUN docker-php-ext-configure gd --with-gd --with-webp-dir --with-jpeg-dir \
 #   --with-png-dir --with-zlib-dir --with-xpm-dir --with-freetype-dir \
  #  --enable-gd-native-ttf



RUN docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install mysqli pdo_mysql json mbstring curl xml zip gd
RUN docker-php-ext-install exif

    RUN docker-php-ext-install gd


 #instalar composer
 RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer


COPY www.conf /usr/local/etc/php-fpm.d/www.conf

