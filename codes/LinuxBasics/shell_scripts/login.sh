#!/bin/bash

clear
read -p "Enter user ID : " uId

adminUId="123ADM"
manager="123MAN"
anonymous="123ANO"


if [ $uId == $adminUId ]
then
	echo "Wellcome admin"

elif [ $uId == $manager ]
then
	echo "Wellcome Manager"
else
	echo "Anonymous"
fi





   




