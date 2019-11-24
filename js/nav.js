$(document).ready(function(){
	$('#ativas a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
		$('.ativas').show();
		$('.apagadas').hide();
	})
	$('#apagadas a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
		$('.ativas').hide();
		$('.apagadas').show();
		
	})

	$('#todos').click(function (e) {
		
		$(this).tab('show');
		$('.todos, .aprovados, .reprovados, .emitidos, .correcao, .cancelados, .todos').show();
		$('.show').collapse('hide');

	})
	$('#aprovados').click(function (e) {
		
		$(this).tab('show');
		
		$('.aprovados').show();
		$('.reprovados, .emitidos, .correcao, .cancelados, .todos').hide();
		$('.show').collapse('hide');
	})
	$('#reprovados').click(function (e) {
		
		$(this).tab('show');
		$('.reprovados').show();
		$('.aprovados, .emitidos, .correcao, .cancelados, .todos').hide();
		$('.show').collapse('hide');
	})
	$('#emitidos').click(function (e) {
		
		$(this).tab('show');
		$('.emitidos').show();
		$('.aprovados, .reprovados, .correcao, .cancelados, .todos').hide();
		$('.show').collapse('hide');
	})
	$('#correcao').click(function (e) {
		
		$(this).tab('show');
		$('.correcao').show();
		$('.aprovados, .emitidos, .reprovados, .cancelados, .todos').hide();
		$('.show').collapse('hide');
	})
	$('#cancelados').click(function (e) {
		
		$(this).tab('show');
		$('.cancelados').show();
		$('.aprovados, .emitidos, .correcao, .reprovados, .todos').hide();
		$('.show').collapse('hide');
	})
});