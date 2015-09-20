#!/bin/bash

export HOME=/root
export SHELL=/bin/bash
export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/home/ubuntu/torch/install/lib:/home/ubuntu/torch/install/lib
export PATH=$PATH:/home/ubuntu/torch/install/bin:/home/ubuntu/torch/install/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games
export LUA_CPATH=/usr/local/lib/lua/5.1/loadall.so
export TERM=xterm
export USER=root
export USERNAME=root

cd /home/ubuntu/neural-style

th /home/ubuntu/neural-style/neural_style.lua -style_image $1 -content_image $2 -image_size 100 -num_iterations 100 -gpu -1
cp out.png /var/www/html

echo "end"
cd /var/www/html

