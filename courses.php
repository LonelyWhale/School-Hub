<html>
<?php
session_start();
?>


<head>
<title>Courses</title>
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
font-family: 'ABeeZee'; font-size: 22px;
}


#warning {
  background-color:#c9ebff; 
  border-bottom:6px solid #ffb200; 
  width:60%;
  margin-left: 10px;
}

#courseList {
  padding: 10px;
  border: 0px;
  margin-left: 20px;
  font-size: 30px;
  width: 80%;
  height: 300px;
}

#courseListTitle {
  font-size: 40px;
  text-align: center;
}

#courseListTitle ,th, td {
  border: 0px;
  padding: 5px;

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
	<li class="active"><a href="courses.php">Courses</a></li>      
	<li><a href="profile.php">Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login/Logout</a></li>
    </ul>
  </div>
</nav>



<h3 id="warning">You will not be able to access courses you are not enrolled in.</h3>

<table id="courseList">
<tr>
<th id="courseListTitle">Courses</th>
</tr>
<tr>
<td><a href="computer_science.php">Computer Science</a></td>
</tr>
<tr>
<td>English</td>
</tr>
<tr>
<td>Maths</td>
</tr>
<tr>
<td>Science</td>
</tr>

</table>

<?php 
?>

</body>

</html>