<?php
  function generaCodice($arrayLettere,$arrayNumeri){

   $arrayCodice = [];
   $arrayLettereLunghezza = count($arrayLettere) -1;
   $arrayNumeriLunghezza = count($arrayNumeri) -1;

   for ($i=0; $i <3 ; $i++) {
     $mischiaArray = rand (1,$arrayLettereLunghezza);
     $arrayCodice[] = $arrayLettere[$mischiaArray];
   }
   for ($i=0; $i <3 ; $i++) {
     $mischiaArrayNum = rand (1,$arrayNumeriLunghezza);
     $arrayCodice[] = $arrayNumeri[$mischiaArrayNum];
   }
 /*  echo "<pre>";

   var_dump($arrayCodice);

   echo "</pre>";*/

   $codiceStringa = implode("",$arrayCodice);

   return $codiceStringa;

 }


 ?>
