<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($username) || !empty($email) || !empty($password)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "product_website";
		
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		
		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
		}else {
			$SELECT = "SELECT email From register Where email = ? Limit 1";
			$INSERT = "INSERT Into register(username, email, password)";	
			
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows; 
			
			if($rnum==0){
				$stmt->close();
				$stmt = $conn->prepare("INSERT INTO register (username, email, password) VALUES (?, ?, ?)");
				$stmt->bind_param("sss", $username, $email, md5($password));
				$stmt->execute();
				echo "New Record Inserted Successfully";
				header("Location: index.php"); //need welcome page
			}else {
				echo "Email already used";
			}
			$stmt->close();
			$conn->close();
		}
	}else {
		echo "All field are required!";
		die();
	}

?> 