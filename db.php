<?php

  $arrayLettere = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","u","v","w","x","y"];
  $arrayNumeri = [0,1,2,3,4,5,6,7,8,9];
  $legaBasket = [];

  include "functions.php";

    //genero aun array di oggeti con 100 oggetti giocatori basket
    for ($i = 0; $i <= 100; $i++) {
      $nuovoGiocatore = [
        //ad ogni giocatore di basket vanno assciate
        //queste propietà
        //Codice giocatore univoco(formato da 3 lettere maiuscole
        //casuali e tre numeri)
        "codiceUnivoco" => generaCodice($arrayNumeri,$arrayLettere),
        "puntiRealizzati" => rand(2,50),
        "rimbalzi" => rand(1,25),
        "falli" => rand(1,10),
      ];
      $legaBasket[] = $nuovoGiocatore;
    }
     echo "<pre>";
    var_dump($legaBasket);
    echo "</pre>";
 ?>
