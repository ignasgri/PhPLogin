### Description
This is php Login system from scratch. 


## Create register form in MySQL
```CREATE TABLE users (
	user_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null,
    user_uid varchar(256) not null,
    user_pwd varchar(256) not null
);
```

### How to run on your machine
1. Downlaod Hampp Control Panel
2. Clone this project to your PC 
3. Copy index.html file to C:\xampp\htdocs folder
4. Open Hampp Control Panel
5. Run Appache and MySQL servers (local server)
6. 