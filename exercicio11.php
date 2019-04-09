<?php

print "Digite um número: ";
$numeroinicial =(int)fgets(STDIN);

$centena = 0;
$dezena = 0;
$unidade = 0;
$numerofinal = $numeroinicial;

while ($numerofinal >= 100){

    $numerofinal = $numerofinal - 100;
    $centena++;
}
while ($numerofinal >= 10){

    $numerofinal = $numerofinal - 10;
    $dezena++;
}
while ($numerofinal >= 1){

    $numerofinal = $numerofinal - 1;
    $unidade++;
}
 

if ($numeroinicial < 1000){
     print "$centena centena(s), $dezena dezenas(s), $unidade unidades(s)";
}
else{
    print "o número escolhido é maior que 1000";
}     



