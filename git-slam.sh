#!/usr/bin/env sh

ruby git-world "status"
ruby git-world "add ."
ruby git-world "commit -a -m \"global dev trust\""
git add .
git commit -a
git push origin master

