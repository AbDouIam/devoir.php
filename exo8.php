<?php 
  if(isset($_POST["nombres"])){
    $input = $_POST["nombres"];
    $nombres = array_map('intval', explode(' ', $input));
    $moyenne=array_sum($nombres) / count($nombres);
    $maximum = max($nombres);
    $minimum = min($nombres);
  $resultat = "Moyenne : $moyenne <br>
               Minimum : $minimum <br>
               Maximum : $maximum";
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
              <span>Exercice 8:</span><br>
              <p>Réalisez un script qui prend un tableau d'entiers saisi par l'utilisateur et calcule la
              moyenne, le maximum et le minimum de ces nombres.</p>
          </div> 
          <div class="formulaire">
              <form method="post" action="">
                  <label>Entrez des entiers :</label>
                  <input type="text" name="nombres" placeholder="exemple : 8 3 6 1" required>
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

