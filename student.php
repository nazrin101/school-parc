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
     <li><a class="active" href="index.php">Home</a></li>
  <li><a href="student.php">Student</a></li>
  <li><a href="reg.php">Register Student</a></li>
 
  <li style="float:right"><a href="logout.php">Log-Out</a></li>
</ul>

<br><br>
<button><p><a href="kls/KelasA.php" target="iframe_a">Kelas A</a></p></button>
<button><p><a href="kls/KelasB.php" target="iframe_a">Kelas B</a></p></button>


<br><br>
<iframe src="kls/Kelaslist.php" name="iframe_a" height="300px" width="100%"></iframe>




</center>
</body>
</html>

