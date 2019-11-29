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
		$('.todos, .aprovados, .reprovados, .assinados, .emitidos, .correcao, .cancelados, .todos').find('input').addClass('checkAll');

	})
	$('#aprovados').click(function (e) {
		
		$(this).tab('show');
		
		$('.aprovados').show();
		$('.aprovados').find('input').addClass('checkAll');
		$('.reprovados, .emitidos, .correcao, .assinados, .cancelados, .todos').hide();
		$('.reprovados, .emitidos, .correcao, .assinados, .cancelados, .todos').find('input').removeClass('checkAll');
		$('.show').collapse('hide');
	})
	$('#reprovados').click(function (e) {
		
		$(this).tab('show');
		$('.reprovados').show();
		$('.reprovados').find('input').addClass('checkAll');
		$('.aprovados, .emitidos, .correcao, .assinados, .cancelados, .todos').hide();
		$('.aprovados, .emitidos, .correcao, .assinados, .cancelados, .todos').find('input').removeClass('checkAll');
		$('.show').collapse('hide');
	})
	$('#emitidos').click(function (e) {
		
		$(this).tab('show');
		$('.emitidos, .assinados').show();
		$('.emitidos, .assinados').find('input').addClass('checkAll');
		$('.aprovados, .reprovados, .correcao, .cancelados, .todos').hide();
		$('.aprovados, .reprovados, .correcao, .cancelados, .todos').find('input').removeClass('checkAll');
		$('.show').collapse('hide');
	})
	$('#correcao').click(function (e) {
		
		$(this).tab('show');
		$('.correcao').show();
		$('.correcao').find('input').addClass('checkAll');
		$('.aprovados, .emitidos, .reprovados, .assinados, .cancelados, .todos').hide();
		$('.aprovados, .emitidos, .reprovados, .assinados, .cancelados, .todos').find('input').removeClass('checkAll');
		$('.show').collapse('hide');
	})
	$('#cancelados').click(function (e) {
		
		$(this).tab('show');
		$('.cancelados').show();
		$('.cancelados').find('input').addClass('checkAll');
		$('.aprovados, .emitidos, .correcao, .assinados, .reprovados, .todos').hide();
		$('.aprovados, .emitidos, .correcao, .assinados, .reprovados, .todos').find('input').removeClass('checkAll');
		$('.show').collapse('hide');
	})
});