<?php
session_start();
 $var = 2;
 $_SESSION['value'] = $var;

?>
<!DOCTYPE html>

<html>
<head>
  <title></title>
</head>
<body>
   <button id="plus" onclick="myFunction2()" class="btn btn-success">+</button>
    <button id="minus" onclick="mydeleteFunction2()" class="btn btn-success">-</button>
    <p><h4><li>List of the teachers for Sessional class </li></h4></p>
    <div class="col-sm-12" class="table-content">
      <table align="center" id="myTable2" class="table">
         <tr>  
          <th>Course No</th>  
          <th>Name of Teachers</th>
          <th>Credit</th>
          <th>No. of student</th>
        </tr>
      </table>


    </div>
<script>
  var cnt2 = 0;
   
  function myFunction2() {
    var table = document.getElementById("myTable2");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);

    cnt2++;
    
    cell1.innerHTML = "<textarea type='text' name='course' id='pap' class='form-control name-input'></textarea>" +
      "<div class='auto-complete'></div>"
    cell2.innerHTML = "<textarea  name='Name' id='Name' class='form-control' placeholder='Enter Any Name'></textarea>" +
      "<div class='auto-complete'></div>"
    cell3.innerHTML = "<textarea type='text' name='paperNum' id='credit' class='form-control name-input'></textarea>";
    cell4.innerHTML = "<textarea type='text' name='paperNum' id='stdno' class='form-control name-input'></textarea>";
  }

  function mydeleteFunction2(){
       document.getElementById("myTable2").deleteRow(cnt2);
       cnt2--;
    }
</script>

<script type="text/javascript" src="jj2.js"></script>
<!-- <script type="text/javascript" src="buttonfunc.js"></script> -->
</body>
</html>