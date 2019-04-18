<?php
session_start();
 $var = 3;
 $_SESSION['value'] = $var;

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>
  <button id="plus" onclick="myFunction3()" class="btn btn-success">+</button>
    <button id="minus" onclick="mydeleteFunction3()" class="btn btn-success">-</button>
    <p><h4><li>List of the  teachers for class test</li></h4></p>
    <div class="col-sm-12" class="table-content">
      <table align="center" id="myTable3" class="table">
         <tr>  
          <th>Course No</th>  
          <th>Name of Teachers</th>
          <th>No. of student</th>
          <th>No. of test</th>
        </tr>
      </table>


    </div> 
<script>
  var cnt3 = 0;
  
  function myFunction3() {
    var table = document.getElementById("myTable3");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);

    cnt3++;
    
    cell1.innerHTML =  "<textarea  name='Name' id='Name' class='form-control' placeholder='Enter Any Name'></textarea>"+"<div class='auto-complete'></div>"
    cell2.innerHTML = "<textarea  name='Name' id='Name' class='form-control' placeholder='Enter Any Name'></textarea>" +
      "<div class='auto-complete'></div>"
    cell3.innerHTML = "<textarea type='text' name='paperNum' id='credit' class='form-control name-input'></textarea>";
    cell4.innerHTML = "<textarea type='text' name='paperNum' id='stdno' class='form-control name-input'></textarea>";
  }

  function mydeleteFunction3(){
       document.getElementById("myTable3").deleteRow(cnt3);
       cnt3--;
    }
</script>

<script type="text/javascript" src="jj3.js"></script>
<!-- <script type="text/javascript" src="buttonfunc.js"></script> -->
</body>
</html>