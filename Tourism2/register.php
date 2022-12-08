<?php 
session_start(); 
include "db.php";

if (isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	
	$f_name = validate($_POST['f_name']);
    $l_name = validate($_POST['l_name']);
	$uname = validate($_POST['email']);
    $mobile = validate($_POST['mobile']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "INSERT INTO users (f_name, l_name, c_no, email, pass) VALUES ('$f_name','$l_name','$mobile','$uname','$pass')";
        if($conn->query($sql) === TRUE){
			echo '<script>alert("Registerd Succefully")</script>';
            echo '<script type="text/javascript">
           window.location = "http://localhost/tourism/index.php"
      </script>';
		   }
		   else
			{
			echo "Error" . $sql . "<br/>" . $conn->error;
			}
			$conn->close();
        }
				
}