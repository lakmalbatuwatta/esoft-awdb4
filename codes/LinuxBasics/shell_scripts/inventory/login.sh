#!/bin/bash

doLogin()
{
	
	user="admin"
	pasword="12345"
	
	if [ "$1" == $user ] && [ "$2" == $pasword ];
	then
		./dashboard.sh $1
	else

        clear
		echo "Invalied User name or password"
	fi


}


doLogin $1 $2
