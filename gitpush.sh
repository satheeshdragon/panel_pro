#!/bin/sh
# This is a comment!
echo Hello World	# This is a comment, too!
git remote add origin https://github.com/satheeshdragon/panel_pro.git
git config --global user.name "satheeshdragon.satheesh@gmail.com"
git checkout
git add .
DATE=`date +%Y-%m-%d`
git commit -m "$DATE"
git push origin master
satheeshdragon.satheesh@gmail.com
satheeshprogrammer
