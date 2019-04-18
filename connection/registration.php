<?php  
	
	require('db_connect.php');
	session_start();
 


// Escape user inputs for security
$f_name = mysqli_real_escape_string($link, $_POST['fname']);
$l_name = mysqli_real_escape_string($link, $_POST['sname']);
$u_email = mysqli_real_escape_string($link, $_POST['email']);
$u_address = mysqli_real_escape_string($link, $_POST['address']);
$u_gender = mysqli_real_escape_string($link, $_POST['gender']);
$u_birthday = mysqli_real_escape_string($link, $_POST['bdate']);
$u_dept = mysqli_real_escape_string($link, $_POST['dept']);
$u_series = mysqli_real_escape_string($link, $_POST['series']);
$p_name = mysqli_real_escape_string($link, $_POST['project']);
$p_decrp = mysqli_real_escape_string($link, $_POST['descrp']);
$roll_no = mysqli_real_escape_string($link, $_POST['roll']);

$_SESSION['fname']= $f_name;
$_SESSION['lname']=$l_name;
$_SESSION['u_email']= $u_email;
// Attempt insert query execution
$get_email = "SELECT * from signup where email = '$email'";

$sql = "INSERT INTO `registration`(`f_name`, `s_name`, `emailid`, `address`, `dept`, `series`, `bdate`, `rol_no`, `gender`, `p_name`, `p_decrp`) VALUES ('$f_name','$l_name','$u_email','$u_address','$_dept','$u_series','$u_birthday','$roll_no','$u_gender','$p_name','$p_decrp')";


if ($result = mysqli_query($link,$get_email)) {
	if (mysqli_num_rows($result)>0) {
		echo "<script>alert('This email id is used , ply try another!') 
	</script>";

	exit();

		}
	}

if(mysqli_query($link, $sql)){
	if (!$_REQUEST['redirect']) {
		// $_SESSION['u_name']= $f_name;
		// $_SESSION['s_name']=$l_name;
		// $_SESSION['u_email']= $u_email;
		// $_SESSION['u_addr']=$u_address;
		// $_SESSION['U_gend']= $u_gender;
		// $_SESSION['u_bdt']=$u_birthday;
		// $_SESSION['u_dpt']= $u_dept;
		// $_SESSION['u_sers']=$u_series;
		// $_SESSION['u_pname']= $p_name;
		// $_SESSION['u_pdcrp']=$p_decrp;
		// $_SESSION['p_rol']= $roll_no;
			
     header('Location:../profile.php?reg=value');
	 exit();
	}
	

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>