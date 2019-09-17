#!/bin/bash
file='.gitignore'
while read line; do
echo $line
done < $file
