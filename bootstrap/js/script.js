$(document).ready(function(){

	$('#bt-new').click(function(){
		$('#form-new').slideToggle();
		//$('#content-del').slideUp();
		//$('#content-list').slideUp();
	});

	$('#bt-del').click(function(){
		$('#content-del').slideDown();
		$('#content-new').slideUp();
		$('#content-list').slideUp();
	});

	$('#bt-list').click(function(){
		$('#content-list').slideDown();
		$('#content-del').slideUp();
		$('#content-new').slideUp();
	});

	

});
