<!DOCTYPE html>
	<head>
		<title>iCharity</title>
		<meta name = "author" content = "icanoc"/>
		<meta name = "description" content = "Construction company"/>
		<meta name="viewport" content="width=device-width, initial- scale=1.0"> 
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel = "stylesheet" type = "text/css" href = "charity.css"/>
		<link href ="js/bootstrap.min.js" rel = "script">
	</head>
		<body>
			<header>
				<nav>
					<div class = "nav_content">				
						<div id = "nav-links">
								<ul>
									<li><a href = "charityFunds.php"> Funds</a></li> |
									<li><a href = "charityProfile.php"> Profile</a></li> |
									<li><a href = "charityJoin.php"> Join</a></li> |
									<li><a href = "#">About</a></li>	
								</ul>
						</div>
							<div class = "head_content">
								<div class = "home-img">
									<a href = "charityHome.php">
										<img src = "another.png" width = "200" height = "50" alt = "Charity_Image"/>
									</a>
								</div>	
							</div>
					</div>
				</nav>
			</header>
				<br/><br/>
					<p class = "text-center">
						<b>Fill in the following to register with us</b>
					</p>
						<form action = "register.php" method = "POST" role = "form" class = "form-horizontal">
							<div class ="form-group">
								<label for fname = "firstname" class = "col-sm-2 control-label">First Name :</label>
									<div class = "col-sm-8">
									<!--do the input without form-control and see result-->
										<input type = "text"  class = "form-control" required name = "fname" placeholder = "Okoro"/>
									</div>
							</div>
							
							<div class = "form-group">
								<label for lname = "lastname" class = "col-sm-2 control-label"> Last Name :</label>
									<div class = "col-sm-8">
										<input type = "text" class = "form-control" name = "lname"  placeholder = "Nnaji"/>
									</div>
							</div>
							
							<div class = "form-group">
								<label for email = "email" class = "col-sm-2 control-label"> Email :</label>
									<div class = "col-sm-8">
										<input type = "text" class = "form-control" name = "email"  placeholder = "JohnDoe@example.com"/>
									</div>
							</div>
							
							<div class = "form-group">
								<label for email = "phone" class = "col-sm-2 control-label"> Phone :</label>
									<div class = "col-sm-8">
										<input type = "text" class = "form-control" name = "phone"  placeholder = "i.e. +234-000-000[max 11 digits]"/>
									</div>
							</div>
							
						<center>
							<div class = "form-group">
								<label for gender = "gender">Gender :</label>
									<radio class ="radio-inline">
										<input type = "radio" name = "gender" value = "male" checked> Male
									</radio>
									<radio class = "radio-inline">
										<input type = "radio" name = "gender" value = "female">Female
									</radio>
							</div>
						
							<div class = "form-group">
								<label class = "col-sm-offset-2 col-sm-8">Who do you work with :
									<select class = "form-control" name = "personality">
										<option>An Organisation</option>
										<option>A group</option>
										<option>Government body</option>
										<option>None</option>
									</select>
								</label>
							</div>
							
							<div class = "form-group">
								<label class = "col-sm-offset-2 col-sm-8">How do you wish to support us :
									<select class = "form-control" name = "donations">
										<option>Donations [Tokens] </option>
										<option>Food & Materials</option>
										<option>Physical aid</option>
										<option>Health Care items</option>
									</select>
								</label>
							</div>
								<br/>
							<div class = "form-group">
								<div class = "col-sm-offset-4 col-sm-4">
									<button type = "submit" name = "continue" class = "btn btn-default btn-lg btn-block"> Continue</button>
								<div>
							</div>
										
						</center>		
					</form>
					
		</body>
	</html>