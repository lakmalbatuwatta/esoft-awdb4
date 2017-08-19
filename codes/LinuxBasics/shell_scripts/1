#!/bin/bash


echo "List code direcotory"

ls -al  ../codes

echo "Dev Deployment start ..........."
ls -al ../automation/dev

sudo cp ../codes/* ../automation/dev

echo "Dev deployed"


echo "QA Deployment start ..........."
ls -al ../automation/qa
sudo cp ../codes/* ../automation/qa

echo "QA deployed"


echo "Production Deployment start ..........."
ls -al ../automation/prod

sudo cp ../codes/* ../automation/prod
echo "Production  deployed"

#clear
echo "Deployement done......"
ls -al ../automation/dev
echo "---------------------------------"
ls -al ../automation/qa
echo "---------------------------------"
ls -al ../automation/prod



date

