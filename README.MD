# Vagrant Setup

## Installation 

Install Virtual Box

 https://www.virtualbox.org/wiki/Downloads

Install Vagrant

 https://www.vagrantup.com/

## Run vagrant machine

To Up vagrant machine / Power On
    
    $ vagrant up

Let the install/ download OS for the first time 


To Shutdown the vagrant machine
    
    $ vagrant halt

This command should run from host machine


To connect with Ubuntu machine form your host machine
    
    $ vagrant ssh

If it is remote location i.e AWS, Rackspace, Cloude9
    
    ssh -i [pemfilelocation(.pem)] username@hostname
    $ ssh -i test.pem ubuntu@10.10.10.10





