#!/bin/bash

set -e

# Update local package index
sudo apt-get update

# Install nginx webserver
sudo apt-get install -y nginx

# Allow access to nginx in firewall
sudo ufw app list
# We want both HTTP and HTTPS
sudo ufw allow 'Nginx Full'
sudo ufw status

# Nginx should already be running
systemctl status nginx

# Point browser to http://todo-demo.codelater.de to see nginx page
