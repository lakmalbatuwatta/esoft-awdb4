#!/bin/bash
clear
line="=================================================================================================="
echo "Logged Use :-" $1

createItem()
{

    read -p "Item Id    : " itmId
    read -p "Item Name  : " itmName
    read -p "Item Price : " itmPrice

   echo -e $itmId":"$itmName":"$itmPrice"\n" >> items.txt

}


echo "Create items"
createItem

