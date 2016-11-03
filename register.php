<?php
	if (isset($_POST['continue']))
	{
		/*
		|---------------------------------------
		|//not used variables
		|#$fname = $_POST['fname'];
		|#$lname = $_POST['lname'];
		|#$email = $_POST['email'];
		|#$phone = $_POST['phone'];
		|#$gender = $_POST['gender'];
		|#$personality = $_POST['personality'];
		|#$donations = $_POST['donations'];
		|---------------------------------------
		*/
		include("charityJoin2.php");
	}
	if(isset($_POST['finish'])){
		if($_POST['password1'] == $_POST['password2']) 
		{
			mysql_connect("localhost", "root", "");
			mysql_select_db('charity');
			$sql = "INSERT INTO users (fname, lname, email, phone, gender,personality, donations, username, password ) VALUES ('$fname', '$lname' , '$email', '$phone' , '$gender' , '$personality', '$donations', '$username', '$password2')";
				//database to insert data into\
			$query = mysql_query($sql);
			var_dump($query);
				include("charityProfile.php");
			echo "<h3><p class = 'text-center'><span class = 'label label-success'>You have been successfully registered! Now you can login.</span></p><h3>";
			
		}else{
			include("charityJoin2.php");
			echo "<h3><p class = 'text-center'><span class = 'label label-danger'>Passwords do not match!</span></p></h3>";
		}

	}
	
		
?>