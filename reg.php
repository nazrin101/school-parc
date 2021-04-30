<html>
<head><title>Student Management System</title></head>
<body bgcolor="#ADD8E6">

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
<body>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="student.php">Student</a></li>
  <li><a href="att.php">Attendance</a></li>
  <li><a class="active" href="reg.php">Register Student</a></li>
  <li style="float:right"><a href="#about">Log-Out</a></li>
</ul>


<center>


<form>

	<table border="3">
	<tr><td><label for="name">Full Name :</label> </td>
<td><input type="text" id="name" name="name"></td></tr>
<tr><td><label for="age">Age :</label> </td>
<td><input type="text" id="age" name="age"></td></tr>
<tr><td><label for="ic">I/C Number :</label> </td>
<td><input type="text" id="ic" name="ic"></td></tr>
<tr><td>Gender :</td><td> <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label></td></tr>
<tr><td><label for="class">Class :</label></td>
<td>
<select id="class" name="class">
  <option value="A">Class A</option>
  <option value="B">Class B</option>
  <option value="C">Class C</option>
  <option value="D">Class D</option>
</select></td></tr>

<tr><td><label for="fname">Father Name :</label> </td>
<td><input type="text" id="fname" name="fname"></td></tr>

<tr><td><label for="mname">Mother Name :</label> </td>
<td><input type="text" id="mname" name="mname"></td></tr>
<br>

</table><br>
<input type="button" value="Register"> 

</form>

</center>
</body>
</html>

