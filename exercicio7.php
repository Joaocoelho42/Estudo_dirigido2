<?php

print "Digite um número:";
$numero1=(float)fgets(STDIN);

print "Digite um número:";
$numero2=(float)fgets(STDIN);

print "Digite um número:";
$numero3=(float)fgets(STDIN);

if ($numero1>$numero2 and $numero1>$numero3){
    print "O primeiro número é o maior\n";
}
elseif ($numero1<$numero2 and $numero1<$numero3){
     print "o primeiro número é o menor\n";
}
if ($numero2>$numero1 and $numero2>$numero3){
    print "O segundo número é o maior\n";
}
elseif ($numero2<$numero1 and $numero2<$numero3){
    print "o segundo número é o menor\n";
}
if ($numero3>$numero1 and $numero3>$numero2){
    print "O terceiro número é o maior\n";
}
elseif ($numero3<$numero1 and $numero3<$numero2){
    print "o terceiro número é o menor\n";
} 
