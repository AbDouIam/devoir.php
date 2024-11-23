<?php
if (isset($_POST["nombre"])) {
  $nombre = $_POST["nombre"];
  if ($nombre < 100 || $nombre > 999)
    $resultat="le nombre n'est pas valide";
  else {
    $tirage = 1;
    for ($i = 1;$i<10000; $i++) {
      $tirage = rand(min: 100, max: 999);
      if ($tirage == $nombre)
        break;
    }
    $resultat="vous avez trouvé en $i coups";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diviseur commun</title>
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
            <span>Exercice 3:</span><br>
            <p>Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages aléatoires, et
                comptez le nombre de tirages nécessaire pour obtenir le nombre initial. Arrêtez les tirages, et affichez le nombre de coups réalisés. Réalisez ce script d’abord avec l’instruction while puis avec l’instruction for.</p>
        </div>
        <div class="formulaire">
            <form method="post">
              <label for="nombre">Entrer un nombre a trois chiffres</label>
              <input type="text" name="nombre" required>
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