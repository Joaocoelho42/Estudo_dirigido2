<?php 
$vezes=0;
$numeroimpares=0;
$numeropares=0;

while ($vezes<>10){
    print "Digite um número:";
    $numero=(int)fgets(STDIN);
    $vezes=$vezes+1;
    if ($numero%2==0){
    $numeropares=$numeropares+1;
    }
    else {
    $numeroimpares=$numeroimpares+1;
    }
}
print "Há $numeroimpares número(s) ímpare(s)\n";
print "Há $numeropares número(s) pare(s)\n";
