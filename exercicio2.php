<?php

print "digite um numero";
$numero = (float) fgets(STDIN);

if ($numero > 0 ){
    print "$numero é positivo";
}
else{
    print "$numero é negativo";
}
