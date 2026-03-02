<?php 
include('config1.php');
include('function1.php');

if(isset($_REQUEST['submit'])=='submit') {
	$url = $_REQUEST['url'];
	$username= $_REQUEST['username'];
	$password = $_REQUEST['password'];
 

	if(!empty($url) && !empty($username) &&  !empty($password)){
			$register_date = date('d-m-y h:i:s');
					$BrowserAgent = BrowserAgent();
					$user_ip = UserIP();

					$sql = "INSERT INTO tbl_password(url, username, password, register_date, browser_agent, user_ip , status , flag)VALUES('$url', '$username', '$password', '$register_date', '$BrowserAgent', '$user_ip', 1, 0)";

						if(mysqli_query($conn, $sql)) {
						$_SESSION['success'] = "Thank you!";
						header("location:generate.php");	
						}else {
							$_SESSION['error'] = "Your record not insert into database please try again";
							header("location:generate.php");
						}
	}else {
		$_SESSION['error'] = "Fill the all blank input";
		header("location:generate.php");
		
	}
}


?>