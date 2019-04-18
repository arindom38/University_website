<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>It form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row container-fluid head">
		<div class="row container-fluid navcolor"> 
			

				<nav class="navabr navbar-inverse navbar-fixed-top">
					<ul class="nav navbar-nav navbar-left col-sm-8" style="color:white;">
					<li class="navbar-header col-sm-2">
							 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span> 
						      </button>
						
							<a href="#" style="padding:0px;"><img src="images/ruet.png" class="img-responsive" height="50" width="85.38"></a>
				
					</li>
					<li class="col-sm-4 nav navbar-nav">
					<form class="form-inline">
					<div class="form-group">
						<input type="text" name="search" class="search" placeholder="search.."> 
					</div>
					</form>
					
					</li>
					<li class="col-sm-6" style="margin-top:40px; font-size:15px; font-family:Broadway;">
						<!-- <span class="text-capitalize text-justify list-inline"> -->Rajshahi University of engineering and technology
					</li>
					</ul>
					<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right col-sm-4" style="color:white; margin-top:25px;">
							
							<li><a href="index.php" style="font-weight:bolder;">Home</a></li>		
						
							<li class="navbr-right dropdown">
							<a class="dropdown-toggle"  data-toggle="dropdown" href="#" style="font-weight:bolder;"><span class="glyphicon glyphicon-log-in"> Login</span></a>
								<ul class="dropdown-menu">
									<li class="container-fluid" style="width:250px;">
										<form class="form-group" action="connection/login.php" method="post">
											<label for="emailid" style="color:black;">Email:</label><input type="email" name="emailid" id="emailid" class="form-control" placeholder="Enter email" required="">
											<label for="pass" style="color:black;">Password:</label><input type="password" name="passw" id="pass" class="form-control" placeholder="Enter password" required=""><br>
											<label class="control-label" style="color:red;" id="error">
											    	<?php 
											    		
											    		if (isset($_GET['value'])) {
											    			echo "invalid email or password!!";

											    			// $_GET['value'] = null;
											    		}
											    		
											    	 ?>
											     </label>
											<label class="control-label" style="color:lightblue;"><a href="#">Forget password?</a></label><br>
											<button class="btn btn-success btn-sm" type="submit" name="submit">Login</button>
											<button  type="reset" class="btn btn-warning btn-sm">Reset</button>
										</form>
									</li>
								</ul>
							</li>
							
							<li class="navbr-right"><a href="signupfile.php" id="sign"><span class="glyphicon glyphicon-user"> Signup</span></a></li>
										
					</ul>
					</div>
				</nav>
		</div>
	</div>
	<!-- body -->
	<div class="row" style="margin-top:100px;">
		<div class="container-fluid contain" style="padding-bottom:200px;">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6" style="border-radius:8px; background-color:rgba(61,100,175,.9); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
				
				<form class="form-horizontal" action="connection/login.php" method="post">
					<div class="col-sm-12">
					<h3 style="text-align:center;"><h2 class="text-capitalize" style="color:white; font-family:arial; padding-bottom:10px;text-shadow:2px 2px 4px black;margin;">Log in</h3>
				</div>
		      		<div class="form-group">
		      			<label class="control-label col-sm-2" for="email" style="font-weight:bolder;">Email:</label>
		      			<div class="col-sm-10">
		      			<input type="email" class="form-control" name="emailid" placeholder="Enter Email">
		      			</div>
		      		</div>
		      		 <div class="form-group">
						<label class="control-label col-sm-2" for="pwd">Password</label>
							<div class="col-sm-10"> 
							    <input type="password" name="passw" class="form-control" placeholder="Enter password"><br>
							    
							    <label class="control-label" style="color:red;" id="error">
							    	<?php 
							    		if (isset($_GET['value'])) {
							    			echo "invalid email or password!!";

							    			// exit();
							    		}

							    	 ?>
							     </label>
							</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-8">
					     <label class="control-label" ><a href="#" style="color:white;">Forget password?</a></label>
					     </div>
					</div>
					<div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-success" name="submit">Login</button>
					      <button type="reset" class="btn btn-default">Reset</button>
					    </div>
					  </div>
				</form>
				
			</div>
				<div class="col-sm-3">
					
				</div>
			</div>
		</div>
	
<!-- footer -->
	<div class="row container-fluid" align="bottom">
			<div class="col-sm-12" style="background:rgba(0,0,0,0.9);margin:0px;">
				<span style="text-align:center;font-family:Arial;color:white;"><h4>copyright@arindom</h4></span>
			</div>
		</div>
</body>
</html>