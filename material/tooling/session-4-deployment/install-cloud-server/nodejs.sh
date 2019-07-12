#!/bin/bash

set -e

# Add NodeSource package
curl -sL https://deb.nodesource.com/setup_11.x | sudo -E bash -
sudo apt-get install -y nodejs

# Check installation
node -v
npm -v

# Install build-essential to build certain NPM packages
sudo apt-get install -y build-essential
