<?php

print"Rendimentos Bancarios: ";
$rendBancarios=trim(fgets(STDIN));
print"Rendimentos de Salarios ou Servi�os: ";
$salario=trim(fgets(STDIN));
print"Outros Rendimentos: ";
$outrosRend=trim(fgets(STDIN));
print"M�dicos Pagos: ";
$medicos=trim(fgets(STDIN));
print"Servi�os Educacionais: ";
$educa��o=trim(fgets(STDIN));

#cauculo imposto Bancario
$impBancario=$rendBancarios*0.2;

#cauculo rendimento de salarios ou servi�os
$impSalario=$salario;

#cauculo Outros Rendimentos
$impRend=$outrosRend*0.1;

#cauculo do Medico e Educa��o
$medEdu=$medicos+$educa��o;



if($salario <=8000 ){
	$impSalario=0;
}
else{
	if($salario>=8000.01 && $salario<=24000){
		$impSalario=$impSalario*0.15;
		
	}
	else{
		$impSalario=$impSalario*0.2;
	}
}
#cauculo de todos os impostos
$totalimp=$impBancario+$impRend+$impSalario;

print"\nImposto Sobre Rendimentos Bancarios=    R$".$impBancario;
Print"\nImposto Sobre Salarios e Servi�os  =    R$".$impSalario;
print"\nImpostos Sobre Outros Rendimentos  =    R$".$impRend;
print"\n       TOTAL DE IMPOSTOS           =    R$".$totalimp;

#cauculo maximo a ser abatido
$abatimento=$totalimp*0.3;


if($medEdu<$abatimento){
	$abatimento=0;
}
else{
	$abatimento=$totalimp*0.3;
}
print"\n--------------------------------------------------";
print"\nMaximo a ser abatido= R$".$abatimento;
print"\n--------------------------------------------------";

print"\n\nTOTAL DE VALORES POSSIVEIS A ABATER: ";
print"\nServi�os M�dicos      = R$".$medicos;
print"\nServi�os Educacionais = R$".$educa��o;
print"\n       TOTAL          = R$".$medEdu;
print"\n---------------------------------------------------";

#cauculo Imposto Total
$TOTAL=$totalimp-$abatimento;

print"\n\nIMPOSTO TOTAL:";
print"\nImposto Bruto = R$".$totalimp;
print"\nAbatimentos   = R$".$abatimento;
print"\n     TOTAL    = R$".$TOTAL;


?>



		



