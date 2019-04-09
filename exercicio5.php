<?php

print "Digite a primeira nota: ";
$nota1=(float)fgets(STDIN);

print "Digite sua segunda nota: ";
$nota2=(float)fgets(STDIN);

$media=($nota1+$nota2)/2;

if ($media>=7 and $media<10){
    print "Aprovado\n";
}
if ($media<7){
    print "Reprovado\n";
}
if ($media==10){
    print "Aprovado com Distinção\n";
}
 
