# AQG

Download the zip file and extract the file and place into /var/www/html/

#DataBase

In mysql create database with name aqg
Commands :
mysql -u root -p
create database aqg;
exit
after successfully exit from mysql consle use the below command :
mysql -u root -p aqg < aqg.sql (during this time youe present working directory is /var/www/html/aqg, use pwd command to check present working directory)


# ERROR
If in case of  error while adding the topic and topic image.
file permissions are 755 for all files except admin/img/ .
admin/img/ with 777 file permission
To change the file permission use the below command 
sudo chmod 777 /var/www/html/aqg/admin/img/
