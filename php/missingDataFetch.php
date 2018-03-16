<!DOCTYPE html>
<html>
<body>
<center>
<form method="post" action="missingDataFetch.php">
<input type="text" name="searchQuery" placeholder="Input search query">
<select name="filter">
<option value="">Filter by...</option>	
<option value="first_name">First Name</option>
<option value="middle_name">Middle Name</option>
<option value="last_name">Last Name</option>
<option value="marital_status">Marital Status</option>
<option value="sex">Sex</option>
<option value="age">Age</option>
</select> 
<input type="submit" name="submit" value="Search">
</form>
</center>
</body>
</html>
<?php
$connection = mysqli_connect('localhost', 'root', '', 'afterlife');
$searchQuery = isset($_POST['searchQuery']) ? $_POST['searchQuery'] : "";
$filter=isset($_POST['filter']) ? $_POST['filter'] : "";

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['submit'])){
$query = isset($_POST['searchQuery']) ? "SELECT * FROM missing_people WHERE $filter='$searchQuery'" : "SELECT * FROM missing_people";
$result = mysqli_query($connection, $query) or die($query."<br/><br/>".mysqli_error($connection));

echo "<br><br>";

$noOfResults = mysqli_num_rows($result);
echo "<center>$noOfResults Result(s) found</center>";

echo "<br><br>";

echo "<center><table border = '1' cellpadding = '10px' style='border-collapse: collapse'>"; 
	echo"<tr>
	<th bgcolor='#983232'><font color='white'><b>First Name</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Middle Name</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Last Name</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Address</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Marital Status</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Sex</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Birthdate</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Age</b></font></td>
	</tr>";

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){   //Creates a loop to loop through results
		echo "<tr>
		<td>" . $row['first_name'] . "</td>
		<td>" . $row['middle_name'] . "</td>
		<td>" . $row['last_name'] . "</td>
		<td>" . $row['address'] . "</td>
		<td>" . $row['marital_status'] . "</td>
		<td>" . $row['sex'] . "</td>
		<td>" . $row['birthdate'] . "</td>
		<td>" . $row['age'] . "</td>
		</tr>";  //$row['index'] the index here is a field name
	}
}

echo "</table></center>"; //Close the table in HTML

$filter = "";
$searchQuery = "";

mysqli_close($connection); //Make sure to close out the database connection
?>