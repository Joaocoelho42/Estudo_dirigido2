<?php

print "digite M para masculino e F para feminino: ";
$sexo = (string) fgetc(STDIN);

   if ($sexo == "M"){
       print "O sexo digitado é masculino \n";
   }
   elseif ($sexo == "F"){
       print "O sexo digitado é feminino \n";
   }
   elseif ($sexo != "F"  or $sexo != "M"){
        print "sexo digitado é invalido \n";
