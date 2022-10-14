$(document).ready(function(){
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
				$("#upd_assesment_purpose").find("option[value='"+data.assesment_purpose+"']").attr('selected','selected')
				$("#upd_status").find("option[value='"+data.status+"']").attr('selected','selected');
				$("#upd_note_progress").val(data.note_progress);
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
			console.log(data);
			$("#upd_client").val('');
			$("#upd_no_spk").val('');
			$("#upd_location").val('');
			$("#upd_appraiser").val('');
			$("#upd_assesment_purpose").val('');
			$("#upd_status").val('');
			$("#upd_note_progress").val('');
			$("#table").load("includes/load.php");
			$("#msgEdit").html("<p class='text-center alert alert-success'>"+data+"</p>");
			$("#msgEdit").slideDown(1000);
	});
 });
});	