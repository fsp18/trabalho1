<?php
print "Qual o sexo do cliente? ";
$sexo = trim(fgets(STDIN));
print "Quantidade de cervejas consumidas?";
$cervejas = trim(fgets(STDIN));
$totalcervejas = $cervejas*2.50;
print "Quantidade de refrigerantes consumidos? ";
$refrigerantes = trim(fgets(STDIN));
$totalrefrigerantes = $refrigerantes*2.00;
print "Quantidade de espetinhos consumidos? ";
$espetinhos = trim(fgets(STDIN));
$totalespetinhos = $espetinhos*4.00;
print "\nValor da conta:";
if ($sexo == "f" || $sexo == 'F') {
	$entrada = 8.00;
	print "\nR$   $entrada  (entrada feminino)";
}
else {
	$entrada = 10.00;
	print "\nR$   $entrada    (entrada masculino)";
}
$comidaebebida = ($totalespetinhos+$totalcervejas+$totalrefrigerantes);
print "\nR$   $comidaebebida  (bebida e comida)";
if ($comidaebebida < 15.00){
	$cover = 3.00;
	print "\nR$   $cover    (cantores)";
}
else {
	$cover= 0.00;
	print "\nR$   $cover    (cantores)";
	}
	$subtotal = ($entrada+$comidaebebida+$cover);
	print "\nR$   $subtotal  (subtotal sem 10%)";
    print "\n- - - - - - - - - - - - - - - - ";
	$total = ($subtotal/10 + $subtotal);	
	print "\nR$ $total   (total)"
?>

