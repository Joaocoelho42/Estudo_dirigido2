<?php

print "Digite o primeiro número:";
$numero1=(float)fgets(STDIN);

print "digite o segundo número:";
$numero2=(float)fgets(STDIN);

print "digite o terceiro número:";
$numero3=(float)fgets(STDIN);
if ($numero1>$numero2 and $numero1>$numero3 and $numero2>$numero3){
    print "$numero1\n";
    print "$numero2\n";
    print "$numero3\n";
}
if ($numero2>$numero1 and $numero2>$numero3 and $numero3>$numero1){
    print "$numero2\n";
    print "$numero3\n";
    print "$numero1\n";
}
if ($numero3>$numero1 and $numero3>$numero2 and $numero2>$numero1){
    print "$numero3\n";
    print "$numero2\n";
    print "$numero1\n";
}
if ($numero1>$numero2 and $numero1>$numero3 and $numero3>$numero2){
    print "$numero1\n";
    print "$numero3\n";
    print "$numero2\n";
}
if ($numero2>$numero1 and $numero2>$numero3 and $numero1>$numero3){
    print "$numero2\n";
    print "$numero1\n";
    print "$numero3\n";
}
if ($numero3>$numero1 and $numero3>$numero2 and $numero1>$numero2){
    print "$numero3\n";
    print "$numero1\n";
    print "$numero2\n";
}
