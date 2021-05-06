<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myschool";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['registration_form'])) {
    $name = $_POST["fname"];
    $email = $_POST["ic"];
    $email = $_POST["age"];
    $email = $_POST["gender"];
    $email = $_POST["class"];

    $SQL = "INSERT INTO teacher (fname, ic, age, gender, class)
    VALUES ('$fname', '$ic', '$age', '$gender', '$class')";

    $query = mysqli_query($conn, $SQL);
    if($query) {
        echo "Success";
    }else {
        echo "Failed";
    }

}


$conn->close();
?>



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





    
<hr><br>
<br><br><hr>

<form action="insert.php" method="post">
  <p>
      <label for="fname">Full Name:</label>
        <input type="text" name="fname" id="fname"><br>
    </p>

    <p>
        <label for="ic">I/C:</label>
        <input type="number" size="18" id="ic" name="ic">
    </p>
    <p>
      <label for="age">Age:</label>
     <input type="number" size="18" id="age" name="age">
    </p>

     <p>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female<br>
    </p>

 <p>
        <label for="class">Class :</label>
      
        <select id="class">
          <option value="Class A">Class A</option>
          <option value="Class B">Class B</option>
          <option value="Class C">Class C</option>
        </select>
    </p>

    <input type="submit" value="Add Records">
</form>


</center>
</body>
</html>

