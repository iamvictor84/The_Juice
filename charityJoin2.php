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
			<!-- registration form 2-->
				<form action = "register.php" method = "POST" role = "form" class = "form-horizontal">
					<div class ="form-group">
								<label for username = "username" class = "col-sm-3 control-label">Username :</label>
									<div class = "col-sm-6">
										<input type = "text"  class = "form-control"  required name = "username" placeholder = "Choose a username for your account"/>
									</div>
					</div>
					
					<div class ="form-group">
								<label for password1 = "password1" class = "col-sm-3 control-label">Password :</label>
									<div class = "col-sm-6">
									<!--do the input without form-control and see result-->
										<input type = "password"  class = "form-control" required name = "password1" placeholder = "Choose a password for your account"/>
									</div>
					</div>
					
					<div class ="form-group">
						<label for password2 = "password2" class = "col-sm-3 control-label">Retype Password :</label>
							<div class = "col-sm-6">
								<input type = "password"  class = "form-control" required name = "password2" placeholder = "Re-enter password"/>
							</div>
					</div>
	
					<div class = "form-group">
						<div class = "col-sm-offset-4 col-sm-4">
								<button type = "submit" name = "finish" class = "btn btn-default btn-lg btn-block"> Finish</button>
						<div>
					</div>
				</form>
			
		</body>
</html>