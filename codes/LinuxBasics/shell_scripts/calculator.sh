#!/bin/bash


echo "Enter 2 numbers"
read num1
read num2

read -p "Erithmatic operation (+ - * / )" opt


# tot=`expr $num1 $opt $num2`
#When using expr there will be problem with multiplication
#Solution for that used $(( )) to do the erithmatic operations


tot=$(( $num1 $opt  $num2 ))


echo $tot 
