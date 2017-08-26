#!/bin/bash
for i in 1 2 3 4 5
do
   echo "Welcome $i times"
done

echo "-----------------------"

for i in {1..8}
do
   echo "Welcome $i times"
done


echo "----------Files--------"


path="./*"
for d in $path
do
    echo $d
done