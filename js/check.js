$(document).ready(function(){
	$('#checkAll').on('click', function(){

		if( $("#checkAll").is(":checked") == true ){
			$('.checkAll').prop('checked', true);
		}else{
			$('.checkAll').prop('checked', false);
		}
		
	});
	

});