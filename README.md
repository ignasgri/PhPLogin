### Description
This is php Login system from scratch. 


## Create register form in MySQL
```
CREATE TABLE users (
user_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
user_first varchar(256) not null,
user_last varchar(256) not null,
user_email varchar(256) not null,
user_uid varchar(256) not null,
user_pwd varchar(256) not null
);
```
# Include code to other page
```
<?php 
	include_once 'header.php';
 ?>
```
and contains
```
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
<nav>
	<div class="main-wrapper">
		<ul>
			<li><a href="index.php">Home</a></li>
		</ul>
		<div class="nav-login">
			<form>
				<input type="text" name="uid" placeholder="Username / email">
				<input type="password" name="pwd" placeholder="password">
				<button type="submit" name="submit">Login</button>
			</form>
			<a href="signup.php"> Sign up</a>
		</div>
	</div>
</nav>

</header>
```

### How to run on your machine
1. Downlaod Hampp Control Panel
2. Clone this project to your PC 
3. Copy index.html file to C:\xampp\htdocs folder
4. Open Hampp Control Panel
5. Run Appache and MySQL servers (local server)
6. 