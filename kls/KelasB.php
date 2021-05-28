<center><br><h2>Class A</h2><br>

	<?php
$con=mysqli_connect("127.0.0.1","root","","myschool");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM student WHERE kelas ='Class B'");

echo "<table border='1'>
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>I/C</th>
<th>Gender</th>
<th>Class</th>
<th>Emergency Number</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['ic'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['kelas'] . "</td>";
echo "<td>" . $row['enumber'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</center>
<html>

</body>
</html>
