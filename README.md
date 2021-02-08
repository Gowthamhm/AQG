# AQG :- Automatic Quiz Generator

Download the zip file and extract the file and place into /var/www/html/

# Prerequisites

1. Mysql/Maria DataBase
2. Apache2 server
3. Any Text Editor /IDE(like atom,vscode,sublime,...)
4. Club's Management System (DBMS project :- https://github.com/Gowthamhm/Club-s_Management_System)


# DataBase

In mysql create database with name aqg
Commands :
mysql -u root -p
create database aqg;
exit
after successfully exit from mysql consle use the below command :
mysql -u root -p aqg < aqg.sql (during this time youe present working directory is /var/www/html/aqg, use pwd command to check present working directory)

# Procedure

 After download this project, place the project Directory in /var/www/html/ (ubuntu) or C://Xampp/htdocs/ (windows ) Dump the aqg.sql file to database.
 Change the password of database with your database password in config.php admin name and admin password u can get it in the sqldump(database).


# ERROR

If in case of  error while adding the topic and topic image.
file permissions are 755 for all files except admin/img/ .
admin/img/ with 777 file permission
To change the file permission use the below command 
sudo chmod 777 /var/www/html/aqg/admin/img/


# Note

To login to Admin part login using a URL http://localhost/aqg/admin/

Before start the Automatic Quiz Generator System complete the procedure of Club\`s Mangement System. Later start the AQG System on browser, Because Automatic Quiz Generator System have a interaction with  with the Club\`s Mangement System.
