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
 

  <li style="float:right"><a href="#about">Log-In</a></li>
</ul><br><br><br><br>
<center>
<h1>Welcome to SMK PARC</h1><br>
<img src="logoparc.png" witdh="150" height="150"><br>
<br><form><table border="2">
<tr><td colspan="2" align="center">LOGIN-IN</td></tr>
<tr><td><label for="user">Username :</label></td>
<td><input type="text" id="user" name="user"></td></tr>
<tr><td><label for="password">Password :</label></td>
<td><input type="password" id="password" name="password"></td></tr></table><br>
<input type="button" value="Login">  
</form>
</center>

</body>
</html>
