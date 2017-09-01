## PhP Login system 

#### Include navigation bar to other pages, just simply coping this snippet and past to your page.
```
<?php 
	include_once 'header.php';
 ?>
```
```
<div class="content">
	<h1>Your text</h1>
	<p>More text text</p>
	<img src="your_image.jpg">
</div>
```
```
<?php 
	include_once 'footer.php';
 ?>

```

header.php contains code below
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
footer.php contains code below
```
</body>
</html>
```
#### Setting connection lo local database
```
<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>
```

#### Submit Signup form must have atributes:
1. action - redirectes to the URL you give to the action attribute after form submiting form.
2. method - for a request-response between a client and server are: GET and POST.
*GET - Requests data from a specified resource
*POST - Submits data to be processed to a specified resource

```
<form class="signup-form" action="includes/signup.inc.php" method="POST">
```

#### How to run on your machine
1. [Downlaod Hampp Control Panel](https://www.apachefriends.org/download.html)
2. Clone this project to your PC
3. Copy all file to C:\xampp\htdocs folder
4. Create register form in PhpMyAdmin
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
5. Open Hampp Control Panel
6. Run Appache and MySQL servers (local server)
7. Type in url to your browser
```
http://localhost/phpLogin/
``` 