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
				<!--body of funds page-->
					<h4>
						<?php 
							if (empty($_SESSION['userSession'])){
								echo "<p align = 'center'><span class = 'label label-warning'>Oops seems like you are not logged in yet!</span></p>"."<br/>";
								echo "<p align = 'center'><a href = 'charityProfile.php'>Log In</a> OR <a href = 'charityJoin.php'>Register</a></p>";
								
							}else{
								echo "Signed in as : ".$_SESSION['userSession']. "| <a href = 'logout.php'>Log Out</a>";
								displayItem();
							}
					
								function displayItem() 
									{
									?><center>
											<form action = "#" method = "POST" role = "form" class = "form-horizontal">
												<label for "Donations"> Help raise a starter fund :</label>
													<radio class = "radio">
														<input type = "radio" name = "donations" checked >$1 - $29
													</radio>
													<radio class = "radio">
														<input type = "radio" name = "donations" > $30 - $70
													</radio>
													<radio class = "radio">
														<input type = "radio" name = "donations" > $71 - $100
													</radio>
											</form>
										</center>
									<?php
						
						
					}
						
						?>
					</h4>
						
		</body>
</html>