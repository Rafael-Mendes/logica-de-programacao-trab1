<?php
print"Sexo do Cliente (F/M)? ";
$sexo=trim(fgets(STDIN));

print"Quantidade de cervejas consumidas? ";
$cerveja=trim(fgets(STDIN));

print"Quantidades de refrigerantes comsumidos? ";
$refri=trim(fgets(STDIN));

print"Quantidade de espetinhos consumidos? ";
$espetinhos=trim(fgets(STDIN));

if($sexo =="F" ||$sexo == "f"){
	$sexo=8;
	print"\nValor Basico = ".$sexo;
}
else{
	$sexo=10;
	print"\nValor Basico = ".$sexo;
}
# cauculo consumo bebida +comida.
$consumo=$cerveja*2.5 + $refri*2+$espetinhos*4;



if($consumo > 15){
	$cantor=0;
}
else{
	$cantor=3;
}

#valor Total
$subtotal=$consumo+$cantor+$sexo;
$total=$subtotal*1.1;
		print"\nValor do Consumo = ".$consumo;
		print"\nValor do Cantor = " .$cantor;
		print"\nValor Total = ".$subtotal;
		print"\nValor Total + 10% Garçon = ".$total;
?>		
	
	