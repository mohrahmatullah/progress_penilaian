<?php require_once "class.php";
if(isset($_GET['id'])){
	$penilaian_progress = new penilaian_progress;
	$data = $penilaian_progress->get_row($_GET['id']);
	echo json_encode($data);
}