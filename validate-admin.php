<?php
	//prompt function
    function alertmsg($alt_msg){
        echo("<script type='text/javascript'> 
			alert('".$alt_msg."'); </script>");
    }
?>

<?php

include_once('sql/dbconnect.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$aadhar = test_input($_POST["AdminAadhar"]);
	$password = test_input($_POST["AdminPassword"]);
    echo $aadhar;
    echo $password;
	
    $sql = "SELECT * FROM admin where aadharno = '$aadhar'
            and password = '$password'";
    
    $result = mysqli_query($conn, $sql);
	
    if (mysqli_num_rows($result) == 1) {
		echo '<script type="text/javascript">';
		echo 'window.location.href = "admin-home.php";';
		echo '</script>';
	}
	else {
		$msg="Enter valid credentials";
        alertmsg($msg);
		echo '<script type="text/javascript">';
		echo 'window.location.href = "admin-login.html";';
		echo '</script>';
	}
}
else {
    $msg="Credential value(/s) is(/are) missing";
    alertmsg($msg);
	echo '<script type="text/javascript">';
	echo 'window.location.href = "SLogin.html";';
	echo '</script>';
}

?>
