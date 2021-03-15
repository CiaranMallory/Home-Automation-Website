
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="container">
		<div class="navbar">
			<nav>
			   <ul>
		  	      <li><a class="fa fa-home" class="active" href="index.html" font-style= "Sans-serif"> Home</a></li>
		          <li><a href="About.html"> About</a></li>
		          <li><a class="fa fa-sign-in" href="login.php"> Login</a></li>
		        </ul>
		    </nav>
		</div>
		<div class="login-box">
			<form action="Includes/login.inc.php" method="post">
				<h1>Login</h1>
				<input type="text" name="uid" placeholder="Username/Email...">
				<input type="password" name="pwd" placeholder="Password...">
				<br>
				<br>
				<button type="submit" name="submit">Log in</button>
				<br>
				<br>
				<ul><li><a class="active" href="signup.php">Sign Up</a></li></ul>
				<?php
				if(isset($_GET["error"])){
					if($_GET["error"] == "emptyinput"){
						echo "<p>Fill in all fields!</p>";
					}
					else if($_GET["error"] == "wronglogin"){
						echo "<p>Incorrect login information!</p>";
					}
				}
				?>
			</form>
		</div>
	</div>


<style>
body {
	height: 100vh;
	margin: 0;
	padding: 0;
	background-image: url(pexels-binyamin-mellish-background.jpg);
	font-family: Source Sans Pro;
	display: flex;
	align-items: center;
	justify-content: center;
}
h1 {
	font-size: 4em;
	display: inline-block;
	border-bottom: 1px solid #be03fc;
}
form {
	margin-top: -10%;
	max-width: 400px;
	width: 100%;
}
label {
	margin: 10px 0 0 0;
	font-size: 1.2em;
	display: block;
}
input {
	padding: 7px;
	border: 0;
	border-bottom: 1px solid #ccc;
	outline: none;
	font-size: 1.2em;
	width: 100%;
	transition: border-color .3s;
}
input:focus {
	border-color: #be03fc;
}
.btn {
	background: #be03fc;
	padding: 12px 50px;
	border-radius: 3px;
	font-size: 1.4em;
	cursor: pointer;
	margin: 20px 0;
	color: white;
	font-weight: bold;
	user-select: none;
	display: inline-block;
	transition: background .3s;
}
.btn:hover {
	background: #a702de;
}
.btn:active {
	box-shadow: inset 0 0 3px 4px rgba(0,0,0,.2);
}

.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}

.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #055c87;
  margin-bottom: 50px;
  padding: 13px 0;
}
</style>
</body>
</html>