#!/bin/bash
clear
line="=================================================================================================="


dashboardOptions()
{
    
    echo $line;
    echo "Logged Use :-" $1


    echo "1) Create New Item"
    echo "2) View Items"
   
}

dashboardOptions $1
while true :
do

read -p "q to exit : "  opt
    case "$opt" in
        1) ./createItems.sh $1
        dashboardOptions $1
        ;;
        2) dashboardOptions $1
        ./viewItems.sh $1
        
        ;;
        "q") exit
        ;;
        *) echo "Please enter valid option"
         
    esac
done