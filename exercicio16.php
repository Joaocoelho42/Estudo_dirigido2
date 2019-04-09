<?php 
print "Digite o primeiro número: ";
$numero1=(float)fgets(STDIN);

print "Digite o segundo número :";
$numero2=(float)fgets(STDIN);

print "Digite o terceiro número: ";
$numero3=(float)fgets(STDIN);

print "Digite o quarto número: ";
$numero4=(float)fgets(STDIN);

print "Digite o quinto número: ";
$numero5=(float)fgets(STDIN);

$soma=$numero1+$numero2+$numero3+$numero4+$numero5;
$media=$soma/5;

print "A soma é $soma\n";
print "A média é $media\n";
