#!/bin/bash

# Script to build and run all the containers, and add the web service to /etc/hosts

echo
echo Don\'t forget to delete the line \"172.16.0.2 simple.web\" in your /etc/hosts once finished !
echo

# Make sure the containers are down
sudo docker-compose down

if grep -Fxq "172.16.0.2 simple.web" /etc/hosts; then
    # Do nothing
    :
else
    # Add 172.16.0.2 to know hosts
    sudo echo "172.16.0.2 simple.web" >> /etc/hosts
fi

# Build the container
sudo docker-compose build

# Run the containers
sudo docker-compose up
