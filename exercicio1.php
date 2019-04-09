<?php

print "digite um número";
$numero = (int) fgets(STDIN);
print "digite outro número";
$numeros = (int) fgets(STDIN);

if ($numero > $numeros){
    print "$numero foi maior";
}
    else{
        print "$numeros foi maior"; 
}
