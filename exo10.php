<?php 
 if (isset($_POST["chaine"])){
  $chaine = str_replace(' ', '',strtolower($_POST["chaine"]));
  $chaine=str_split($chaine);
  $voyelles = ["a", "e", "i", "o", "u", "y"];
  $nbrvoyelle=0;
  foreach ($chaine as $lettre)
    foreach ($voyelles as $voyelle)
      if ($voyelle == $lettre) $nbrvoyelle++;
  $nbrconsonne=count($chaine)-$nbrvoyelle;
  $resultat = "Nombre de consonne : $nbrconsonne <br>Nombre de voyelle : $nbrvoyelle";
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
              <span>Exercice 10:</span><br>
              <p>Écrire un programme qui demande à l'utilisateur de saisir une chaîne de
              caractères, puis compte et affiche le nombre de voyelles et de consonnes présentes dans la
              chaîne.</p>
          </div> 
          <div class="formulaire">
              <form method="post" action="">
                  <label>Entrez la chaîne de caractères :</label>
                  <input type="text" name="chaine" placeholder="Pas de caractères speciales" style="width: 300px" required>
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

