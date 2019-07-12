#!/bin/bash

set -e

# Install git to clone application
sudo apt-get install -y git

# Clone application
sudo mkdir /opt/todo-demo
sudo chown pinkie:pinkie /opt/todo-demo
cd /opt/todo-demo
git clone git@github.com:code-later/todo-demo.codelater.de.git .

# Received a permission denied /o\
# Reconnect with SSH Agent forwarding
ssh -A pinkie@todo-demo.codelater.de

# Install dependencies
npm install

# Run application
npm start

# Test if everything works
curl localhost:3000/todos
# curl: (7) Failed to connect to localhost port 3000: Connection refused

# Configure application with ENV
DATABASE_URL=postgres://todo_demo:secretsecret@localhost/todo_demo PORT=3000 npm start

# Test again
curl localhost:3000/todos
# {"message":"relation \"todos\" does not exist"}

# Run migrations
DATABASE_URL=postgres://todo_demo:secretsecret@localhost/todo_demo npx db-migrate up

# And test again
curl localhost:3000/todos
# []

# Make application accessible from the web

# First, install pm2 to manage processes
sudo npm install -g pm2

# Install application as system service
DATABASE_URL=postgres://todo_demo:secretsecret@localhost/todo_demo PORT=3000 pm2 start src/server.js --name todo-demo
pm2 save
pm2 startup systemd
pm2 kill
sudo systemctl reload pm2-pinkie

# Test installation 
curl localhost:3000/todos
# []

# Setup nginx as reverse proxy
sudo vim /etc/nginx/sites-enabled/default
# server {
#         listen 80 default_server;
#         listen [::]:80 default_server;
#
#         # SSL configuration
#         #
#         # listen 443 ssl default_server;
#         # listen [::]:443 ssl default_server;
#
#         server_name todo-demo.codelater.de;
#
#         location / {
#                 proxy_pass http://localhost:3000;
#                 proxy_http_version 1.1;
#                 proxy_set_header Upgrade $http_upgrade;
#                 proxy_set_header Connection 'upgrade';
#                 proxy_set_header Host $host;
#                 proxy_cache_bypass $http_upgrade;
#         }
# }

# Test nginx config
sudo nginx -t

# Reload config
sudo systemctl reload nginx

# Test from local machine
http --json http://todo-demo.codelater.de/todos
http --json POST http://todo-demo.codelater.de/todos title='Sonic Rainboom' due_date=2019-06-14T10:00:00Z
http --json http://todo-demo.codelater.de/todos/1
