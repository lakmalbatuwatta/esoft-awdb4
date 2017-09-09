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



## Installing and configuring PHP 

PHP is the component of our setup that will process code to display dynamic content. It can run scripts, connect to our MySQL databases to get information, and hand the processed content over to our web server to display.

We can once again leverage the apt system to install our components. We're going to include some helper packages as well, so that PHP code can run under the Apache server and talk to our MySQL database:

    sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql


In most cases, we'll want to modify the way that Apache serves files when a directory is requested. Currently, if a user requests a directory from the server, Apache will first look for a file called index.html. We want to tell our web server to prefer PHP files, so we'll make Apache look for an index.php file first.


    sudo nano /etc/apache2/mods-enabled/dir.conf

    <IfModule mod_dir.c>
        DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm
    </IfModule>


## Installing mysql

When your installing mysql giv root password as you preferd 

    sudo apt-get install mysql-server

