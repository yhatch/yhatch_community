<?php
session_start();
$timeout = 1200;

if(isset($_SESSION['timeout'])) {
    // See if the number of seconds since the last
    // visit is larger than the timeout period.
    $duration = time() - (int)$_SESSION['timeout'];
    if($duration > $timeout) {
        $_SESSION['name'] = "";
        $_SESSION['email'] = "";
	$_SESSION['user_id'] = "";

	echo "1";
    }else{
	echo "0";
    }	
}

?>
