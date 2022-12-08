<?php 
include "db.php";
include "login.php";

if (isset($_POST['location']) && isset($_POST['guest'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = $_SESSION['f_name'];
	$pass = "dilip1973";
	$loc = validate($_POST['location']);
	$guest = validate($_POST['guest']);
	$arr_date = date('y-m-d',strtotime($_POST['arr_date']));
	$lev_date = $_POST['lev_date'];
	
	if (empty($loc)) {
		echo '<script>alert("location is must filled")</script>';
	    exit();
	}else if(empty($guest)){
        echo '<script>alert("Number of guest must be spacified")</script>';
	    exit();
	}else{
		$sql = "INSERT INTO booking (email, loc, guest, arr_date, lev_date) VALUES ('$uname','$loc','$guest','$arr_date','$lev_date')";
        if($conn->query($sql) === TRUE){
			echo '<script>alert("Ticket Booked Succefully")</script>';
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