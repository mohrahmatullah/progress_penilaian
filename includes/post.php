<?php require_once "class.php";
if(!empty($_POST)){
	$penilaian_progress = new penilaian_progress;
	$penilaian_progress->insert($_POST['client'],$_POST['no_spk'],$_POST['location'],$_POST['appraiser'],$_POST['assesment_purpose'],$_POST['status'],$_POST['note_progress']);
}
