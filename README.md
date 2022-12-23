## PHP Project with Docker, Apache and MySQL

### Docker
Build Image: docker build -t blog-php .
Run Image: docker run -d --name my-running-app blog-php

Image with Apache: docker run -d -p 80:80 --name my-apache-php-app -v "C:\Users\Andre\Desktop\BlogPhp:/var/www/html" php:7.2-apache
URL: [localhost](http://localhost:80)

Run Docker-compose: docker-compose -d
Stop Docker-compose: docker-compose down