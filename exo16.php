<?php
function capitalizeArrayElements(array &$strings) {
    foreach ($strings as &$string) {
        $string = ucfirst(strtolower($string));
    }
}
if (isset($_POST["tableau"])) {
  $chaines=explode(" ", $_POST["tableau"]);
  capitalizeArrayElements($chaines);
  $resultat="";
  foreach ($chaines as $chain) {
    $resultat .= "$chain, ";
  }
}
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
              <span>Exercice 16:</span><br>
              <p>Écrivez une fonction dont le paramètre passé par référence est un tableau de
                chaînes de caractères et qui transforme chacun des éléments du tableau de manière que le
                premier caractère soit en majuscule et les autres en minuscules, quelle que soit la casse initiale des éléments, même si elle est mixte.</p>
          </div> 
          <div class="formulaire">
              <form method="post" action="">
                  <label>Entrez des chaines de caractéres :</label>
                  <input type="text" name="tableau" placeholder="exemple : noir MAISON viVant" style="width: 500px" required>
                  <button type="submit">Executer</button>
              </form> 
          </div>
          <div class="resultat">
              <?php if (isset($resultat)) echo $resultat?>
          </div>
      </div>
    </main>
</body>
</html>

