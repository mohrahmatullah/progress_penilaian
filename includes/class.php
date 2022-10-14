<?php require_once "db.php";
class penilaian_progress extends db {
	public function insert($f,$l,$w,$c,$e,$status,$note_progress){
		$query = "INSERT INTO penilaian_progress(client,no_spk,location,appraiser,assesment_purpose,status,note_progress) VALUES(?,?,?,?,?,?,?) ";
		$stmt = $this->connect()->prepare($query);
		if($stmt->execute([$f,$l,$w,$c,$e,$status,$note_progress])){
			echo "Successfully!";
		}
	}
	public function get_row($id){
		$query = "SELECT * FROM penilaian_progress WHERE id = ? ";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$id]);
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			return $row;		
		}
	}
	public function load(){
		$iteration = 1;
		$query = "SELECT * FROM penilaian_progress ";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute();
			$out = "";
			$out .= "<table style='font-size:14px;' class='table table-bordered table-responsive table-hover'><tr class='bg-secondary text-white'><th>No</th><th>Client / Company</th><th>No SPK</th><th>Lokasi</th><th>Penilai</th><th>Tujuan Penilaian</th><th>Status</th><th>Note</th><th>Option</th></tr>";
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$id = $row['id'];
				$client = $row['client'];
				$no_spk = $row['no_spk'];
				$location = $row['location'];
				$appraiser = $row['appraiser'];
				$assesment_purpose = $row['assesment_purpose'];
				$status = $row['status'];
				$note_progress = $row['note_progress'];
				$no = $iteration++;
				$out .="<tr><td>$no</td><td>$client</td><td>$no_spk</td><td>$location</td><td>$appraiser</td><td>$assesment_purpose</td><td>$status</td><td>$note_progress</td>";
				$out .="<td><a href='edit.php?id=$id' class='edit btn btn-sm btn-success' title='edit'><i class='bi bi-pencil-square'></i></a>&nbsp;<span id='$id' class='del btn btn-sm btn-danger' title='delete'><i class='bi bi-trash3'></i></span></td>"; 
			} 
		$out .= "</table>";
		if($stmt->rowCount() == 0 ){
			$out = "";
			$out .= "<p class='alert alert-info text-center col-sm-5 mx-auto'>No records yet. its time to add new!</p>";
		}
		return $out;
	}
	// update data
	public function update($f,$l,$w,$c,$e,$id,$status,$note_progress){
		$query = "UPDATE penilaian_progress SET client = ?,no_spk = ?,location = ?,appraiser=?,assesment_purpose=?,status=?,note_progress=? where id = ? ";
		$stmt = $this->connect()->prepare($query);
		if($stmt->execute([$f,$l,$w,$c,$e,$id,$status,$note_progress])){
			echo "Data updated! <a href='index.php' class='text-success'>Lihat</a>";
		}
	}
	//user search results
	public function search($text){
		$iteration = 1;
		$text = strtolower($text); 
		$query = "SELECT * FROM penilaian_progress WHERE client LIKE ? OR no_spk LIKE ? OR location LIKE ? OR assesment_purpose LIKE ? or appraiser LIKE ? OR status LIKE ? or note_progress LIKE ? ";
		$stmt = $this->connect()->prepare($query);
		$stmt->execute([$text,$text,$text,$text,$text,$text,$text]);
			$out = "";
			$out .= "<table style='font-size:14px;' class='table table-bordered table-responsive table-hover'><tr class='bg-secondary text-white'><th>No</th><th>Client / Company</th><th>No Spk</th><th>Location</th><th>Penilai</th><th>Tujuan Penilaian</th><th>Status</th><th>Note</th><th>Option</th></tr>";
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$id = $row['id'];
				$client = $row['client'];
				$no_spk = $row['no_spk'];
				$location = $row['location'];
				$appraiser = $row['appraiser'];
				$assesment_purpose = $row['assesment_purpose'];
				$status = $row['status'];
				$note_progress = $row['note_progress'];
				$no = $iteration++;
				$out .="<tr><td>$no</td><td>$client</td><td>$no_spk</td><td>$location</td><td>$appraiser</td><td>$assesment_purpose</td><td>$status</td><td>$note_progress</td>";
				$out .="<td><a href='edit.php?id=$id' class='edit btn btn-sm btn-success' title='edit'><i class='bi bi-pencil-square'></i></a>&nbsp;<span id='$id' class='del btn btn-sm btn-danger' title='delete'><i class='bi bi-trash3'></i></span></td>";   
			}
		$out .= "</table>";
		if($stmt->rowCount() == 0 ){
			$out = "";
			$out .= "<p class='alert alert-danger text-center col-sm-3 mx-auto'>Not Found.</p>";
		}
		return $out;
	}
	public function delete($id){
		$query = "DELETE FROM penilaian_progress WHERE id = ?";
		$stmt = $this->connect()->prepare($query);
		if($stmt->execute([$id])){
			echo "1 record deleted.";
		}
	}
//end of class
}