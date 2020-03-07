#!/bin/bash

# script that gets the current ip, and when it was last updated, and saves to a CSV
# IMPORTANT: depends on the dynv6 update script.

dynv6_file=~/.dynv6.addr6
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
logfile=$DIR/output/ip_log.csv

cur_ip6=$(ip -6 addr list scope global | grep -v " fd" | sed -n 's/.*inet6 \([0-9a-f:]\+\).*/\1/p' | head -n 1)
cur_ip4=$(curl ifconfig.me)
cur_date=$(date +"%x, %R" -r $dynv6_file)
formatted="$cur_ip6, $cur_ip4, $cur_date"

echo -e "Current IPv6 and date of last update:\n$formatted\n"

last_update=$(tail -n 1 $logfile)

echo -e "Last IPv6 and date stored:\n$last_update\n"

if [ "$formatted" == "$last_update" ]
then
   echo "last record is equal to current one. Nothing to do here"
else
   echo "oh, we got new data! Inserting into file"
   echo $formatted >> $logfile
fi
