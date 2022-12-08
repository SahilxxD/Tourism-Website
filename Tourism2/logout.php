<?php 
include "login.php";
$_SESSION['login'] = 0;
echo '<script>alert("Succefully Logged Out")</script>';
echo '<script type="text/javascript">
           window.location = "http://localhost/tourism/index.php"
      </script>';
?>