
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

</head>
<body style="background-color:#f2f2f2" id="mbody">

<div class="col-sm-12 container-fluid" id="head1" style="background:fixed;">
<nav class="navbar navbar-inverse navbar-fixed-top">
	<header class="col-sm-12 container-fluid" style="background-color: #303036">
		<div class="col-sm-1 nav navbar-nav">
			<button id="cmd" onclick="PrintContent()" class="btn btn-danger" style="padding-top:24px;">Create Pdf</button>
		 </div>
		<div class="col-sm-8"><h4 align="center" color="white" style="color:white;padding-left:100px;">    Rajshahi University of Engieneering and Technology, CSE Department</h4></div>
		<div class="col-sm-3 nav navbar-nav">
			<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:bolder;font-color:white;">Table type<span class="caret"></span></a>
								<ul class="dropdown-menu" style="align:center;">
									<li><button class="btn btn btn-success" onclick="makediv(1)" id="addtable" style="align:center;"> Moderator</button></li>
									<li><button class="btn btn btn-success" onclick="makediv(2)" id="addtable" style="align:center;">Viva</button></li>
									<li><button class="btn btn btn-success" onclick="makediv(3)" id="addtable" style="align:center;">Sessional class</button></li>
									<li><button class="btn btn btn-success" onclick="makediv(4)" id="addtable" style="align:center;">class test</button></li>
								</ul>
							</li>
		</div>
	</header>
	</nav>
</div>
<div class="col-sm-12" style="padding-top:40px;">
	<div class="col-sm-12" id="mydiv">
		<h4 style="font-style:italic;" align="center">Heaven's light on guide</h4>
		<h2 align="center">Rajshahi University of Engieneering and Technology(RUET),Rajshahi 6204,Bangladesh</h2>
		<form class="form-inline">
		 <h4 align="center">B.Sc Engineering <input class="form-inline"  type="text" name="year" size="4" maxlength="4">
      year <input type="text" class="form-inline" name="sem" size="4" maxlength="4">
      Semester Examination <input type="text" class="form-inline" name="sal" size="4" maxlength="4"></h4>
      </form>
       <h3 align="center" id="dep">Department of Computer Science and Engineering</h3>
     	
       
	</div>
</div>

   <script>
	 function PrintContent(){
   		window.disblebutton();
   		window.print();
        window.enablebutton();
       
  }

    function disblebutton(){

     $("[id=plus]").hide();
     $("[id=minus]").hide();
     $("[id=head1]").hide();

}


    function enablebutton(){

   $("[id=plus]").show();
   $("[id=minus]").show(); 	
   $("[id=head1]").show();

   	}
    </script>

<script>
var c = 0;
function makediv (a){
	var mdiv= "sdiv";
	mdiv = mdiv.concat(c);
	c++;
	
var iDiv = document.createElement('div');
iDiv.id = mdiv;
iDiv.className = 'col-sm-12';
var parentdiv = document.getElementById("mydiv");
parentdiv.appendChild(iDiv);
	 if (a == 1) {
$("#"+mdiv).load("moderator.php");		
	}
	else if(a == 2)
	{
$("#"+mdiv).load("viva.php");
	}
	else if(a == 3)
	{
$("#"+mdiv).load("class.php");
	}
	else if(a == 4)
	{
$("#"+mdiv).load("classtest.php");
	}
	else {
		alert ("No such table found!!");
	}	
}     

</script>
<footer class="col-sm-12" style="background-color:#303036;border:1px solid #303036;"><h4 align="center" style="color:white;background-color:#303036;font-color:white;">copyright&copyruet.bd</h4></footer>
</body>

</html>