<?php

print "digite uma letra maiúscula: ";
$letra = (string) fgetc(STDIN);

if ($letra == "A" or $letra == "E" or $letra == "I" or $letra == "O" or $letra == "U")
{
    print "A letra digitada é uma Vogal \n";
}
else
{
    print "a letra digitada é uma Consoante \n";
}
