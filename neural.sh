#!/bin/bash

#export HOME=/root
#export SHELL=/bin/bash
#export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/home/ubuntu/torch/install/lib:/home/ubuntu/torch/install/lib
#export PATH=$PATH:/home/ubuntu/torch/install/bin:/home/ubuntu/torch/install/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games
#export LUA_CPATH=/usr/local/lib/lua/5.1/loadall.so
#export TERM=xterm
#export USER=root
#export USERNAME=root

cd ~/neural-style

th ~/neural-style/neural_style.lua -style_image $1 -content_image $2 -image_size 200 -num_iterations 300 -gpu -1 -content_weight 8 -init image
cp out.png ~/Code/neural_imaging

echo "end"
cd ~/Code/neural_imaging

