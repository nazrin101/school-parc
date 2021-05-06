<?php //Dashboard Page 

session_start();
if(!isset($_SESSION["key"])) {
    header('location: login.php');
}

include 'conn.php';
$sql = "SELECT * FROM teacher WHERE id = ".$_SESSION["key"];
$query = mysqli_query($conn, $sql);
$user = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body bgcolor="#ADD8E6">
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="student.php">Student</a></li>
  <li><a href="att.php">Attendance</a></li>
  <li><a href="reg.php">Register Student</a></li>
 

  <li style="float:right"><a href="logout.php">Logout</a></li>
  
</ul><br><br><br><br>
<center>
<h1>Welcome to SMK PARC</h1><br>
<img src="logoparc.png" witdh="150" height="150"><br>
<br>

  <h1>Dashboard</h1>
    <a href="logout.php">Logout</a>
    <br>



    <p>Name: <?php echo $user["username"]; ?></p>
    


</body>
</html>

  


