<?php require_once "class.php";
if(empty($_POST['id'])){
	echo "Not found";
	die();
} else {
	$penilaian_progress = new penilaian_progress;
	$penilaian_progress->delete($_POST['id']);	
}