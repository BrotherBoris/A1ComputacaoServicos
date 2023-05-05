FROM php
RUN docker-php-ext-install mysqli
COPY ./index.php ./
COPY ./functions.php ./
COPY ./form.php ./
EXPOSE 3000
CMD ["php", "-S", "0.0.0.0:3000"]
