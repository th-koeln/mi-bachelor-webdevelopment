#!/bin/bash

set -e

# Connect as root to server
ssh root@todo-demo.codelater.de

# Add user
adduser pinkie
# Assign password: ea7aePaich

# Add user to sudo group
usermod -aG sudo pinkie

# Add public SSH key to /home/pinkie/.ssh/authorized_keys
# On local machine: cat ~/.ssh/galaxycats_server.pub | pbcopy
# ssh-copy-id doesn't work since password authentication is disabled
su pinkie # Become user
mkdir ~/.ssh
chmod 700 ~/.ssh
vim ~/.ssh/authorized_keys
chmod 600 ~/.ssh/authorized_keys
exit # Back to root

# Disable root login via SSH 
vim /etc/ssh/sshd_config
# PermitRootLogin no
sudo systemctl reload sshd

# Enable password-less sudo
visudo
# %sudo   ALL=(ALL:ALL) NOPASSWD: ALL

# Logout as root, and login as user
ssh pinkie@todo-demo.codelater.de

# Basic firewall
sudo ufw app list
sudo ufw allow OpenSSH
sudo ufw enable
