#!/bin/sh
# This is a comment!
echo Hello World	# This is a comment, too!
git checkout
git add .
git remote add origin remote https://github.com/satheeshdragon/panel_pro.git
DATE=`date +%Y-%m-%d`
git commit -m "$DATE"
git push origin master
