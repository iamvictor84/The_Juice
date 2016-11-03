
<?php
 session_start();
	//variable to store error message;
	if(isset($_POST['login'])){
		if(empty($_POST['username']) || empty($_POST['password'])){
			$error = "Empty Fields Found!";
			echo $error;

		}else{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$username = stripcslashes($username);
			$password = stripcslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			//$connect = mysqli_connect("localhost", "root", "","demo");
			 mysql_connect("localhost", "root", "");
			//to avoid sql injection
			
			//select database
			mysql_select_db('charity');
			//sql query to fetch information from database
			$query = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ";
			$result = mysql_query($query);
			//var_dump($query);
				if(!$result){
					die("QUERY FAILED".mysql_error());
				}
				while ($row = mysql_fetch_array($result)){
					$db_username = $row['username'];
					$db_password = $row['password'];
				}
				if($username == $db_username && $password == $db_password){
					include("charityFunds.php");
					$_SESSION['userSession'] = $db_username;
				}else{
					include("charityProfile.php");
					echo "<h3><p class = 'text-center'><span class = 'label label-danger'>Username or password mismatch...Try Again!</span></p></h3>";
				}

				
		}
		mysql_close();


	}

?>

