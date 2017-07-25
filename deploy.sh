#!/usr/bin/bash

# This script deploys site to staging or production depending on which branch is the current context.

# rsync
# -a : archive mode, archive mode allows copying files recursively and it also preserves symbolic links, file permissions, user & group ownerships and timestamps
# -z : compress file data
# -v : verbose
# -P : same as --partial --progress
# --delete: remove files from dest that are not in src
# --filter: filter files on dest (used to protect blog files from being deleted)
# --exclude: exclude files from src from the transfer
# --include: include files from src for transfer

echo '_____ Setup deployment key for server'
chmod 600 deploy_key
mv deploy_key ~/.ssh/id_rsa

if [[ "$TRAVIS_BRANCH" = "master" ]] ; then
   
  # Sync all non-static files to main domain
  echo '_____ Sync files'

  rsync -azvP --delete \
        --filter='P *.json' \
        --filter='P .htaccess' \
        --filter='P blog/*.php' \
        --filter='P blog/.htaccess' \
        --filter='P blog/wp/*' \
        --filter='P blog/plugins/*' \
        --filter='P blog/media/*' \
        --filter='P blog/themes/*' \
        --filter='P blog/sessions/*' \
        dist/ root@104.130.157.215:/var/www/vhosts/stage.timgt.com/public_html

 elif [[ "$TRAVIS_BRANCH" = "release" ]] ; then
   
   # -a : archive mode, archive mode allows copying files recursively and it also preserves symbolic links, file permissions, user & group ownerships and timestamps
   # -z : compress file data
   # -v : verbose
   # -P : same as --partial --progress
   # --delete: remove files from dest that are not in src
   # --filter: filter files on dest (used to protect blog files from being deleted)
   # --exclude: exclude files from src from the transfer
   # --include: include files from src for transfer
  
   # Sync all non-static files to main domain
   echo '_____ Sync files'
 
   rsync -azvP --delete \
         --filter='P *.json' \
         --filter='P .htaccess' \
         --filter='P blog/*.php' \
         --filter='P blog/.htaccess' \
         --filter='P blog/wp/*' \
         --filter='P blog/plugins/*' \
         --filter='P blog/media/*' \
         --filter='P blog/themes/*' \
         --filter='P blog/sessions/*' \
         dist/ root@104.130.157.215:/var/www/vhosts/timgt.com/public_html
 
else
  echo 'Invalid branch. You can only deploy from master and release.'
  exit 1
fi
