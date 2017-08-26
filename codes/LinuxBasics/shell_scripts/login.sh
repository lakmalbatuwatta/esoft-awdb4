#!/bin/bash

#user id

doLogin()
{
	
	adminUId="123ADM"
	manager="123MAN"
	anonymous="123ANO"


	if [ $1 == $adminUId ]
	then
		echo "Wellcome admin"

	elif [ $1 == $manager ]
	then
		echo "Wellcome Manager"
	else
		echo "Anonymous"
	fi



}
doLogin $1


   




