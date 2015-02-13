#! /usr/bin/env bash

createuser -P pulsemaster
createdb pulse
psql -h 127.0.0.1 -U pulsemaster -d pulse -a -f builddb.sql -q &> /dev/null
