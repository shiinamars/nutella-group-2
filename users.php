
<style>
*
{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	text-decoration: none;
}

body
{
	background-color: white;
}

table.table
{
	padding-top: 20px;
}

td.td
{
	padding-left: 370px;
	padding-top: 30px
}

.buttonback
{
	padding-right: 60px;
	padding-left: 65;
	border-radius: 4px;
	transition-duration: 0.4s;
    background-color: white;
    color: black;
    border: 1px solid lightgray;
    height: 50px;
}

.buttonback:hover 
{
    background-color: gray; 
    color: white;
}

th
{
	padding-top: 20px;
	padding-bottom: 20px;
	border: none;
	background-color: lightgray;
    font-family: sans-serif;
}

table, td
{
	border: none;
    border-bottom: 1px solid #ddd;
}


tr:hover 
{
    background-color: lightgray;
}

a
{
	color: black;
	animation: fadeIn .5s;
}
a:hover
{
	background-color: #ADD8E6;
	color: black;
	transition: .1s;
}
</style>


<!DOCTYPE html>
<html>
<head>
	<title>RECORDS</title>
    <form action="index.php" method="post"><input class="buttonback" type="submit"  value="HOME"></form>
</head>
<body>
    <h1>USER DATABASE</h1>
<?php
$mysql = new mysqli('localhost', 'root', '','product_website');

$sql = "SELECT * FROM register";
$result = $mysql->query($sql);	

if ($result->num_rows > 0)
	{
		echo "<table border = '1'>
		<tr>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th>PASSWORD</th>
		</tr>";
			
		while($row = $result->fetch_assoc())
		{
			echo 
			"<tr>
			<td>".$row["username"]."</td>
			<td>".$row["email"]."</td>
			<td>".$row["password"]."</td>
		</tr>";	
		}
		echo "</table>";
	}	
else
	{	
		echo "0 results";
	}		
	$mysql->close();

?>
<h2><button onclick="document.location='index-admin.php'" href= "index-admin.php"class="buttonLogOut">LOG OUT</button></h2>
</body>
</html>