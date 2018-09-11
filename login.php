<html>

<?php
session_start();
?>


<head>
<title>Login</title>
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<link rel="icon" 
  type="image/png" 
  href="includes\images\School Hub Small Logo image.png">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>
body {
font-family: 'ABeeZee';font-size: 22px;
}

.login form button {
background-color:#ccc;
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
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login/Logout</a></li>
    </ul>
  </div>
</nav>

<?php 
?>


<div class="login">
	<?php
    if (isset($_SESSION['u_id'])) {
      echo '<h3 style="margin-left: 10px;">Click here to log out:</h3>';
      echo '<form style="margin-left:10px;" action="includes/logout_inc.php" method="POST">
          <button type="submit" name="submit">Logout</button>
      </form>';
    } else {
      echo '<form action="includes/login_inc.php" method="POST">
      <input type="text" name="uid" placeholder="Username/email">
      <input type="password" name="pwd" placeholder="password">
      <button type="submit" name="submit">Login</button>
    </form>
    <h3>If you have not already. Why not <a href="signup.php">sign Up</a>?<h3>';
    }
  ?>
</div>



</body>

</html>