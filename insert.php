<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "myschool");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$ic = mysqli_real_escape_string($link, $_REQUEST['ic']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$kelas = mysqli_real_escape_string($link, $_REQUEST['kelas']);
$enumber = mysqli_real_escape_string($link, $_REQUEST['enumber']);

$sql = "INSERT INTO student (fname, lname, ic, age, gender, kelas, enumber) VALUES ('$fname','$lname','$ic','$age','$gender','$kelas','$enumber')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
<head>
  <meta http-equiv="refresh" content="5; URL=reg.php" />
</head>
<body bgcolor="#ADD8E6">
</body>


<body>
  <p>If you are not redirected in five seconds, <a href="reg.php">click here</a>.</p>
</body>