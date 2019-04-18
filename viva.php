<?php
session_start();
 $var = 4;
 $_SESSION['value'] = $var;
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>  
</head>
<body>
  <button id="plus" onclick="myFunction1()" class="btn btn-success">+</button>
    <button id="minus" onclick="mydeleteFunction1()" class="btn btn-success">-</button>
    <p><h4><li>List of the memebers of viva Board</li></h4></p>
    <div class="col-sm-12" class="table-content">
      <table align="center" id="myTable1" class="table">
         <tr>  
          <th>Sl.No</th>  
          <th>Name of Teachers</th>
          <th>No. of student</th>
        </tr>
    </table>


    </div>
<script>
  var cnt1 = 0;

  function myFunction1() {
    var table = document.getElementById("myTable1");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cnt1++;

    
    cell1.innerHTML = "" + cnt1;
    cell2.innerHTML = "<textarea  name='Name' id='Name' class='form-control' placeholder='Enter Any Name'></textarea>" +
      "<div class='auto-complete'></div>"
    cell3.innerHTML =  "<textarea type='text' name='stdno' id='credit' class='form-control name-input'></textarea>";
   
  }

  function mydeleteFunction1(){
       document.getElementById("myTable1").deleteRow(cnt1);
       cnt1--;
    }
</script>

<script type="text/javascript" src="jj1.js"></script>
<!-- <script type="text/javascript" src="buttonfunc.js"></script> -->
</body>
</html>