#!/bin/bash

while read line
do       
    #echo "rsync $line /var/www/html/$line"    
    rsync $line /var/www/html/$line
done < <(ls .)

echo ">> directory synced with /var/www/html/"