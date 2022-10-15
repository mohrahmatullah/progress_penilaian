<?php require_once "class.php";
if(isset($_POST['q'])){
	$q = $_POST['q'];
	$q = "%".$q."%";
	$penilaian_progress = new penilaian_progress;
	$data = $penilaian_progress->search($q);
	echo $data;
}
?>
<script type="text/javascript">
	function get_edit_id(){
		let url = new URLSearchParams(window.location.search);
			let id = url.get('id');
			id = parseInt(id);
		return id;
	}
	function get_rows(){
		let id = get_edit_id();
		$.get(
			"includes/get.php",
			{id : id},
			function(data){
				data = JSON.parse(data);
				$("#upd_client").val(data.client);
				$("#upd_no_spk").val(data.no_spk);
				$("#upd_location").val(data.location);
				$("#upd_appraiser").val(data.appraiser);
				$("#upd_assesment_purpose").val(data.assesment_purpose);
				$("#upd_status").val(data.status);
				$("#upd_note_progress").val(data.note_progress);
				console.log(data);
			});
	}
	if(get_edit_id()){
		get_rows();
	}
		$("#editForm").submit(function(e){
		e.preventDefault();
		let id = get_edit_id();
		$.ajax({
			type: "POST",
			url:"includes/update.php",
			data: {id:id,client : $('#upd_client').val(),no_spk : $('#upd_no_spk').val(),location : $('#upd_location').val(),appraiser : $('#upd_appraiser').val(),assesment_purpose : $('#upd_assesment_purpose').val(),status : $('#upd_status').val(),note_progress : $('#upd_note_progress').val()},
		})
		.done(function(data){
			$("#upd_client").val('');
			$("#upd_no_spk").val('');
			$("#upd_location").val('');
			$("#upd_appraiser").val('');
			$("#upd_assesment_purpose").val('');
			$("#upd_status").val('');
			$("#upd_note_progress").val('');
			$("#table").load("includes/load.php");
			$("#msgEdit").html("<p class='text-center alert alert-success'>"+data+"</p>");
			$("#msgEdit").slideDown(1400);
		});
 });
 $('.del').click(function() {
		var id = $(this).attr('id');
	  $.ajax({
	  url : 'includes/delete.php',
	  type: 'POST',
	  data : { id: id },
	  success: function(data)
	  {
		$("#table").load("includes/load.php");
		// $("#msg").html("<p class='col-sm-3 mx-auto text-center alert alert-success'>"+data+"</p>");
		// $("#msg").slideDown("slow");
		
		toastr.options.timeOut = 1500;
		toastr.success(data);
		// setTimeout(function(){
		// 	$("#msg").slideUp(900);
		// },900)
	  }
  });
});
</script>