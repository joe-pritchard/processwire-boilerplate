FROM laradock/php-fpm:2.0-72

#
#--------------------------------------------------------------------------
# Mandatory Software's Installation
#--------------------------------------------------------------------------
#
# Mandatory Software's such as ("mcrypt", "pdo_mysql", "libssl-dev", ....)
# are installed on the base image 'laradock/php-fpm' image. If you want
# to add more Software's or remove existing one, you need to edit the
# base image (https://github.com/Laradock/php-fpm).
#

#####################################
# Install GMP (GNU Multiple Precision) - first two
# And Human Language and Character Encoding Support - last one
#####################################

RUN apt-get update && apt-get install -y zlib1g-dev libicu-dev g++ libgmp-dev

#####################################
# Enable extra extensions
#####################################
RUN pear install PHP_CodeSniffer
RUN docker-php-ext-configure intl
RUN docker-php-ext-install zip bcmath gmp tokenizer intl opcache pcntl

COPY pw.ini /usr/local/etc/php/conf.d/
COPY ./pw.pool.conf /usr/local/etc/php-fpm.d/

# get composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer