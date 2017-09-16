# Enable Mode Rewrite

Go to the /etc/apache2 and open apache2.conf

Alter 

	Directory /var/www/>
        Options Indexes FollowSymLinks
        //AllowOverride None //All
        AllowOverride All
        Require all granted
	</Directory>


Enable Mode rewrite on server


	sudo a2enmod rewrite
	sudo service apache2 restart


