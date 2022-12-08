<?php 

session_start(); 
include "db.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	
	$_SESSION['login'] = 0;
	$uname = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE email='$uname' AND pass='$pass'";
        $result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) >= 1) {
			$row = mysqli_fetch_assoc($result);
			
			$_SESSION['f_name'] = $row["f_name"];
			$_SESSION['login'] = 1;
			echo '<script>alert("Succefully Logged In")</script>';
			echo '<script type="text/javascript">
           window.location = "http://localhost/tourism/index.php"
      </script>';
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
        }
    }
}