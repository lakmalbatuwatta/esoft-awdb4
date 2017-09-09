# Setup Dev enviornment for PHP

## Install Apache2

To Install Apache 

sudo apt-get install apache2


When you are installing apache2 default documnt root will be 
/var/www
This is place where you put your application files


##Configur Locan DNS

By Changing Host file
In windows
C:/System32/drivers/etc/host file

In Mac
/etc/host


##  Creating multisite on apcche2

Locate 000-default.conf file wich is in /etc/apache2/sites-available

create your site configuration file based on that default .conf file

    sudo cp 000-default.conf abc.dev.conf

you need to edit your site configuration file in my case abc.dev.conf

    ....
    ServerName abc.dev
    ....
    DocumentRoot /var/www/abc.dev


create folder with same name what you had on your configuration file under /var/www directory

    /var/www/abc.dev


you need enable the site 

    cd /etc/apache2/sites-available
    sudo a2ensite abc.dev.conf
    sudo service apache2 restart


## Link Working directory and Apache2 working directory (for vagrant users)

Creating symbolic link between your synced folder 

    sudo ln -s /web/siteName /var/www
