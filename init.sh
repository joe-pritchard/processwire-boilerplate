#!/usr/bin/env bash
git clone https://github.com/processwire/processwire.git

cp -ra ./processwire/wire ./
cp -a ./processwire/index.php ./
cp -a ./processwire/install.php ./

rm -rf ./processwire
rm init.sh