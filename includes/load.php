<?php require_once "class.php";
$penilaian_progress = new penilaian_progress;
echo $penilaian_progress->load();
?>
<script type="text/javascript">
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
		 //  	setTimeout(function(){
			// 	$("#msg").slideUp(900);
			// },900)			
			toastr.options.timeOut = 1500;
			toastr.success(data);
		}
	});
}); 
</script>
