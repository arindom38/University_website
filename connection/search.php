<?php  
  require('db_connect.php');
  session_start();
  $v = $_SESSION['value'];
  
  if($v == 3 || $v == 2){
       if(isset($_POST["query"]))  
 {  
      $dh='';
      $output = '';  
      $query = "SELECT t_info.name,course.course_no FROM t_info Inner join course WHERE Name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($link,$query); 
      $output = '<ul class="list-unstyled">';  


      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["name"].'</li>'; 
            $output .= '<li>'.$row["course_no"].'</li>'; 
                
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
 elseif ($v == 1 || $v == 4) {
      $dh='';
      $output = '';  
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
  
 ?>  