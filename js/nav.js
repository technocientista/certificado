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
		$('.todos, .aprovados, .reprovados, .assinados, .emitidos, .correcao, .cancelados, .todos').show();
		

	})
	$('#aprovados').click(function (e) {
		
		$(this).tab('show');
		
		$('.aprovados').show();
		$('.reprovados, .emitidos, .correcao, .assinados, .cancelados, .todos').hide();
		$('.show').collapse('hide');
	})
	$('#reprovados').click(function (e) {
		
		$(this).tab('show');
		$('.reprovados').show();
		$('.aprovados, .emitidos, .correcao, .assinados, .cancelados, .todos').hide();
		$('.show').collapse('hide');
	})
	$('#emitidos').click(function (e) {
		
		$(this).tab('show');
		$('.emitidos, .assinados').show();
		$('.aprovados, .reprovados, .correcao, .cancelados, .todos').hide();
		$('.show').collapse('hide');
	})
	$('#correcao').click(function (e) {
		
		$(this).tab('show');
		$('.correcao').show();
		$('.aprovados, .emitidos, .reprovados, .assinados, .cancelados, .todos').hide();
		$('.show').collapse('hide');
	})
	$('#cancelados').click(function (e) {
		
		$(this).tab('show');
		$('.cancelados').show();
		$('.aprovados, .emitidos, .correcao, .assinados, .reprovados, .todos').hide();
		$('.show').collapse('hide');
	})
});