$(document).ready(function(){

	$('#next').click(function(){
	$(".address").addClass("hide_div");
	$(".payment").removeClass("hide_div");
});

	$('#previous').click(function(){
	$(".address").removeClass("hide_div");
	$(".payment").addClass("hide_div");
});
	$('#email').change(function() {
    $('#form_email').val($(this).val());
});


});

