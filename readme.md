# Website for CSC 350- Software using BackEnd as PHP and frontEnd as HTML
Components: 
     login.php
## Connection to database:

   * Login to 
     -  use localhost/phpmyadmin 
      depending on you configuration you may need to add the port after localhost.
      do a research online on how to connect it 
      
     - Another option is to cmd command to create the database and view it using my SQL workbench 

       Video link : coming soon on my youtube page 

## Built With
[MYSQL](https://www.mysql.com/) - Local database

[XAMPP](https://www.apachefriends.org/index.html) - Local Webserver setup

## Languages used
* HTML
* CSS
* PHP
* JSS
* MYSQL

## MYSQL instructions for setting the database
* Setting the database:
```
CREATE DATABASE scholarsdb;
```
* First table:
```
CREATE TABLE logindb(
    userid int (11) not null AUTO_INCREMENT PRIMARY KEY,
    username varchar(128) not null,
    firstname varchar(128) not null,
    lastname varchar(128) not null,
    qualification varchar(128) not null,
    gender varchar(128) not null,
    password varchar(128) not null,
    role varchar(128) not null
); 
```
* Second table:
```
CREATE TABLE comments (
	commentid int(11) not null AUTO_INCREMENT PRIMARY KEY, -->old CID
    username varchar(128) not null,  -->old UID
    date datetime not null,
    message TEXT not null
);
```
The size of varchar are not mandatory for the specific size for the database as long you use reasonable value that it will not exceed it.

## Manual structure
In case you want to set up without the code use the following table in order:
* Database name: Scholarsdb
* Table 1 named: logindb
```
1st column  - userid , integer, NOT NULL, AUTO INCREMENT and PRIMARY KEY
2nd column - username as a char , NOT NULL
3rd column - firstname as a char , NOT NULL
4th column - qualification as a char , NOT NULL
5th column - gender as a char , NOT NULL
6th column - password as a integer , NOT NULL
7th column - role as a char , NOT NULL
```
* Table 2 named: comments
```
1st column - commentid, integer, NOT NULL, AUTO INCREMENT and PRIMARY KEY
2nd column - username, char, NOT NULL
3rd column - date , datetime, NOT NULL
4th column - message, text, NOT NULL
```
 <!-- create a database named logindb and table named userinfotable 
 it must have column id which is a primary key with Auto increment
 username is the second column 
 firstname is the 3rd column 
 lastname is the 4th column 
 qualification is the 5th coulumn
 gender is the 6th column 
 password is the last column  -->
