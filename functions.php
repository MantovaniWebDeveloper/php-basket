<?php
//funzione generatore Codice
function generaCodice($arrayNumeri,$arrayLettere){

  $codiceToString = "";
  $arrayCodice = [];
/*  $arrayLettereLunghezza = count($arrayLettere - 1);
  $arrayNumeriLunghezza = count($arrayNumeri - 1); */

  for ($i = 0; $i < 3; $i++) {
    /*$mischiaArray = (floor((Math.random()*$arrayLettereLunghezza)+1));
    $miachiArray = (floor(rand ( int $min , int $max )))*/
    shuffle($arrayLettere);

    $arrayCodice = $arrayLettere;
  }
  for ($i = 0; $i < 3; $i++) {
  /*  $mischiaArrayNum = (Math.floor((Math.random()*$arrayNumeriLunghezza)+1));
    $arrayCodice.push($arrayNumeri[mischiaArrayNum]);*/
    shuffle($arrayNumeri);
    $arrayCodice = $arrayNumeri;

  }
  var_dump($codiceToString);
  $codiceToString = implode(",", $arrayCodice);

  return $codiceToString;
}


 ?>
