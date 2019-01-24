<?php

  $arrayLettere = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","u","v","w","x","y"];
  $arrayNumeri = [0,1,2,3,4,5,6,7,8,9];
  $legaBasket = [];


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
    echo "<pre>";

    var_dump($arrayCodice);

    echo "</pre>";

  }

 generaCodice($arrayLettere,$arrayNumeri);

 ?>
