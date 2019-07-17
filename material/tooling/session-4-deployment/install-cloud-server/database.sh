#!/bin/bash

set -e

# Install PostgreSQL
sudo apt update
sudo apt install -y postgresql postgresql-contrib

# PostgreSQL is up and running
sudo systemctl status postgresql

# Setup user for PostgreSQL
sudo -u postgres createuser todo_demo
# Create the user in the system as well
sudo adduser todo_demo

# Create DB
sudo -u postgres createdb --owner todo_demo todo_demo

# Set password for db user
sudo -u postgres psql
ALTER USER "todo_demo" WITH PASSWORD 'secretsecret';
