<html>
<?php
session_start();
?>


<head>
<title>Sign up</title>
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="icon" 
	type="image/png" 
	href="includes\images\School Hub Small Logo image.png">
<style>
body {
font-family: 'ABeeZee';font-size: 22px;
}

.signup-form {
	width:400px;
	margin:0 auto;
	padding-top: 30px;
}

.signup-form input {
	width:100%;
	height:40px;
	padding: 0px 5%;
	margin: 2px;
	border: 1px solid grey;
	background-color: #fff
	font-size:16px;
	color: #111;
	line-height: 40px;
}
.signup-form select {
	width:100%;
	height:40px;
	padding: 0px 5%;
	margin: 2px;
	border: 1px solid grey;
	background-color: #fff
	font-size:16px;
	color: #111;
	line-height: 40px;
}

.signup-form button {
	display: block;
	margin: 5px auto;
	width:30%;
	height:40px;
	border: none;
	background-color: #222
	font-size:16px;
	color: #111;
	cursor: pointer;
}

.signup-form button:hover {
	background-color: #111
}


</style>


</head>

<body style="background-color:powderblue">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="\includes\images\School Hub small logo image.png" width=50px height=40px></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
	<li><a href="courses.php">Courses</a></li>      
	<li><a href="profile.php">Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login/Logout</a></li>
    </ul>
  </div>
</nav>

<?php 
?>

<form class="signup-form" action="includes\signup_inc.php" method="post">
	<input type="text" name="first" placeholder="Firstname">
	<input type="text" name="last" placeholder="Lastname">
	<input type="text" name="age" placeholder="Age">
	<select name="role">
    <option value="student">Student</option>
    <option value="ta">Apply for TA</option>
    <option value="teacher">Apply for Teacher</option>
    <option value="admin">Apply for Admin</option>
  </select>
	<input type="text" name="email" placeholder="Email">
	<input type="text" name="uid" placeholder="Username">
	<input type="password" name="pwd" placeholder="Password">
	<button type="submit" name="submit">Sign up</button>

</form>


</body>

</html>