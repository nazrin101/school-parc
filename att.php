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
   <li><a href="reg.php">Register Student</a></li>
  <li style="float:right"><a href="#about">Log-Out</a></li>
</ul>

<br><br>
<select id="levels" name="levels">
  <option value="1">Level 1</option>
  <option value="2">Level 2</option>
  <option value="3">Level 3</option>
  <option value="4">Level 4</option>
  <option value="5">Level 5</option>
</select>
<br><br>
<a href="" align="left"><input type="button" name="clsA" value="Class A"></a><br><br>
<a href="" align="left"><input type="button" name="clsB" value="Class B"></a>
<br><br>
<center>
<table border="2">
<tr><td>ID</td><td>Name</td><td>Age</td><td>I/C</td><td>Gender</td><td>Class</td><td colspan=2 style="visibility:collapse"></td></tr>

<tr><td>1</td><td>Ali</td><td>13</td><td>0081225-14-4041</td><td>Male</td><td>A</td><td colspan=1 style="visibility:collapse"><td><input type="radio" id="present" name="1" value="present">Present</td><td><input type="radio" id="notpresent" name="1" value="notpresent">Not Present</td></tr>

<tr><td>2</td><td>Abu</td><td>14</td><td>0071012-15-2043</td><td>Male</td><td>A</td><td colspan=1 style="visibility:collapse"><td><input type="radio" id="present" name="2" value="present">Present</td><td><input type="radio" id="notpresent" name="2" value="notpresent">Not Present</td></tr>

<tr><td>3</td><td>Ain</td><td>13</td><td>0081111-10-8045</td><td>Female</td><td>A</td><td colspan=1 style="visibility:collapse"><td><input type="radio" id="present" name="3" value="present">Present</td><td><input type="radio" id="notpresent" name="3" value="notpresent">Not Present</td></tr>
</table>
<input type="button" name="sumbit" value="Sumbit">
</center>
</body>
</html>

