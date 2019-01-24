<?php
  include "functions.php";
  $arrayLettere = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","u","v","w","x","y"];
  $arrayNumeri = [0,1,2,3,4,5,6,7,8,9];
  $legaBasket = [];


  for (var i = 0; i <= 100; i++) {
    $nuovoGiocatore = [
      //ad ogni giocatore di basket vanno assciate
      //queste propietà
      //Codice giocatore univoco(formato da 3 lettere maiuscole
      //casuali e tre numeri)
      "codiceUnivoco" : generaCodice(arrayNumeri,arrayLettere),
      "puntiRealizzati" : numeroRandom(2,50),
      "rimbalzi" : numeroRandom(1,25),
      "falli" : numeroRandom(1,10)
    ]
  }
 ?>
