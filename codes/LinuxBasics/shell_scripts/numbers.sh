#!/bin/bash

read -p "Number 1 :" n1
read -p "Number 2 :" n2

echo "Without expr"
echo $n1 + $n2
echo "With expr"
echo `expr $n1 + $n2`


