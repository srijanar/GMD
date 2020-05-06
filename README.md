# How to access application:
Goto /var/www/html
git clone https://github.com/srijanar/GMD.git
```
Pull development branch
Configure database:
Config/db_connection.php.txt
Remove .txt extension from above file
Configure localhost,username, password, database

# Database
Connect to MYSQL:
mysql -u <mysql user name> -p
> <mysql password>;
create database <database name>;
use <database name>;

Create table user with attributes id, firstname, lastname;
###  create table user (id int(6) primary key, firstname varchar(30), lastname varchar(30));
Create table camera with attributes id, name , path and createdAt;
### create table camera (id int(6) primary key,name varchar(30), path varchar(100), createdAt datetime  DEFAULT CURRENT_TIMESTAMP);
```
## Insert test data:
insert into user(id, firstname, lastname) values (1, 'Harry', 'Porter');
insert into user(id, firstname, lastname) values (2, 'James', 'Bond');

# There is already two sample images inside resources/images;
insert into camera (id, name, path) values (1,'camera1', 'Sample1.jpeg');
insert into camera (id, name, path) values (1,'camera2', 'Sample2.jpeg');

To access the web application:
localhost/GMD/public
```
