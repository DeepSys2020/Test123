<?php 
include_once('autoload.php');

$_SESSION['LPage'] = '';

	$latitude = '';
	$longitude = '';

	$unique_id = time().mt_rand(0,9);
	$_SESSION['unique_id'] = $unique_id;

	$_SESSION['latitude'] = $_POST['latitude'];
	$_SESSION['longitude'] = $_POST['longitude'];
	
	//$latitude = $_SESSION['latitude'];
	//$longitude = $_SESSION['longitude'];


	date_default_timezone_set('Asia/Kolkata');
	$STime = date("Y-m-d H:i:s");
	$_SESSION['STime']= $STime;

  $mysqli->query("INSERT INTO ".$PtabName." (unique_id, status,STime,latitude,longitude) VALUES (".$unique_id.", 'S', '".$STime."','".$latitude."','".$longitude."')");

  //header("location:Intro_1.php");

?>