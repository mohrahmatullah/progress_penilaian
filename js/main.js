$(document).ready(function(){
	var modal = new bootstrap.Modal(document.getElementById("staticBackdrop"), {});

	$("#table").load("includes/load.php");
	$("#regForm").submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url:"includes/post.php",
			data: $(this).serialize(),
		})
		.done(function(data){
			$("#table").load("includes/load.php");
			$("#client").val('');
			$("#no_spk").val('');
			$("#location").val('');
			$("#appraiser").val('');
			$("#assesment_purpose").val('');
			$("#status").val('');
			$("#note_progress").val('');
			$("#msgReg").html("<p class='text-center alert alert-success'>"+data+"</p>");
			$("#msgReg").slideDown(1400);
			setTimeout(function(){
				$("#msgReg").slideUp(900);
				modal.hide();
			},900)
		});
	});
	// search bar
	$("#q").keyup(function(){
		$("#msg").hide();
		let q = $("#q").val();
		if(q !=''){
			$("#table").html('');
			$.ajax({
				type:"POST",
				url:"includes/search.php",
				data:{q:q},
				success:function(data){
					$("#table").html(data);
				}
			});
		} else	{
			$("#table").load("includes/load.php");
		}
	});
	// Refresh page dala 30 Menit
	setInterval(function() {
      window.location.reload();
    }, 1800000);
});	