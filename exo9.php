<?php
$personnes = [
  "bakhoum" => [
    "prenom" => "cherif",
    "ville" => "dakar",
    "age" => 19
  ],
  "sarr" => [
    "prenom" => "binta",
    "ville" => "thies",
    "age" => 12
  ],
  "diouf" => [
    "prenom" => "modou",
    "ville" => "kaolack",
    "age" => 29
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/exo.css">
    <script defer src="scripts/link.js"></script>
    <script defer src="https://kit.fontawesome.com/daeaf1a76d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
       <a href="Acceuil.php"><i class="fa-solid fa-house fa-flip-horizontal fa-xl" style="color: #ffffff;"></i>Acceuil</a>
        <span>Devoir-php</span>
    </header>
    <main>
      <nav>
          <div id="exo-links"></div>  
      </nav>
      <div class="exo">
          <div class="text-exo">
              <span>Exercice 9:</span><br>
              <p>Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de
                  personne et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de résidence et l’âge de la personne avec une série de valeurs associées.</p>
          </div> 
          <div class="formulaire">
              
          </div>
          <div class="resultat" style="text-align : left">
              $personnes = [<br>
              __"bakhoum" => [<br>
              ____"prenom" => "cherif",<br>
              ____"ville" => "dakar",<br>
              ____"age" => 19<br>
              __],<br>
              __"sarr" => [<br>
              ____"prenom" => "binta",<br>
              ____"ville" => "thies",<br>
              ____"age" => 12<br>
              __],<br>
              __"diouf" => [<br>
              ____"prenom" => "modou",<br>
              ____"ville" => "kaolack",<br>
              ____"age" => 29<br>
              __]<br>
              ];
          </div>
      </div>
    </main>
</body>
</html>

