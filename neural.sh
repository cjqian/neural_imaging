#!/bin/bash

#export HOME=/root
#export SHELL=/bin/bash
#export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/home/ubuntu/torch/install/lib:/home/ubuntu/torch/install/lib
#export PATH=$PATH:/home/ubuntu/torch/install/bin:/home/ubuntu/torch/install/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games
#export LUA_CPATH=/usr/local/lib/lua/5.1/loadall.so
#export TERM=xterm
#export USER=root
#export USERNAME=root

NEURAL_PATH = /home/ubuntu/neural-style/
NEURAL_PATH_STYLE = /home/ubuntu/neural-style/neural_style.lua

HTML_PATH = /var/www/html/

ART = img/preview/
ART_PATH = $HTML_PATH$ART$1
echo $ART_PATH
cd $NEURAL_PATH

th $NEURAL_PATH_STYLE -style_image $ART_PATH -content_image $2 -image_size 200 -num_iterations 300 -gpu -1 -content_weight 8 -init image

cp out.png $HTML_PATH
cd $HTML_PATH

echo "end"

