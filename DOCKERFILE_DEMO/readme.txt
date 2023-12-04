Steps of making the environment: 

YT Video: https://www.youtube.com/watch?v=1zWFxri51qQ
GitHub URL: https://github.com/jerrodcodes/Youtube/tree/main/Dockerize-PHP-Application

Step 1: 
get the Dockerfile with this content: 

FROM php:7.4-apache
RUN apt-get update && apt upgrade -y
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli
ADD ./app /var/www/html
COPY ./app/my-site.conf /etc/apache2/sites-available/my-site.conf
RUN echo 'SetEnv MYSQL_DB_CONNECTION ${MYSQL_DB_CONNECTION}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv MYSQL_DB_NAME ${MYSQL_DB_NAME}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv MYSQL_USER ${MYSQL_USER}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv MYSQL_PASSWORD ${MYSQL_PASSWORD}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv SITE_URL ${SITE_URL}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf &&\
    a2enmod rewrite &&\
    a2enmod headers &&\
    a2enmod rewrite &&\
    a2dissite 000-default &&\
    a2ensite my-site &&\
    service apache2 restart
EXPOSE 80
EXPOSE 443

Step 2: get the docler-compose.yml with this content: 

version: "2"
services:
  webserver:
    image: mydemophpimage
    ports:
      - "80:80"
      - "443:443"
    volumes:
      - ./app:/var/www/html
    environment:
      MYSQL_DB_CONNECTION: test
      MYSQL_DB_NAME: test
      MYSQL_USER: test
      MYSQL_PASSWORD: test
      SITE_URL: http://localhost
    networks:
      - test

networks:
  test:
    external: true




Step 3: get a folder named docker_demo
Step 4: add your app folder to it
Step 5: inside the app folder add an index.php (empty), a my-site.conf (empty)
Step 6: Write the following commands: 
ls  - to see whether Docker realizes there is  Dockerfile
docker build -t mydemophpimage .   - where mydemophpimage has to match the php image name set in docker-compose.yml
docker image ls | grep mydemoimage   - to check if the image has been created
docker network create "test"   - to actually register network in the docker virtual machine
cd app - to go into your folder named 'app'
docker compose up -d  - to run the docker instance


Step 7: check "localhost" , it should be giving back whatever you have inside of app/index.php

Step 8: write this command
docker ps | grep mydemophpimage - to find the name of the running container (it is not the name of the image) - copy container name
docker exec -it dockerfile_demo-webserver-1 bash - where "dockerfile_demo-webserver-1" would be the actual container name at previous step

Step 9: write the following command: 
ls  - to see all the files you have inside this container now, which woould be index.php and a my-site.conf

Step 10: write the following command: 
apt-get update

Step 11: write the following command: 
apt-get install nano  - to install nano, so you can actually edit any file from SSH, from server environment

Step 12: write the following command to edit your .php file: 
nano index.php

Step 13: write the following command: 
exit  - to exit the container 

Step 14: write the following command: 
docker restart dockerfile_demo-webserver-1

Step 15: write the following command: 
docker stop dockerfile_demo-webserver-1    - to stop your container, you have to add container name, not image name. 
docker container rm dockerfile_demo-webserver-1     - to remove your container 




Congrats, you are in the root now inside of /var/www/html !
Congrats, you also have a localhost working ! 
Congrats, you have an apache docker container !  
Congrats, you can use nano, to go into files and edit them! 
Ultimately, congrats you have a Dockerized PHP Application! 