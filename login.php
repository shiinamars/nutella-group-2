<?php 

$mysql=new mysqli('localhost','root','','product_website');

session_start();
	if(isset($_POST['submit']))
	{
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($mysql, $username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($mysql, $password);

		$query = "SELECT * FROM register WHERE username ='$username' and password= '" .md5($password)."'";
		$result = mysqli_query($mysql, $query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
			if($rows==1)
			{
				while ($rows = $result->fetch_assoc()) 
				{ 

                    $_SESSION['email'] = $rows["email"];
                    $_SESSION['username'] = $rows["username"];
					$_SESSION['password'] = $rows["password"];
                    header("Location: sample.php");
                    
				}
			}
			else
			{
				echo "<p>USERNAME OR PASSWORD IS INCORRECT</p>";
				header("Location: index.php");
			}
	}
			else
			{
			}
?>		