<?php
$chave = microtime();
$a = explode(' ', $chave);
$a[0] = str_replace('.', '', $a[0]);
$a[0] = base_convert($a[0], 10, 36);
$a[1] = base_convert($a[1], 10, 36);
$chave_certificado = $a[0].$a[1];
echo $chave_certificado;
