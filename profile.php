<!DOCTYPE html>
<html>
<?php
session_start();
?>


<head>
<title>Profile</title>
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

table {
	width: 75%;
	border: 0px solid black;
	padding: 15px;
}

th, td {
    padding: 10px;
    text-align: left;
}

table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
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
	<li class="active"><a href="profile.php">Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login/Logout</a></li>

    </ul>
  </div>
</nav>
<?php
if (isset($_SESSION['u_id']) == FALSE) {
  echo '<h3 style="background-color:#c9ebff; border-bottom:6px solid #ffb200; width: 20%; margin-left: 10px;">You are not logged in</h3>';
}
?>


<table>
<tr>
<th rowspan="2"><img src="http://socialsciences.uottawa.ca/human-motivation/sites/socialsciences.uottawa.ca.human-motivation/files/generic_male_0.jpg", width="200", height="200", alt="Profile Picture"></th>
<th><?php 
if (isset($_SESSION['u_id'])) {
  echo $_SESSION['u_uid'];
} else {
  echo "Username";
}
?></th>
</tr>
<tr>
<td><?php 
if (isset($_SESSION['u_id'])) {
  echo $_SESSION['u_email'];
} else {
  echo "";
}
?></td>
</tr>
</table>

<table id="t01">
<tr>
<th>First name:</th>
<td><?php 
if (isset($_SESSION['u_id'])) {
  echo $_SESSION['u_first'];
} else {
  echo "N/A";
}
?></td>
</tr>
<tr>
<th>Last name:</th>
<td><?php 
if (isset($_SESSION['u_id'])) {
  echo $_SESSION['u_last'];
} else {
  echo "N/A";
}
?></td>
</tr>



<tr>
<th>Role:</th>
<td><?php 
if (isset($_SESSION['u_id'])) {
  echo $_SESSION['u_role'];
} else {
  echo "N/A";
}
?></td>
</tr>

<tr>
<th>Age:</th>
<td><?php 
if (isset($_SESSION['u_id'])) {
  echo $_SESSION['u_age'];
} else {
  echo "N/A";
}
?></td>
</tr>
</table>




<?php

if (isset($_SESSION['u_id'])) {
  echo '<form style="margin:5px" action="profile.php" method="POST">
  <button type="submit" name="change">Change Details</button>
  </form>';
  echo '<form style="margin:5px" action="profile.php" method="POST">
  <button type="submit" name="delete">Delete Account</button>
  </form>';
  if (isset($_POST['delete'])) {
    echo 'Enter you password to confirm deletion:';
    echo '<h3 style="color:red;">Warning: This is permanent. All your data will be deleted!</h3>';
    echo '<form style="margin:2px" action="includes/deleteUser_inc.php" method="POST">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">Confirm</button>
    </form>';
    echo '<form action="profile.php">
    <button type="submit">Cancel</button>
    </form>';
    
  }
  if (isset($_POST['change'])) {
    echo 'Enter you password to confirm change:';
    echo '<form style="margin:2px" action="includes/changeUser_inc.php" method="POST">
    <input type="password" name="password" placeholder="Password">
    <input tpye="text" name="first" placeholder="First Name">
    <input tpye="text" name="last" placeholder="Last Name">
    <input tpye="text" name="age" placeholder="Age">
    <input tpye="text" name="role" placeholder="Role">
    <input tpye="text" name="email" placeholder="Email">
    <input tpye="text" name="username" placeholder="Username">
    <button type="submit" name="submit">Confirm</button>
    </form>';
    echo '<form action="profile.php">
    <button type="submit">Cancel</button>
    </form>';
    
  }
}
?>
</body>

</html>