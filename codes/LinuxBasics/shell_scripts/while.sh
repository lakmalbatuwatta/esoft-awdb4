#!/bin/bash
c=1
while [ $c -le 10 ]
do
	echo "Welcone $c times"
	(( c++ ))
done