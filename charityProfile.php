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
			
					<!--login details-->
					<h3>
						<p class = "text-center">Enter your login details</p>
					</h3>
					<br/>
						<div class = "center-block">
							<img src = "Charity.jpg" class = "img-circle center-block" width = "200" height = "200"/>
						</div>
					<br/>
							<center>
								<form action = "login.php" method = "POST" class = "form-horizontal" role = "form">
									<div class = "form-group">
										<label for ="username" class = "col-sm-5 control-label">Username :</label>
											<div class ="col-sm-3">
												<input type = "text" class = "form-control" name = "username" required = "required" placeholder = "Account Username">
											</div>
									</div>
									<div class = "form-group">
										<label for ="password" class = "col-sm-5 control-label">Password :</label>
											<div class ="col-sm-3">
												<input type = "password" class = "form-control" name = "password" required = "required" placeholder = "Account Password" maxlength = "25">
											</div>
									</div>
								
									<div class = "form-group">
										<div class = "col-sm-offset-3">
											<button type = "submit" name = "login" class = "btn btn-default">Sign In</button>
										</div>
									</div>
								</form>
								
							</center>
		</body>
	</html>