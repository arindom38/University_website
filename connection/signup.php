<?php  
	
	require('db_connect.php');
	session_start();
 


// Escape user inputs for security
$f_name = mysqli_real_escape_string($link, $_POST['fname']);
$l_name = mysqli_real_escape_string($link, $_POST['lname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$pass = mysqli_real_escape_string($link, $_POST['pass']);
$gender = mysqli_real_escape_string($link, $_POST['gender']);
$birthday = mysqli_real_escape_string($link, $_POST['bdate']);
$dept = mysqli_real_escape_string($link, $_POST['dept']);
$country = mysqli_real_escape_string($link, $_POST['country']);

$_SESSION['f_name']= $f_name;
$_SESSION['l_name']=$l_name;
// Attempt insert query execution
$get_email = "SELECT * from signup where email = '$email'";

$sql = "INSERT INTO `signup`(`first_name`, `last_name`, `email`, `password`, `gender`, `birthdate`, `department`, `country`) VALUES ('$f_name','$l_name','$email','$pass','$gender','$birthday','$dept','$country')";


if ($result = mysqli_query($link,$get_email)) {
	if (mysqli_num_rows($result)>0) {
		echo "<script>alert('This email id is used , ply try another!') 
	</script>";

	exit();

		}
	}

if(mysqli_query($link, $sql)){
     header('Location:../profile.php?sign=value');
	 exit();
	

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>