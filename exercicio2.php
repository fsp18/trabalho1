<?php
print "Total de rendimentos bancarios: ";
$rendbanc = trim(fgets(STDIN));
print "Total de rendimentos de salarios ou servicos: ";
$rendss = trim(fgets(STDIN));
print "Total de outros rendimentos: ";
$outrend = trim(fgets(STDIN));
print "Total de serviços médicos pagos: ";
$servmed = trim(fgets(STDIN));
print "Servicos educacionais pagos:";
$serveduc = trim(fgets(STDIN));

print "\nTotal de impostos:";
$imprendbanc = $rendbanc* 0.20;
print "\nR$ $imprendbanc (sobre rendimentos bancarios)";
if ($rendss <= 8000 ) {
	$imprendss = 0;
print "\nR$ $imprendss (sobre salários e serviços)";
}
else {
if ($rendss > 8001 && $rendss < 24000){
$imprendss = $rendss*0.15;
print "\nR$ $imprendss ( sobre salários e serviços)";
}
else {
	$imprendss = $rendss*0.20;
	print "\nR$ $imprendss (sobre salários e serviços)";
}
}
$impoutrend = $outrend*0.10;
print "\nR$ $impoutrend (sobre outros rendimentos)";
$total = ($impoutrend+$imprendbanc+$imprendss);
print "\nR$ $total (Total)";
print "\n- - - - - - - - - - - - - ";
print "\nMáximo a ser abatido:";
$maxabatimento = $total*0.30;
print "\nR$ $maxabatimento";
print "\n- - - - - - - - - - - - - ";
print "\nTotal de valores possiveis de abater:";
print "\nR$ $servmed (serviços médicos)";
print "\nR$ $serveduc (serviçoes educacionais)";
$totalabat = $serveduc+$servmed;
print "\nR$ $totalabat (total)";
print "\n- - - - - - - - - - - - - ";
print "\nImposto Total:";
print "\nR$ $total (imposto bruto)";
$abatimento = $totalabat;
if ($totalabat > $maxabatimento) {
$abatimento = $maxabatimento;
print "\nR$ $abatimento ( Abatimentos)";
}
else {
$abatimento = $totalabat;
print "\nR$ $abatimento ( Abatimentos)";
}
$total2 = $total-$abatimento;
print "\nR$ $total2 (total)";
?>
