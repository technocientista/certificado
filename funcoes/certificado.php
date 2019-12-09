<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="application/xhtml&#43;xml; charset=utf-8">
<meta name="DCTERMS.title" content="">
<meta name="DCTERMS.language" content="en-US">
<meta name="DCTERMS.source" content="http://xml.openoffice.org/odf2xhtml">
<meta name="DCTERMS.issued" content="2019-10-21T16:10:46.754000000">
<meta name="DCTERMS.modified" content="2019-10-21T16:46:19.209000000">
<meta name="DCTERMS.provenance" content="">
<meta name="DCTERMS.subject" content=",">
<style type="text/css">
<!--
table
	{border-collapse:collapse;
	border-spacing:0;
	empty-cells:show}
td, th
	{vertical-align:top;
	font-size:12pt}
h1, h2, h3, h4, h5, h6
	{clear:both}
ol, ul
	{margin:0;
	padding:0}
li
	{list-style:none;
	margin:0;
	padding:0}
li span
	{clear:both;
	line-height:0;
	width:0;
	height:0;
	margin:0;
	padding:0}
span.footnodeNumber
	{padding-right:1em}
span.annotation_style_by_filter
	{font-size:95%;
	font-family:Arial;
	background-color:#fff000;
	margin:0;
	border:0;
	padding:0}
span.heading_numbering
	{margin-right:0.8rem}
*
	{margin:0}
.fr1
	{font-size:12pt;
	font-family:Liberation Serif;
	vertical-align:top}
.Header
	{font-size:12pt;
	font-family:Liberation Serif;
	writing-mode:page}
.P01
	{font-size:12pt;
	font-family:Liberation Serif;
	writing-mode:page}
.P1
	{font-size:12pt;
	font-family:Liberation Serif;
	writing-mode:page}
.P10
	{font-size:18pt;
	font-family:Arial;
	writing-mode:page;
	text-align:center!important}
.P11
	{font-size:32pt;
	font-family:Liberation Serif;
	writing-mode:page;
	text-align:center!important}
.P2
	{font-size:12pt;
	font-family:Liberation Serif;
	writing-mode:page;
	text-align:center!important}
.P3
	{font-size:26pt;
	font-family:Liberation Serif;
	writing-mode:page;
	text-align:center!important}
.P4
	{font-size:20pt;
	font-family:Arial;
	writing-mode:page;
	text-align:center!important}
.P5
	{font-size:16pt;
	font-family:Arial;
	writing-mode:page;
	text-align:center!important}
.P6
	{font-size:16pt;
	font-family:Arial;
	writing-mode:page;
	text-align:center!important}
.P7
	{font-size:16pt;
	font-family:Arial;
	writing-mode:page;
	text-align:right!important}
.P8
	{font-size:12pt;
	font-family:Arial;
	writing-mode:page;
	text-align:center!important}
.P9
	{font-size:12pt;
	font-family:Arial;
	writing-mode:page}
.T2
	{font-size:13pt}
.T3
	{font-size:13pt}
.T4
	{font-size:12pt}
-->
</style>


</head>
<body dir="ltr" background="img/fundo.jpg" style="max-width:100%; margin-top:0.64cm; margin-bottom:0.64cm; margin-left:0.64cm; margin-right:0.64cm; background-repeat:no-repeat; background-size:1200px; text-align: center">

<p class="P1">&nbsp;</p>

<img src="img/ifce.png" width="40%" >
<p class="P2">&nbsp;</p>
<p class="P2">&nbsp;</p>
<p class="P2">&nbsp;</p>
<p class="P8">MINISTÉRIO DA EDUCAÇÃO </p>
<p class="P8">SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</p>
<p class="P9">&nbsp;</p>
<p class="P1">&nbsp;</p>
<p class="P1">&nbsp;</p>
<p class="P11">CERTIFICADO</p>
<p class="P3">&nbsp;</p>
<p class="P10">Certificamos que <strong><?php echo $nome_usuario;  ?></strong> concluiu <strong><?php echo $nome_atv;  ?></strong>, ofertado pelo Instituto Federal de Educação, Ciência e Tecnologia do Ceará, IFCE – Acopiara, em <strong><?php echo $data_final_atv;  ?></strong>, com carga horária total de <strong><?php echo $carga_horaria_atv;  ?></strong>.</p>
<p class="P4">&nbsp;</p>
<p class="P5">
	<span>&nbsp;</span>
	<span>&nbsp;</span>
	<span>&nbsp;
		<span class="T2">Acopiara, <?php echo date('d-m-Y'); ?>
			
		</span>

	</span></p>
<p class="P7">&nbsp;</p>
<p class="P7">&nbsp;</p>
<p class="P5"><span>&nbsp;____________________________</span></p>
<p class="P6"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></p>
<p class="P6"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;<span class="T4">Diretor-Geral</span></span></p>
<br>
<label>Chave de verificação</label>
<label id='codigo'><?php echo $id_certificado; ?></label>

<?php 
ob_start();
require_once 'qr.php';

echo ob_get_clean();
?>



</body>
</html>
