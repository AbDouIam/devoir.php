<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $action = $_POST['action'] ?? '';

  switch ($action) {
    case 'vendre':
      header("Location: exo15_vendre.php");
      exit;
    case 'acheter':
      header("Location: exo15_acheter.php");
      exit;
    case 'louer':
      header("Location: exo15_louer.php");
      exit;
    default:
      echo "Action non reconnue. Veuillez revenir à la page précédente.";
      exit;
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
    <link rel="stylesheet" href="styles/tableau.css">
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
              <span>Exercice 15:</span><br>
              <p>Dans la perspective de création d’un site d’agence immobilière, créez un
                 formulaire comprenant trois boutons Submit nommés Vendre, Acheter et Louer. En fonction
                  du choix effectué par le visiteur, redirigez-le vers une page spécialisée dont le contenu réponde
                  au critère choisi.</p>
          </div> 
          <div class="formulaire">
              <form method="post">
                  <h2>Adresse client</h2>

                  <label>Nom :</label>
                  <input type="text" name="nom" required><br>

                  <label>Prenom :</label>
                  <input type="text" name="prenom" required><br>

                  <label>Adresse :</label>
                  <input type="text" name="adresse" required><br>

                  <label>Numero :</label>
                  <input type="text" name="numero" required><br>

                  <label>Email :</label>
                  <input type="text" name="email" required><br>
                  <button type="submit" name="action" value="vendre" style="margin-right :10px;">Vendre</button>
                  <button type="submit" name="action" value="acheter" style="margin-right :10px;">Acheter</button>
                  <button type="submit" name="action" value="louer">Louer</button>
              </form> 
          </div>
          <div class="resultat">
    
          </div>
      </div>
    </main>
</body>
</html>


