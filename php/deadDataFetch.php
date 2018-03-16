<!DOCTYPE html>
<html>
<body>
<center>
<form method="post" action="deadDataFetch.php">
<input type="text" name="searchQuery" placeholder="Input search query">
<select name="filter">
<option value="">Filter by...</option>	
<option value="apparent_sex">Sex</option>
<option value="age_group">Age Group</option>
<option value="height">Height</option>
<option value="weight">Weight</option>
<option value="hair_length">Hair Length</option>
<option value="hair_color">Hair Color</option>
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
$query = isset($_POST['searchQuery']) ? "SELECT * FROM dead_people WHERE $filter='$searchQuery'" : "SELECT * FROM dead_people";
$result = mysqli_query($connection, $query) or die($query."<br/><br/>".mysqli_error($connection));

echo "<br><br>";

$noOfResults = mysqli_num_rows($result);
echo "<center>$noOfResults Result(s) found</center>";

echo "<br><br>";

echo "<center><table border = '1' cellpadding = '10px' style='border-collapse: collapse'>"; 
	echo"<tr>
	<th bgcolor='#983232'><font color='white'><b>General Condition</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Body Condition</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Sex</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Age Group</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Height</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Weight</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Hair Length</b></font></td>
	<th bgcolor='#983232'><font color='white'><b>Hair Color</b></font></td>
	</tr>";

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){   //Creates a loop to loop through results
		echo "<tr>
		<td>" . $row['general_condition'] . "</td>
		<td>" . $row['body_condition'] . "</td>
		<td>" . $row['apparent_sex'] . "</td>
		<td>" . $row['age_group'] . "</td>
		<td>" . $row['height'] . "</td>
		<td>" . $row['weight'] . "</td>
		<td>" . $row['hair_length'] . "</td>
		<td>" . $row['hair_color'] . "</td>
		</tr>";  //$row['index'] the index here is a field name
	}
	
	
}

echo "</table></center>"; //Close the table in HTML

$filter = "";
$searchQuery = "";

mysqli_close($connection); //Make sure to close out the database connection
?>