<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jspdf.min.js"></script>
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
						<span class="text-capitalize text-justify list-inline">Rajshahi University of engineering and technology</span>
					</li>
					</ul>
					<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right col-sm-4" style="color:white; margin-top:25px;">
							
							<li><a href="index.php" style="font-weight:bolder;">Home</a></li>		
							<li class="dropdown">
								<a  href="home.php" style="font-weight:bolder;">Table<span class="caret"></span></a>
							</li>
							<li class="navbr-right">
							<a href="connection/logout.php" style="font-weight:bolder;"><span class="glyphicon glyphicon-log-out"> Logout</span></a>
							</li>
							
							<li class="navbr-right"><a href="signupfile.php" id="sign"><span class="glyphicon glyphicon-user"> Signup</span></a></li>
										
					</ul>
					</div>
				</nav>
		</div>
	</div>
	<div class="row container-fluid" style="margin-top:100px;">
	<!-- user information -->
		<div class="col-sm-4 contain">
			<div class="well" style="color:black;">
				<h3 style="color:black;"><?php
					if (isset($_GET['reg'])) {
					 	echo "Register ";
					 } 
					 elseif (isset($_GET['log'])) {
					 	echo "Log In ";
					 }
					 elseif (isset($_GET['sign'])) {
					 	echo "Sign Up ";
					 }
				 ?> succesful.</h3><h4> Welcome</h4>
			</div>
			<div class="well" style="color:black;">
				<h4 style="color:black;">Name: <?php 
				$f_name	= $_SESSION['f_name'];
				$l_name	= $_SESSION['l_name'];
				echo " $f_name"." "."$l_name"; ?></h4>
			</div>
			<div class="well" style="color:black;">
				<h4 style="color:black;">Email: <?php 
				$email	= $_SESSION['email_name'];
				echo " $email";  ?></h4>
			</div>
			<div class="well" style="color:black;">
				<h4 style="color:black;">Birthdate: <?php 
				$bdate	= $_SESSION['b_dat'];
				echo " $bdate";  ?></h4>
			</div>
			<div class="well" style="color:black;">
				<h4 style="color:black;">Department: <?php 
				$dept	= $_SESSION['dept_name'];
				echo " $dept";  ?></h4>
			</div>
			<div class="well" style="color:black;">
				<h4 style="color:black;">Country: <?php 
				$cntry	= $_SESSION['cntry_name'];
				echo " $cntry";  ?></h4>
			</div>
			
	   </div>
	   <!-- nevigation tabs -->
		<div class="col-sm-8">
			<ul class="nav nav-tabs nav-inverse nav-justified">
			    <li class="active"><a data-toggle="tab" href="#blog">Information</a></li>
			    <li><a data-toggle="tab" href="#menu1">registration</a></li>
			    <li><a data-toggle="tab" href="#menu2">submission</a></li>
			    <li><a data-toggle="tab" href="#menu3">FORM INFO</a></li>
  			</ul>

  <div class="tab-content">
    <div id="blog" class="tab-pane fade in active">
    <div class="col-sm-12" style=" id="pk">
    <h3 align="center" id="dep">Department of Computer Science and Engineering</h3>
     </div> 

    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="col-sm-12" style="border-radius:8px; background-color:rgba(61,100,175,.9); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

				<form class="form-horizontal" style="color:white;padding-right:10px;" action="connection/registration.php" method="post">
					  <div class="col-sm-12" style="text-align:center;"><h2 class="text-capitalize" style="color:white; font-family:arial; padding-bottom:10px;text-shadow:2px 2px 4px black">Registration Form</h2></div>
					  <div class="form-group">

					    <label class="control-label col-sm-2" for="email" style="font-weight:bolder;">First Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="fname" placeholder="Enter first name" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="pwd">Second Name</label>
					    <div class="col-sm-10"> 
					      <input type="text" class="form-control" name="sname" placeholder="Enter second name" required="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="pwd">Email</label>
					    <div class="col-sm-10"> 
					      <input type="email" class="form-control" name="email" placeholder="Enter email">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="pwd">Address</label>
					    <div class="col-sm-10"> 
					      <textarea class="form-control" name="address" placeholder="Enter address" required=""></textarea>
					  	</div>
					  </div>
					  <div class="form-group"> 
					      <label class="control-label col-sm-2" for="deptid">Department</label>
					        <div class=" col-sm-2" id="deptid">
						        <select class="form-control" name="dept" required="">
						        			<option value="CSE">CSE</option>
						        			<option selected value="EEE">EEE</option>
						        			<option value="ETE">ETE</option>
						        			<option value="ME">ME</option>
						        			<option value="CE">CE</option>
						        			<option value="GCE">GCE</option>
						        			<option value="URP">URP</option>
						        			<option value="ECE">ECE</option>
						        </select>			       
					      </div>
					      <label class="control-label col-sm-2" for="deptid">Session</label>
					      	<div class=" col-sm-2" id="sessid">
						        <select class="form-control" name="series" required="">
						        			<option selected value="2016">2016</option>
						        			<option value="2015">2015</option>
						        			<option value="2014">2014</option>
						        			<option value="2013">2013</option>
						        			<option value="2012">2012</option>
						        			<option value="2011">2011</option>
						        			<option value="2010">2010</option>
						        			<option value="2009">2009</option>
						        </select>			       
					      </div>
					      <label class="control-label col-sm-2" for="deptid">Birthday</label>
					      	<div class="col-sm-2">
					      			<input type="date" name="bdate" class="form-control">
					      	</div>
					      
					      
					    </div>
					    <div class="form-group">
						    <label class="control-label col-sm-2" for="pwd">Roll No</label>
						    <div class="col-sm-10"> 
						      <input type="text" class="form-control" name="roll" placeholder="Enter roll number">
						    </div>
					  	</div>
					    <div class="form-group">
					    	  <label class="control-label col-sm-2">Gender</label>
					    		<div class="col-sm-9">
					      			<label class="control-label col-sm-2">Male</label>
					      			<div class="col-sm-1">
					      				<input type="radio" name="gender" value="male" class="form-control" checked>	
					      			</div>
					      			<label class="control-label col-sm-2">Female</label>
					      			<div class="col-sm-1">
					      				<input type="radio" name="gender" value="female" class="form-control">	
					      			</div>
					      			<label class="control-label col-sm-2">other</label>
					      			 <div class="col-sm-1">
					      				<input type="radio" name="gender" value="other" class="form-control">	
					      			</div>
					      	</div>
					    </div>
					    <div class="form-group">
						    <label class="control-label col-sm-2" for="pwd">Project name</label>
						    <div class="col-sm-10"> 
						      <input type="text" class="form-control" name="project" placeholder="Enter project name">
						    </div>
					  	</div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="pwd">Description</label>
					    <div class="col-sm-10"> 
					      <textarea class="form-control" name="descrp" placeholder="" required=""></textarea>
					  	</div>
					  </div>
					  
					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default" name="submit">Submit</button>
					      <button type="reset" class="btn btn-default">Reset</button>
					    </div>
					  </div>
				</form>
				</div>
    </div>
    <!-- menu2 -->
    <div id="menu2" class="tab-pane fade">
      <div class="well"><h3>Submit Project</h3></div>
      	<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
      		<div class="form-group">
      			<label class="control-label col-sm-2" for="email" style="font-weight:bolder;">Project name</label>
      			<div class="col-sm-10">
      			<input type="text" class="form-control" name="project" placeholder="Enter project name">
      			</div>
      		</div>
      		 <div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Description</label>
					<div class="col-sm-10"> 
					    <textarea class="form-control" name="descrp" placeholder="" required=""></textarea>
					</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Upload</label>
					<div class="col-sm-10"> 
					    <input type="file" class="filestyle form-control" name="file">
					</div>
			</div>

			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10"> 
					    <button class="btn btn-primary" type="submit">Upload</button>
					</div>
			</div>
	</form>
    </div>
   <!-- menu3 -->
    <div id="menu3" class="tab-pane fade">
      <div class="col-sm-12 container-fluid">
      		<div  class="well">Registration Form</div>
      		<div class="jumbotron">
      				<h3 class="text-center">IT FORM</h3>
	      		<div class="table-responsive">
	      			<table class="table">
	      				<thead>
	      					<tr>
	      						<th></th>
	      						<th></th>
	      					</tr>
	      				</thead>
	      				<tbody>
	      					<?php 
	      						// $r_fname = $_SESSION['u_name'];
	      						// $r_lname = $_SESSION['s_name'];
	      						// $r_email = $_SESSION['u_email'];
	      						// $r_addr = $_SESSION['u_addr'];
	      						// $r_gend = $_SESSION['u_gend'];
	      						// $r_bdt = $_SESSION['u_bdt'];
	      						// $r_dpt = $_SESSION['u_dpt'];
	      						// $r_sers = $_SESSION['u_sers'];
	      						// $r_pdescr = $_SESSION['u_pname'];
	      						// $r_roll = $_SESSION['u_pdcrp'];
	      						// $r_roll = $_SESSION['p_rol'];
	      						
	      					 ?>
	      					<tr>
	      						<td>Name:</td>
	      						<td><?php echo "my name"; ?></td>
	      					</tr>
	      					<tr>
	      						<td>Email:</td>
	      						<td><?php echo "my name"; ?></td>
	      					</tr>
	      					<tr>
	      						<td>Address:</td>
	      						<td><?php echo "my name"; ?></td>
	      					</tr>
	      					<tr>
	      						<td>Department:</td>
	      						<td><?php echo "my name"; ?></td>
	      					</tr>
	      					<tr>
	      						<td>Name:</td>
	      						<td><?php echo "my name"; ?></td>
	      					</tr>
	      					<tr>
	      						<td>Roll No:</td>
	      						<td><?php echo "my name"; ?></td>
	      					</tr>
	      					<tr>
	      						<td>Gender:</td>
	      						<td><?php echo "my name"; ?></td>
	      					</tr>
	      					<tr>
	      						<td>Project name::</td>
	      						<td><?php echo "my name"; ?></td>
	      					</tr>
	      					<tr>
	      						<td>Project description::</td>
	      						<td><?php echo "my name"; ?></td>
	      					</tr>
	      				</tbody>
	      			</table>
	      		</div>
	      	</div>	
      </div>
      
    </div>
  </div>
		</div>
</div>



</body>
</html>