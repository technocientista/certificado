$(document).ready(function(){
	$('.abrir_modal').on('click', function(){
		var href = $(this).attr('href');
		var body = $(this).attr('data-confirm');
		var title = $(this).attr('title');
		var name = $(this).attr('name');

		$('.dataComfirmOK').attr('href', href);
		$('.dataComfirmOK').attr('name', name);
		$('.modal-body').html(body);
		$('.title').html(title);
		console.log(name);

	});
});