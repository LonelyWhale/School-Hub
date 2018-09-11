<html>
<?php
session_start();
?>

<head>
<title>School Hub</title>
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
h1 {
background-color:rgb(128, 159, 255)
}

h1 {
color:white
}

body {
font-family: 'ABeeZee';font-size: 22px;
}
</style>



</head>



<body style="background-color:powderblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="\includes\images\School Hub small logo image.png" width=50px height=40px></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
	<li><a href="courses.php">Courses</a></li>      
	<li><a href="profile.php">Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login/Logout</a></li>
    </ul>
  </div>
</nav>

<img src="\includes\images\School Hub Logo V2 Image.png" width=330px height=80px>
<h1>Welcome to School Hub</h1>
<p>School hub is place where you can keep up to date with all your school work and annoucments.</p>

<?php 
?>

</body>

</html>