
<?php 

session_start();
if(!isset($_SESSION["key"])) {
    header('location: only.php');
}

include 'conn.php';

if(isset($_POST['try_login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // if email is registered
    $sql = "SELECT * FROM teacher WHERE username = '".$username."'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0) {

        // if email and password is correct
        $sql = "SELECT * FROM teacher WHERE 
            username = '".$username."' AND 
            password='".$password."'";

        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0) {
            // if success
            $row = mysqli_fetch_array($query);
            $_SESSION["key"] = $row["id"];
            header('location: only.php');
        }else {
            // if failed
            echo "failed";
        }

    }else {
        echo "username does not exists.";
    }
}



?>

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
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $ic = $_POST["ic"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $kelas = $_POST["kelas"];
    $enumber = $_POST["enumber"];

    $SQL = "INSERT INTO teacher (fname, lname, ic, age, gender, kelas, enumber)
    VALUES ('$fname','$lname','$ic','$age','$gender','$kelas','$enumber')";

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
  <li><a class="active" href="reg.php">Register Student</a></li>
  <li style="float:right"><a href="logout.php">Log-Out</a></li>
</ul>


<center>





    
<hr><h1>Register Student Form</h1><hr>

<form action="insert.php" method="post" id="reg"><table border="2">
  <tr>    <td><label for="fname">First Name:</label></td><td><input type="text" name="fname" id="fname"></td> 
           <td><label for="lname">Last Name:</label></td><td><input type="text" name="lname" id="lname"></td> 
  </tr>

<tr>

            <td><label for="ic">I/C:</label></td><td><input type="number" size="18" id="ic" name="ic"></td>
           <td><label for="age">Age:</label></td><td><input type="number" size="18" id="age" name="age"></td>
</tr>

 <tr>
<td>
       <label for="gender">Gender:</label></td>
  <td>     <input type="radio" name="gender" value="male"> Male
      <input type="radio" name="gender" value="female"> Female</td>
  
       <td> <label for="class">Class :</label></td>
    
       <td> <select name="kelas" id="kelas" form="reg">
               <option value="Class A">Class A</option>
               <option value="Class B">Class B</option>
        </select></td>
   
  </tr>
<tr>
<td><label for="enumber">Emergency Number</label></td>
      <td> <input type="number" size="18" id="enumber" name="enumber"></td></tr>
 

</table><br><input type="submit" value="Add Records">
</form>

</center>
</body>
</html>

