#!/bin/bash

set -e

# Install certbot
sudo add-apt-repository ppa:certbot/certbot
sudo apt-get update
sudo apt-get install -y python-certbot-nginx

# Reload nginx
sudo systemctl reload nginx

# Obtain TLS certificate
sudo certbot --nginx -d todo-demo.codelater.de

# HTTPS all the things!
sudo vim /etc/nginx/sites-enabled/default

# Visit https://todo-demo.codelater.de/todos
http --json https://todo-demo.codelater.de/todos
