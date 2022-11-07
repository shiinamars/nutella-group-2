<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="admin-style.css" />
  </head>
  <body>
    <section>
      <div class="color"></div>
      <div class="color"></div>
      <div class="color"></div>
      <div class="box">
        <div class="container">
          <div class="form">
            <h2>Welcome Admin</h2>
            <form action="index-admin.php" method="post">
              <div class="inputBox">
                <input type="text" name="username" placeholder="Username" />
              </div>
              <div class="inputBox">
                <input type="password" name="password" placeholder="Password" />
              </div>
              <div class="inputBox">
                <input type="submit" name="submit" value="Login" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

<?php 

$mysql=new mysqli('localhost','root','','user_admin');

session_start();
	if(isset($_POST['submit']))
	{
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($mysql, $username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($mysql, $password);

		$query = "SELECT * FROM useradmin WHERE username ='$username' and password= '" .md5($password)."'";
		$result = mysqli_query($mysql, $query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
			if($rows==1)
			{
				while ($rows = $result->fetch_assoc()) 
				{ 
					
					$_SESSION['username'] = $rows["username"];
					$_SESSION['password'] = $rows["password"];

					header("Location: users.php");
				}
			}
			else
			{
				echo "<p>USERNAME OR PASSWORD IS INCORRECT.</p>";
			}
	}
			else
			{
			}
?>		
