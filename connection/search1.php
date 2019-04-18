<?php  
  require('db_connect.php');
  $dh='';
  $output = '';
  $var = $_POST['value'];

  if($var == 1){
      if(isset($_POST["query"]))  
 {  
        
      $query = "SELECT * FROM t_info WHERE Name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($link,$query); 
      $output = '<ul class="list-unstyled">';  


      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["Name"].'</li>';  
                
           }  
      }  
      else  
      {  
           $output .= '<li>Name Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }   
  }
   
 ?>  