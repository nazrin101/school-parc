<?php //Login Page 

session_start();
if(isset($_SESSION["key"])) {
    header('location: dashboard.php');
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
            header('location: dashboard.php');
        }else {
            // if failed
            echo "failed";
        }

    }else {
        echo "email does not exists.";
    }
}

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
 

  <li style="float:right"><a href="">Log-In</a></li>
</ul><br><br><br><br>
<center>
<h1>Welcome to SMK PARC</h1><br>
<img src="logoparc.png" witdh="150" height="150"><br>
<br>







<html>
<body>
    

<br><br><hr>

<form method="post">

Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

<input type="submit" value="LOGIN" name="try_login">

</form>

</body>
</html>
</center>

</body>
</html>
