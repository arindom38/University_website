<?php 
	
	require('db_connect.php');
	session_start();

	if (isset($_POST['submit'])) {
		if (empty($_POST['emailid']) || empty($_POST['passw'])) {
			echo "invalid username and password!!";
		}
		else {	

			$email = mysqli_real_escape_string($link, $_POST['emailid']);
			$password = mysqli_real_escape_string($link, $_POST['passw']);

			$sql = "SELECT * FROM `signup` WHERE email = '$email' AND password = '$password'";
			
			$qry = mysqli_query($link,$sql);
		
			$result = mysqli_fetch_array($qry);

			if ($result) {
				while ($result) {
					$_SESSION['f_name'] = $result['first_name'];
					$_SESSION['l_name'] = $result['last_name'];
					$_SESSION['email_name'] = $result['email'];
					$_SESSION['b_dat'] = $result['birthdate'];
					$_SESSION['dept_name'] = $result['department'];
					$_SESSION['cntry_name'] = $result['country'];


				header('Location:../profile.php?log=value');
				exit();
				}
				
			}
			else{
				header('Location:../index.php?value=error');
				exit();
			}

		mysqli_close($link);	
	}
}


 ?>