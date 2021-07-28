<?php
	// start session
	session_start();

    // Load Database
    require_once('sql/dbconnect.php');
    require_once('validation-functions.php');

	//prompt function
    function alertmsg($alt_msg){
        echo("<script type='text/javascript'> 
			alert('".$alt_msg."'); </script>");
    }
?>

<?php



if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$aadhar = test_input($_POST["UserAadhar"]);
	$password = test_input($_POST["UserPassword"]);
    echo $aadhar;
    echo $password;
	
    $sql = "SELECT CONCAT(fname, ' ', sname) AS name FROM user WHERE aadharno = '$aadhar'
            and password = '$password'";
    
    $result = mysqli_query($conn, $sql);
	
    if (mysqli_num_rows($result) == 1) {

		while($row = mysqli_fetch_assoc($result)) {
			$name = $row["name"];
		}

		$_SESSION['uservalid'] = true;
		$_SESSION['userusername'] = $name;
		$_SESSION['useraadhar'] = $aadhar;

		echo '<script type="text/javascript">';
		echo 'window.location.href = "user-home.php";';
		echo '</script>';
	}
	else {
		$msg="Enter valid credentials";
        alertmsg($msg);
		echo '<script type="text/javascript">';
		echo 'window.location.href = "user-login.html";';
		echo '</script>';
	}
}
else {
    $msg="Credential value(/s) is(/are) missing";
    alertmsg($msg);
	echo '<script type="text/javascript">';
	echo 'window.location.href = "user-login.html";';
	echo '</script>';
}

?>
