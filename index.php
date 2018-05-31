<?php  
	include_once("config.php");
	include_once("model/Database.php");
	include_once("controller/StudentExampleController.php");

	Database::$hostname = $HOST_NAME;
	Database::$username = $USER_NAME;
	Database::$password = $PASSWORD;
	Database::$dbname = $DBNAME;

	$studentController = new StudentController();
	$studentController->invoke();
?>