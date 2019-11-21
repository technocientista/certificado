$(document).ready(function() {
	$('.info').on('input', function(){
		if (this.value.length > 0) {
			$(this).addClass('is-valid');
			$(this).removeClass('is-invalid');
			$('invalid-feedback').addClass('.invisivel');
		}else{

			$(this).addClass('is-invalid');
			$(this).removeClass('is-valid');
		}
	});


});