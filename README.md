# How to access application:
git clone https://github.com/srijanar/GMD.git
```
Pull development branch
Configure database:
Config/db_connection.php.txt
Remove .txt extension from above file
Configure localhost,username, password, database
```
```
#Database
Create table user with attributes id, firstname, lastname;
###  create table user (id int(6), firstname varchar(30), lastname varchar(30));
Create table camera with attributes id, name , path and createdAt;
### create table camera(id int(6), name varchar(30), path varchar(30), createdAt DATETIME DEFAULT CURRENT_TIMESTAMP);

#There is already two sample images inside resources/images;
#To access these images, insert sample data in table where path is just a image name;

To access the web application:
localhost/GMD/public
```
