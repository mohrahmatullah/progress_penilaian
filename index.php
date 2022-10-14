<!doctype html>
<html>
   <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Progress Penilaian">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Progress Penilaian</title>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
   </head>
   <body style="font-family:roboto,sans-serif;">
    <!--Content Start-->
    <div class="content-start transition"> 
        <div class="container-fluid dashboard">
          <div class="content-header mt-3 mb-3 text-center">
        		<div id="msg" class='mx-auto'></div>
          </div>
          <div class="row match-height">
            <div class="col-lg-12 col-md-12">
              <div class="card border-0">
                <div class="card-content">
                  <div class="card-body">
                  	<div class="row">
                  		<div class="col-1 col-sm-1 col-md-1 col-lg-1">                  			
		                    <a type="button" class="btn btn-secondary btn-sm mb-3" id="createModal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
		                      <i class="bi bi-journal-plus"></i>
		                    </a>
                  		</div>
                  		<div class="col-1 col-sm-5 col-md-7 col-lg-7">                  			
                  		</div>
                  		<div class="col-10 col-sm-6 col-md-4 col-lg-4">
                  			<input type="text" id="q" name='q' placeholder="search..." class='form-control form-control-sm col-sm-5 mx-auto' autocomplete='off' >
                  		</div>
                  	</div>
                  	<div class="table-responsive">
                    	<div id="table" class='text-center mx-auto'></div>                  		
                  	</div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div><!-- End Container-->
    </div><!-- End Content-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
					<div id='msgReg'></div>
					<form action="" id='regForm' method="post">
							<div class="modal-header">
							  <h5 class="modal-title" id="staticBackdropLabel">Create Progress</h5>
							  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body" id="form">
									<div class="mb-3">
										<input type="text" id="client" name="client" placeholder="Client / Company" class='form-control form-control-sm' required>
									</div>
									<div class="mb-3">
										<input type="text" id="no_spk" name="no_spk" placeholder="No Spk" class='form-control form-control-sm' required>
									</div>
									<div class="mb-3">
										<input type="text" id="location" name="location" placeholder="Location" class='form-control form-control-sm' required>
									</div>
									<div class="mb-3">
										<input type="text" id="appraiser" name="appraiser" placeholder="Penilai" class='form-control form-control-sm' required>
									</div>
									<div class="mb-3">
											<select class="form-control form-control-sm" id="assesment_purpose" name="assesment_purpose" required>
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
											<select class="form-control form-control-sm" id="status" name="status" required>
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
										<input type="text" id="note_progress" name="note_progress" placeholder="Note progress" class='form-control form-control-sm' required>
									</div>				
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>	              
										<input type="submit" id="btnPost" value="Create" class='btn btn-success btn-sm'>
									</div> 
		        	</div>
		      </form>
		    </div>
      </div>
    </div>
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="js/main.js"></script>
</html>