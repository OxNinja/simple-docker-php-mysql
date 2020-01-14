# Simple Docker PHP MySQL

Simple dockerized PHP apache server and MySQL database

## Installation

Clone the repo :

`git clone git@github.com:OxNinja/simple-docker-php-mysql.git`

Or via HTTPS :

`git clone https://github.com/OxNinja/simple-docker-php-mysql.git`

### Build and run manually

Build and run the Docker containers using docker-compose :

`docker-compose build && docker-compose up`

Then go to `http://172.16.0.2`.

Add the container to your known hosts :

`echo "172.16.0.2 simple.web" >> /etc/hosts`

### Using the build.sh script

`./build.sh`

And voila !
