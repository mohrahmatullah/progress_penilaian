<?php if(!isset($_GET['id'])){header("Location: index.php?msg=invalid");} ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Progress Penilaian">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Progress Penilaian</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body style="font-family:roboto,sans-serif;">
	<!--Content Start-->
    <div class="content-start transition  "> 
	    <div class="container-fluid dashboard">
	      <div class="content-header mt-3 mb-5 text-center">
	      </div>
	      <div class="row match-height">
	        <div class="col-lg-12 col-md-12">
	          <div class="card border-0">
	            <div class="card-content">
	              <div class="card-body">
	                <div class="container col-md-4 border-1">
					   <div class="container py-3" id='editBox' style="background:#e4e4e417;">
					      <h5 class='text-center mb-5'>Edit Progress</h5>
					      <div id='msgEdit'></div>
					      <form action="" id='editForm' method="post">
					         <div class="mb-3">
					            <input type="text" id="upd_client" name="upd_client" placeholder="Client / Company" class='form-control form-control-sm' required>
					         </div>
					         <div class="mb-3">
					            <input type="text" id="upd_no_spk" name="upd_no_spk" placeholder="No Spk" class='form-control form-control-sm' required>
					         </div>
					         <div class="mb-3">
					            <input type="text" id="upd_location" name="upd_location" placeholder="Location" class='form-control form-control-sm' required>
					         </div>
					         <div class="mb-3">
					            <input type="text" id="upd_appraiser" name="upd_appraiser" placeholder="Appraiser" class='form-control form-control-sm' required>
					         </div>
					         <div class="mb-3">
					            <select class="form-control form-control-sm" id="upd_assesment_purpose" name="upd_assesment_purpose" required>
					                <option value="">--Pilih Tujuan Penilaian--</option>
					                <option value="Jaminan Utang">Jaminan Utang</option>
					                <option value="Transaksi Jual Beli">Transaksi Jual Beli</option>
					                <option value="Laporan Keuangan">Laporan Keuangan</option>
					                <option value="IPO">IPO</option>
					                <option value="Lelang">Lelang</option>
					                <option value="Merger">Merger</option>
					                <option value="Akuisisi">Akuisisi</option>
					                <option value="Asuransi">Asuransi</option>
					                <option value="Pendanaan">Pendanaan</option>
					                <option value="Internal Management">Internal Management</option>
					              </select>
					         </div>
					         <div class="mb-3">
					            <select class="form-control form-control-sm" id="upd_status" name="upd_status" required>
					                <option value="">--Pilih Status--</option>
					                <option value="Schedule">Schedule</option>
					                <option value="Inpeksi">Inpeksi</option>
					                <option value="Resume">Resume</option>
					                <option value="Proses Final">Proses Final</option>
					                <option value="Final">Final</option>
					                <option value="Prosess Review">Prosess Review</option>
				              	</select>
					         </div>
					         <div class="mb-3">
					            <input type="text" id="upd_note_progress" name="upd_note_progress" placeholder="Note progress" class='form-control form-control-sm' required>
					         </div>
					         <div class="mb-3 text-right">
					            <input type="submit" value="Update" class='btn update btn-success btn-sm'>
					            <a href="index.php" class='btn btn-danger btn-sm'>Cancel</a>
					         </div>
					      </form>
					      <br>
					   </div>
					</div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div> 	             
	    </div><!-- End Container-->
	</div><!-- End Content-->	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/edit.js"></script>
</html>