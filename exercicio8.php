<?php

print "Digite o preço do primeiro produto:";
$numero1=(float)fgets(STDIN);

print "Digite o preço do segundo produto:";
$numero2=(float)fgets(STDIN);

print "Digite o preço do terceiro produto:";
$numero3=(float)fgets(STDIN);

if ($numero1<$numero2 and $numero1<$numero3){
    print "O primeiro produto é o mais barato\n";
}
if ($numero2<$numero1 and $numero2<$numero3){
    print "O segundo produto é o mais barato\n";
}
if ($numero3<$numero1 and $numero3<$numero2){
    print "O terceiro produto é o mais barato\n";
} 
