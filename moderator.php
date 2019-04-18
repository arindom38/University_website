<?php
session_start();
 $var = 1;
 $_SESSION['value'] = $var;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	
    <button id="plus" onclick="myFunction()" class="btn btn-success">+</button>
    <button id="minus" onclick="mydeleteFunction()" class="btn btn-success">-</button>
    <p><h4><li>List of the  memebers of moderation Board</li></h4></p>
	<div class="table-content">
      <table align="center" id="myTable" class="table">
         <tr>
          <th>SI.No</th>  
          <th>Name of Teacher</th>  
          <th>Designation</th>
          <th>No of Papers</th>
        </tr>
      </table>


    </div>
<script>
  var cnt = 0;

  function myFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    cnt++;

    
    cell1.innerHTML = ""+ cnt;


    cell2.innerHTML = "<textarea  name='Name' id='Name' class='form-control' placeholder='Enter Any Name'></textarea>" +
      "<div class='auto-complete'></div>"

    cell3.innerHTML = "<textarea type='text' name='deg' id='deg' class='form-control name-input' placeholder='Designation'></textarea>"+ 
    "<div class='auto-Deg'></div>";
    cell4.innerHTML = "<textarea type='text' name='paperNum' id='pap' class='form-control name-input'></textarea>";
   
  }

  function mydeleteFunction(){
       document.getElementById("myTable").deleteRow(cnt);
       cnt--;
    }
</script>

<script type="text/javascript" src="jj.js"></script>
<!-- <script type="text/javascript" src="buttonfunc.js"></script> -->
</body>
</html>