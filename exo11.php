<?php
  if(isset($_POST["date"])){
    $date = $_POST["date"];
    $date=explode(" ", $date);
    $annees = ["janvier"=>31,"fevrier"=>28,"mars"=>31,"avril"=>30,"mai"=>31,"juin"=>30,"juillet"=>31,"aout"=>31,"septembre"=>30,"octobre"=>31,"novembre"=>30,"decembre"=>31];
    $jour = $date[0];
    $sommeJour = $jour;
    foreach ($annees as $key => $value) {
        if ($key == $date[1])
            break;
        else
            $sommeJour += $value;
    }
    $jourestant=365-$sommeJour;
    $resultat = "il reste $jourestant jours dans l'année ! ";
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
              <span>Exercice 11:</span><br>
              <p>Écrire un programme qui prend une date saisie par l'utilisateur et calcule le
                nombre de jours restants jusqu'à la fin de l'année.</p>
          </div> 
          <div class="formulaire">
              <form method="post" action="">
                  <label>Entrez la date :</label>
                  <input type="text" name="date" placeholder="Exemple : 23 novembre" required>
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

